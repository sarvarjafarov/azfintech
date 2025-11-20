<?php

/**
 * Script to convert HTML files to Blade templates
 * Run: php convert_html_to_blade.php
 */

$templatesDir = __DIR__ . '/resources/views/templates';
$htmlFiles = glob($templatesDir . '/*.html');

foreach ($htmlFiles as $htmlFile) {
    // Skip files with special characters
    if (strpos(basename($htmlFile), '﹖') !== false) {
        continue;
    }
    
    $content = file_get_contents($htmlFile);
    $filename = basename($htmlFile, '.html');
    $bladeFile = $templatesDir . '/' . $filename . '.blade.php';
    
    // Skip if blade file already exists
    if (file_exists($bladeFile)) {
        echo "Skipping $filename.blade.php (already exists)\n";
        continue;
    }
    
    // Extract title
    preg_match('/<title>(.*?)<\/title>/i', $content, $titleMatch);
    $title = $titleMatch[1] ?? ucfirst(str_replace(['-', '_'], ' ', $filename));
    
    // Extract CSS links
    preg_match_all('/<link[^>]+href=["\']([^"\']+)["\'][^>]*>/i', $content, $cssMatches);
    $cssLinks = [];
    foreach ($cssMatches[1] as $cssPath) {
        // Convert relative paths to asset()
        $cssPath = str_replace('../assets/', 'assets/', $cssPath);
        $cssPath = str_replace('assets/', 'assets/', $cssPath);
        if (strpos($cssPath, 'http') !== 0 && strpos($cssPath, '//') !== 0) {
            $cssLinks[] = "    <link rel=\"stylesheet\" href=\"{{ asset('$cssPath') }}\">";
        } else {
            $cssLinks[] = "    <link rel=\"stylesheet\" href=\"$cssPath\">";
        }
    }
    
    // Extract JavaScript files
    preg_match_all('/<script[^>]+src=["\']([^"\']+)["\'][^>]*><\/script>/i', $content, $jsMatches);
    $jsLinks = [];
    foreach ($jsMatches[1] as $jsPath) {
        // Convert relative paths to asset()
        $jsPath = str_replace('../assets/', 'assets/', $jsPath);
        $jsPath = str_replace('assets/', 'assets/', $jsPath);
        if (strpos($jsPath, 'http') !== 0 && strpos($jsPath, '//') !== 0) {
            $jsLinks[] = "    <script src=\"{{ asset('$jsPath') }}\"></script>";
        } else {
            $jsLinks[] = "    <script src=\"$jsPath\"></script>";
        }
    }
    
    // Extract body content
    preg_match('/<body[^>]*>(.*?)<\/body>/is', $content, $bodyMatch);
    $bodyContent = $bodyMatch[1] ?? '';
    
    // Replace asset paths in body content
    $bodyContent = preg_replace('/href=["\']\.\.\/assets\/([^"\']+)["\']/i', "href=\"{{ asset('assets/$1') }}\"", $bodyContent);
    $bodyContent = preg_replace('/src=["\']\.\.\/assets\/([^"\']+)["\']/i', "src=\"{{ asset('assets/$1') }}\"", $bodyContent);
    $bodyContent = preg_replace('/href=["\']([^"\']+\.html)["\']/i', "href=\"{{ route('" . str_replace(['-', '_'], '', $filename) . "') }}\"", $bodyContent);
    
    // Build Blade template
    $bladeContent = "@extends('layouts.app')\n\n";
    $bladeContent .= "@section('title', '$title')\n\n";
    $bladeContent .= "@push('styles')\n";
    $bladeContent .= implode("\n", array_unique($cssLinks)) . "\n";
    $bladeContent .= "@endpush\n\n";
    $bladeContent .= "@section('content')\n";
    $bladeContent .= $bodyContent . "\n";
    $bladeContent .= "@endsection\n\n";
    $bladeContent .= "@push('scripts')\n";
    $bladeContent .= implode("\n", array_unique($jsLinks)) . "\n";
    $bladeContent .= "@endpush\n";
    
    file_put_contents($bladeFile, $bladeContent);
    echo "Converted: $filename.html -> $filename.blade.php\n";
}

echo "\nConversion complete!\n";

