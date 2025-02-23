@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Ekoh Online</h4>
                    </div>
                    <div class="art-right-frame">
                        <div class="art-project-category">Web</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="art-a art-project-cover">
                    <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/ekoh/ekoh-1.png') }}"
                        class="art-portfolio-item-frame art-horizontal">
                        <img src="{{ asset('img/projects/ekoh/ekoh-1.png') }}" alt="item">
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
                    <div class="mb-15">Ekoh Online is an African owned online music store that allows music artists from
                        all over the world to upload their singles and albums to share or sell.</div>
                    <div class="mb-15">Ekoh Online is not only a web-based project, it also has a mobile version called
                        Ekoh Mobile. When I joined the Ekoh team (at Arrah Solution) as a Software Developer Intern in June
                        2021, I learnt React and React-Native, which came in handy in my daily task of working on the Ekoh
                        project.Three months later, I continue as a Junior Software Developer, debugging the existing code
                        to improve the application's performance and user experience.
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="art-a art-card">
                    <h5 class="mb-15">Features</h5>
                    <ul class="features">
                        <li>Easy navigation</li>
                        <li>Simple local payment methods</li>
                        <li>Cross-platform compatibility</li>
                        <li>Live Streaming</li>
                        <li>Music Categorization</li>
                        <li>Offline music player</li>
                        <li>Subscriptions</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="art-a art-card art-fluid-card">
                    <h5 class="mb-15">Tech Stack</h5>
                    <div class="skills">
                        <span class="skill-item">React</span>
                        <span class="skill-item">Apollo Federation</span>
                        <span class="skill-item">Apollo Server</span>
                        <span class="skill-item">AWS</span>
                        <span class="skill-item">Docker</span>
                        <span class="skill-item">Kubernetes</span>
                        <span class="skill-item">Apache Kafka</span>
                        <span class="skill-item">React-Native</span>
                        <span class="skill-item">Firebase Push Notification</span>
                        <span class="skill-item">Sentry</span>
                        <span class="skill-item">Laravel</span>
                        <span class="skill-item">PostgreSQL</span>
                        <span class="skill-item">Mongodb</span>
                        <span class="skill-item">Fastlane</span>
                        <span class="skill-item">Github Actions</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Result</h4>
                    </div>
                </div>
            </div>
            <div class="art-grid art-grid-2-col art-gallery">
                <div class="art-grid-item webTemplates">
                    <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/ekoh/ekoh-3.png') }}"
                        class="art-a art-portfolio-item-frame art-horizontal">
                        <img src="{{ asset('img/projects/ekoh/ekoh-3.png') }}" alt="item">
                        <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                    </a>
                </div>
                <div class="art-grid-item logos">
                    <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/ekoh/ekoh-2.png') }}"
                        class="art-a art-portfolio-item-frame art-vertical">
                        <img src="{{ asset('img/projects/ekoh/ekoh-2.png') }}" alt="item">
                        <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                    </a>
                </div>
                <div class="art-grid-item drawings">
                    <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/ekoh/ekoh-4.png') }}"
                        class="art-a art-portfolio-item-frame art-horizontal">
                        <img src="{{ asset('img/projects/ekoh/ekoh-4.png') }}" alt="item">
                        <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                    </a>
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
                            <h1 class="mb-15">Ready to Ekoh?</h1>
                            <div class="art-lg-text art-code mb-25">View Web App</div>
                            <a href="https://www.ekoh.online/" target="_blank" data-no-swup class="art-btn art-btn-md"><span
                                    class="custom-icon-container">View</span></a>
                        </div>
                    </div>
                </div>
                <div class="art-a art-pagination">
                    <a href="/projects/react-native-ci-cd"
                        class="art-link art-color-link art-w-chevron art-left-link"><span>Previous
                            project</span></a>
                    <div class="art-pagination-center art-m-hidden">
                        <a class="art-link" href="#" style="pointer-events: none;">Ekoh Online</a>
                    </div>
                    <a href="/projects/dschat" class="art-link art-color-link art-w-chevron"><span>Next
                            project</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
