@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Mobile App CI / CD using Fastlane and Github Actions</h4>
                    </div>
                    <div class="art-right-frame">
                        <div class="art-project-category">DevOps</div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row mb-15">
                    <div class="col-lg-12">
                        <div class="swiper-container art-works-slider" style="overflow: visible">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a data-fancybox="gallery" data-no-swup
                                        href="{{ asset('img/projects/mobile_ci_cd/mobile-ci-cd-1.gif') }}"
                                        class="art-a art-portfolio-item-frame art-horizontal">
                                        <img src="{{ asset('img/projects/mobile_ci_cd/mobile-ci-cd-1.gif') }}"
                                            alt="item">
                                        <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a data-fancybox="gallery" data-no-swup
                                        href="{{ asset('img/projects/mobile_ci_cd/mobile-ci-cd-2.gif') }}"
                                        class="art-a art-portfolio-item-frame art-horizontal">
                                        <img src="{{ asset('img/projects/mobile_ci_cd/mobile-ci-cd-2.gif') }}"
                                            alt="item">
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
                    <div class="mb-15">With mobile app development, deployment is slower and tied to app store approvals,
                        and even when new features are released, there's no guarantee that users will update to the latest
                        version. Deploying apps has its own challenges, so it's best to use tools that are tailored to your
                        specific problem.</div>
                    <div class="mb-15">The CI workflow analyses the code to check for errors, bugs and style issues. Once
                        the code has passed the CI workflow, the working code is merged into the 'develop' branch where the
                        CD workflow is triggered. The CD workflow builds the beta applications and distributes them to the
                        appropriate platform for testing.</div>

                </div>

            </div>
            <div class="col-lg-4">
                <div class="art-a art-card art-fluid-card">
                    <h5 class="mb-15">Tech Stack</h5>
                    <div class="skills">
                        <span class="skill-item">React-Native</span>
                        <span class="skill-item">Fastlane</span>
                        <span class="skill-item">Github Actions</span>
                        <span class="skill-item">Firebase</span>
                        <span class="skill-item">Testflight</span>
                        <span class="skill-item">App Store</span>
                        <span class="skill-item">Google Play Store</span>
                        <span class="skill-item">Sentry</span>
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
                            <h1 class="mb-15">Checkout my CI / CD workflows?</h1>
                            <div class="art-lg-text art-code mb-25">Available on Github</div>
                            <a href="https://github.com/djeukeu/agogochop-mobile/tree/master/.github/workflows"
                                target="_blank" data-no-swup class="art-btn art-btn-md"><span
                                    class="custom-icon-container">View</span></a>
                        </div>
                    </div>
                </div>
                <div class="art-a art-pagination">
                    <a href="/projects/camxi" class="art-link art-color-link art-w-chevron art-left-link"><span>Previous
                            project</span></a>
                    <div class="art-pagination-center art-m-hidden">
                        <a class="art-link" href="#" style="pointer-events: none;">Mobile App CI / CD</a>
                    </div>
                    <a href="/projects/ekoh-online" class="art-link art-color-link art-w-chevron"><span>Next
                            project</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
