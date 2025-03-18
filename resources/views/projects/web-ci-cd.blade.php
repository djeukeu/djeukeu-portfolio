@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Web Application CI/CD using AWS and Github Actions</h4>
                    </div>
                    <div class="art-right-frame">
                        <div class="art-project-category">DevOps</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="swiper-container art-works-slider" style="overflow: visible">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup
                                href="{{ asset('img/projects/web-ci-cd/web-ci-cd-1.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/web-ci-cd/web-ci-cd-1.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup
                                href="{{ asset('img/projects/web-ci-cd/web-ci-cd-2.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/web-ci-cd/web-ci-cd-2.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup
                                href="{{ asset('img/projects/web-ci-cd/web-ci-cd-3.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/web-ci-cd/web-ci-cd-3.png') }}" alt="item">
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
                    <div class="mb-15">This project demonstrates the CI/CD pipeline of a web application from the
                        provisioning of its resources to the deployment of the application. For this project, a random react
                        application template has been downloaded.</div>
                    <div class="mb-15">Nowadays, before deploying a web application to production, it needs to be tested,
                        so the project will demonstrate the pipeline in both a staging (testing) and production
                        environment.In the staging environment, the application is deployed to Amazon Elastic Compute Cloud
                        (EC2) and the necessary services are provisioned using AWS CloudFormation.When testing is complete
                        and features are validated, the application is then containerised and pushed to Amazon Elastic
                        Container Registry (ECR), where the container is pulled by Amazon Elastic Container Service (ECS)
                        for production.</div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="art-a art-card art-fluid-card">
                    <h5 class="mb-15">TOOLS USED</h5>
                    <ul class="features">
                        <li>Node.js</li>
                        <li>Reactjs</li>
                        <li>Github Actions</li>
                        <li>Docker</li>
                        <li>Amazon EC2</li>
                        <li>Amazon ECR</li>
                        <li>Amazon ECS</li>
                        <li>Amazon IAM</li>
                        <li>AWS CloudFormation</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="art-a art-card art-fluid-card">
                    <h5 class="mb-15">Challenges</h5>
                    <div class="mb-15">Before performing the CI/CD of an application, we need to understand its
                        nomenclature and challenges. Some common challenges include:
                    </div>
                    <ul class="features">
                        <li><span style="font-weight: bold">Environment Configuration:</span>Manage the difference between
                            development, staging and production environments</li>
                        <li><span style="font-weight: bold">Dependency Management:</span>Ensure all dependencies are
                            correctly versioned and manage potential conflicts between environments</li>
                        <li><span style="font-weight: bold">Security:</span>Securing sensitive data such as API keys,
                            passwords and certificates in the pipelines</li>
                        <li><span style="font-weight: bold">Deployment Strategy:</span>Choose between strategies such as
                            blue-green deployments and canary releases to ensure zero downtime during deployment</li>
                        <li><span style="font-weight: bold">Rollback Mechanism:</span>Design efficient rollback strategies
                            in the event that a deployment experiences errors or failures.</li>
                        <li><span style="font-weight: bold">Tool Integration:</span>Selecting and integrating the right
                            tools for version control, build automation, test frameworks and deployment platforms, and
                            managing compatibility issues between tools.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="art-a art-card art-fluid-card">
                    <h5 class="mb-15">Steps Taken</h5>
                    <div class="mb-15">Deployment of the web application takes place in two separate environments, each
                        with different steps:
                    </div>
                    <ul class="features">
                        <li><span style="font-weight: bold">Staging (test) environment:</span>The staging environment
                            uses few AWS services to minimise costs:
                            <ul class="features">
                                <li>The code will be pushed to github</li>
                                <li>Github Actions configure the provided AWS credentials</li>
                                <li>The cloud stack is deployed using the Cloudformation template.</li>
                                <li>The project dependencies are built</li>
                                <li>The project is build for deployment</li>
                                <li>Github Actions SSH to AWS EC2 created as part of the cloud stack</li>
                                <li>The built file are push to EC2</li>
                                <li>EC2 is configured and the application is made available to the public.</li>
                            </ul>
                        </li>
                        <li><span style="font-weight: bold">Production Environment:</span>Due to the nature of the
                            environment, the production stack is deployed in two separate templates: the first template
                            configures the network infrastructure and the repository required to store the Docker image, and
                            the second template provides the available services to deploy the application into production.
                        </li>
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
                            <h1 class="mb-15">Have a look at the whole project</h1>
                            <div class="art-lg-text art-code mb-25">Available on Github</div>
                            <a href="https://github.com/djeukeu/aws-web-app.git"
                                data-no-swup target="_blank" class="art-btn art-btn-md"><span class="custom-icon-container">
                                    View</span></a>
                        </div>
                    </div>
                </div>
                <div class="art-a art-pagination">
                    <a href="/projects/patricias" class="art-link art-color-link art-w-chevron art-left-link"><span>Previous
                            project</span></a>
                    <div class="art-pagination-center art-m-hidden">
                        <a class="art-link" href="#" style="pointer-events: none;">Web CI / CD</a>
                    </div>
                    <a href="#" class="art-link art-color-link art-w-chevron art-link-disabled"><span>Next
                            project</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
