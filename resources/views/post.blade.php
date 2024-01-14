@extends('layouts.app')

@php
    $posts = [1 => ['title' => 'Post title 1', 'short_description' => '2 sentence short description', 'thumbnail' => 'client/img/blog/1.jpg'], 2 => ['title' => 'Post title 2', 'short_description' => '2 sentence short description', 'thumbnail' => 'client/img/blog/1.jpg'], 3 => ['title' => 'Post title 3', 'short_description' => '2 sentence short description', 'thumbnail' => 'client/img/blog/1.jpg'], 4 => ['title' => 'Post title 4', 'short_description' => '2 sentence short description', 'thumbnail' => 'client/img/blog/1.jpg'], 5 => ['title' => 'Post title 5', 'short_description' => '2 sentence short description', 'thumbnail' => 'client/img/blog/1.jpg']];
@endphp

@section('content')
    <div class="container-fluid">
        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Publication title</h4>
                    </div>
                    <div class="art-right-frame">
                        <div class="art-project-category">Ui Design, Graphic</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="art-a art-project-cover">
                    <a data-fancybox="gallery" href="{{ asset('client/img/blog/2.jpg') }}"
                        class="art-portfolio-item-frame art-horizontal">
                        <img src="{{ asset('client/img/blog/2.jpg') }}" alt="item">
                        <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                    </a>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="art-a art-card">
                    <p>Consectetur adipisicing elit. Magni debitis nemo, minus aut tempora
                        impedit quis quam omnis, odit saepe ipsa sunt magnam culpa quisquam iusto consectetur
                        necessitatibus. Tenetur, eligendi!
                    </p>
                    <p>Est nesciunt dolorum asperiores sint mollitia quod, nostrum eos maxime illo eveniet ducimus labore
                        amet voluptatum laborum, ex ut similique omnis ipsum. Totam tempore praesentium assumenda ducimus
                        porro ullam quasi, expedita
                        sit esse alias quisquam! Asperiores at suscipit officiis deleniti soluta fugit quidem illo fuga,
                        adipisci maiores. Nesciunt dolor, minus ex tenetur necessitatibus et id minima, vitae sit a,
                        assumenda, iste suscipit facere.
                        Voluptatibus animi, laboriosam qui officiis voluptatum. Voluptates quibusdam numquam distinctio
                        fuga.</p>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="art-a art-card">
                    <div class="art-table p-15-15">
                        <ul>
                            <li>
                                <h6>Date:</h6><span>24.12.2019</span>
                            </li>
                            <li>
                                <h6>Category:</h6><span>Product design</span>
                            </li>
                            <li>
                                <h6>Tag:</h6><span>Artur Carter</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row p-30-0 mb-15">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Similar posts</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="swiper-container art-blog-slider" style="overflow: visible">
                    <div class="swiper-wrapper">
                        @foreach ($posts as $post)
                            <div class="swiper-slide">
                                <div class="art-a art-blog-card">
                                    <a href="{{ route('blog.post', ['id' => $post['title']]) }}" class="art-port-cover">
                                        <img src="{{ asset($post['thumbnail']) }}" alt="blog post">
                                    </a>
                                    <div class="art-post-description">
                                        <a href="{{ route('blog.post', ['id' => $post['title']]) }}">
                                            <h5 class="mb-15">{{ $post['title'] }}</h5>
                                        </a>
                                        <div class="mb-15">{{ $post['short_description'] }}
                                        </div>
                                        <a href="{{ route('blog.post', ['id' => $post['title']]) }}"
                                            class="art-link art-color-link art-w-chevron">Read more</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
                            <div class="art-slider-nav art-blog-swiper-prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="art-slider-nav art-blog-swiper-next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
