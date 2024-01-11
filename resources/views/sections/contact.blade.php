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
        <div class="col-lg-6">
            <div class="art-a art-card">
                <div class="art-table p-15-15">
                    <ul>
                        <li>
                            <h6>Country:</h6><span>United Kingdom</span>
                        </li>
                        <li>
                            <h6>City:</h6><span>Leeds</span>
                        </li>

                        <li>
                            <h6>Streat:</h6><span>Neville walk</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- contact card -->
        <!-- contact card -->
        <div class="col-lg-6">
            <div class="art-a art-card">
                <div class="art-table p-15-15">
                    <ul>
                        <li>
                            <h6>Email:</h6><span><a href="mailto:christian@djeukeu.com"
                                    data-no-swup>christian@djeukeu.com</a></span>
                        </li>
                        <li>
                            <h6>Tel:</h6><span><a href="tel:+4407455363235" data-no-swup>+44 (074) 55 363 235</a></span>
                        </li>
                        <li>
                            <h6>Whatsapp:</h6><span><a href="https://wa.me/+4407455363235" target="_blank"
                                    data-no-swup>+44 (074) 55 363 235</a></span>
                        </li>
                    </ul>
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
                <form id="form" class="art-contact-form" action="{{ route('home.contact') }}" method="POST">
                    @csrf
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

                    <div class="art-submit-frame">
                        <button class="art-btn art-btn-md art-submit" type="submit"><span>Send message</span></button>
                        @if (session()->has('success'))
                            <div class="art-form-success ">Message sent <i class="fas fa-check"></i></div>
                        @endif
                    </div>
                </form>

            </div>
            <!-- contact form -->

        </div>
    </div>

</div>
