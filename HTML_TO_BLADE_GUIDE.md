# HTML to Blade Template Conversion Guide

## 📄 How to Convert HTML Files to Blade Templates

Each HTML file in your template should become a Blade template file. Here's how:

## 🔄 Conversion Process

### Step 1: Identify Your HTML Files

List all your HTML files:
- `index.html` → `home.blade.php`
- `about.html` → `about.blade.php`
- `contact.html` → `contact.blade.php`
- `services.html` → `services.blade.php`
- etc.

### Step 2: Extract Content from HTML

For each HTML file, you need to:

1. **Extract the `<head>` section** - CSS links, meta tags, etc.
2. **Extract the `<body>` content** - Your main HTML content
3. **Extract the scripts** - JavaScript files at the bottom

### Step 3: Create Blade Template

**Example: Converting `index.html` to `home.blade.php`**

#### Original HTML (`index.html`):
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - My Website</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.html">Home</a>
            <a href="about.html">About</a>
        </nav>
    </header>
    
    <main>
        <h1>Welcome to Our Website</h1>
        <p>This is the home page content.</p>
    </main>
    
    <footer>
        <p>&copy; 2024 My Website</p>
    </footer>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
```

#### Converted Blade Template (`resources/views/templates/home.blade.php`):
```blade
@extends('layouts.app')

@section('title', 'Home - My Website')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush

@section('content')
    <header>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
        </nav>
    </header>
    
    <main>
        <h1>Welcome to Our Website</h1>
        <p>This is the home page content.</p>
    </main>
    
    <footer>
        <p>&copy; {{ date('Y') }} My Website</p>
    </footer>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
@endpush
```

## 📋 Step-by-Step Conversion Checklist

For each HTML file:

- [ ] Create a new `.blade.php` file in `resources/views/templates/`
- [ ] Add `@extends('layouts.app')` at the top
- [ ] Add `@section('title', 'Your Page Title')`
- [ ] Move CSS links to `@push('styles')` section
- [ ] Move body content to `@section('content')`
- [ ] Replace all asset paths with `{{ asset('assets/...') }}`
- [ ] Replace all links with `{{ route('name') }}` or `{{ url('/path') }}`
- [ ] Move JavaScript to `@push('scripts')` section
- [ ] Add route in `routes/web.php`

## 🔗 Common Path Replacements

| HTML | Blade |
|------|-------|
| `href="about.html"` | `href="{{ route('about') }}"` |
| `href="css/style.css"` | `href="{{ asset('assets/css/style.css') }}"` |
| `src="images/logo.png"` | `src="{{ asset('assets/images/logo.png') }}"` |
| `src="js/app.js"` | `src="{{ asset('assets/js/app.js') }}"` |
| `action="contact.php"` | `action="{{ route('contact.submit') }}"` |

## 🎯 Multiple Pages Example

### 1. Home Page (`index.html` → `home.blade.php`)

```blade
@extends('layouts.app')

@section('title', 'Home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush

@section('content')
    <!-- Your home page content -->
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/home.js') }}"></script>
@endpush
```

### 2. About Page (`about.html` → `about.blade.php`)

```blade
@extends('layouts.app')

@section('title', 'About Us')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush

@section('content')
    <!-- Your about page content -->
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/about.js') }}"></script>
@endpush
```

### 3. Contact Page (`contact.html` → `contact.blade.php`)

```blade
@extends('layouts.app')

@section('title', 'Contact Us')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush

@section('content')
    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <!-- Your form fields -->
    </form>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/contact.js') }}"></script>
@endpush
```

## 🛣️ Setting Up Routes

In `routes/web.php`:

```php
<?php

use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('templates.home');
})->name('home');

// About page
Route::get('/about', function () {
    return view('templates.about');
})->name('about');

// Contact page
Route::get('/contact', function () {
    return view('templates.contact');
})->name('contact');

// Contact form submission
Route::post('/contact', function () {
    // Handle form submission
    return redirect()->route('contact')->with('success', 'Message sent!');
})->name('contact.submit');
```

## 🔄 Automated Conversion Script

You can create a simple script to help with conversion. Here's a basic approach:

1. **Copy HTML files to a temp location**
2. **Manually convert the first one** as a template
3. **Use the same structure** for others

## 💡 Pro Tips

1. **Keep common elements in layout**: If all pages share header/footer, put them in `layouts/app.blade.php`

2. **Use components for repeated elements**:
   ```blade
   @include('components.header')
   @include('components.footer')
   ```

3. **Dynamic content**: Replace static text with Laravel variables:
   ```blade
   <!-- Before -->
   <p>Copyright 2024</p>
   
   <!-- After -->
   <p>Copyright {{ date('Y') }}</p>
   ```

4. **Forms**: Always include CSRF token:
   ```blade
   <form method="POST" action="{{ route('submit') }}">
       @csrf
       <!-- form fields -->
   </form>
   ```

## 📁 File Organization

```
resources/views/
├── layouts/
│   └── app.blade.php          # Main layout (header, footer common to all)
└── templates/
    ├── home.blade.php         # index.html
    ├── about.blade.php        # about.html
    ├── contact.blade.php      # contact.html
    ├── services.blade.php     # services.html
    └── ...
```

## 🚀 Quick Start Command

To quickly create a new Blade template from an HTML file:

1. Copy your HTML file content
2. Create new file: `resources/views/templates/pagename.blade.php`
3. Use this structure:
   ```blade
   @extends('layouts.app')
   @section('title', 'Page Title')
   @push('styles')
       <!-- CSS here -->
   @endpush
   @section('content')
       <!-- HTML content here -->
   @endsection
   @push('scripts')
       <!-- JS here -->
   @endpush
   ```

## ✅ Final Checklist

- [ ] All HTML files converted to Blade templates
- [ ] All asset paths updated to use `asset()`
- [ ] All internal links updated to use `route()` or `url()`
- [ ] Routes created in `routes/web.php`
- [ ] Forms include `@csrf` token
- [ ] Test all pages load correctly
- [ ] Test all links work
- [ ] Test all forms submit correctly

