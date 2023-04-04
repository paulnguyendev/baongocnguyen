<!DOCTYPE html>
<html lang="en">

<head>
    <base href="https://noirespa.com/">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Theraomega | Demo website </title>
    <meta name="description" content="Noire Spa | Design to make you come back to us">
    <link rel="icon" type="image/png" href="public/images/uploads/list-style.png" />
    <base href="https://noirespa.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossOrigin="anonymous" />
    <link rel="stylesheet" href="public/assets/css/style.min.css?v=1678722395" type="text/css" />
    <link rel="stylesheet" href="public/assets/css/custom.css?v=1678722395" type="text/css" />
    <link rel="stylesheet" href="public/assets/vendors/list-picker-js-master/list-picker.css">
    <link rel="stylesheet" href="public/assets/css/jquery.modal.min.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-50L3EBFBSS"></script> --}}
    {{-- <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-50L3EBFBSS');
    </script> --}}
    <!-- Google Tag Manager -->
    {{-- <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TF7KG49');
    </script> --}}
    <!-- End Google Tag Manager -->
    <style>
        .header-main .form-grid {
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }

        .header {
            background: #fff;
        }

        #page-home .why-choose-us,
        .section-content-page,
        .footer-top {
            background: #fff;
        }

        .header-main {
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body id="page-home">
    <!-- Google Tag Manager (noscript) -->
    {{-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TF7KG49" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript> --}}
    <!-- End Google Tag Manager (noscript) -->
    <header class="header" id="header">
        <div class="header-top">
            <div class="container">
                <div class="row align-center">
                    <p class="typography-body-m">
                        <a href="{{ route('home/index') }}#" class="btn btn-style2 ml-2">Login Now</a>
                        <a href="{{ route('home/index') }}/#" class="btn btn-style2 ml-2">Register Now</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="header-main">
            <div class="container">
                <div class="row">
                    <h1 class="logo-wrapper">
                        <a href="{{ route('home/index') }}/" class="logo">
                            <img src="{{ asset('uploads/images') }}/logo.png" alt="Noire Spa" />
                        </a>
                    </h1>
                    <div class="sticky-nav">
                        <ul>
                            <li class="active"><a href="{{ route('home/index') }}/">Home</a></li>
                            {{-- <li class=""><a href="{{ route('home/index') }}/#">Contact</a></li> --}}
                            <li class=""><a href="{{ route('cart/index') }}">Checkout</a></li>
                        </ul>

                    </div>
                    <div class="header-main__right">
                        <form action="" method="POST" class="form-grid">
                            <span class="material-icons start-icon">search</span>
                            <input type="text" name="keyword" placeholder="Search service" />
                            <button name="btn-submit-search" class="btn btn-style1" style="display:none">Search</button>
                        </form>
                        <a class="btn btn-style4">Search</a>

                    </div>
                    <div class="header-main__action-side">
                        <div class="icon-button-wrapper">
                            <div class="icon-button" id="search-button">
                                <span class="material-icons-outlined">search</span>
                            </div>
                        </div>
                        <div class="icon-button-wrapper">
                            <a href="#" class="icon-button">
                                <span class="material-icons">account_circle</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="side-nav">
            <div class="container">
                <nav class="navbar" id="navbar">
                    <div class="navbar-close icon-button toggle-nav">
                        <span class="material-icons">close</span>
                    </div>
                    <ul>
                        <li class="active"><a href="">Home</a></li>
                        <li class=""><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div> -->
    </header>
    <section class="side-search" id="side-search">
        <form method="POST" class="form-grid">
            <span class="material-icons start-icon">search</span>
            <input type="text" name="keyword" placeholder="Search service" />
            <button type="submit" name="btn-submit-search" class="btn btn-submit">
                <span class="material-icons">east</span>
            </button>
        </form>
        <button id="search-close">
            <span class="material-icons-outlined">close</span>
        </button>
    </section>
    <section class="fixed-social">
        <a href="{{ route('home/index') }}" target="_blank">
            <img src="public/assets/images/icons/facebook.png" alt="Facebook" class="fixed-social__icon" />
        </a>
        <span class="fixed-social__line"></span>
        <a href="{{ route('home/index') }}" target="_blank">
            <img src="public/assets/images/icons/google.png" alt="Google" class="fixed-social__icon" />
        </a>
        <span class="fixed-social__line"></span>
        <a href="{{ route('home/index') }}" target="_blank">
            <img src="public/assets/images/icons/yelp.png" alt="Yelp" class="fixed-social__icon" />
        </a>
        <span class="fixed-social__line"></span>
        <a href="{{ route('home/index') }}" target="_blank">
            <img src="public/assets/images/icons/instagram.png" alt="Instagram" class="fixed-social__icon" />
        </a>
        <span class="fixed-social__line"></span>
        <a href="{{ route('home/index') }}" target="_blank">
            <img src="public/assets/images/icons/twitter-white3.png" alt="Twitter" class="fixed-social__icon" />
        </a>
    </section>
    <main id="main-content" role="main">
        @yield('content')
        <!-- POPUP Update 29-07 -->
        <div class="backdrop">
            <div class="backdrop-content"></div>
        </div>
        <!-- POPUP End Update 29-07 -->


        <section class="section contact">
            <div class="container contact-inner">
                <div class="contact-box">
                    <h2 class="typography-title contact-title">Contact us</h2>
                    <ul class="list no-list-style">
                        <li>
                            <a href="#" class="link">
                                <span class="start-icon material-icons">place</span>
                                <p class="typography-body-m">
                                    133 Lilac Cir Hercules, California(CA), 94547 </p>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:jirumaj_emi80@yahoo.com" class="link">
                                <span class="start-icon material-icons">email</span>
                                <p class="typography-body-m">jirumaj_emi80@yahoo.com</p>
                            </a>
                        </li>
                        <li>
                            <a href="tel:+17147288142" class="link">
                                <span class="start-icon material-icons">call</span>
                                <p class="typography-body-m">(510) 799-0614</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="social-list">
                        <li>
                            <a href="{{ route('home/index') }}" class="social-item">
                                <img src="public/assets/images/icons/facebook-rounded.png" alt="Facebook" />
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home/index') }}" class="social-item">
                                <img src="public/assets/images/contact/logo-google.png" alt="Google" />
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home/index') }}" class="social-item">
                                <img src="public/assets/images/icons/instagram-rounded.png" alt="Instagram" />
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home/index') }}" class="social-item">
                                <img src="public/assets/images/icons/twitter-rounded.png" alt="Twitter" />
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home/index') }}" class="social-item">
                                <img src="public/assets/images/contact/logo-yelp.png" alt="Twitter" />
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="direction-wrapper">
                    <a href="{{ route('home/index') }}" class="btn btn-style1 direction-button" target="_blank">
                        DIRECTION </a>
                </div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509918.949550237!2d-123.79820902299119!3d37.184280336325216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2zQ2FsaWZvcm5pYSwgSG9hIEvhu7M!5e0!3m2!1svi!2s!4v1678797238755!5m2!1svi!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

    </main>

    <footer id="footer" class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-xs-12 footer-col">
                        <a href="/" class="logo">
                            <img src="{{ asset('uploads/images') }}/logo.png" alt="Noire Spa" />
                        </a>

                        {{-- <div class="operation-hour">
                            <h3 class="footer-title typography-body-l">
                                Hour of operation
                            </h3>
                            <div class="operation-hour-item typography-body-m">
                                <span class="operation-hour-weekdays">Mon - Fri</span>
                                <span class="operation-hour-time"> 9:00 AM - 7:00 PM</span>
                            </div>
                            <div class="operation-hour-item typography-body-m">
                                <span class="operation-hour-weekdays">Sat</span>
                                <span class="operation-hour-time"> 9:00 AM - 6:30 PM</span>
                            </div>
                            <div class="operation-hour-item typography-body-m">
                                <span class="operation-hour-weekdays">Sun</span>
                                <span class="operation-hour-time">10:00 AM - 5:30 PM</span>
                            </div>


                        </div> --}}
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12 footer-col">
                        <div class="best-link">
                            <h3 class="typography-body-l footer-title">Best links</h3>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <ul class="list best-link-list">

                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <ul class="list best-link-list">

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-xs-12 footer-col">
                        <div class="subscribe">
                            <h3 class="typography-body-l footer-title">
                                Subscribe Newsletter
                            </h3>
                            <form action="{{ route('home/index') }}" class="subscribe-form form-grid">
                                <input type="text" placeholder="Enter your email" />
                                <button type="submit" class="btn btn-submit">
                                    <span class="material-icons">send</span>
                                </button>
                            </form>
                            <p class="typography-caption mt-3">
                                Get news weekly for best promotions
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container">
                <p class="typography-caption">
                    Copyright
                    <span class="special-character">©</span>
                    2023
                    <br class="d-block d-sm-none" />
                    <span class="brand-name">TheraOmega.com.</span>
                    All Rights Reserved
                </p>
            </div>
        </div>

    </footer>
    <div class="popup-overlay"></div>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>

    <script src="public/assets/js/script.min.js?v=1678722395"></script>
    <script src="public/assets/js/custom.js?ver=1678722395"></script>
    <script src="public/assets/js/function.js?ver=1678722395"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    <script src="public/assets/vendors/list-picker-js-master/list-picker.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="public/assets/js/jquery-input-mask-phone-number.js"></script>
    <script src="public/assets/js/jquery-scrolltofixed.js"></script>
    <script src="public/assets/js/jquery.modal.min.js"></script>
    <script>
        lightbox.option({
            alwaysShowNavOnTouchDevices: true,
            imageFadeDuration: 100,
            fadeDuration: 300,
            resizeDuration: 200,
            wrapAround: false,
            disableScrolling: true,
            positionFromTop: window.innerHeight / 3,
            maxWidth: window.innerWidth - 30,
            maxHeight: window.innerHeight - 30,
        });
    </script>

    <script>
        $('.hero').slick({
            dots: true,
            arrows: false,
            infinite: true,
            speed: 1200,
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            autoplay: true,
            autoplaySpeed: 2600,
            customPaging: function(slider, i) {
                return '<span class="dot"></span>';
            },
        });
        $('#service-slider').slick({
            dots: false,
            arrows: true,
            infinite: true,
            speed: 600,
            slidesToShow: 1,
            //centerMode: true,
            centerPadding: true,
            variableWidth: true,
            autoplay: true,
            autoplaySpeed: 2600,
            prevArrow: "<div class='icon-button slick-prev'><span class='material-icons'>chevron_left</span></div>",
            nextArrow: "<div class='icon-button slick-next'><span class='material-icons'>chevron_right</span></div>",

            responsive: [{
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    variableWidth: false,
                },
            }, ],
        });
    </script>
    <script>
        $('#service-slider').slick({
            dots: false,
            arrows: true,
            infinite: true,
            speed: 600,
            slidesToShow: 1,
            centerMode: true,
            centerPadding: true,
            variableWidth: true,
            autoplay: true,
            autoplaySpeed: 2600,
            prevArrow: "<div class='icon-button slick-prev'><span class='material-icons'>chevron_left</span></div>",
            nextArrow: "<div class='icon-button slick-next'><span class='material-icons'>chevron_right</span></div>",

            responsive: [{
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    variableWidth: false,
                },
            }, ],
        });

        //   document.querySelector('#get-picks').addEventListener('click', function() {
        //     alert('' + listPicker.getPicks());
        // });
    </script>


</body>

</html>
