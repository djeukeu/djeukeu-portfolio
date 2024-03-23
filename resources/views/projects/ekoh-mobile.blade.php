@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Ekoh Mobile</h4>
                    </div>
                    <div class="art-right-frame">
                        <div class="art-project-category">Entertainment App</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="art-a art-project-cover">
                    <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/ekoh/arrah-1.png') }}"
                        class="art-portfolio-item-frame art-horizontal">
                        <img src="{{ asset('img/projects/ekoh/arrah-1.png') }}" alt="item">
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

            <div class="col-lg-8">
                <div class="art-a art-card art-fluid-card">
                    <h5 class="mb-15">Description</h5>
                    <div class="mb-15">Ekoh Online is an African owned online music store that allows music artists from
                        all over the world to upload their singles and albums to share or sell.</div>
                    <div class="mb-15">Ekoh Mobile is the mobile version of the Ekoh Online project. I joined the Ekoh
                        team (at Arrah Solution) as a Software Developer Intern in June 2021, where I learned React and
                        React-Native, which came in handy in my daily task.Three months later, I continue as a junior
                        software developer, debugging the existing code to improve the application's performance and user
                        experience.</div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="art-a art-card">
                    <h5 class="mb-15">Tech Stack</h5>
                    <div class="skills">
                        <span class="skill-item">React-Native</span>
                        <span class="skill-item">Apollo Federation</span>
                        <span class="skill-item">Node.js</span>
                        <span class="skill-item">Clojure</span>
                        <span class="skill-item">Python</span>
                        <span class="skill-item">Apache Kafka</span>
                        <span class="skill-item">Docker</span>
                        <span class="skill-item">AWS</span>
                        <span class="skill-item">PostgreSQL</span>
                        <span class="skill-item">TimescaleDB</span>
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
                    <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/ekoh/arrah-2.png') }}"
                        class="art-a art-portfolio-item-frame art-horizontal">
                        <img src="{{ asset('img/projects/ekoh/arrah-2.png') }}" alt="item">
                        <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                    </a>
                </div>
                <div class="art-grid-item logos">
                    <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/ekoh/arrah-4.png') }}"
                        class="art-a art-portfolio-item-frame art-vertical">
                        <img src="{{ asset('img/projects/ekoh/arrah-4.png') }}" alt="item">
                        <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                    </a>
                </div>
                <div class="art-grid-item drawings">
                    <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/ekoh/arrah-3.png') }}"
                        class="art-a art-portfolio-item-frame art-horizontal">
                        <img src="{{ asset('img/projects/ekoh/arrah-3.png') }}" alt="item">
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
                            <h1 class="mb-15">Ready to download EkohOnline?</h1>
                            <div class="art-lg-text art-code mb-25">Available on playstore</div>
                            <a href="https://play.google.com/store/apps/details?id=online.ekoh" target="_blank" data-no-swup
                                class="art-btn art-btn-md"><span class="custom-icon-container"> <i
                                        class="fab fa-google-play custom-icon"></i>Download</span></a>
                        </div>
                    </div>
                </div>
                <div class="art-a art-pagination">
                    <a href="#"
                        class="art-link art-color-link art-w-chevron art-left-link art-link-disabled"><span>Previous
                            project</span></a>
                    <div class="art-pagination-center art-m-hidden">
                        <a class="art-link" href="#" style="pointer-events: none;">Ekoh Mobile</a>
                    </div>
                    <a href="/projects/flexipay" class="art-link art-color-link art-w-chevron"><span>Next
                            project</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
