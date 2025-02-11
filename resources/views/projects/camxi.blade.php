@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>CAMXI</h4>
                    </div>
                    <div class="art-right-frame">
                        <div class="art-project-category">UI Design</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="art-a art-project-cover">
                    <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/camxi/camxi-1.png') }}"
                        class="art-portfolio-item-frame art-horizontal">
                        <img src="{{ asset('img/projects/camxi/camxi-1.png') }}" alt="item">
                        <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                    </a>
                </div>

            </div>
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Project details</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="art-a art-card art-fluid-card">
                    <h5 class="mb-15">Description</h5>
                    <div class="mb-15">CAMXI is a local ride-hailing service and online taxi booking app that provides
                        transport to and from schools, hospitals and other destinations at affordable prices. It offers its
                        services through a smartphone app that allows users to enter their destinations and select the type
                        of taxi they want based on their preferences. Due to the low availability of taxis in certain areas,
                        the high risk of theft at night and irregular pricing, CAMXI offers a strategic and creative way to
                        manage daily transport services by connecting available drivers with passengers.
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="art-a art-card art-fluid-card">
                    <h5 class="mb-15">Challenges</h5>
                    <div class="mb-15">In developed countries like Cameroon people faced several transportation issues,
                        including:
                    </div>
                    <ul class="features">
                        <li><span style="font-weight: bold">Difficulty Finding a Ride:</span>Taxis were not always readily
                            available, especially in suburban or less populated areas.</li>
                        <li><span style="font-weight: bold">Long Wait Times:</span>During peak hours or bad weather, hailing
                            a cab could take a long time, and there was no way to know when a taxi would arrive.</li>
                        <li><span style="font-weight: bold">Uncertain Pricing:</span>Taxi fares were often unpredictable,
                            with additional charges for factors like time of day, traffic, and distance. Passengers had no
                            upfront knowledge of the total cost.</li>
                        <li><span style="font-weight: bold">Payment Issues:</span>Many taxis only accepted cash, which was
                            inconvenient for passengers who didn't have the exact fare or preferred to use credit/debit
                            cards or other local payment methods.</li>
                        <li><span style="font-weight: bold">Limited Availability at Night:</span>Finding a taxi late at
                            night, especially after leaving a party or an event, was often difficult and unsafe in some
                            areas.</li>
                        <li><span style="font-weight: bold">Poor Service & Condition of Vehicles:</span>Some taxis were
                            poorly maintained, and customer service varied widely. There was no easy way to provide feedback
                            or ensure quality service.</li>
                        <li><span style="font-weight: bold">Safety Concerns:</span>Without driver background checks or ride
                            tracking, passengers had little assurance about their safety</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="art-a art-card art-fluid-card">
                    <h5 class="mb-15">Steps Taken</h5>
                    <div class="mb-15">The outline problems were solved methodically according to the following steps
                    </div>
                    <ul class="features">
                        <li>Define the app strategy</li>
                        <li>Create User Interface</li>
                        <li>Create a prototype</li>
                        <li>Create Mockups</li>
                    </ul>
                    <h5 class="mb-15">Features</h5>
                    <ul class="features">
                        <li>Taxi booking</li>
                        <li>Live GPS Tracking</li>
                        <li>Multiple payment methods</li>
                        <li>Safety features</li>
                        <li>Ride History</li>
                        <li>Favorite location</li>
                        <li>Multiple stops</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mb-15">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Result</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="swiper-container art-works-slider" style="overflow: visible">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/camxi/camxi-2.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/camxi/camxi-2.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/camxi/camxi-3.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/camxi/camxi-3.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/camxi/camxi-4.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/camxi/camxi-4.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-12">
                <div class="art-slider-navigation">
                    <div class="art-sn-left">
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="art-sn-right">
                        <div class="art-slider-nav-frame">
                            <div class="art-slider-nav art-works-swiper-prev"><i class="fas fa-chevron-left"></i>
                            </div>
                            <div class="art-slider-nav art-works-swiper-next"><i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row mb-15 ">
            <div class="col-lg-12">
                <div class="art-a art-banner" style="background-image: url({{ asset('img/bg.png') }})">
                    <div class="art-banner-overlay">
                        <div class="art-banner-title text-center">
                            <h1 class="mb-15">Ready to hire me?</h1>
                            <a href="/contact" class="art-btn art-btn-md"><span class="custom-icon-container">
                                    Contact Me</span></a>
                        </div>
                    </div>
                </div>
                <div class="art-a art-pagination">
                    <a href="/projects/cook-and-share"
                        class="art-link art-color-link art-w-chevron art-left-link"><span>Previous
                            project</span></a>
                    <div class="art-pagination-center art-m-hidden">
                        <a class="art-link" href="#" style="pointer-events: none;">CAMXI</a>
                    </div>
                    <a href="/projects/mobile-app-ci-cd-using-fastlane-and-github-actions"
                        class="art-link art-color-link art-w-chevron"><span>Next
                            project</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
