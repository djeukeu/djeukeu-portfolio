@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Genius Home</h4>
                    </div>
                    <div class="art-right-frame">
                        <div class="art-project-category">Education App</div>
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
                                href="{{ asset('img/projects/genius-home/genius-home-1.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/genius-home/genius-home-1.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>
                        <!-- single slide -->

                        <!-- single slide -->
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup
                                href="{{ asset('img/projects/genius-home/genius-home-2.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/genius-home/genius-home-2.png') }}" alt="item">
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
                    <div class="mb-15">GENIUS HOME is the place that aims to bring out the genius in everyone. Their
                        approach is based on a simple concept, ''practice makes perfect'', they are a non-profit
                        organisation and make revision for students easy, interesting, accessible and affordable for all.
                    </div>
                    <div class="mb-15">When I started at Orbite Holding, I was put in charge of the Genius Home project.
                        When I took over the project, none of the requirements of the project were properly defined (to say
                        nothing of not being defined at all). After many discussions and meetings with the team, the
                        requirements were defined and proper documentation and reporting was provided.
                        Together with the team we decided that the next step was to design and implement the application. As
                        a developer, I provided recommendations for the UI design, turning the design into working
                        applications and automated deployments.</div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="art-a art-card">
                    <div class="art-table p-15-15 text-center">
                        <h5 class="mb-15">Download Genius Home</h5>
                        <div class="mb-15">Become a genius through repetitive learning.</div>
                        <a href="https://play.google.com/store/apps/details?id=org.genius.home" target="_blank" data-no-swup
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
                    <a href="/projects/cook-and-share"
                        class="art-link art-color-link art-w-chevron art-left-link"><span>Previous
                            project</span></a>
                    <div class="art-pagination-center art-m-hidden">
                        <a class="art-link" href="#" style="pointer-events: none;">Genius Home</a>
                    </div>
                    <a href="/projects/ekoh-web" class="art-link art-color-link art-w-chevron"><span>Next
                            project</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
