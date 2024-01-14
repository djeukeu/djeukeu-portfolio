<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- color of address bar in mobile browser -->
    <meta name="theme-color" content="#2B2B35">
    <!-- favicon  -->
    <link rel="shortcut icon" href="{{ asset('img/thumbnail.png') }}" type="image/x-icon">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/plugins/bootstrap.min.css') }}">
    <!-- font awesome css -->
    <link rel="stylesheet" href="{{ asset('css/plugins/font-awesome.min.css') }}">
    <!-- swiper css -->
    <link rel="stylesheet" href="{{ asset('css/plugins/swiper.min.css') }}">
    <!-- fancybox css -->
    <link rel="stylesheet" href="{{ asset('css/plugins/fancybox.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ env('OWNER') }}</title>
</head>

<body>

    <div class="art-app art-app-onepage">

        <!-- mobile top bar -->
        <div class="art-mobile-top-bar"></div>

        <!-- app wrapper -->
        <div class="art-app-wrapper">

            <!-- app container end -->
            <div class="art-app-container">

                <!-- info-->
                @include('layouts.info')
                <!-- info-->

                <!-- content -->
                <div class="art-content">

                    <!-- curtain -->
                    <div class="art-curtain"></div>

                    <!-- top background -->
                    <div class="art-top-bg" style="background-image: url({{ asset('img/bg-2.png') }})">
                        <!-- overlay -->
                        <div class="art-top-bg-overlay"></div>
                        <!-- overlay end -->
                    </div>
                    <!-- top background end -->

                    <!-- swup container -->
                    <div class="transition-fade" id="swup">

                        <!-- scroll frame -->
                        <div id="scrollbar" class="art-scroll-frame">

                            @yield('content')

                            <!-- footer -->
                            @include('layouts.footer')
                            <!-- footer -->

                        </div>
                        <!-- scroll frame end -->

                    </div>
                    <!-- swup container end -->

                </div>
                <!-- content end -->

            </div>
            <!-- app container end -->

        </div>
        <!-- app wrapper end -->

        <!-- preloader -->
        <div class="art-preloader">
            <!-- preloader content -->
            <div class="art-preloader-content">
                <!-- title -->
                <h4>{{ env('OWNER') }}</h4>
                <!-- progressbar -->
                <div id="preloader" class="art-preloader-load"></div>
            </div>
            <!-- preloader content end -->
        </div>
        <!-- preloader -->

    </div>
    <div id="swupMenu"></div>

    <!-- jquery js -->
    <script src="{{ asset('js/plugins/jquery.min.js') }}"></script>
    <!-- anime js -->
    <script src="{{ asset('js/plugins/anime.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('js/plugins/swiper.min.js') }}"></script>
    <!-- progressbar js -->
    <script src="{{ asset('js/plugins/progressbar.min.js') }}"></script>
    <!-- smooth scrollbar js -->
    <script src="{{ asset('js/plugins/smooth-scrollbar.min.js') }}"></script>
    <!-- overscroll js -->
    <script src="{{ asset('js/plugins/overscroll.min.js') }}"></script>
    <!-- typing js -->
    <script src="{{ asset('js/plugins/typing.min.js') }}"></script>
    <!-- isotope js -->
    <script src="{{ asset('js/plugins/isotope.min.js') }}"></script>
    <!-- fancybox js -->
    <script src="{{ asset('js/plugins/fancybox.min.js') }}"></script>
    <!-- swup js -->
    <script src="{{ asset('js/plugins/swup.min.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
