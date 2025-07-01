@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>PokéFan</h4>
                    </div>
                    <div class="art-right-frame">
                        <div class="art-project-category">Mobile</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="art-a art-project-cover">
                    <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/pokefan/pokefan-1.png') }}"
                        class="art-portfolio-item-frame art-horizontal">
                        <img src="{{ asset('img/projects/pokefan/pokefan-1.png') }}" alt="item">
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
                    <div class="mb-15">This project demonstrates the deployment of a React Native app using Fastlane and
                        Github Actions. Fastlane is used to automate the build and code signing, and Github Actions is the
                        CI / CD platform used to automate the building, testing and deployment of the pipelines.</div>
                    <div class="mb-15">Mobile App CI/CD (Continuous Integration and Continuous Delivery) is the practice of
                        automating the building, testing and deployment of mobile applications. In Continuous
                        Integration, code is gradually pushed into a feature branch where it is reviewed, tested and
                        confirmed
                        that there are no bugs or quality concerns.This makes it easier to identify and fix bugs before it
                        is deployed.After the CI checks are all passed,Continuous Delivery takes over by further testing the
                        code before it is deployed to production.In the Continuous Delivery process, the Android and iOS app
                        is built,versioned,code signed and deployed to the app store awaiting approval.</div>
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
                            <h1 class="mb-15">Ready to download PokéFan</h1>
                            <div class="art-lg-text art-code mb-25">Android and iOS available</div>
                            <div class="row justify-content-center">
                                <div class="col-lg-3 col-md-12 mb-2">
                                    <a href="https://appdistribution.firebase.dev/i/a08cf378acb6b89f" target="_blank"
                                        data-no-swup class="art-btn art-btn-md"><span> <i
                                                class="fab fa-android custom-icon"></i>Android</span></a>
                                </div>
                                <div class="col-lg-3 col-md-12 mb-2">
                                    <a href="https://testflight.apple.com/join/FFbymyQx" target="_blank"
                                        data-no-swup class="art-btn art-btn-md"><span> <i
                                                class="fab fa-apple custom-icon"></i>iOS</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="art-a art-pagination">
                    <a href="/projects/web-ci-cd" class="art-link art-color-link art-w-chevron art-left-link"><span>Previous
                            project</span></a>
                    <div class="art-pagination-center art-m-hidden">
                        <a class="art-link" href="#" style="pointer-events: none;">PokéFan</a>
                    </div>
                    <a href="#" class="art-link art-color-link art-w-chevron art-link-disabled"><span>Next
                            project</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
