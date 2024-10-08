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
            <div class="col-lg-8">
                <div class="art-a art-card art-fluid-card">
                    <h5 class="mb-15">Description</h5>
                    <div class="mb-15">Do you know how hard it is to get a ride from home or your current location in less
                        developed countries like Cameroon?</div>
                    <div class="mb-15">CAMXI (Cameroon Taxi) is a local ride app that aims to facilitate the requesting of
                        taxis in Cameroon. It also gives drivers the opportunity to get more clients by easily connecting
                        them with passengers. CAMXI will provide the listed features.
                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="art-a art-card art-fluid-card">
                    <h5 class="mb-15">Features</h5>
                    <ul class="features">
                        <li>Easy ride and drive</li>
                        <li>Schedule trips</li>
                        <li>Cashless & In-App payment</li>
                        <li>Share Ride</li>
                        <li>Pay4Me</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Result</h4>
                    </div>
                </div>
            </div>
            <div class="art-grid art-grid-2-col art-gallery">
                <div class="art-grid-item webTemplates">
                    <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/camxi/camxi-2.png') }}"
                        class="art-a art-portfolio-item-frame art-horizontal">
                        <img src="{{ asset('img/projects/camxi/camxi-2.png') }}" alt="item">
                        <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                    </a>
                </div>
                <div class="art-grid-item logos">
                    <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/camxi/camxi-3.png') }}"
                        class="art-a art-portfolio-item-frame art-vertical">
                        <img src="{{ asset('img/projects/camxi/camxi-3.png') }}" alt="item">
                        <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                    </a>
                </div>
                <div class="art-grid-item drawings">
                    <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/camxi/camxi-4.png') }}"
                        class="art-a art-portfolio-item-frame art-horizontal">
                        <img src="{{ asset('img/projects/camxi/camxi-4.png') }}" alt="item">
                        <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                    </a>
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
