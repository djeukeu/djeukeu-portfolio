@extends('layouts.app')

@php
    $posts = [1 => ['title' => 'Post title 1', 'short_description' => '2 sentence short description', 'thumbnail' => 'img/blog/1.jpg'], 2 => ['title' => 'Post title 2', 'short_description' => '2 sentence short description', 'thumbnail' => 'img/blog/1.jpg'], 3 => ['title' => 'Post title 3', 'short_description' => '2 sentence short description', 'thumbnail' => 'img/blog/1.jpg'], 4 => ['title' => 'Post title 4', 'short_description' => '2 sentence short description', 'thumbnail' => 'img/blog/1.jpg'], 5 => ['title' => 'Post title 5', 'short_description' => '2 sentence short description', 'thumbnail' => 'img/blog/1.jpg']];
@endphp

@section('content')
    <div class="container-fluid">

        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Blog</h4>
                    </div>
                </div>
            </div>
            @foreach ($posts as $post)
                <div class="col-lg-6">
                    <div class="art-a art-blog-card">
                        <a href="{{ route('blog.post', ['id' => $post['title']]) }}" class="art-port-cover">
                            <img src="{{ asset($post['thumbnail']) }}" alt="blog post">
                        </a>
                        <div class="art-post-description">
                            <a href="{{ route('blog.post', ['id' => $post['title']]) }}">
                                <h5 class="mb-15">{{ $post['title'] }}</h5>
                            </a>
                            <div class="mb-15">{{ $post['short_description'] }}</div>
                            <a href="{{ route('blog.post', ['id' => $post['title']]) }}"
                                class="art-link art-color-link art-w-chevron">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Pagination -->
    <div class="container-fluid">
        <div class="row mb-15">
            <div class="col-lg-12">
                <div class="art-a art-pagination">
                    <a href="#" class="art-link art-color-link art-w-chevron art-left-link"><span>Previous
                            page</span></a>
                    <div class="art-pagination-center art-m-hidden">
                        <a href="#"></a>
                        <a href="#">1</a>
                        <a class="art-active-pag" href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">...</a>
                    </div>
                    <a href="#" class="art-link art-color-link art-w-chevron"><span>Next page</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Pagination -->
@endsection
