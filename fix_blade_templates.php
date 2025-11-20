<?php

/**
 * Fix converted Blade templates - separate CSS and JS properly
 */

$templatesDir = __DIR__ . '/resources/views/templates';
$bladeFiles = glob($templatesDir . '/*.blade.php');

foreach ($bladeFiles as $bladeFile) {
    $content = file_get_contents($bladeFile);
    
    // Fix: Move JS files from @push('styles') to @push('scripts')
    // Find all JS files in styles section
    preg_match_all('/<link[^>]+href=["\']{{ asset\([\'"]assets\/js\/([^\'"]+)[\'"]\) }}["\'][^>]*>/i', $content, $jsInStyles);
    
    // Remove JS files from styles section
    $content = preg_replace('/<link[^>]+href=["\']{{ asset\([\'"]assets\/js\/[^\'"]+[\'"]\) }}["\'][^>]*>\s*/i', '', $content);
    
    // Extract existing scripts section
    preg_match('/@push\([\'"]scripts[\'"]\)(.*?)@endpush/s', $content, $scriptsMatch);
    $scriptsSection = $scriptsMatch[1] ?? '';
    
    // Add JS files to scripts section
    if (!empty($jsInStyles[1])) {
        $newScripts = '';
        foreach ($jsInStyles[1] as $jsFile) {
            $newScripts .= "    <script src=\"{{ asset('assets/js/$jsFile') }}\"></script>\n";
        }
        
        if (empty($scriptsSection)) {
            // Add scripts section if it doesn't exist
            $content = preg_replace('/@endpush\s*$/', "@push('scripts')\n$newScripts@endpush", $content);
        } else {
            // Prepend to existing scripts
            $content = str_replace($scriptsSection, $newScripts . $scriptsSection, $content);
        }
    }
    
    // Remove duplicate asset() calls
    $content = preg_replace('/{{ asset\([\'"]assets\/([^\'"]+)[\'"]\) }}/', "{{ asset('assets/$1') }}", $content);
    
    // Clean up empty lines
    $content = preg_replace('/\n{3,}/', "\n\n", $content);
    
    file_put_contents($bladeFile, $content);
    echo "Fixed: " . basename($bladeFile) . "\n";
}

echo "\nFix complete!\n";

