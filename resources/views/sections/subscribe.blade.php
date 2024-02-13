<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="art-section-title">
                <div class="art-title-frame">
                    <h4>Newsletter Subscription</h4>
                </div>
            </div>

            <!-- contact form -->
            <div class="art-a art-card">
                <p class="mb-15">Subscribe to get latest news and update</p>
                <form id="form" class="art-contact-form">
                    <input type="hidden" id="token" value="{{ @csrf_token() }}">

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

                    <div class="art-form-success" style="display: none;">Subscribe<i class="fas fa-check"></i>
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
