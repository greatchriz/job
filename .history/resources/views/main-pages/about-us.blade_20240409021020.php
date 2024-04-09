@extends('normal-layout')
    @section('header')
        @include('normal-header')
    @endsection

    @section('page-title')
        @include('page-title', ['pageTitle' => 'About Us'])
    @endsection

    @section('content')
        <!-- About Section Three -->
        <section class="about-section-three">
            <div class="auto-container">
            <div class="images-box">
                <div class="row">
                <div class="column col-lg-3 col-md-6 col-sm-6">
                    <figure class="image"><img src="images/resource/about-img-1.jpg" alt=""></figure>
                </div>
                <div class="column col-lg-3 col-md-6 col-sm-6">
                    <figure class="image"><img src="images/resource/about-img-2.jpg" alt=""></figure>
                    <figure class="image"><img src="images/resource/about-img-3.jpg" alt=""></figure>
                </div>
                <div class="column col-lg-3 col-md-6 col-sm-6">
                    <figure class="image"><img src="images/resource/about-img-4.jpg" alt=""></figure>
                    <figure class="image"><img src="images/resource/about-img-5.jpg" alt=""></figure>
                </div>
                <div class="column col-lg-3 col-md-6 col-sm-6">
                    <figure class="image"><img src="images/resource/about-img-6.jpg" alt=""></figure>
                </div>
                </div>
            </div>

            <!-- Fun Fact Section -->
            <div class="fun-fact-section">
                <div class="row">
                <!--
                    1. Global Reach, Local Impact: With over 4 million daily active users, we connect a diverse pool of international talent from across the globe with Dutch companies seeking top performers.

                    2. A Treasure Trove of Opportunities: We boast over 12,000 open job positions across various industries, ensuring there's something for every skillset and career aspiration.

                    3. Efficiency at Your Fingertips: Our intuitive platform facilitates over 250,000 applications submitted per month, streamlining the job search process for both candidates and companies.

                    4. Bridging the Gap: We've helped over 10,000 international professionals secure their dream jobs in the Netherlands, turning career aspirations into reality.

                    5. Seamless Transitions: We've assisted over 5,000 individuals with their visa and residence permit applications, paving the way for a smooth relocation experience.

                    6. Beyond the Job: We're committed to holistic success. We've provided over 3,000 individuals with valuable resources and support on cultural integration, housing, and other essential aspects of settling in the Netherlands.

                    -->



                <x-main-pages.about.fun-fact number="4" title="4 million daily active users" rate="M" />

                <x-main-pages.about.fun-fact number="12" title="Over 12k open job positions" rate="k" />

                <x-main-pages.about.fun-fact number="250" title="over 250,000 applications submitted per month" rate="k" />

                <x-main-pages.about.fun-fact number="10" title="10,000 international professionals" rate="k" />

                <x-main-pages.about.fun-fact number="5" title="5,000 individuals with visa and residence permit applications" rate="k" />

                <x-main-pages.about.fun-fact number="3" title="3,000 individuals with valuable resources and support on cultural integration" rate="k" />



                </div>
            </div>
            <!-- Fun Fact Section -->

            <x-main-pages.about.about-section title="Weaving Dreams Across Borders" text1="Nexustravel wasn't born on a map, but in the hearts of passionate individuals who believed in the power of connecting talent with opportunity, regardless of borders. Our story began with a simple idea: to bridge the gap between ambitious individuals and thriving companies, wherever they may be." text2="From our humble beginnings, we've blossomed into a vibrant community, connecting over 4 million daily users across the globe with exciting opportunities in diverse industries. We've witnessed dreams take flight in bustling metropolises, idyllic coastal towns, and every corner of the world in between. Every successful job placement, every visa secured, every cultural bridge crossed - these are the milestones that mark our journey, a testament to the transformative power of global connection" text3="Today, Nexustravel stands not just as a platform, but as a symbol of possibility. We're a testament to the boundless potential that lies within each individual, waiting to be unleashed on a global stage. As we continue to weave our web of connections, we invite you to join us in our mission. Let's rewrite the narrative of careers, one international success story at a time"/>


            </div>
        </section>
        <!-- End About Section Three -->

        <!-- Work Section -->
        <section class="work-section style-two">
            <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Where Borders Blur and Dreams Take Flight?</h2>
                <div class="text">
                    Imagine a world where talent knows no bounds, where ambition transcends borders, and opportunities bloom like vibrant blossoms across every continent. This is the world Nexustravel invites you to explore – not just a job board, but a springboard to launch your international odyssey.
                </div>

                <div class="text">
                    We're not simply connecting you with jobs; we're weaving a tapestry of possibilities, each thread a chance to paint your own masterpiece on the global canvas. Whether you're a seasoned maestro seeking a new concerto or a budding virtuoso eager to debut on the world stage, Nexustravel orchestrates your symphony of success.
                </div>
            </div>

            <div class="row">




                @php
                    $workBlocks = [
                        [
                            "image" => "/images/resource/work-1.png",
                            "title" => "Your Global Stage",
                            "text" => "Imagine a platform teeming with a kaleidoscope of opportunities, where jobs from the bustling boulevards of Paris to the sun-kissed shores of Sydney dance across your screen. With a click, you can step into the heart of a bustling startup in Berlin, or join a pioneering research team in the Amazon rainforest. Our job board isn't just a list; it's a portal to a world where your skills are not confined by visa stamps or spoken tongues."
                        ],
                        [
                            "image" => "/images/resource/work-2.png",
                            "title" => "Beyond the Application Curtain",
                            "text" => "But Nexustravel isn't content simply opening doors. We're your backstage crew, ensuring your resume shines under the spotlight. Our intuitive interface guides you through the application process with the grace of a seasoned impresario. Upload your CV, let our resume polisher work its magic, and watch as your skills take center stage before the captivated audience of potential employers"
                        ],
                        [
                            "image" => "/images/resource/work-3.png",
                            "title" => "Waiting in the Wings",
                            "text" => "But the applause doesn't end with the application. We're your confidante, your translator, your cheerleader, and your guide throughout the entire process. From deciphering cryptic interview invitations to navigating the labyrinthine world of international bureaucracy, we hold your hand every step of the way. And when the curtains close, we're there to celebrate your success or offer a comforting shoulder and a wealth of advice for the next encore."
                        ],
                        [
                            "image" => "/images/resource/work-1.png",
                            "title" => "More Than a Job, a Bridge",
                            "text" => "Nexustravel knows that a dream job often comes with a symphony of logistical challenges. Fear not, intrepid traveler! We're your one-stop visa whisperer, your residence permit alchemist, and your flight-booking fairy godmother. We'll smooth the wrinkles out of immigration forms, conjure up the perfect apartment in your new city, and whisk you away on the wings of convenience to your new destination."
                        ],
                        [
                            "image" => "/images/resource/work-2.png",
                            "title" => "A World of Welcome",
                            "text" => "Landing in a new country can feel like stepping onto a stage with an unfamiliar script. But with Nexustravel, you'll never have to face the spotlight alone. Our network of local partners extends a warm hand, offering language courses, cultural insights, and a community of like-minded adventurers who've already mastered the art of navigating their own global journeys"
                        ],
                        [
                            "image" => "/images/resource/work-3.png",
                            "title" => "A Chorus of Success Stories",
                            "text" => "The Nexustravel stage isn't just a platform for individual achievements; it's a testament to the transformative power of global connections. We're proud to be the stage where Maria, a passionate coder from Mexico, landed her dream job at a Silicon Valley tech giant. We celebrate with Akash, a young engineer from India, who used our platform to secure a life-changing internship in Germany. These are just a few notes in the grand symphony of Nexustravel success stories, each one a testament to the power of ambition, opportunity, and a little bit of our magic."
                        ]
                    ]
                @endphp


                @foreach ($workBlocks as $workBlock)
                    <!-- Work Block -->
                    <div class="work-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                        <figure class="image"><img src="{{ $workBlock['image'] }}" alt=""></figure>
                        <h5>{{ $workBlock['title'] }}</h5>
                        <p style="height: 320px">{{ $workBlock['text'] }}</p>
                        </div>
                    </div>
                @endforeach


            </div>
            </div>
        </section>
        <!-- End Work Section -->

        <!-- Work Section -->
        <section class="work-section style-two">
            <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Why Register as a Candidate on Nexustravel?</h2>
                <div class="text">
                    Are you a driven professional seeking to launch your career in the vibrant Netherlands? Look no further than Nexustravel, your one-stop platform to connect with exciting opportunities and build a fulfilling future. Forget the limitations of traditional job boards – here, you'll discover a curated selection of positions across diverse industries and locations, perfectly aligned with your skills and aspirations.
                </div>
            </div>

                <ul class="list-style-four">
                    <li>Escape the Job Board Maze.</li>
                    <li>Go Beyond the Resume.</li>
                    <li>Network with Confidence.</li>
                    <li>Embrace the Dutch Advantage.</li>
                    <li>Build Your Future, Brick by Brick:.</li>
                    <li>Unwind the Visa & Relocation Complexities.</li>
                    <li>Unlock a World of Possibilities.</li>
                    <li>Join a Community of Global Go-Getters.</li>

                </ul>

            </div>
        </section>
        <!-- End Work Section -->


        <!-- Work Section -->
        <section class="work-section style-two">
            <div class="auto-container">
            <div class="sec-title text-center">
                <h2>How It Works?</h2>
                <div class="text">Ready to ditch the map and navigate your own global career adventure? <br>Buckle up, because Nexustravel's got your compass! <br> Here's how it works</div>
            </div>

            @php
                $works = [
                    [
                        "image" => "/images/resource/work-1.png",
                        "title" => "Step 1: Create Your Profile & Upload Your Resume",
                        "text" => "Become a global explorer! Sign up for free and build your profile. Showcase your skills and experiences with a stellar resume – we offer tips and even professional resume reviews to make it shine."
                    ],

                    [
                        "image" => "/images/resource/work-2.png",
                        "title" => "Step 2: Explore the Globe of Opportunities.",
                        "text" => "Let the world be your oyster! Search our vast job board across continents, filter by industry, location, and even company culture. Discover hidden gems and opportunities you never knew existed."
                    ],

                    [
                        "image" => "/images/resource/work-3.png",
                        "title" => "Step 3: Apply with Confidence",
                        "text" => "No more application anxiety! We've streamlined the process. Click, apply, and relax. We'll even translate your resume and cover letter if needed, ensuring your talent speaks volumes across borders."
                    ],

                    [
                        "image" => "/images/resource/work-4.png",
                        "title" => "Step 4: Get Ready to Shine",
                        "text" => "Interview prep, anyone? Our career coaches are your secret weapon. Mock interviews, personalized feedback, and expert tips will have you confidently conquering every conversation."
                    ],

                    [
                        "image" => "/images/resource/work-5.png",
                        "title" => "Step 5: Visa & Relocation Support",
                        "text" => "Let's navigate the paperwork jungle together! Our visa and relocation specialists will guide you through every step, from application forms to finding your dream apartment in your new city."
                    ],

                    [
                        "image" => "/images/resource/work-6.png",
                        "title" => "Step 6: Connect & Grow",
                        "text" => "Welcome to the global tribe! Network with fellow adventurers in our vibrant community. Share experiences, exchange insights, and build a support system that spans the globe."
                    ],

                    [
                        "image" => "/images/resource/work-7.png",
                        "title" => "Step 7: Climb Your Global Ladder",
                        "text" => "The journey doesn't stop here! Nexustravel stays by your side. Access exclusive career resources, skill-up with curated workshops, and connect with mentors who've already conquered their global goals."
                    ],

                ]
            @endphp

            <div class="row">
                <!-- Work Block -->
                @foreach ($works as $work)
                <div class="work-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <figure class="image"><img src="{{ $work['image'] }}" alt=""></figure>
                    <h5>{{ $work['title'] }}</h5>
                    <p>{{ $work['text'] }}</p>
                </div>
                </div>

                @endforeach

            </div>
            </div>
        </section>
        <!-- End Work Section -->

        <!-- Teams Section Two -->
        <section class="testimonial-section-two">
            <div class="container-fluid">
            {{-- <div class="testimonial-left"><img src="images/resource/testimonial-left.png" alt=""></div>
            <div class="testimonial-right"><img src="images/resource/testimonial-right.png" alt=""></div> --}}
            <!-- Sec Title -->
            <div class="sec-title text-center">
                <h2>The Nexustravel Dream Team: Your Global Compass
                <div class="text">At Nexustravel, we believe that building a world without professional borders requires more than just technology.<br> It takes a dedicated team of passionate individuals who share our vision of empowering talent around the globe. <br>Meet the dream team behind the platform</div>
            </div>

            <div class="carousel-outer">
                <!-- Testimonial Carousel -->
                <div class="testimonial-carousel owl-carousel owl-theme">

                <!--Testimonial Block -->
                {{-- <div class="testimonial-block-two">
                    <div class="inner-box">
                    <div class="thumb"><img src="images/resource/testi-thumb-1.png" alt=""></div>
                    <h4 class="title">Great quality!</h4>
                    <div class="text">Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite… The Mitech team works really hard to ensure high level of quality</div>
                    <div class="info-box">
                        <h4 class="name">Brooklyn Simmons</h4>
                        <span class="designation">Web Developer</span>
                    </div>
                    </div>
                </div> --}}

                <!--create an array of team members and loop through them -->

                @php
                $teamMembers = [
                        [
                            "image" => "/images/resource/teams/ethan_claasen.jpg",
                            "name" => "Ethan Classen",
                            "designation" => "CEO, Visionary Leader",
                            "description" => "Our fearless leader, with a strategic mind and a heart for global connection, guides Nexustravel towards a future where talent knows no bounds."
                        ],
                        [
                            "image" => "/images/resource/teams/sourav_chhokar.jpg",
                            "name" => "Sourav Chhokar",
                            "designation" => "CTO, Tech Maestro",
                            "description" => "The wizard behind the platform's magic, crafting innovative solutions and building bridges across continents through code and creativity."
                        ],
                        [
                            "image" => "/images/resource/teams/ruth_bouwkamp.jpg",
                            "name" => "Ruth Bouwkamp",
                            "designation" => "COO, Mastermind of Operations",
                            "description" => "The conductor of our symphony, ensuring every note plays harmoniously, from smooth platform performance to seamless user experiences."
                        ],
                        [
                            "image" => "/images/resource/teams/zhuru_ortiz.jpg",
                            "name" => "Zhuru Ortiz",
                            "designation" => "Global Recruitment Lead",
                            "description" => "A seasoned talent scout with a knack for spotting hidden gems, Maria connects exceptional individuals with their dream opportunities across the globe."
                        ],
                        [
                            "image" => "/images/resource/teams/sabastian_fisher.jpg",
                            "name" => "Sabastian Fisher",
                            "designation" => "Visa & Immigration Expert",
                            "description" => "Sabastian removes the wrinkles of paperwork, guiding you through the visa process with expertise and a friendly smile."
                        ],
                        [
                            "image" => "/images/resource/teams/evelyn_achterberg.jpg",
                            "name" => "Evelyn Achterberg",
                            "designation" => "Relocation Specialist",
                            "description" => "Evelyn is your compass in your new home city, ensuring a smooth transition from apartment hunting to cultural immersion."
                        ],
                        [
                            "image" => "/images/resource/teams/george_wagner.jpg",
                            "name" => "George Wagner",
                            "designation" => "Career Coach & Mentor",
                            "description" => "Michael's wisdom and guidance have helped countless individuals climb the career ladder. He'll be your confidante and champion on your journey."
                        ],
                        [
                            "image" => "/images/resource/teams/freddie_meyer.jpg",
                            "name" => "Freddie Meyer",
                            "designation" => "Resume & Cover Letter Wizard",
                            "description" => "Freddie transforms your experiences into compelling narratives, making your applications irresistible to potential employers."
                        ],
                        [
                            "image" => "/images/resource/teams/charlotte_lindgren.jpg",
                            "name" => "Charlotte Lindgren",
                            "designation" => "Interview Prep Expert",
                            "description" => "Charlotte is your secret weapon in the interview arena. His mock interviews and confidence-boosting strategies will have you acing every encounter."
                        ],
                        [
                            "image" => "/images/resource/teams/joseph_christoff.jpg",
                            "name" => "Joseph Christoff",
                            "designation" => "Live Chat Support",
                            "description" => "Joseph is your trusted advocate, providing support and guidance every step of the way. He'll be your go-to for any questions or concerns."
                        ],
                        [
                            "image" => "/images/resource/teams/aurelia_barnhardt.jpg",
                            "name" => "Aurelia barnhardt",
                            "designation" => "Cultural Ambassador",
                            "description" => "Aurelia bridges the gap between cultures. He'll help you navigate the nuances of a new workplace environment with ease."
                        ],
                        [
                            "image" => "/images/resource/teams/alfie_neumman.jpg",
                            "name" => "Alfie Neumman",
                            "designation" => "Language Support Specialist",
                            "description" => "Alfie breaks down communication barriers. You can express yourself and be understood wherever your career takes you."
                        ]
                ];

                @endphp

                @foreach ($teamMembers as $teamMember)
                    <!--Testimonial Block -->
                    <div class="testimonial-block-two">
                        <div class="inner-box">
                        <div class="thumb"><img src="{{ $teamMember['image'] }}" alt=""></div>
                        {{-- <h4 class="title">Great quality!</h4> --}}
                        <div class="text">{{ $teamMember['description'] }}</div>
                        <div class="info-box">
                            <h4 class="name">{{ $teamMember['name'] }}</h4>
                            <span class="designation">{{ $teamMember['designation'] }}</span>
                        </div>
                        </div>
                    </div>

                @endforeach




                </div>
            </div>
            </div>
        </section>
        <!-- End Testimonial Section -->

        <!-- Call To Action Two -->
        <section class="call-to-action-two" style="background-image: url(images/background/1.jpg);">
            <div class="auto-container">
            <div class="sec-title light text-center">
                <h2>Your Dream Jobs Are Waiting</h2>
                <div class="text">Over 1 million interactions, 50,000 success stories Make yours now.</div>
            </div>

            <div class="btn-box">
                <a href="/jobs" class="theme-btn btn-style-three">Search Job</a>
                <a href="/register" class="theme-btn btn-style-two">Apply Job Now</a>
            </div>
            </div>
        </section>
        <!-- End Call To Action -->

        <!-- Testimonial Section Two -->
        <section class="testimonial-section-two">
            <div class="container-fluid">
            {{-- <div class="testimonial-left"><img src="images/resource/testimonial-left.png" alt=""></div>
            <div class="testimonial-right"><img src="images/resource/testimonial-right.png" alt=""></div> --}}
            <!-- Sec Title -->
            <div class="sec-title text-center">
                <h2>Where Dreams Take Flight - Testimonials</h2>
                <div class="text">From navigating visa applications to landing their dream jobs across the globe, Nexustravel has helped countless individuals achieve their career aspirations. Here's what they have to say</div>
            </div>

            <div class="carousel-outer">
                <!-- Testimonial Carousel -->
                <div class="testimonial-carousel owl-carousel owl-theme">

                    @php
                        $testimonials = [
                            [
                                "image" => "/images/resource/testimonials/testi-thumb-1.jpg",
                                "name" => "Akash (India),",
                                "designation" => "Software Engineer",
                                "description" => "I landed my dream job in Silicon Valley, thanks to Nexustravel's expert career coaching and personalized job recommendations. They even helped me navigate the visa process!",
                                "title" => "Nexustravel wasn't just a platform, it was a launchpad!"
                            ],
                            [
                                "image" => "/images/resource/testimonials/testi-thumb-2.jpg",
                                "name" => "Maria (Mexico),",
                                "designation" => "Marketing Manager",
                                "description" => "I never thought I'd work in Paris. Nexustravel not only helped me find the perfect job, but their relocation support made the transition seamless. Now, I'm living the croissant dream!",
                                "title" => "From Tokyo to Paris, Nexustravel opened the world to me."
                            ],
                            [
                                "image" => "/images/resource/testimonials/testi-thumb-3.jpg",
                                "name" => "Hiro (Japan),",
                                "designation" => "Cultural Consultant",
                                "description" => "Nexustravel's community is incredible. I've connected with professionals from all over the world, sharing experiences and supporting each other's journeys. It's like having a global family.",
                                "title" => "More than a job, it's a global community."
                            ],
                            [
                                "image" => "/images/resource/testimonials/testi-thumb-4.jpg",
                                "name" => "Emily (USA),",
                                "designation" => "Graphic Designer",
                                "description" => "I was stuck in a dead-end job. Nexustravel's career guidance helped me discover my passion for graphic design. Now, I'm freelancing for clients around the globe!",
                                "title" => "They believed in me before I even did."
                            ],
                            [
                                "image" => "/images/resource/testimonials/testi-thumb-5.jpg",
                                "name" => "Omar (Egypt),",
                                "designation" => "Remote Entrepreneur",
                                "description" => "Nexustravel gave me the freedom to work from anywhere. Their visa and relocation support helped me find my perfect island home, and their global network keeps me connected to clients worldwide.",
                                "title" => "The world is my office, thanks to Nexustravel."
                            ]
                        ]
                    @endphp


                    @foreach ($testimonials as $testimonial)

                        <!--Testimonial Block -->
                        <div class=" testimonial-block-two">
                            <div class="inner-box">
                                <div class="thumb"><img src="{{ $testimonial['image'] }}" alt=""></div>
                                <h4 class="title">{{ $testimonial['title'] }}</h4>
                                <div class="text">{{ $testimonial['description'] }}</div>
                                <div class="info-box">
                                    <h4 class="name">{{ $testimonial['name'] }}</h4>
                                    <span class="designation">{{ $testimonial['designation'] }}</span>
                                </div>
                            </div>
                        </div>

                    @endforeach


                </div>
            </div>
            </div>
        </section>
        <!-- End Testimonial Section -->


  @endsection


