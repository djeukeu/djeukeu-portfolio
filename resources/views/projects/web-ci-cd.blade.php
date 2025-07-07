@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Scalable Web CI/CD pipeline with AWS services and Github Actions</h4>
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
            <div class="col-lg-12">
                <div class="art-a art-card art-fluid-card">
                    <h5 class="mb-15">Description</h5>
                    <div class="mb-15">This project enables us to deploy a highly available, scalable and secure web
                        application on AWS. For this project, the deployment is divided into two environments: staging and
                        production.</div>
                    <div class="mb-15">
                        <span style="font-weight: bold">Staging Environment: </span>Before being deployed in production, the
                        web app is deployed in an EC2 instance launched in a public subnet. This instance is accessible via
                        SSH (port 22) and HTTP (port 80) for testing purposes.
                        <br />
                        <br />
                        <span style="font-weight: bold">Production Environment: </span>To make deployment in production
                        easier, AWS CloudFormation is used to provision the infrastructure and launch the application. The
                        process is divided into two nested stacks.The first stack "prod-stack-1" is responsible for
                        provisioning:
                        <ul>
                            <li>A VPC with 3 public subnets across 3 Availability Zones</li>
                            <li>An Internet Gateway with routing for outbound internet access</li>
                            <li>An ECS Cluster (Fargate-based) for container orchestration</li>
                            <li>An ECR Repository for storing Docker images</li>
                        </ul>Next Github Actions is handles for build, tagging and deployment of the application's container
                        image to AWS ECR. Then "prod-stack-2" is responsible for building a containerised web application
                        infrastructure using ECS Fargate, which is hosted on three public subnets and protected by an
                        Application Load Balancer with autoscalable services. ECR and IAM roles are used for pulling the
                        container image and logging.
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="art-a art-card art-fluid-card">
                    <h5 class="mb-15">Achievements</h5>

                    <ul class="features">
                        <li>Designed a complete cloud-native architecture using AWS best practices</li>
                        <li>Provisioned a production-grade environment with high availability across multiple AZs</li>
                        <li>Built modular CloudFormation stacks enabling repeatable and scalable deployments</li>
                        <li>Implemented secure communication using security groups and IAM role-based permissions</li>
                        <li>Containerized and deployed services using ECS Fargate and ECR</li>
                        <li>Automated service discovery and routing via ALB and health-checked Target Groups</li>
                        <li>Enabled rapid deployment of updates through pre-configured ECR image references</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="art-a art-card art-fluid-card">
                    <h5 class="mb-15">Tools Used</h5>
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
        </div>
    </div>


    <div class="container-fluid">
        <div class="row mb-15 ">
            <div class="col-lg-12">
                <div class="art-a art-banner" style="background-image: url({{ asset('img/bg.png') }})">
                    <div class="art-banner-overlay">
                        <div class="art-banner-title text-center">
                            <h3 class="mb-15">"Infrastructure as Code" Powers the Pipeline</h3>
                            <a href="https://github.com/djeukeu/aws-web-app.git" data-no-swup target="_blank"
                                class="art-btn art-btn-md"><span class="custom-icon-container">
                                    <i class="fab fa-github custom-icon"></i>Available on Github</span></a>
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
