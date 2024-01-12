@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>FlexiPay</h4>
                    </div>
                    <div class="art-right-frame">
                        <div class="art-project-category">Tools & utilities</div>
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
                                href="{{ asset('img/projects/flexipay/flexipay-4.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/flexipay/flexipay-4.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>
                        <!-- single slide -->

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup
                                href="{{ asset('img/projects/flexipay/flexipay-1.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/flexipay/flexipay-1.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>
                        <!-- single slide -->

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup
                                href="{{ asset('img/projects/flexipay/flexipay-2.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/flexipay/flexipay-2.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>
                        <!-- single slide -->

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup
                                href="{{ asset('img/projects/flexipay/flexipay-3.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/flexipay/flexipay-3.png') }}" alt="item">
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
                    <div class="mb-15">FlexiPay is a payment management application owned by Flexicol, a cement
                        manufacturer based in Douala, Cameroon. Its robustness and ease of use allow cement companies to
                        optimise their daily operations.</div>
                    <div class="mb-15">When I joined <span><a href="https://getsmarter-group.com/" class="art-link"
                                target="_blank" data-no-swup>Getsmarter</a></span>, this was the first project I started
                        working on. As
                        the frontend developer, I was responsible for converting the UI design (designed by
                        <a href="https://maisoft-group.com/" data-no-swup target="_blank" class="art-link">Maisoft
                            Group</a>) into a
                        mobile application and I worked closely with the backend developer to integrate the APIs.
                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="art-a art-card">
                    <div class="art-table p-15-15 text-center">
                        <h5 class="mb-15">Download FlexiPay</h5>
                        <div class="mb-15">FlexiPay is a payment management app owned by Flexicol.</div>
                        <a href="https://play.google.com/store/apps/details?id=com.flexipay" target="_blank" data-no-swup
                            class="art-btn art-btn-md"><span>Download</span></a>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="container-fluid">
        <div class="row mb-15 ">
            <div class="col-lg-12">
                <div class="art-a art-pagination">
                    <a href="/project/ekoh-mobile"
                        class="art-link art-color-link art-w-chevron art-left-link"><span>Previous
                            project</span></a>
                    <div class="art-pagination-center art-m-hidden">
                        <a class="art-link" href="#" style="pointer-events: none;">FlexiPay</a>
                    </div>
                    <a href="/project/tchangtchangmoney" class="art-link art-color-link art-w-chevron"><span>Next
                            project</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
