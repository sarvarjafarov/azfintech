@extends('layouts.app')

@section('title', '404 page')

@push('styles')
    <link rel="stylesheet" href="https://unistudio.co/html/news5/">
    <link rel="stylesheet" href="{{ asset('assets/css/unicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/prettify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme/demo-three.min.css') }}">
@endpush

@section('content')

        <!--  Search modal -->
        <div id="uc-search-modal" class="uc-modal-full uc-modal" data-uc-modal="overlay: true">
            <div class="uc-modal-dialog d-flex justify-center bg-white text-dark dark:bg-gray-900 dark:text-white" data-uc-height-viewport="">
                <button class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all" type="button">
                    <i class="unicon-close"></i>
                </button>
                <div class="panel w-100 sm:w-500px px-2 py-10">
                    <h3 class="h1 text-center">Search</h3>
                    <form class="hstack gap-1 mt-4 border-bottom p-narrow dark:border-gray-700" action="404%EF%B9%96.html">
                        <span class="d-inline-flex justify-center items-center w-24px sm:w-40 h-24px sm:h-40px opacity-50"><i class="unicon-search icon-3"></i></span>
                        <input type="search" name="q" class="form-control-plaintext ms-1 fs-6 sm:fs-5 w-full dark:text-white" placeholder="Type your keyword.." aria-label="Search" autofocus>
                    </form>
                </div>
            </div>
        </div>

        <!--  Menu panel -->
        <div id="uc-menu-panel" data-uc-offcanvas="overlay: true;">
            <div class="uc-offcanvas-bar bg-white text-dark dark:bg-gray-900 dark:text-white">
                <header class="uc-offcanvas-header hstack justify-between items-center pb-4 bg-white dark:bg-gray-900">
                    <div class="uc-logo">
                        <a href="{{ route('404') }}" class="h5 text-none text-gray-900 dark:text-white">
                            <img class="w-32px" src="{{ asset('assets/images/common/logo-icon.svg') }}" alt="News5" data-uc-svg>
                        </a>
                    </div>
                    <button class="uc-offcanvas-close p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all" type="button">
                        <i class="unicon-close"></i>
                    </button>
                </header>

                <div class="panel">
                    <form id="search-panel" class="form-icon-group vstack gap-1 mb-3" data-uc-sticky="">
                        <input type="email" class="form-control form-control-md fs-6" placeholder="Search..">
                        <span class="form-icon text-gray">
                            <i class="unicon-search icon-1"></i>
                        </span>
                    </form>
                    <ul class="nav-y gap-narrow fw-bold fs-5" data-uc-nav>
                        <li class="uc-parent">
                            <a href="#">Homepages</a>
                            <ul class="uc-nav-sub" data-uc-nav="">
                                <li><a href="{{ route('404') }}">Main</a></li>
                                <li><a href="{{ route('404') }}">Classic News</a></li>
                                <li><a href="{{ route('404') }}">Tech</a></li>
                                <li><a href="{{ route('404') }}">Classic Blog</a></li>
                                <li><a href="{{ route('404') }}">Gaming</a></li>
                                <li><a href="{{ route('404') }}">Sports</a></li>
                                <li><a href="{{ route('404') }}">Newspaper</a></li>
                                <li><a href="{{ route('404') }}">Magazine</a></li>
                                <li><a href="{{ route('404') }}">Travel</a></li>
                                <li><a href="{{ route('404') }}">Food</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Latest</a></li>
                        <li><a href="#">Trending</a></li>
                        <li class="uc-parent">
                            <a href="#">Inner Pages</a>
                            <ul class="uc-nav-sub" data-uc-nav="">
                                <li class="uc-parent">
                                    <a href="{{ route('404') }}">Blog</a>
                                    <ul class="uc-nav-sub">
                                        <li><a href="{{ route('404') }}">Full Width</a></li>
                                        <li><a href="{{ route('404') }}">Grid 2 Cols</a></li>
                                        <li><a href="{{ route('404') }}">Grid 3 Cols</a></li>
                                        <li><a href="{{ route('404') }}">Grid 4 Cols</a></li>
                                    </ul>
                                </li>
                                <li class="uc-parent">
                                    <a href="{{ route('404') }}">Blog - detail</a>
                                    <ul class="uc-nav-sub">
                                        <li><a href="{{ route('404') }}">Blog detail</a></li>
                                        <li><a href="{{ route('404') }}">Blog detail - v2</a></li>
                                    </ul>
                                </li>
                                <li class="uc-parent">
                                    <a href="#">Useful pages</a>
                                    <ul class="uc-nav-sub">
                                        <li><a href="{{ route('404') }}">Sign up</a></li>
                                        <li><a href="{{ route('404') }}">Sign in</a></li>
                                        <li><a href="{{ route('404') }}">Reset password</a></li>
                                        <li><a href="{{ route('404') }}">404 page</a></li>
                                        <li><a href="{{ route('404') }}">Coming soon</a></li>
                                    </ul>
                                </li>
                                <li class="uc-parent">
                                    <a href="#">Other pages</a>
                                    <ul class="uc-nav-sub">
                                        <li><a href="{{ route('404') }}">FAQ</a></li>
                                        <li><a href="{{ route('404') }}">Terms of use</a></li>
                                        <li><a href="{{ route('404') }}">Privacy policy</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="uc-parent">
                            <a href="{{ route('404') }}">Shop</a>
                            <ul class="uc-nav-sub" data-uc-nav="">
                                <li class="uc-parent">
                                    <a href="{{ route('404') }}">Shop layouts</a>
                                    <ul class="uc-nav-sub">
                                        <li><a href="{{ route('404') }}">Shop 4 cols</a></li>
                                        <li><a href="{{ route('404') }}">Shop 3 cols</a></li>
                                        <li><a href="{{ route('404') }}">Shop 2 cols</a></li>
                                        <li><a href="{{ route('404') }}">Shop with sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('404') }}">Archive category</a></li>
                                <li><a href="{{ route('404') }}">Product detail</a></li>
                                <li><a href="{{ route('404') }}">Product detail - v2</a></li>
                                <li><a href="{{ route('404') }}">Cart</a></li>
                                <li><a href="{{ route('404') }}">Cart - v2</a></li>
                                <li><a href="{{ route('404') }}">Checkout</a></li>
                                <li><a href="{{ route('404') }}">Checkout - v2</a></li>
                                <li><a href="{{ route('404') }}">Order confirmation</a></li>
                            </ul>
                        </li>
                        <li class="hr opacity-10 my-1"></li>
                        <li><a href="{{ route('404') }}">Sign in</a></li>
                        <li><a href="{{ route('404') }}">Create an account</a></li>
                    </ul>
                    <ul class="social-icons nav-x mt-4">
                        <li>
                            <a href="#"><i class="unicon-logo-medium icon-2"></i></a>
                            <a href="#"><i class="unicon-logo-x-filled icon-2"></i></a>
                            <a href="#"><i class="unicon-logo-instagram icon-2"></i></a>
                            <a href="#"><i class="unicon-logo-pinterest icon-2"></i></a>
                        </li>
                    </ul>
                    <div class="py-2 hstack gap-2 mt-4 bg-white dark:bg-gray-900" data-uc-sticky="position: bottom">
                        <div class="vstack gap-1">
                            <span class="fs-7 opacity-60">Select theme:</span>
                            <div class="darkmode-trigger" data-darkmode-switch="">
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider fs-5"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  Cart panel -->
        <div id="uc-cart-panel" data-uc-offcanvas="overlay: true; flip: true;">
            <div class="uc-offcanvas-bar bg-white text-dark dark:bg-gray-900 dark:text-white">
                <button class="uc-offcanvas-close top-0 ltr:end-0 rtl:start-0 rtl:end-auto m-2 p-0 border-0 icon-2 lg:icon-3 btn btn-md dark:text-white transition-transform duration-150 hover:rotate-90" type="button">
                    <i class="unicon-close"></i>
                </button>

                <div class="mini-cart-content vstack justify-between panel h-100">
                    <div class="mini-cart-header">
                        <h3 class="title h5 m-0 text-dark dark:text-white">Shopping cart</h3>
                    </div>
                    <div class="mini-cart-listing panel flex-1 my-4 overflow-scroll">
                        <p class="alert alert-warning" hidden>Your cart empty!</p>
                        <div class="panel vstack gap-3">
                            <div>
                                <article class="product type-product panel">
                                    <div class="hstack gap-2">
                                        <figure class="featured-image m-0 ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ asset('assets/images/common/img-fallback.png') }}" data-src="{{ asset('assets/images/common/products/img-07.jpg') }}" alt="Laptop Cover" data-uc-img="loading: lazy">
                                            <a href="{{ route('404') }}" class="position-cover" data-caption="Laptop Cover"></a>
                                        </figure>
                                        <div class="content vstack gap-narrow fs-6">
                                            <h5 class="h6 m-0"><a class="text-none text-dark dark:text-white" href="{{ route('404') }}">Laptop Cover</a></h5>
                                            <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span class="qty">1</span> x <span class="price">$24.00</span></div>
                                            <a href="#remove_from_cart" class="remove fs-7 text-dark dark:text-white">Remove</a>
                                        </div>
                                        <a href="#remove_from_cart" class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                            <i class="unicon-close icon-1"></i>
                                        </a>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="product type-product panel">
                                    <div class="hstack gap-2">
                                        <figure class="featured-image m-0 ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ asset('assets/images/common/img-fallback.png') }}" data-src="{{ asset('assets/images/common/products/img-08.jpg') }}" alt="Disney Toys" data-uc-img="loading: lazy">
                                            <a href="{{ route('404') }}" class="position-cover" data-caption="Disney Toys"></a>
                                        </figure>
                                        <div class="content vstack gap-narrow fs-6">
                                            <h5 class="h6 m-0"><a class="text-none text-dark dark:text-white" href="{{ route('404') }}">Disney Toys</a></h5>
                                            <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span class="qty">1</span> x <span class="price">$5.00</span></div>
                                            <a href="#remove_from_cart" class="remove fs-7 text-dark dark:text-white">Remove</a>
                                        </div>
                                        <a href="#remove_from_cart" class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                            <i class="unicon-close icon-1"></i>
                                        </a>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="product type-product panel">
                                    <div class="hstack gap-2">
                                        <figure class="featured-image m-0 ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ asset('assets/images/common/img-fallback.png') }}" data-src="{{ asset('assets/images/common/products/img-09.jpg') }}" alt="Screen Axe" data-uc-img="loading: lazy">
                                            <a href="{{ route('404') }}" class="position-cover" data-caption="Screen Axe"></a>
                                        </figure>
                                        <div class="content vstack gap-narrow fs-6">
                                            <h5 class="h6 m-0"><a class="text-none text-dark dark:text-white" href="{{ route('404') }}">Screen Axe</a></h5>
                                            <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span class="qty">1</span> x <span class="price">$19.00</span></div>
                                            <a href="#remove_from_cart" class="remove fs-7 text-dark dark:text-white">Remove</a>
                                        </div>
                                        <a href="#remove_from_cart" class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                            <i class="unicon-close icon-1"></i>
                                        </a>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="product type-product panel">
                                    <div class="hstack gap-2">
                                        <figure class="featured-image m-0 ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="{{ asset('assets/images/common/img-fallback.png') }}" data-src="{{ asset('assets/images/common/products/img-10.jpg') }}" alt="Airpods Pro" data-uc-img="loading: lazy">
                                            <a href="{{ route('404') }}" class="position-cover" data-caption="Airpods Pro"></a>
                                        </figure>
                                        <div class="content vstack gap-narrow fs-6">
                                            <h5 class="h6 m-0"><a class="text-none text-dark dark:text-white" href="{{ route('404') }}">Airpods Pro</a></h5>
                                            <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span class="qty">1</span> x <span class="price">$49.00</span></div>
                                            <a href="#remove_from_cart" class="remove fs-7 text-dark dark:text-white">Remove</a>
                                        </div>
                                        <a href="#remove_from_cart" class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                            <i class="unicon-close icon-1"></i>
                                        </a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="mini-cart-footer panel pt-3 border-top">
                        <div class="panel vstack gap-3 justify-between">
                            <div class="mini-cart-total hstack justify-between">
                                <h5 class="h5 m-0 text-dark dark:text-white">Subtotal</h5>
                                <b class="fs-5">$97.00</b>
                            </div>
                            <div class="mini-cart-actions vstack gap-1">
                                <a href="{{ route('404') }}" class="btn btn-md btn-outline-gray-100 text-dark dark:text-white dark:border-gray-700 dark:hover:bg-gray-700">View cart</a>
                                <a href="{{ route('404') }}" class="btn btn-md btn-primary text-white">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  Contact modal -->
        <div id="uc-contact-form" data-uc-modal="overlay: true">
            <div class="uc-modal-dialog lg:max-w-500px bg-white text-dark dark:bg-gray-800 dark:text-white rounded">
                <button class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all" type="button">
                    <i class="unicon-close"></i>
                </button>
                <div class="panel vstack gap-2 md:gap-4 text-center">
                    <div class="panel cstack px-3 lg:px-4 py-4 lg:py-8 m-0 lg:mx-auto">
                        <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
                            <h4 class="h5 lg:h4 m-0">Let's get in touch</h4>
                            <div class="panel w-100 sm:w-350px xl:w-400px mx-auto">
                                <form class="vstack gap-2">
                                    <input class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:border-white" type="text" placeholder="Full name" required>
                                    <input class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:border-white" type="email" placeholder="Your email" required>
                                    <input class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:border-white" type="text" placeholder="Subject">
                                    <textarea class="form-control min-h-150px w-full bg-white dark:border-white" placeholder="Your message.." required></textarea>
                                    <button class="btn btn-primary btn-md mt-2" type="submit">Send message</button>
                                </form>
                            </div>
                            <p>Or drop us a message via <a class="uc-link" href="mailto:hello@news5.co">email</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  Bottom Actions Sticky -->
        <div class="backtotop-wrap position-fixed bottom-0 end-0 z-99 m-2 vstack">
            <div class="darkmode-trigger cstack w-40px h-40px rounded-circle text-none bg-gray-100 dark:bg-gray-700 dark:text-white" data-darkmode-toggle="">
                <label class="switch">
                    <span class="sr-only">Dark mode toggle</span>
                    <input type="checkbox">
                    <span class="slider fs-5"></span>
                </label>
            </div>
            <a class="btn btn-sm bg-primary text-white w-40px h-40px rounded-circle" href="https://html.themewant.com/news5/demo-three/to_top" data-uc-backtotop>
                <i class="icon-2 unicon-chevron-up"></i>
            </a>
        </div>

        <!-- Wrapper start -->
        <div id="wrapper" class="wrap overflow-x-hidden">
            <div class="section py-6 lg:py-8 xl:py-10">
                <div class="container max-w-xl">
                    <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
                        <h2 class="display-5 sm:display-3 lg:display-2 xl:display-1 text-primary">404</h2>
                        <h1 class="h3 sm:h1 m-0">Page not found</h1>
                        <p class="fs-6 md:fs-5">
                            Sorry, the page you seems looking for, <br>
                            has been moved, redirected or removed permanently.
                        </p>
                        <a href="{{ route('404') }}" class="animate-btn btn btn-md btn-primary text-none gap-0">
                            <span>Go back home</span>
                            <i class="icon icon-narrow unicon-arrow-left fw-bold"></i>
                        </a>
                        <p>Why Not try to search again? <a class="uc-link" href="#uc-search-modal" data-uc-toggle>Search now</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wrapper end -->

        <!-- include jquery & bootstrap js -->
        <script defer src="{{ asset('assets/js/libs/jquery.min.js') }}"></script>
        <script defer src="{{ asset('assets/js/libs/bootstrap.min.js') }}"></script>

        <!-- include scripts -->
        <script defer src="{{ asset('assets/js/libs/anime.min.js') }}"></script>
        <script defer src="{{ asset('assets/js/libs/swiper-bundle.min.js') }}"></script>
        <script defer src="{{ asset('assets/js/libs/scrollmagic.min.js') }}"></script>
        <script defer src="{{ asset('assets/js/helpers/data-attr-helper.js') }}"></script>
        <script defer src="{{ asset('assets/js/helpers/swiper-helper.js') }}"></script>
        <script defer src="{{ asset('assets/js/helpers/anime-helper.js') }}"></script>
        <script defer src="{{ asset('assets/js/helpers/anime-helper-defined-timelines.js') }}"></script>
        <script defer src="{{ asset('assets/js/uikit-components-bs.js') }}"></script>

        <!-- include app script -->
        <script defer src="{{ asset('assets/js/app.js') }}"></script>

        <script>
            // Schema toggle via URL
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            const getSchema = urlParams.get("schema");
            if (getSchema === "dark") {
                setDarkMode(1);
            } else if (getSchema === "light") {
                setDarkMode(0);
            }
        </script>
    
