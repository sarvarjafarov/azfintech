@extends('layouts.app')

@section('title', 'Home')

@push('styles')
    <!-- Add your template CSS files here -->
    <link rel="stylesheet" href="{{ asset('assets/css/your-template.css') }}">
    <!-- Example: <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"> -->
@endpush

@section('content')
    <!-- Paste your HTML template content here -->
    <!-- Replace static paths with Laravel asset() helper -->
    
    <!-- Example structure: -->
    <div class="container">
        <h1>Welcome to {{ config('app.name') }}</h1>
        <!-- Your template HTML goes here -->
    </div>
@endsection

@push('scripts')
    <!-- Add your template JavaScript files here -->
    <script src="{{ asset('assets/js/your-template.js') }}"></script>
    <!-- Example: <script src="{{ asset('assets/js/jquery.min.js') }}"></script> -->
@endpush

