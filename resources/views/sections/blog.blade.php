@php
    $posts = [1 => ['title' => 'Post title 1', 'short_description' => '2 sentence short description', 'thumbnail' => 'img/blog/1.jpg'], 2 => ['title' => 'Post title 2', 'short_description' => '2 sentence short description', 'thumbnail' => 'img/blog/1.jpg'], 3 => ['title' => 'Post title 3', 'short_description' => '2 sentence short description', 'thumbnail' => 'img/blog/1.jpg'], 4 => ['title' => 'Post title 4', 'short_description' => '2 sentence short description', 'thumbnail' => 'img/blog/1.jpg'], 5 => ['title' => 'Post title 5', 'short_description' => '2 sentence short description', 'thumbnail' => 'img/blog/1.jpg']];
@endphp

<div class="container-fluid">

    <div class="row mb-15">

        <div class="col-lg-12">
            <div class="art-section-title">
                <div class="art-title-frame">
                    <h4>Newsletter</h4>
                </div>
                <div class="art-right-frame">
                    <a href="/blog" class="art-link art-color-link art-w-chevron">All publications</a>
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
                                    <div class="mb-15">{{ $post['short_description'] }}</div>
                                    <a href="{{ route('blog.post', ['id' => $post['title']]) }}"
                                        class="art-link art-color-link art-w-chevron">Read
                                        more</a>
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
