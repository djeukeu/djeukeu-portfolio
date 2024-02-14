<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="art-section-title">
                <div class="art-title-frame">
                    <h4>Subscription</h4>
                </div>
            </div>

            <!-- contact form -->
            <div class="art-a art-card">
                <p class="mb-15">Subscribe to receive my latest post and updates</p>
                <form id="form" class="art-contact-form" action="{{ route('home.subscribe') }}" method="POST">
                    @csrf
                    <!-- form field -->
                    <div class="art-form-field">
                        <input id="name" name="name" class="art-input" type="text"
                            placeholder="First name"required>
                        <label for="name"><i class="fas fa-user"></i></label>
                        @error('name')
                            <p class="art-form-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- form field -->
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
                    @if (session()->has('success'))
                        <div class="art-form-success mb-15">Please check your inbox to confirm your
                            email! <i class="fas fa-check"></i>
                        </div>
                    @endif
                    <div class="art-form-success mb-15" style="display: none;">Please check your inbox to confirm your
                        email! <i class="fas fa-check"></i>
                    </div>
                    <div class="art-submit-frame">
                        <button class="art-btn art-btn-md art-submit" type="submit"><span>Subscribe <div
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
