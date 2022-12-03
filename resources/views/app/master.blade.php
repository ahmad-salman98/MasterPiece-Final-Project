<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

    <head>
        <title>@yield('title')</title>
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport"
            content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css"
            href="//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic%7CLato:300,300italic,400,400italic,700,900%7CMerriweather:700italic">
        <link rel="stylesheet" href="/css/fonts.css">
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/style.css">
        @yield('profile-style')
        {{-- font awesome --}}
        <script src="https://kit.fontawesome.com/0a9ca5a95a.js" crossorigin="anonymous"></script>

        {{-- Sweet alert --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    </head>

    <body>
        <div class="preloader">
            <div class="preloader-body">
                <div class="cssload-container">
                    <div class="cssload-speeding-wheel"> </div>
                </div>
                <p>Loading...</p>
            </div>
        </div>

        @if( session()->has('success'))
        <div class="success-msg flash-msg" id="successMsg">
            {{session('success')}}
            <script>
                window.setTimeout("closeDiv();", 5000);

                function closeDiv(){
                document.getElementById("successMsg").style.display=" none";
                }
            </script>
        </div>
        @endif

        @if( session()->has('error'))
        <div class="error-msg flash-msg" id="errorMsg">
            {{session('error')}}
        </div>
        <script>
            window.setTimeout("closeDiv();", 5000);

        function closeDiv(){
        document.getElementById("errorMsg").style.display=" none";
        }
        </script>

        @endif

        <div class="page">
            <header class="page-head">
                <div class="rd-navbar-wrap">
                    <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed"
                        data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed"
                        data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed"
                        data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
                        data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
                        data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="53px"
                        data-xl-stick-up-offset="53px" data-xxl-stick-up-offset="53px" data-lg-stick-up="true"
                        data-xl-stick-up="true" data-xxl-stick-up="true">
                        <div class="rd-navbar-inner">
                            <div class="rd-navbar-aside-wrap">
                                <div class="rd-navbar-aside">
                                    <div class="rd-navbar-aside-toggle" data-rd-navbar-toggle=".rd-navbar-aside">
                                        <span></span>
                                    </div>
                                    <div class="rd-navbar-aside-content">
                                        <ul class="rd-navbar-aside-group list-units">
                                            <li>
                                                <div class="unit unit-horizontal unit-spacing-xs align-items-center">
                                                    <div class="unit-left"><span
                                                            class="novi-icon icon icon-xxs icon-primary material-icons-phone"></span>
                                                    </div>
                                                    <div class="unit-body"><a class="link-dusty-gray" href="tel:#">+1
                                                            (232) 349–8447</a></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="unit unit-horizontal unit-spacing-xs align-items-center">
                                                    <div class="unit-left"><span
                                                            class="novi-icon icon icon-xxs icon-primary fa-envelope-o"></span>
                                                    </div>
                                                    <div class="unit-body"><a class="link-dusty-gray"
                                                            href="mailto:#">info@demolink.org</a></div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="rd-navbar-aside-group">
                                            <ul class="list-inline list-inline-reset">
                                                <li><a class="novi-icon icon icon-circle icon-nobel-filled icon-xxs-smaller fa fa-facebook"
                                                        href="#"></a></li>
                                                <li><a class="novi-icon icon icon-circle icon-nobel-filled icon-xxs-smaller fa fa-twitter"
                                                        href="#"></a></li>
                                                <li><a class="novi-icon icon icon-circle icon-nobel-filled icon-xxs-smaller fa fa-google-plus"
                                                        href="#"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rd-navbar-group mx-auto">
                                <div class="rd-navbar-panel">
                                    <button class="rd-navbar-toggle"
                                        data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span>
                                    </button>
                                    <a class="rd-navbar-brand brand" href="/">
                                        <img src="/images/logo-default-143x27.png" width="143" height="27" />
                                    </a>
                                </div>
                                <div class="rd-navbar-nav-wrap w-100 ">
                                    <div class="rd-navbar-nav-inner  ">
                                        <ul class="rd-navbar-nav w-100 ">

                                            <li class="{{ Route::is('home') ? 'active' : '' }}"><a href="/">Home</a>
                                            </li>
                                            <li class="{{ Route::is('about') ? 'active' : '' }}"><a href="/about">About
                                                </a>
                                            </li>
                                            <li class="{{ Route::is('contact') ? 'active' : '' }}"><a
                                                    href="/contact">Contact</a>
                                            </li>
                                            <li class="mr-auto {{ Route::is('appointment') ? 'active' : '' }}">
                                                <a href="/appointment">Appointment</a>
                                            </li>
                                            <li class="">

                                                <!-- Basic dropdown -->

                                                @auth
                                                <button class="btn btn-primary dropdown-toggle " type="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    {{Auth::user()->name }}
                                                </button>

                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="/profile">View profile</a>
                                                    <a class="dropdown-item" href="edit-profile">Edit profile</a>
                                                    <div class="dropdown-divider"></div>
                                                    <form method="POST" action="/logout">
                                                        @csrf
                                                        <input type="hidden" value="">
                                                        <input class="dropdown-item" type="submit" value="Logout">
                                                    </form>
                                                </div>
                                                <!-- Basic dropdown -->
                                            </li>

                                            <!-- When < 1200px  -->
                                            <div class="side-dropdown" style="display: none">
                                                <br>
                                                <hr>
                                                <li><a class="dropdown-item" href="/profile">View Profile</a></li>
                                                <li><a class="dropdown-item" href="#">Edit profile</a></li>
                                                <li class="">
                                                    <form action="">
                                                        <input style="padding: 1.5rem" class="dropdown-item"
                                                            type="submit" value="Logout">
                                                    </form>
                                                </li>
                                            </div>
                                            @else
                                            <li>
                                                <a href="/register" class="btn btn-primary">login</a>
                                            </li>
                                            @endauth

                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>

            <main>
                @yield('content')


            </main>







            <footer class="page-foot bg-ebony-clay">
                <div class="section-40 section-md-75">
                    <div class="container">
                        <div class="row justify-content-sm-center">
                            <div class="col-sm-9 col-md-11 col-xl-12">
                                <div class="row row-50">
                                    <div class="col-md-6 col-lg-10 col-xl-3">
                                        <div class="inset-xl-right-20" style="max-width: 510px;">
                                            <a class="brand" href="/"><img src="/images/logo-inverse-143x28.png" alt=""
                                                    width="143" height="28" /></a>
                                            <p>
                                                If you or your business is facing a legal
                                                challenge that calls for sound advice and skilled representation,
                                                contact us today
                                                to arrange a
                                                free consultation with an attorney.
                                            </p><a class="link link-group link-group-animated link-bold link-white"
                                                href="#"><span>Free
                                                    Consultation</span><span
                                                    class="novi-icon icon icon-xxs icon-primary fa fa-angle-right"></span></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <p class="h7">Recent Posts</p>
                                        <article class="post post-preview post-preview-inverse"><a href="#">
                                                <div class="unit unit-horizontal unit-spacing-lg">
                                                    <div class="unit-left">
                                                        <figure class="post-image"><img
                                                                src="images/post-preview-4-70x70.jpg" alt="" width="70"
                                                                height="70" />
                                                        </figure>
                                                    </div>
                                                    <div class="unit-body">
                                                        <div class="post-header">
                                                            <p>Help Us Make the Law Accessible for Everyone</p>
                                                        </div>
                                                        <div class="post-meta">
                                                            <ul class="list-meta">
                                                                <li>
                                                                    <time datetime="2019-06-23">June 23, 2019 </time>
                                                                </li>
                                                                <li>3 Comments</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a></article>
                                        <article class="post post-preview post-preview-inverse"><a href="#">
                                                <div class="unit unit-horizontal unit-spacing-lg">
                                                    <div class="unit-left">
                                                        <figure class="post-image"><img
                                                                src="images/post-preview-5-70x70.jpg" alt="" width="70"
                                                                height="70" />
                                                        </figure>
                                                    </div>
                                                    <div class="unit-body">
                                                        <div class="post-header">
                                                            <p>Legal Documents Every Landlord Needs </p>
                                                        </div>
                                                        <div class="post-meta">
                                                            <ul class="list-meta">
                                                                <li>
                                                                    <time datetime="2019-06-23">June 20, 2019</time>
                                                                </li>
                                                                <li>3 Comments</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a></article>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <p class="h7">Quick links</p>
                                        <div class="row" style="max-width: 270px;">
                                            <div class="col-6">
                                                <ul class="list-marked-variant-2">
                                                    <li><a href="/">Home</a></li>
                                                    <li><a href="#">Services</a></li>
                                                    <li><a href="#">Careers</a></li>
                                                    <li><a href="#">Blog</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <ul class="list-marked-variant-2">
                                                    <li><a href="/about">About us</a></li>
                                                    <li><a href="/contact">Contacts</a></li>
                                                    <li><a href="#">Appointment</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <p class="h7">Contact us</p>
                                        <address class="contact-info text-left">
                                            <div class="unit unit-horizontal unit-spacing-md align-items-center">
                                                <div class="unit-left"><span
                                                        class="novi-icon icon icon-xs icon-storm-gray material-icons-phone"></span>
                                                </div>
                                                <div class="unit-body"><a class="link-white" href="tel:#">+123 234 984
                                                        47 45</a>
                                                </div>
                                            </div>
                                            <div class="unit unit-horizontal unit-spacing-md align-items-center">
                                                <div class="unit-left"><span
                                                        class="novi-icon icon icon-xs icon-storm-gray fa fa-envelope-o"></span>
                                                </div>
                                                <div class="unit-body"><a class="link-white"
                                                        href="mailto:#">info@demolink.org</a>
                                                </div>
                                            </div>
                                            <div class="unit unit-horizontal unit-spacing-md">
                                                <div class="unit-left"><span
                                                        class="novi-icon icon icon-xs icon-storm-gray material-icons-place"></span>
                                                </div>
                                                <div class="unit-body"><a class="link-white d-inline" href="#">6036
                                                        Richmond
                                                        hwy,<br>Alexandria,
                                                        VA USA 22303</a></div>
                                            </div>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <hr>
                </div>
                <div class="section-35">
                    <div class="container text-center">
                        <div class="row row-15 flex-md-row-reverse justify-content-md-between align-items-md-center">
                            <div class="col-md-6 text-md-right">
                                <div class="group-sm group-middle">
                                    <p class="font-italic text-white">Follow Us:</p>
                                    <ul class="list-inline list-inline-reset">
                                        <li><a class="novi-icon icon icon-circle icon-bright-gray-filled icon-xxs-smaller fa fa-facebook"
                                                href="#"></a></li>
                                        <li><a class="novi-icon icon icon-circle icon-bright-gray-filled icon-xxs-smaller fa fa-twitter"
                                                href="#"></a></li>
                                        <li><a class="novi-icon icon icon-circle icon-bright-gray-filled icon-xxs-smaller fa fa-google-plus"
                                                href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <div class="snackbars" id="form-output-global"></div>
        <script src="/js/core.min.js"></script>
        <script src="/js/script.js"></script>
    </body>

</html>
