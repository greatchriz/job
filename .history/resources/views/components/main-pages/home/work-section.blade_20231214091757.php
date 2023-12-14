<!-- Work Section -->
<section class="layout-pt-60 layout-pb-60">
    <div class="auto-container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="sec-title text-center">
                    <h2><b>What we can do for you</b></h2>
                    <div class="text">With Polticventure as your guide, you can:
                    </div>
                </div>
            </div>
        </div>

        <div class="row grid-base wow fadeInUp">

            @php
                $abilities = [
                    [
                        "icon-wrap" => "blue",
                        "icon" => "case",
                        "title" => "Dive into a treasure trove of opportunities",
                        "content" => "Explore a diverse landscape of open positions across countless industries and locations. Whether you/'re a seasoned professional seeking new horizons or a passionate newcomer eager to make your mark, we have the perfect platform for your aspirations to take flight."
                    ],

                    [
                        "icon-wrap" => "red",
                        "icon" => "contact",
                        "title" => "Navigate the Visa & Residence Permit Maze",
                        "content" => "Let our experienced team demystify the complexities of Dutch visa and residence permit procedures. We'll be your constant partner, offering expert guidance and support every step of the way, ensuring your path to professional fulfillment is paved with clarity and confidence."
                    ],

                    [
                        "icon-wrap" => "yellow",
                        "icon" => "doc",
                        "title" => "Embrace a Seamless Relocation Experience",
                        "content" => "Settling in a new country can be daunting, but with Polticventure, you're never alone. We offer practical assistance with everything from finding your ideal home and navigating transportation systems to accessing essential services and immersing yourself in the vibrant Dutch culture."
                    ],

                    [
                        "icon-wrap" => "blue",
                        "icon" => "contact",
                        "title" => "Simplify Your Arrival with Tailored Travel & Accommodation Solutions",
                        "content" => "Leave the logistics to us. We'll find the perfect flights, arrange seamless airport transfers, and help you secure the ideal temporary or permanent home, ensuring your arrival in the Netherlands is a smooth and stress-free experience."
                    ],

                    [
                        "icon-wrap" => "red",
                        "icon" => "case",
                        "title" => "Connect and Thrive in a Multilingual Environment",
                        "content" => "Communication is key, and at Polticventure, we speak your language. Our team offers multilingual support, ensuring you feel understood and empowered throughout your journey."
                    ],
                ];
            @endphp

            @foreach ($abilities as $ability)
                <!-- Work Block -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="work-block -type-2 mb-0">
                        <div class="inner-box">
                            <div class="icon-wrap -{{ $ability['icon-wrap'] }}">
                                <span class="icon icon-{{ $ability['icon'] }}"></span>
                            </div>
                            <h5>{{ $ability['title'] }}</h5>
                            <p>{{ $ability['content'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- Work Block -->
            {{-- <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="work-block -type-2 mb-0">
                    <div class="inner-box">
                        <div class="icon-wrap -blue">
                            <span class="icon icon-case"></span>
                        </div>
                        <h5>Dive into a treasure trove of opportunities</h5>
                        <p>Explore a diverse landscape of open positions across countless industries and locations. Whether you're a seasoned professional seeking new horizons or a passionate newcomer eager to make your mark, we have the perfect platform for your aspirations to take flight.
                        </p>
                    </div>
                </div>
            </div> --}}

            <!-- Work Block -->
            {{-- <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="work-block -type-2 mb-0">
                    <div class="inner-box">
                        <div class="icon-wrap -red">
                            <span class="icon icon-contact"></span>
                        </div>
                        <h5>Explore over thousands of resumes</h5>
                        <p>Achieve virtually any design and layout from within the one template.</p>
                    </div>
                </div>
            </div> --}}

            <!-- Work Block -->
            {{-- <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="work-block -type-2 mb-0">
                    <div class="inner-box">
                        <div class="icon-wrap -yellow">
                            <span class="icon icon-doc"></span>
                        </div>
                        <h5>Find the most suitable candidate</h5>
                        <p>Achieve virtually any design and layout from within the one template.</p>
                    </div>
                </div>
            </div> --}}

        </div>
    </div>
</section>
<!-- End Work Section -->
