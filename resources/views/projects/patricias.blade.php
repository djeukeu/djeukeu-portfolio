@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row p-30-0">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Patricia's Skin, Scents Secrets</h4>
                    </div>
                    <div class="art-right-frame">
                        <div class="art-project-category">Mobile</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="art-a art-project-cover">
                    <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/patricias/patricias-1.png') }}"
                        class="art-portfolio-item-frame art-horizontal">
                        <img src="{{ asset('img/projects/patricias/patricias-1.png') }}" alt="item">
                        <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                    </a>
                </div>

            </div>
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Project details</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="art-a art-card art-fluid-card">
                    <h5 class="mb-15">Description</h5>
                    <div class="mb-15">Patricia's Skin, Scents Secrets is an mCommerce app designed to facilitate online
                        shopping, financial transactions and commercial activities through smartphones and tablets. The app
                        provides users with a seamless and personalized shopping experience by allowing them to browse
                        products, compare prices, and make secure payments from the convenience of their mobile devices. The
                        current eCommerce site, patriciaskinscentsecrets.com, will be translated into mCommerce to reach
                        mobile-centric users and provide a personalized shopping experience.
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="art-a art-card art-fluid-card">
                    <h5 class="mb-15">Problem Statement</h5>
                    <div class="mb-15">While eCommerce has its strengths, it also has some disadvantages compared to
                        mCommerce, including:</div>
                    <ul class="features">
                        <li><span style="font-weight: bold">Limited accessibility and comfort: </span>Users need a desktop
                            or
                            laptop, which limits shopping to certain locations (home or office) </li>
                        <li><span style="font-weight: bold">Lack of personalisation and user engagement: </span>Typically
                            offers a more static experience with fewer personalisation features. </li>
                        <li><span style="font-weight: bold">Lower conversion rates: </span>Often has lower conversion rates
                            as users may browse on desktop but buy on mobile. </li>
                        <li><span style="font-weight: bold">No offline access or functionality: </span>an active Internet
                            connection is required to access content and complete transactions. </li>
                        <li><span style="font-weight: bold">Weaker social integration and sharing: </span>Social sharing is
                            less seamless, often requiring copy and paste of links </li>
                        <li><span style="font-weight: bold">Reduced user retention and loyalty: </span>users are less likely
                            to return unless they bookmark the site or receive email alerts. </li>
                        <li><span style="font-weight: bold">Slower page loading speeds on mobile devices: </span>Websites
                            that are not optimised for mobile can result in slower load times and a poor mobile user
                            experience. </li>
                        <li><span style="font-weight: bold">Lower engagement and interaction rates: </span>Users may spend
                            less time on websites due to distractions or a less interactive interface. </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="art-a art-card art-fluid-card">
                    <h5 class="mb-15">Challenges</h5>
                    <div class="mb-15">Although an eCommerce has its limitations compared to an mCommerce, building an
                        mCommerce application has its drawbacks.Some of which are: </div>
                    <ul class="features">
                        <li><span style="font-weight: bold">Platform-specific development: </span>Separate versions for iOS
                            and Android, increasing development time.</li>
                        <li><span style="font-weight: bold">Compliance costs: </span>Complying with data protection
                            regulations (e.g. GDPR, CCPA) involves complex regulatory requirements and additional costs.
                        </li>
                        <li><span style="font-weight: bold">Device fragmentation and compatibility issues: </span>Mobile
                            devices vary widely in screen sizes, operating systems and hardware capabilities.</li>
                        <li><span style="font-weight: bold">App store approval: </span>Strict guidelines and lengthy
                            approval
                            processes in app stores (Google Play, Apple App Store).</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="art-a art-card art-fluid-card">
                    <h5 class="mb-15">Objective & Steps taken</h5>
                    <div class="mb-15">While eCommerce has its strengths, it also has some disadvantages compared to
                        mCommerce, including:</div>
                    <ul class="features">
                        <li><span style="font-weight: bold">Platform selection: </span>React Native is used as
                            cross-platform
                            development tools to build the application.</li>
                        <li><span style="font-weight: bold">Technology Stack: </span>WooCommerce is used as the backend
                            system. By integrating the frontend with the existing WooCommerce API of the website.</li>
                        <li><span style="font-weight: bold">Easy Navigation: </span>Ensure easy access to product
                            categories,
                            search bar and shopping cart.</li>
                        <li><span style="font-weight: bold">User-friendly onboarding: </span>Social logins (Google,
                            Facebook,
                            Apple) for quick registration.</li>
                        <li><span style="font-weight: bold">Seamless checkout process: </span>One click checkout options for
                            returning users.</li>
                        <li><span style="font-weight: bold">Order Tracking and Notifications: </span>Save products for
                            future
                            purchases and easy access to shopping carts.</li>

                    </ul>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="art-a art-card art-fluid-card">
                    <h5 class="mb-15">Features</h5>
                    <ul class="features">
                        <li><span style="font-weight: bold">User-friendly interface: </span>Intuitive design and easy
                            navigation for a smooth shopping experience.</li>
                        <li><span style="font-weight: bold">Product Catalogue: </span>Organised categories and detailed
                            product descriptions with high quality images and videos.</li>
                        <li><span style="font-weight: bold">Secure payment gateway: </span>Multiple payment options including
                            credit/debit cards, digital wallets and UPI integration.</li>
                        <li><span style="font-weight: bold">Order Tracking: </span>Real-time order status updates and
                            delivery tracking.</li>
                        <li><span style="font-weight: bold">Push Notifications: </span>Personalised alerts for new arrivals,
                            discounts and abandoned carts.</li>
                        <li><span style="font-weight: bold">Wishlist and cart management: </span>Easily add to wish lists and
                            seamlessly manage shopping carts for quick purchases.</li>
                        <li><span style="font-weight: bold">Multi-language and multi-currency support: </span>Global
                            accessibility with localised shopping experiences.</li>
                        <li><span style="font-weight: bold">Social media integration: </span>Easy sharing and login options
                            via social platforms.</li>

                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="row mb-15">
            <div class="col-lg-12">
                <div class="art-section-title">
                    <div class="art-title-frame">
                        <h4>Result</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="swiper-container art-works-slider" style="overflow: visible">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/dschat/dschat-1.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/dschat/dschat-1.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/dschat/dschat-2.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/dschat/dschat-2.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/dschat/dschat-3.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/dschat/dschat-3.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-fancybox="gallery" data-no-swup href="{{ asset('img/projects/dschat/dschat-4.png') }}"
                                class="art-a art-portfolio-item-frame art-horizontal">
                                <img src="{{ asset('img/projects/dschat/dschat-4.png') }}" alt="item">
                                <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                        </div>

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
                            <div class="art-slider-nav art-works-swiper-prev"><i class="fas fa-chevron-left"></i>
                            </div>
                            <div class="art-slider-nav art-works-swiper-next"><i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row mb-15 ">
            <div class="col-lg-12">
                <div class="art-a art-banner" style="background-image: url({{ asset('img/bg.png') }})">
                    <div class="art-banner-overlay">
                        <div class="art-banner-title text-center">
                            <h1 class="mb-15">Ready to download Patricia's Skin, Scents Secrets</h1>
                            <div class="art-lg-text art-code mb-25">Android and iOS available</div>
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-12 mb-2">
                                    <a href="#" target="_blank"
                                        data-no-swup class="art-btn art-btn-md"><span class="custom-icon-container"> <i
                                                class="fab fa-google-play custom-icon"></i>Play Store</span></a>
                                </div>
                                <div class="col-lg-4 col-md-12 ">
                                    <a href="#" target="_blank"
                                        data-no-swup class="art-btn art-btn-md"><span class="custom-icon-container"> <i
                                                class="fab fa-app-store-ios custom-icon"></i>App Store</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="art-a art-pagination">
                    <a href="/projects/mobile-ci-cd"
                        class="art-link art-color-link art-w-chevron art-left-link"><span>Previous
                            project</span></a>
                    <div class="art-pagination-center art-m-hidden">
                        <a class="art-link" href="#" style="pointer-events: none;">DsChat</a>
                    </div>
                    <a href="/projects/web-server-ci-cd-using-aws-cloudformation-and-github-actions"
                        class="art-link art-color-link art-w-chevron"><span>Next
                            project</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
