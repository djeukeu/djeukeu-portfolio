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
                            <div class="art-a art-blog-card ">
                                <a href="{{ route('blog.post', ['id' => $post['id']]) }}" class="art-port-cover ">
                                    <img src="{{ asset('img/blog/1.jpg') }}" alt="blog post">
                                </a>
                                <div class="art-post-description">
                                    <a href="{{ route('blog.post', ['id' => $post['id']]) }}">
                                        <h5 class="mb-15 truncate-title">{{ $post['title'] }}</h5>
                                    </a>
                                    <div class="mb-15 truncate-text">{{ $post['summary'] }}</div>
                                    <a href="{{ route('blog.post', ['id' => $post['id']]) }}"
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
