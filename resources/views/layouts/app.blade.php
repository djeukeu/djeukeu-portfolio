<!doctype html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
    <div class="art-app">
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
                <div class="art-menu-bar">
                    <div class="art-menu-bar-frame">
                        <div class="art-menu-bar-header">
                            <div class="art-menu-bar-btn">
                                <span></span>
                            </div>
                        </div>
                        <div class="art-current-page"></div>
                        <div class="art-scroll-frame">
                            <nav id="swupMenu">
                                <ul class="main-menu">
                                    <li class="menu-item {{ request()->is('/') ? 'current-menu-item' : null }}"><a
                                            href="{{ url('/') }}">Home</a></li>
                                    <li class="menu-item {{ request()->is('about') ? 'current-menu-item' : null }}"><a
                                            href="{{ url('about') }}">About Me</a></li>
                                    <li class="menu-item {{ request()->is('resume') ? 'current-menu-item' : null }}"><a
                                            href="{{ url('resume') }}">Resume</a></li>
                                    <li class="menu-item {{ request()->is('projects') ? 'current-menu-item' : null }}">
                                        <a href="{{ url('projects') }}">Projects</a>
                                    </li>
                                    {{-- <li class="menu-item""><a href="https://blog.djeukeu.com/" data-no-swup
                                            target="_blank">Blog</a></li> --}}
                                    <li class="menu-item {{ request()->is('contact') ? 'current-menu-item' : null }}"><a
                                            href="{{ url('contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
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
