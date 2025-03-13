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
                    <a data-fancybox="gallery" data-no-swup
                        href="{{ asset('img/projects/mobile-ci-cd/mobile-ci-cd-1.png') }}"
                        class="art-portfolio-item-frame art-horizontal">
                        <img src="{{ asset('img/projects/mobile-ci-cd/mobile-ci-cd-1.png') }}" alt="item">
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
                        Integration, code is gradually pushed into a feature branch where it is reviewed, tested and confirmed
                        that there are no bugs or quality concerns.This makes it easier to identify and fix bugs before it
                        is deployed.After the CI checks are all passed,Continuous Delivery takes over by further testing the
                        code before it is deployed to production.In the Continuous Delivery process, the Android and iOS app
                        is built,versioned,code signed and deployed to the app store awaiting approval.</div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="art-a art-card art-fluid-card">
                    <h5 class="mb-15">Challenges</h5>
                    <div class="mb-15">Achieving faster iteration, better quality assurance and easier deployment is done
                        thanks to CD/CD, but mobile CI/CD has its own unique challenges, some of which are:
                    </div>
                    <ul class="features">
                        <li>Setting up the CI/CD pipeline</li>
                        <li>Platform specific setups</li>
                        <li>Dependency Management</li>
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
                        <li><span style="font-weight: bold">Selecting the CI/CD platform: </span>There are several CI/CD
                            platforms available, for the purposes of this project Github Actions and Fastlane will be used.
                        </li>
                        <li><span style="font-weight: bold">Selecting the branching strategy: </span>This project has two
                            separate environments for its application, the staging environment and the production
                            environment, and the best branching strategy that fits our scenario is the git flow.</li>
                        <li><span style="font-weight: bold">Selecting the version strategy: </span>Because this is a mobile
                            application, the semantic versioning strategy is used, where each patch is incremented as bugs
                            are fixed, minor features are merged, and major app releases are made when old versions become
                            obsolete.</li>
                        <li><span style="font-weight: bold">SafeCode signing the Android and iOS app: </span>Each application
                            should be signed according to its platform-specific requirements prior to deployment.</li>
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
                            <h1 class="mb-15">Want to see how my CI/CD workflows look?</h1>
                            <div class="art-lg-text art-code mb-25">Available on Github</div>
                            <a href="https://github.com/djeukeu/patricias-mobile/tree/develop/.github/workflows"
                                data-no-swup target="_blank" class="art-btn art-btn-md"><span class="custom-icon-container">
                                    View</span></a>
                        </div>
                    </div>
                </div>
                <div class="art-a art-pagination">
                    <a href="/projects/camxi" class="art-link art-color-link art-w-chevron art-left-link"><span>Previous
                            project</span></a>
                    <div class="art-pagination-center art-m-hidden">
                        <a class="art-link" href="#" style="pointer-events: none;">Mobile CI / CD</a>
                    </div>
                    <a href="/projects/patricias" class="art-link art-color-link art-w-chevron"><span>Next
                            project</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
