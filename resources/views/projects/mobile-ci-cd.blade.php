@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Mobile App CI / CD pipeline using Fastlane and Github Actions</h4>
                    </div>
                    <div class="art-right-frame">
                        <div class="art-project-category">DevOps</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="art-a art-project-cover">
                    <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/react-native-ci-cd/react-native-ci-cd-1.png') }}"
                        class="art-portfolio-item-frame art-horizontal">
                        <img src="{{ asset('img/projects/react-native-ci-cd/react-native-ci-cd-1.png') }}" alt="item">
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
                </div>
            </div>
            <div class="col-lg-6">
                <div class="art-a art-card art-fluid-card">
                    <h5 class="mb-15">Challenges</h5>
                    <div class="mb-15">Software development teams achieve faster iteration, better quality assurance and
                        easier deployment with CI/CD, but mobile CI/CD has its own unique challenges, some of which are
                    </div>
                    <ul class="features">
                        <li>Platform specific setups</li>
                        <li>Code signing</li>
                        <li>Handling environment variables securely</li>
                        <li>Running automated tests</li>
                        <li>Deployment to app stores</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="art-a art-card art-fluid-card">
                    <h5 class="mb-15">Steps Taken</h5>
                    <div class="mb-15">To successfully set up a CI/CD pipeline for a React Native project, you should do
                        the following:
                    </div>
                    <ul class="features">
                        <li>Selecting the branching strategy</li>
                        <li>Selecting the version strategy</li>
                        <li>Write fastlane configuration specific to each platform</li>
                        <li>Code signing the Android and iOS app </li>
                    </ul>
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
                    <a href="/projects/camxi" class="art-link art-color-link art-w-chevron art-left-link"><span>Previous
                            project</span></a>
                    <div class="art-pagination-center art-m-hidden">
                        <a class="art-link" href="#" style="pointer-events: none;">React Native App CI / CD</a>
                    </div>
                    <a href="/projects/ekoh-online" class="art-link art-color-link art-w-chevron"><span>Next
                            project</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
