@extends('layouts.app')

@section('content')
    @if (session()->has('success'))
        <div class="container-fluid">
            <div class="row p-30-0">
                <div class="col-lg-12">
                    <div class="art-a art-banner" style="background-image: url({{ asset('img/bg.png') }})">
                        <div class="art-banner-overlay">
                            <div class="art-banner-title text-center">
                                <h1 class="mb-15">You have been successfully unsubscribed.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="container-fluid art-form-success" style="display: none;">
        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-a art-banner" style="background-image: url({{ asset('img/bg.png') }})">
                    <div class="art-banner-overlay">
                        <div class="art-banner-title text-center">
                            <h1 class="mb-15">You have been successfully unsubscribed.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Unsubscribe</h4>
                    </div>
                </div>
                <div class="art-a art-card">
                    <p class="mb-15">If you are sure you want to unsubscribe from my newsletter, enter your subscription
                        email and unsubscribe.</p>
                    <form id="form" class="art-contact-form" action="{{ route('unsubscribe.send') }}" method="POST">
                        @csrf
                        <!-- form field -->
                        <div class="art-form-field">
                            <input id="email" name="email" class="art-input" type="email" placeholder="Your email"
                                required>
                            <label for="email"><i class="fas fa-at"></i></label>
                            @error('email')
                                <p class="art-form-error">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- form field -->
                        <div class="art-submit-frame">
                            <button class="art-btn art-btn-md art-submit" type="submit"><span>Unsubscribe <div
                                        class="spinner-border" style="width: 1rem; height: 1rem; display: none;"
                                        role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div></span></button>
                        </div>
                        @if (session()->has('error'))
                            <p class="art-form-error">Your email in not subscribe.</p>
                        @endif
                        <p class="art-form-error" style="display: none;">Your email in not subscribe.</p>
                    </form>

                </div>
            </div>
        </div>

    </div>
@endsection
