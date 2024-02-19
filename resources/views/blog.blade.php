@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Newsletter</h4>
                    </div>
                </div>
            </div>
            @foreach ($posts as $post)
                <div class="col-lg-6">
                    <div class="art-a art-blog-card">
                        <a href="{{ route('blog.post', ['id' => $post['id']]) }}" class="art-port-cover">
                            <img src="{{ asset('img/blog/1.jpg') }}" alt="blog post">
                        </a>
                        <div class="art-post-description">
                            <a href="{{ route('blog.post', ['id' => $post['id']]) }}">
                                <h5 class="mb-15 truncate-title">{{ $post['title'] }}</h5>
                            </a>
                            <div class="mb-15 truncate-text">{{ $post['summary'] }}</div>
                            <a href="{{ route('blog.post', ['id' => $post['id']]) }}"
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
