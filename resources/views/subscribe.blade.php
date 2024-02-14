@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="row p-30-0 mb-15">
            <div class="col-lg-12">
                <div class="art-a art-banner" style="background-image: url({{ asset('img/bg.png') }})">
                    <div class="art-banner-overlay">
                        <div class="art-banner-title text-center">
                            <h1 class="mb-15">You are now subscribed 🎉</h1>
                            <div class="art-lg-text art-code mb-25">If you can't wait until you get the next issue, you can
                                find the previous newsletters here!</div>
                            <a href="/blog" class="art-btn art-btn-md"><span>Newsletters</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
