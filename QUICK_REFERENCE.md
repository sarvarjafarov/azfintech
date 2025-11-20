# Quick Reference: HTML to Blade Conversion

## 🎯 One-Page Quick Guide

### For Each HTML File:

1. **Create Blade file**: `resources/views/templates/pagename.blade.php`

2. **Use this template**:
```blade
@extends('layouts.app')

@section('title', 'Page Title')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/your-css.css') }}">
@endpush

@section('content')
    {{-- Paste your HTML body content here --}}
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/your-js.js') }}"></script>
@endpush
```

3. **Add route** in `routes/web.php`:
```php
Route::get('/pagename', function () {
    return view('templates.pagename');
})->name('pagename');
```

## 🔄 Path Replacements

| Find | Replace With |
|------|-------------|
| `href="css/file.css"` | `href="{{ asset('assets/css/file.css') }}"` |
| `src="js/file.js"` | `src="{{ asset('assets/js/file.js') }}"` |
| `src="images/photo.jpg"` | `src="{{ asset('assets/images/photo.jpg') }}"` |
| `href="about.html"` | `href="{{ route('about') }}"` |
| `action="form.php"` | `action="{{ route('form.submit') }}"` + add `@csrf` |

## 📝 Example: Complete Conversion

**Before (index.html):**
```html
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Welcome</h1>
    <img src="images/logo.png">
    <a href="about.html">About</a>
    <script src="js/app.js"></script>
</body>
</html>
```

**After (home.blade.php):**
```blade
@extends('layouts.app')

@section('title', 'Welcome')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush

@section('content')
    <h1>Welcome</h1>
    <img src="{{ asset('assets/images/logo.png') }}">
    <a href="{{ route('about') }}">About</a>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/app.js') }}"></script>
@endpush
```

## ✅ Checklist Per HTML File

- [ ] Create `.blade.php` file
- [ ] Add `@extends('layouts.app')`
- [ ] Move CSS to `@push('styles')`
- [ ] Move body to `@section('content')`
- [ ] Move JS to `@push('scripts')`
- [ ] Replace all paths with `asset()`
- [ ] Replace links with `route()`
- [ ] Add route in `web.php`
- [ ] Test the page

