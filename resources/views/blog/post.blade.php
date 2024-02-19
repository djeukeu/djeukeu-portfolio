@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>{{ $post['title'] }}</h4>
                    </div>
                    <div class="art-right-frame">
                        <div class="art-project-category">{{ $post->category['name'] }}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="art-a art-project-cover">
                    <a data-fancybox="gallery" href="{{ asset('img/blog/1.jpg') }}"
                        class="art-portfolio-item-frame art-horizontal">
                        <img src="{{ asset('img/blog/1.jpg') }}" alt="item">
                        <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                    </a>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="art-a art-card">
                    {{ $post['content'] }}
                    <p class="published">Published on: <span>{{ date('d-m-Y', strtotime($post['created_at'])) }}</span></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="art-a art-card">
                    <div class="art-table">
                        <h4>Tags</h4>
                        <div class="tags">
                            @foreach ($post->post_tags as $post_tag)
                                <span class="tag-item">{{ $post_tag->tag['name'] }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="art-a art-pagination">
                    @if (!$previous_post)
                        <a href="#"
                            class="art-link art-color-link art-w-chevron art-left-link art-link-disabled"><span>Previous
                                post</span></a>
                    @else
                        <a href="{{ route('blog.post', ['id' => $previous_post['id']]) }}"
                            class="art-link art-color-link art-w-chevron art-left-link"><span>Previous
                                post</span></a>
                    @endif

                    <div class="art-pagination-center art-m-hidden">
                        <a class="art-link" href="/blog">All publications</a>
                    </div>

                    @if (!$next_post)
                        <a href="#" class="art-link art-color-link art-w-chevronart-link-disabled"><span>Next
                                post</span></a>
                    @else
                        <a href="{{ route('blog.post', ['id' => $next_post['id']]) }}"
                            class="art-link art-color-link art-w-chevron"><span>Next
                                post</span></a>
                    @endif

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
                        @foreach ($posts as $p)
                            <div class="swiper-slide">
                                <div class="art-a art-blog-card">
                                    <a href="{{ route('blog.post', ['id' => $p['id']]) }}" class="art-port-cover">
                                        <img src="{{ asset('img/blog/1.jpg') }}" alt="blog post">
                                    </a>
                                    <div class="art-post-description">
                                        <a href="{{ route('blog.post', ['id' => $p['id']]) }}">
                                            <h5 class="mb-15 truncate-title">{{ $p['title'] }}</h5>
                                        </a>
                                        <div class="mb-15 truncate-text">{{ $p['summary'] }}
                                        </div>
                                        <a href="{{ route('blog.post', ['id' => $p['id']]) }}"
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
