@php use Illuminate\Support\Facades\Auth; @endphp
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Noticias</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

    <link href="{{ asset('assets/css/templatemo-pod-talk.css') }}" rel="stylesheet">
    @livewireStyles
</head>
    <body>
    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand me-lg-5 me-0" href="index.html">
                    <img src="{{ asset('assets/images/pod-talk-logo.png') }}" class="logo-image img-fluid" alt="templatemo pod talk">
                </a>

                <form action="#" method="get" class="custom-form search-form flex-fill me-3" role="search">
                    <div class="input-group input-group-lg">
                        <input name="search" type="search" class="form-control" id="search" placeholder="Search Podcast" aria-label="Search">

                        <button type="submit" class="form-control" id="submit">
                            <i class="bi-search"></i>
                        </button>
                    </div>
                </form>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="listing-page.html">Listing Page</a></li>

                                <li><a class="dropdown-item" href="detail-page.html">Detail Page</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        @if(Route::has('login'))
                            @auth()
                                @if(Auth::user()->utype === 'ADM')
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>

                                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                            <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                            <li>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('frmlogout').submit();" class="dropdown-item">Logout</a>
                                                <form id="frmlogout" action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @else
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>

                                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Minha conta</a></li>
                                            <li>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('frmlogout').submit();" class="dropdown-item">Logout</a>
                                                <form id="frmlogout" action="{{ route('logout') }}" method="POST">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                               @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">seunome</a>

                                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Dashboard</a></li>
                                            <li><a class="dropdown-item" href="#">Logout</a></li>
                                        </ul>
                                    </li>
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <section class="latest-podcast-section section-padding pb-0" id="section_2">
            <div class="container">
            </div>
        </section>

        {{ $slot }}
    </main>


    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <div class="subscribe-form-wrap">
                        <h6>Subscribe. Every weekly.</h6>

                        <form class="custom-form subscribe-form" action="#" method="get" role="form">
                            <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email Address" required="">

                            <div class="col-lg-12 col-12">
                                <button type="submit" class="form-control" id="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-md-0 mb-lg-0">
                    <h6 class="site-footer-title mb-3">Contact</h6>

                    <p class="mb-2"><strong class="d-inline me-2">Phone:</strong> 010-020-0340</p>

                    <p>
                        <strong class="d-inline me-2">Email:</strong>
                        <a href="#">inquiry@pod.co</a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <h6 class="site-footer-title mb-3">Download Mobile</h6>

                    <div class="site-footer-thumb mb-4 pb-2">
                        <div class="d-flex flex-wrap">
                            <a href="#">
                                <img src="images/app-store.png" class="me-3 mb-2 mb-lg-0 img-fluid" alt="">
                            </a>

                            <a href="#">
                                <img src="images/play-store.png" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>

                    <h6 class="site-footer-title mb-3">Social</h6>

                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="container pt-5">
            <div class="row align-items-center">

                <div class="col-lg-2 col-md-3 col-12">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('assets/images/pod-talk-logo.png') }}" class="logo-image img-fluid" alt="templatemo pod talk">
                    </a>
                </div>

                <div class="col-lg-7 col-md-9 col-12">
                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Homepage</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Browse episodes</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Help Center</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Contact Us</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-12">
                    <p class="copyright-text mb-0">Copyright © 2036 Talk Pod Company
                        <br><br>
                        Design: <a rel="nofollow" href="https://templatemo.com/page/1" target="_parent">TemplateMo</a></p>
                </div>
            </div>
        </div>
    </footer>


    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    @livewireScripts
    </body>
</html>
