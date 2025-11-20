@extends('layouts.app')

@section('title', 'About Us')

@push('styles')
    <!-- Add your template CSS files here -->
    <link rel="stylesheet" href="{{ asset('assets/css/your-template.css') }}">
@endpush

@section('content')
    <!-- Paste your about.html content here -->
    <div class="container">
        <h1>About Us</h1>
        <!-- Your template HTML goes here -->
    </div>
@endsection

@push('scripts')
    <!-- Add your template JavaScript files here -->
    <script src="{{ asset('assets/js/your-template.js') }}"></script>
@endpush