@endsection

@push('scripts')    <script src="{{ asset('assets/js/libs/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/scrollmagic.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/anime.min.js') }}"></script>
    <script src="{{ asset('assets/js/helpers/data-attr-helper.js') }}"></script>
    <script src="{{ asset('assets/js/helpers/swiper-helper.js') }}"></script>
    <script src="{{ asset('assets/js/helpers/anime-helper.js') }}"></script>
    <script src="{{ asset('assets/js/helpers/anime-helper-defined-timelines.js') }}"></script>
    <script src="{{ asset('assets/js/uikit-components-bs.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/uni-core/css/uni-core.min.css') }}"></script>

    <script src="{{ asset('assets/js/app-head-bs.js') }}"></script>
    <script src="{{ asset('assets/js/uni-core/js/uni-core-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/anime.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/scrollmagic.min.js') }}"></script>
    <script src="{{ asset('assets/js/helpers/data-attr-helper.js') }}"></script>
    <script src="{{ asset('assets/js/helpers/swiper-helper.js') }}"></script>
    <script src="{{ asset('assets/js/helpers/anime-helper.js') }}"></script>
    <script src="{{ asset('assets/js/helpers/anime-helper-defined-timelines.js') }}"></script>
    <script src="{{ asset('assets/js/uikit-components-bs.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
@endpush
