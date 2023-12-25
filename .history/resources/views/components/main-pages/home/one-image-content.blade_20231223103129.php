@props(['sectionImage' => '', 'sectionTitle' => '', 'sectionText' => '', 'sectionBtnText' => '', 'sectionBtnUrl' => '', 'sectionId' => ''])

<!-- About Section -->
<section
    id="{{ $sectionId }}"
    class="about-section-two style-two js-tab-menu-content"
>
    <div class="auto-container">
        <div class="row grid-base align-items-center">
            <!-- Image Column -->
            <div class="image-column -no-margin col-xl-5 col-lg-6 col-md-12 col-sm-12 wow fadeInRight">
                <figure class="image-box"><img
                        src="{{ $sectionImage }}"
                        alt=""
                    ></figure>
            </div>

            <!-- Content Column -->
            <div class="content-column col-xl-4 offset-xl-2 col-lg-5 offset-lg-1 col-md-12 col-sm-12">
                <div class="wow fadeInLeft">
                    <div class="sec-title">
                        <h2 class="text-dark-4 fw-700">Find Your<br> Match</h2>
                        <div class="text mt-30">An efficient resume should promote your abilities and include tangible
                            accomplishments that are relevant to the job you apply for. You should also prepare a cover
                            letter that is concise and elaborates on how you can put your skills to use in the
                            organization.</div>
                    </div>
                    <a
                        href="#"
                        class="theme-btn -dark-blue-light"
                    >Discover More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->
