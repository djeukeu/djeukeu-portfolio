<div class="container-fluid">

    <div class="row p-30-0">

        <div class="col-lg-12">
            <div class="art-section-title">
                <div class="art-title-frame">
                    <h4>Get in touch</h4>
                </div>
            </div>

            <div class="art-a art-card">
                <form id="form" class="art-contact-form" action="{{ route('contact.send') }}" method="POST">
                    @csrf

                    <!-- form field -->
                    <div class="art-form-field">
                        <input id="name" name="name" class="art-input" type="text" placeholder="Name"
                            required>
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
                        <textarea id="message" name="message" class="art-input" placeholder="Message" required></textarea>
                        <label for="message"><i class="far fa-envelope"></i></label>
                        @error('message')
                            <p class="art-form-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- form field -->

                    @if (session()->has('success'))
                        <div class="art-form-success">Message sent <i class="fas fa-check"></i></div>
                    @endif
                    <div class="art-submit-frame">
                        <button class="art-btn art-btn-md art-submit" type="submit"><span>Send
                                message</span></button>
                        <div class="art-success">Success <i class="fas fa-check"></i></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
