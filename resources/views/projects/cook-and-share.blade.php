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
                <div class="swiper-container art-works-slider" style="overflow: visible">
                    <!-- slider wrapper -->
                    <div class="swiper-wrapper">
                        <!-- single slide -->
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup
                                href="{{ asset('img/projects/cook-and-share/cook-and-share-3.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/cook-and-share/cook-and-share-3.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>
                        <!-- single slide -->
                        <!-- single slide -->
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup
                                href="{{ asset('img/projects/cook-and-share/cook-and-share-1.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/cook-and-share/cook-and-share-1.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>
                        <!-- single slide -->
                        <!-- single slide -->
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup
                                href="{{ asset('img/projects/cook-and-share/cook-and-share-2.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/cook-and-share/cook-and-share-2.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>
                        <!-- single slide -->


                    </div>
                    <!-- slider wrapper -->
                </div>
            </div>
            <div class="col-lg-12">
                <div class="art-slider-navigation">
                    <div class="art-sn-left">
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="art-sn-right">
                        <div class="art-slider-nav-frame">
                            <div class="art-slider-nav art-works-swiper-prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="art-slider-nav art-works-swiper-next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row p-30-0">
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
                        home-cooked food. Thousands of people cook for their families every day and the platform allows them
                        to offer their food to a wider audience, in compliance with legislation and food safety rules. On
                        the other hand, the homemade food offered on the Cook and Share platform is a good alternative
                        source of meals for people who eat out or regularly buy takeaway food.</div>
                    <div class="mb-15">Cook & Share was a very interesting project to work on as it was a straightforward
                        project with few complexities. As the frontend developer, I implemented all the designs that were
                        sent to me. And it was developed with the aim of supporting both Android and iOS platforms. I also
                        designed the CI/CD pipeline to make it easy to deploy to Playstore and App Store.
                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="art-a art-card">
                    <div class="art-table p-15-15 text-center">
                        <h5 class="mb-15">Download Cook & Share</h5>
                        <div class="mb-15">Cook & Share lets you share the different menus of the day with others.</div>
                        <a href="https://play.google.com/store/apps/details?id=social.cookshare" target="_blank"
                            data-no-swup class="art-btn art-btn-md"><span>Android</span></a>
                        <div class="mb-15"></div>
                        <a href="https://apps.apple.com/tn/app/cook-share/id6467504890" target="_blank" data-no-swup
                            class="art-btn art-btn-md"><span>iOS</span></a>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="container-fluid">
        <div class="row mb-15 ">
            <div class="col-lg-12">
                <div class="art-a art-pagination">
                    <a href="/projects/tchangtchangmoney"
                        class="art-link art-color-link art-w-chevron art-left-link"><span>Previous
                            project</span></a>
                    <div class="art-pagination-center art-m-hidden">
                        <a class="art-link" href="#" style="pointer-events: none;">Cook & Share</a>
                    </div>
                    <a href="/projects/ekoh-web" class="art-link art-color-link art-w-chevron"><span>Next
                            project</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
