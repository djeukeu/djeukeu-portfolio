@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="row p-30-0">
            <div class="col-lg-12">

                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Contact information</h4>
                    </div>
                </div>

            </div>

            <!-- contact card -->
            <div class="col-lg-12">
                <div class="art-a art-card">
                    <div class="art-table p-15-15">
                        <div class="contact-info">
                            <h6>Email: <span><a href="mailto:christian@djeukeu.com"
                                        data-no-swup>christian@djeukeu.com</a></span></h6>
                            <h6>Tel: <span><a href="tel:+4407455363235" data-no-swup>+44 (0)74 55 363 235</a></span></h6>
                            <h6>WhatsApp: <span><a href="https://wa.me/+4407455363235" target="_blank" data-no-swup>+44
                                        (0)74 55 363 235</a></span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact card -->

            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Get in touch</h4>
                    </div>
                </div>

                <!-- contact form -->
                <div class="art-a art-card">
                    <form id="form" class="art-contact-form" action="{{ route('contact.send') }}" method="POST">
                        <input type="hidden" id="token" value="{{ @csrf_token() }}">
                        <!-- form field -->
                        <div class="art-form-field">
                            <input id="name" name="name" class="art-input" type="text"
                                placeholder="Name"required>
                            <label for="name"><i class="fas fa-user"></i></label>
                            @error('name')
                                <p class="art-form-error">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- form field -->

                        <!-- form field -->
                        <div class="art-form-field">
                            <input id="email" name="email" class="art-input" type="email" placeholder="Email"
                                required>
                            <label for="email"><i class="fas fa-at"></i></label>
                            @error('email')
                                <p class="art-form-error">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- form field -->

                        <!-- form field -->
                        <div class="art-form-field">
                            <textarea id="message" name="message" class="art-input" placeholder="Message"required></textarea>
                            <label for="message"><i class="far fa-envelope"></i></label>
                            @error('message')
                                <p class="art-form-error">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- form field end -->

                        <div class="art-form-success" style="display: none;">Message sent <i class="fas fa-check"></i>
                        </div>
                        <div class="art-submit-frame">
                            <button class="art-btn art-btn-md art-submit" type="submit"><span>Send message <div
                                        class="spinner-border" style="width: 1rem; height: 1rem; display: none;"
                                        role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div></span></button>
                        </div>
                    </form>

                </div>
                <!-- contact form -->

            </div>
        </div>

    </div>
@endsection
