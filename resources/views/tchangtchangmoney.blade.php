@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Tchang Tchang Money</h4>
                    </div>
                    <div class="art-right-frame">
                        <div class="art-project-category">Finance App</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="swiper-container art-works-slider" style="overflow: visible">
                    <!-- slider wrapper -->
                    <div class="swiper-wrapper">
                        <!-- single slide -->
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/ttm/ttm-6.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/ttm/ttm-6.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>
                        <!-- single slide -->

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/ttm/ttm-2.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/ttm/ttm-2.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>
                        <!-- single slide -->

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/ttm/ttm-3.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/ttm/ttm-3.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>
                        <!-- single slide -->

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/ttm/ttm-4.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/ttm/ttm-4.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>
                        <!-- single slide -->

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/ttm/ttm-1.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/ttm/ttm-1.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>
                        <!-- single slide -->

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/ttm/ttm-5.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/ttm/ttm-5.png') }}" alt="item">
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
                    <div class="mb-15">Tchang Tchang money (TTM) product is an innovative, efficient, secure and very
                        user-friendly electronic payment solution. It is the combination of an electronic wallet and a
                        personalised card, combining 4 services in 1: deposit, withdrawal, scan and pay, and money transfer
                        on the TTM network.</div>

                    <div class="mb-15">The TTM project was very complex to manage as the requirements were not properly
                        defined prior to implementation. So, as a team member and software developer with analytical skills,
                        I proposed to extend the deadline for delivering the first version of the application.After
                        successfully identifying the requirements, it came to our notice that two applications were required
                        to achieve our objectives.The two applications were designed, implemented and released into
                        production.And I was responsible for converting the design into application.
                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="art-a art-card">
                    <div class="art-table p-15-15 text-center">
                        <h5 class="mb-15">Download Tchang Tchang Money</h5>
                        <div class="mb-15">The Tchang Tchang Money application consists of two applications, the client
                            application and the merchant application.</div>
                        <a href="https://play.google.com/store/apps/details?id=com.tchangtchangmoney" target="_blank"
                            data-no-swup class="art-btn art-btn-md"><span>Client App</span></a>
                        <div class="mb-15"></div>
                        <a href="https://play.google.com/store/apps/details?id=com.tchangtchangmoneymerchant"
                            target="_blank" data-no-swup class="art-btn art-btn-md"><span>Merchant App</span></a>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="container-fluid">
        <div class="row mb-15 ">
            <div class="col-lg-12">
                <div class="art-a art-pagination">
                    <a href="/projects/flexipay" class="art-link art-color-link art-w-chevron art-left-link"><span>Previous
                            project</span></a>
                    <div class="art-pagination-center art-m-hidden">
                        <a class="art-link" href="#" style="pointer-events: none;">Tchang Tchang Money</a>
                    </div>
                    <a href="/projects/cook-and-share" class="art-link art-color-link art-w-chevron"><span>Next
                            project</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
