<div class="art-info-bar">

    <div class="art-info-bar-frame">

        <div class="art-info-bar-header">
            <div class="art-info-bar-btn">
                <i class="fas fa-ellipsis-v"></i>
            </div>
        </div>

        <div class="art-header">
            <div class="art-avatar">
                <a data-fancybox="avatar" data-no-swup href="{{ asset('img/face-1.png') }}" class="art-avatar-curtain">
                    <img src="{{ asset('img/face-1.png') }}" alt="avatar">
                    <i class="fas fa-expand"></i>
                </a>
                <div class="art-lamp-light">
                    <div class="art-available-lamp"></div>
                </div>
            </div>
            <h5 class="art-name mb-10"><a href="/">{{ env('OWNER') }}</a></h5>
            <div class="art-sm-text">Software Developer <br>DevOps Engineer</div>
        </div>

        <div id="scrollbar2" class="art-scroll-frame">

            <div class="art-table p-15-15">
                <ul>
                    <li>
                        <h6>Residence:</h6><span>United Kingdom</span>
                    </li>
                    <li>
                        <h6>Age:</h6><span><?php $dob = '2000-01-12';
                        $year = date('Y') - date('Y', strtotime($dob));
                        echo $year;
                        ?></span>
                    </li>
                </ul>
            </div>

            <div class="art-ls-divider"></div>

            <!-- language skills-->
            <div class="art-lang-skills p-30-15">

                <!-- skill -->
                <div class="art-lang-skills-item">
                    <div id="circleprog1" class="art-cirkle-progress"></div>
                    <h6>English</h6>
                </div>
                <!-- skill -->

                <!-- skill -->
                <div class="art-lang-skills-item">
                    <div id="circleprog2" class="art-cirkle-progress"></div>
                    <h6>French</h6>
                </div>
                <!-- skill  -->

            </div>
            <!-- language skills -->

            <!-- divider -->
            <div class="art-ls-divider"></div>

            <!-- hobbies list -->
            <ul class="art-knowledge-list p-15-0">
                <li>Cooking</li>
                <li>Video games</li>
                <li>Chess</li>
                <li>Reading</li>
            </ul>
            <!-- hobbies list -->

            <!-- divider -->
            <div class="art-ls-divider"></div>

            <!-- download cv -->
            <div class="art-links-frame p-15-15">
                <a href="{{ asset('files/djeukeu_cv.pdf') }}" class="art-link" download data-no-swup>Download cv
                    <i class="fas fa-download"></i></a>
            </div>
            <!-- download cv -->

        </div>
        <!-- scroll frame end -->

        <!-- sidebar social -->
        <div class="art-ls-social">
            <a href="https://www.linkedin.com/in/djeukeu/" target="_blank" data-no-swup><i
                    class="fab fa-linkedin-in"></i></a>
            <a href="https://github.com/djeukeu" target="_blank" data-no-swup><i class="fab fa-github"></i></a>

        </div>
        <!-- sidebar social end -->

    </div>
</div>
