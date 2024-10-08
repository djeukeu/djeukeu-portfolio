@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Microservice Orchestration with Kubernetes</h4>
                    </div>
                    <div class="art-right-frame">
                        <div class="art-project-category">DevOps</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="art-a art-project-cover">
                    <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/flexipay/flexipay-4.png') }}"
                        class="art-portfolio-item-frame art-horizontal">
                        <img src="{{ asset('img/projects/flexipay/flexipay-4.png') }}" alt="item">
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
                    <div class="mb-15">FlexiPay is a payment management application for cement worker. Its robustness and
                        ease of use allow cement companies to optimise their daily operations.</div>
                    <div class="mb-15">When I joined <span><a href="https://getsmarter-group.com/" class="art-link"
                                target="_blank" data-no-swup>Getsmarter</a></span>, this was the first project I started
                        working on. As
                        the frontend developer, I was responsible for converting the UIs (designed by
                        <a href="https://maisoft-group.com/" data-no-swup target="_blank" class="art-link">Maisoft
                            Group</a>) into a
                        mobile application and I worked closely with the backend developer to integrate the APIs.
                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="art-a art-card">
                    <h5 class="mb-15">Tech Stack</h5>
                    <div class="skills">
                        <span class="skill-item">React-Native</span>
                        <span class="skill-item">Laravel</span>
                        <span class="skill-item">MySQL</span>
                        <span class="skill-item">Stripe</span>
                        <span class="skill-item">Fastlane</span>
                        <span class="skill-item">Github Actions</span>
                    </div>
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
                            <a data-fancybox="gallery" data-no-swup
                                href="{{ asset('img/projects/flexipay/flexipay-1.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/flexipay/flexipay-1.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup
                                href="{{ asset('img/projects/flexipay/flexipay-2.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/flexipay/flexipay-2.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup
                                href="{{ asset('img/projects/flexipay/flexipay-3.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/flexipay/flexipay-3.png') }}" alt="item">
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
                            <h1 class="mb-15">Ready to download FlexiPay?</h1>
                            <div class="art-lg-text art-code mb-25">Available on playstore</div>
                            <a href="https://play.google.com/store/apps/details?id=com.flexipay" target="_blank"
                                data-no-swup class="art-btn art-btn-md"><span class="custom-icon-container"> <i
                                        class="fab fa-google-play custom-icon"></i>Download</span></a>
                        </div>
                    </div>
                </div>
                <div class="art-a art-pagination">
                    <a href="/projects/web-server-ci-cd-using-aws-cloudformation-and-github-actions"
                        class="art-link art-color-link art-w-chevron art-left-link"><span>Previous
                            project</span></a>
                    <div class="art-pagination-center art-m-hidden">
                        <a class="art-link" href="#" style="pointer-events: none;">Microservice Orchestration</a>
                    </div>
                    <a href="/projects/microservice-cloud-insfrastructure-deployment-with-terraform-and-circleci"
                        class="art-link art-color-link art-w-chevron"><span>Next
                            project</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
