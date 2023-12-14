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

      <x-main-pages.about.about-section />
      <div class="text-box">
        <h4>About Superio</h4>
        <p>Far much that one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered inset one echidna cassowary some parrot and much as goodness some froze the sullen much connected bat wonderfully on instantaneously eel valiantly petted this along across highhandedly much.</p>
        <p>Repeatedly dreamed alas opossum but dramatically despite expeditiously that jeepers loosely yikes that as or eel underneath kept and slept compactly far purred sure abidingly up above fitting to strident wiped set waywardly far the and pangolin horse approving paid chuckled cassowary oh above a much opposite far much hypnotically more therefore wasp less that hey apart well like while superbly orca and far hence one.Far much that one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy.</p>
      </div>

      <div class="text-box">
        <h4>About Superio</h4>
        <p>Far much that one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered inset one echidna cassowary some parrot and much as goodness some froze the sullen much connected bat wonderfully on instantaneously eel valiantly petted this along across highhandedly much.</p>
        <p>Repeatedly dreamed alas opossum but dramatically despite expeditiously that jeepers loosely yikes that as or eel underneath kept and slept compactly far purred sure abidingly up above fitting to strident wiped set waywardly far the and pangolin horse approving paid chuckled cassowary oh above a much opposite far much hypnotically more therefore wasp less that hey apart well like while superbly orca and far hence one.Far much that one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy.</p>
      </div>
    </div>
  </section>
  <!-- End About Section Three -->

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
  <!-- End Work Section -->    @endsection


