@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row p-60-0 p-lg-30-0 p-md-15-0">
            <div class="col-lg-12">
                <div class="art-a art-banner" style="background-image: url({{ asset('img/bg.png') }})">
                    <div class="art-banner-back"></div>
                    <div class="art-banner-dec"></div>
                    <div class="art-banner-overlay">
                        <div class="art-banner-title">
                            <h1 class="mb-25">About Me</h1>
                            <div class="art-lg-text art-code mb-10">&lt;<i>code</i>&gt;I build amazing
                                websites.&lt;/<i>code</i>&gt;</div>
                            <div class="art-lg-text art-code mb-10">&lt;<i>code</i>&gt;I build iOS and Android
                                applications.&lt;/<i>code</i>&gt;</div>
                            <div class="art-lg-text art-code mb-10">&lt;<i>code</i>&gt;I design beautiful
                                UIs.&lt;/<i>code</i>&gt;</div>
                            <div class="art-lg-text art-code mb-10">&lt;<i>code</i>&gt;I automate my
                                projects.&lt;/<i>code</i>&gt;
                            </div>
                        </div>
                        <img src="{{ asset('img/face-2.png') }}" class="art-banner-photo" alt="Your Name">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row p-30-0">
            <div class="col-lg-12">

                <div class="art-a art-card">
                    <p class="art-text art-white">Hello,</p>
                    <p class="art-text art-white">I am a Cameroonian software developer currently based in the UK. During my
                        time at university, I was always curious to solve real life problems through programming. In June
                        2021, I started an internship at Arrah Solution, where I was introduced to mobile and web
                        application development, which was the beginning of my journey in the tech industry. At Arrah
                        Solution, I quickly became interested in cloud computing technologies such as AWS. So, in my spare
                        time, I decided to learn more by attending online courses on AWS and Docker & Kubernetes.
                    </p>
                    <p class="art-text art-white">As a developer, I like to learn new technologies, regardless of the area
                        of expertise, be it mobile development, front-end development, back-end development, database
                        management, UI/UX design and cloud computing.In addition, I gain most of my experience and skills by
                        taking online courses, working on side projects, and even being a web developer instructor at
                        GetSmarter. I also like to try new tricks on my side projects.
                    </p>
                    <p class="art-text art-white">I have also faced many challenges during my career growth. Firstly, there
                        were environmental challenges such as poor lighting and unstable internet connection. Secondly, I
                        had no one to mentor or even guide me, but at least I have friends and colleagues with whom we share
                        ideas and learn from each other. I also had the internet to help me in my search.
                    </p>
                    <p class="art-text art-white">Accelerating to today, I have 2+ years of experience in defining
                        requirements, designing, implementing and deploying applications using various technologies.My
                        aim is to fine tune my skills and build amazing and high quality applications.
                    </p>
                </div>
            </div>

        </div>
    </div>
@endsection
