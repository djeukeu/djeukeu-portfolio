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
                {{ $posts->links('vendor.pagination.blog') }}
            </div>
        </div>
    </div>
    <!-- Pagination -->
@endsection
