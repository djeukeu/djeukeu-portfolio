<!doctype html>
<html lang="zxx">

<head>
    @include('layouts.head')
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
            <div class="art-preloader-content">
                <h4>{{ env('OWNER') }}</h4>
                <div id="preloader" class="art-preloader-load"></div>
            </div>
        </div>
        <!-- preloader -->

    </div>
    <div id="swupMenu"></div>

    @include('layouts.script')

</body>

</html>
