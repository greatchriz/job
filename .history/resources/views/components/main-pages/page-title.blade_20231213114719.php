@aware(['pageTitle'])

<!--Page Title-->
<section class="page-title">
    <div class="auto-container">
      <div class="title-outer">
        <h1>{{ $pageTitle }}</h1>
        <ul class="page-breadcrumb">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li>{{ $pageTitle }}</li>
        </ul>
      </div>
    </div>
  </section>
  <!--End Page Title-->
