<!doctype html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
    <div class="art-app art-app-onepage">
        <div class="art-mobile-top-bar"></div>
        <div class="art-app-wrapper">
            <div class="art-app-container">
                @include('layouts.info')
                <div class="art-content">
                    <div class="art-curtain"></div>
                    <div class="art-top-bg" style="background-image: url({{ asset('img/bg.png') }})">
                        <div class="art-top-bg-overlay"></div>
                    </div>
                    <div class="transition-fade" id="swup">
                        <div id="scrollbar" class="art-scroll-frame">
                            @yield('content')
                            @include('layouts.footer')
                        </div>
                    </div>
                </div>
                <div id="swupMenu"></div>
            </div>
        </div>

        <!-- preloader -->
        <div class="art-preloader">
            <div class="art-preloader-content">
                <h4>{{ env('OWNER') }}</h4>
                <div id="preloader" class="art-preloader-load"></div>
            </div>
        </div>
        <!-- preloader -->

    </div>
    @include('layouts.script')
</body>

</html>
