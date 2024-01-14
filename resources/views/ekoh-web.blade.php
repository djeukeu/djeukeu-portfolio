@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Ekoh Web</h4>
                    </div>
                    <div class="art-right-frame">
                        <div class="art-project-category">Entertainment</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="swiper-container art-works-slider" style="overflow: visible">
                    <!-- slider wrapper -->
                    <div class="swiper-wrapper">
                        <!-- single slide -->
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup href="{{ asset('client/img/projects/ekoh/arrah-2.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('client/img/projects/ekoh/arrah-2.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>
                        <!-- single slide -->

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup href="{{ asset('client/img/projects/ekoh/arrah-5.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('client/img/projects/ekoh/arrah-5.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>
                        <!-- single slide -->

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup href="{{ asset('client/img/projects/ekoh/arrah-3.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('client/img/projects/ekoh/arrah-3.png') }}" alt="item">
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
                    <div class="mb-15">Ekoh Online is an African owned online music store that allows music artists from
                        all over the world to upload their singles and albums to share or sell. Their mission is to make
                        music more accessible to the African population.</div>
                    <div class="mb-15">Ekoh is the web version of the Ekoh project and during my time at Arrah Solution as
                        a junior developer, I worked on the web version where I was responsible for auditing the application
                        and improving performance using a tool called <a
                            href="https://developer.chrome.com/docs/lighthouse/overview" target="_blank"
                            data-no-swup>Lighthouse</a>. Sometimes I was assigned to a backend
                        service, as it was a decoupled backend, and that was when I started learning about <a
                            href="https://www.apollographql.com/docs/federation/" target="_blank" data-no-swup>Apollo
                            Federation</a>
                        and the microservice architecture approach.</div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="art-a art-card">
                    <div class="art-table p-15-15 text-center">
                        <h5 class="mb-15">Visit the Ekoh Web</h5>
                        <div class="mb-15">Ekoh, meaning music in an African dialect, is an African owned online music
                            store.</div>
                        <a href="https://ekoh.online" target="_blank" data-no-swup class="art-btn art-btn-md"><span>Ekoh
                                OnLine Web</span></a>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div class="container-fluid">
        <div class="row mb-15 ">
            <div class="col-lg-12">
                <div class="art-a art-pagination">
                    <a href="/projects/genius-home"
                        class="art-link art-color-link art-w-chevron art-left-link"><span>Previous
                            project</span></a>
                    <div class="art-pagination-center art-m-hidden">
                        <a class="art-link" href="#" style="pointer-events: none;">Ekoh Web</a>
                    </div>
                    <a href="/projects/marketti-shops" class="art-link art-color-link art-w-chevron"><span>Next
                            project</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
