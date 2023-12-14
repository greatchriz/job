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

      <x-main-pages.about.about-section title="Weaving Dreams Across Borders" text1="Polticventure wasn't born on a map, but in the hearts of passionate individuals who believed in the power of connecting talent with opportunity, regardless of borders. Our story began with a simple idea: to bridge the gap between ambitious individuals and thriving companies, wherever they may be." text2="From our humble beginnings, we've blossomed into a vibrant community, connecting over 4 million daily users across the globe with exciting opportunities in diverse industries. We've witnessed dreams take flight in bustling metropolises, idyllic coastal towns, and every corner of the world in between. Every successful job placement, every visa secured, every cultural bridge crossed - these are the milestones that mark our journey, a testament to the transformative power of global connection" text3="Today, Polticventure stands not just as a platform, but as a symbol of possibility. We're a testament to the boundless potential that lies within each individual, waiting to be unleashed on a global stage. As we continue to weave our web of connections, we invite you to join us in our mission. Let's rewrite the narrative of careers, one international success story at a time"/>


    </div>
  </section>
  <!-- End About Section Three -->

  <!-- Work Section -->
  <section class="work-section style-two">
    <div class="auto-container">
      <div class="sec-title text-center">
        <h2>Where Borders Blur and Dreams Take Flight?</h2>
        <div class="text">
            Imagine a world where talent knows no bounds, where ambition transcends borders, and opportunities bloom like vibrant blossoms across every continent. This is the world Polticventure invites you to explore – not just a job board, but a springboard to launch your international odyssey.
        </div>

        <div class="text">
            We're not simply connecting you with jobs; we're weaving a tapestry of possibilities, each thread a chance to paint your own masterpiece on the global canvas. Whether you're a seasoned maestro seeking a new concerto or a budding virtuoso eager to debut on the world stage, Polticventure orchestrates your symphony of success.
        </div>
      </div>

      <div class="row">

        <!-- Work Block
            Your Global Stage:

            Imagine a platform teeming with a kaleidoscope of opportunities, where jobs from the bustling boulevards of Paris to the sun-kissed shores of Sydney dance across your screen. With a click, you can step into the heart of a bustling startup in Berlin, or join a pioneering research team in the Amazon rainforest. Our job board isn't just a list; it's a portal to a world where your skills are not confined by visa stamps or spoken tongues.

            Beyond the Application Curtain:

            But Polticventure isn't content simply opening doors. We're your backstage crew, ensuring your resume shines under the spotlight. Our intuitive interface guides you through the application process with the grace of a seasoned impresario. Upload your CV, let our resume polisher work its magic, and watch as your skills take center stage before the captivated audience of potential employers.

            Waiting in the Wings:

            But the applause doesn't end with the application. We're your confidante, your translator, your cheerleader, and your guide throughout the entire process. From deciphering cryptic interview invitations to navigating the labyrinthine world of international bureaucracy, we hold your hand every step of the way. And when the curtains close, we're there to celebrate your success or offer a comforting shoulder and a wealth of advice for the next encore.

            More Than a Job, a Bridge:

            Polticventure knows that a dream job often comes with a symphony of logistical challenges. Fear not, intrepid traveler! We're your one-stop visa whisperer, your residence permit alchemist, and your flight-booking fairy godmother. We'll smooth the wrinkles out of immigration forms, conjure up the perfect apartment in your new city, and whisk you away on the wings of convenience to your new destination.

            A World of Welcome:

            Landing in a new country can feel like stepping onto a stage with an unfamiliar script. But with Polticventure, you'll never have to face the spotlight alone. Our network of local partners extends a warm hand, offering language courses, cultural insights, and a community of like-minded adventurers who've already mastered the art of navigating their own global journeys.

            A Chorus of Success Stories:

            The Polticventure stage isn't just a platform for individual achievements; it's a testament to the transformative power of global connections. We're proud to be the stage where Maria, a passionate coder from Mexico, landed her dream job at a Silicon Valley tech giant. We celebrate with Akash, a young engineer from India, who used our platform to secure a life-changing internship in Germany. These are just a few notes in the grand symphony of Polticventure success stories, each one a testament to the power of ambition, opportunity, and a little bit of our magic.

        -->

        <!--using the above contents create an array of $workBlock elements-->


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
                    "text" => "But Polticventure isn't content simply opening doors. We're your backstage crew, ensuring your resume shines under the spotlight. Our intuitive interface guides you through the application process with the grace of a seasoned impresario. Upload your CV, let our resume polisher work its magic, and watch as your skills take center stage before the captivated audience of potential employers"
                ],
                [
                    "image" => "/images/resource/work-3.png",
                    "title" => "Waiting in the Wings",
                    "text" => "But the applause doesn't end with the application. We're your confidante, your translator, your cheerleader, and your guide throughout the entire process. From deciphering cryptic interview invitations to navigating the labyrinthine world of international bureaucracy, we hold your hand every step of the way. And when the curtains close, we're there to celebrate your success or offer a comforting shoulder and a wealth of advice for the next encore."
                ],
                [
                    "image" => "/images/resource/work-1.png",
                    "title" => "More Than a Job, a Bridge",
                    "text" => "Polticventure knows that a dream job often comes with a symphony of logistical challenges. Fear not, intrepid traveler! We're your one-stop visa whisperer, your residence permit alchemist, and your flight-booking fairy godmother. We'll smooth the wrinkles out of immigration forms, conjure up the perfect apartment in your new city, and whisk you away on the wings of convenience to your new destination."
                ],
                [
                    "image" => "/images/resource/work-2.png",
                    "title" => "A World of Welcome",
                    "text" => "Landing in a new country can feel like stepping onto a stage with an unfamiliar script. But with Polticventure, you'll never have to face the spotlight alone. Our network of local partners extends a warm hand, offering language courses, cultural insights, and a community of like-minded adventurers who've already mastered the art of navigating their own global journeys"
                ],
                [
                    "image" => "/images/resource/work-3.png",
                    "title" => "A Chorus of Success Stories",
                    "text" => "The Polticventure stage isn't just a platform for individual achievements; it's a testament to the transformative power of global connections. We're proud to be the stage where Maria, a passionate coder from Mexico, landed her dream job at a Silicon Valley tech giant. We celebrate with Akash, a young engineer from India, who used our platform to secure a life-changing internship in Germany. These are just a few notes in the grand symphony of Polticventure success stories, each one a testament to the power of ambition, opportunity, and a little bit of our magic."
                ]
            ]
        @endphp


        @foreach ($workBlocks as $workBlock)
            <!-- Work Block -->
            <div class="work-block col-lg-4 col-md-6 col-sm-12" hieght="190px">
                <div class="inner-box">
                <figure class="image"><img src="{{ $workBlock['image'] }}" alt=""></figure>
                <h5>{{ $workBlock['title'] }}</h5>
                <p style="overflow: scroll">{{ $workBlock['text'] }}</p>
                </div>
            </div>
        @endforeach


      </div>
    </div>
  </section>
  <!-- End Work Section -->

  <!-- Call To Action Two -->
  <section class="call-to-action-two" style="background-image: url(images/background/1.jpg);">
    <div class="auto-container">
      <div class="sec-title light text-center">
        <h2>Your Dream Jobs Are Waiting</h2>
        <div class="text">Over 1 million interactions, 50,000 success stories Make yours now.</div>
      </div>

      <div class="btn-box">
        <a href="#" class="theme-btn btn-style-three">Search Job</a>
        <a href="#" class="theme-btn btn-style-two">Apply Job Now</a>
      </div>
    </div>
  </section>
  <!-- End Call To Action -->

  <!-- Testimonial Section Two -->
  <section class="testimonial-section-two">
    <div class="container-fluid">
      <div class="testimonial-left"><img src="images/resource/testimonial-left.png" alt=""></div>
      <div class="testimonial-right"><img src="images/resource/testimonial-right.png" alt=""></div>
      <!-- Sec Title -->
      <div class="sec-title text-center">
        <h2>Testimonials From Our Customers</h2>
        <div class="text">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor</div>
      </div>

      <div class="carousel-outer">
        <!-- Testimonial Carousel -->
        <div class="testimonial-carousel owl-carousel owl-theme">

          <!--Testimonial Block -->
          <div class="testimonial-block-two">
            <div class="inner-box">
              <div class="thumb"><img src="images/resource/testi-thumb-1.png" alt=""></div>
              <h4 class="title">Great quality!</h4>
              <div class="text">Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite… The Mitech team works really hard to ensure high level of quality</div>
              <div class="info-box">
                <h4 class="name">Brooklyn Simmons</h4>
                <span class="designation">Web Developer</span>
              </div>
            </div>
          </div>

          <!--Testimonial Block -->
          <div class="testimonial-block-two">
            <div class="inner-box">
              <div class="thumb"><img src="images/resource/testi-thumb-1.png" alt=""></div>
              <h4 class="title">Great quality!</h4>
              <div class="text">Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite… The Mitech team works really hard to ensure high level of quality</div>
              <div class="info-box">
                <h4 class="name">Brooklyn Simmons</h4>
                <span class="designation">Web Developer</span>
              </div>
            </div>
          </div>

          <!--Testimonial Block -->
          <div class="testimonial-block-two">
            <div class="inner-box">
              <div class="thumb"><img src="images/resource/testi-thumb-1.png" alt=""></div>
              <h4 class="title">Great quality!</h4>
              <div class="text">Without JobHunt i’d be homeless, they found me a job and got me sorted out quickly with everything! Can’t quite… The Mitech team works really hard to ensure high level of quality</div>
              <div class="info-box">
                <h4 class="name">Brooklyn Simmons</h4>
                <span class="designation">Web Developer</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Testimonial Section -->

  <!-- Work Section -->
  <section class="work-section style-two">
    <div class="auto-container">
      <div class="sec-title text-center">
        <h2>How It Works?</h2>
        <div class="text">Job for anyone, anywhere</div>
      </div>

      <div class="row">
        <!-- Work Block -->
        <div class="work-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <figure class="image"><img src="images/resource/work-1.png" alt=""></figure>
            <h5>Free Resume Assessments</h5>
            <p>Employers on average spend 31 seconds scanning resumes to identify potential matches.</p>
          </div>
        </div>

        <!-- Work Block -->
        <div class="work-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <figure class="image"><img src="images/resource/work-2.png" alt=""></figure>
            <h5>Job Fit Scoring</h5>
            <p>Employers on average spend 31 seconds scanning resumes to identify potential matches.</p>
          </div>
        </div>

        <!-- Work Block -->
        <div class="work-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box">
            <figure class="image"><img src="images/resource/work-3.png" alt=""></figure>
            <h5>Help Every Step of the Way</h5>
            <p>Employers on average spend 31 seconds scanning resumes to identify potential matches.</p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End Work Section -->
  @endsection


