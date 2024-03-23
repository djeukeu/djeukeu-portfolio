@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Cook & Share</h4>
                    </div>
                    <div class="art-right-frame">
                        <div class="art-project-category">Social App</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="art-a art-project-cover">
                    <a data-fancybox="gallery" data-no-swup
                        href="{{ asset('img/projects/cook-and-share/cook-and-share-1.png') }}"
                        class="art-portfolio-item-frame art-horizontal">
                        <img src="{{ asset('img/projects/cook-and-share/cook-and-share-1.png') }}" alt="item">
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
                    <div class="mb-15">Cook and Share is an app that aims to provide a convenient way to buy and sell
                        home-cooked food. And the platform is a good alternative source of meals for people who eat out or
                        regularly buy takeaway food.</div>
                    <div class="mb-15">Cook & Share was a very interesting project to work on as it was a straightforward
                        project with few complexities. As the frontend developer, I implemented all the designs that were
                        sent to me. And it was developed with the aim of supporting both Android and iOS platforms. I also
                        designed the CI/CD pipeline to make it easy to deploy to Playstore and App Store.
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
                        <span class="skill-item">AWS</span>
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
                                href="{{ asset('img/projects/cook-and-share/cook-and-share-4.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/cook-and-share/cook-and-share-4.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup
                                href="{{ asset('img/projects/cook-and-share/cook-and-share-3.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/cook-and-share/cook-and-share-3.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup
                                href="{{ asset('img/projects/cook-and-share/cook-and-share-2.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/cook-and-share/cook-and-share-2.png') }}" alt="item">
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
                            <h1 class="mb-15">Ready to download cook&Share?</h1>
                            <div class="art-lg-text art-code mb-25">Available on play Store and App Store</div>
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-12 mb-2">
                                    <a href="https://play.google.com/store/apps/details?id=social.cookshare" target="_blank"
                                        data-no-swup class="art-btn art-btn-md"><span class="custom-icon-container"> <i
                                                class="fab fa-google-play custom-icon"></i>Play Store</span></a>
                                </div>
                                <div class="col-lg-4 col-md-12 ">
                                    <a href="https://apps.apple.com/tn/app/cook-share/id6467504890" target="_blank"
                                        data-no-swup class="art-btn art-btn-md"><span class="custom-icon-container"> <i
                                                class="fab fa-app-store-ios custom-icon"></i>App Store</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="art-a art-pagination">
                    <a href="/projects/tchangtchangmoney"
                        class="art-link art-color-link art-w-chevron art-left-link"><span>Previous
                            project</span></a>
                    <div class="art-pagination-center art-m-hidden">
                        <a class="art-link" href="#" style="pointer-events: none;">Cook & Share</a>
                    </div>
                    <a href="#" class="art-link art-color-link art-w-chevron art-link-disabled"><span>Next
                            project</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
