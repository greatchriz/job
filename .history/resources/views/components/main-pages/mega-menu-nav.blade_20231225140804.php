@props(['current', 'navTitle'])

@php
    $classes = ($current ?? false)
    ? 'current'
    : '';
@endphp

<li {{ $attributes->merge(['class' => $classes]) }}>
    <span>{{ $navTitle }}</span>
    <div class="mega-menu">
      <div class="mega-menu-bar row">
        <div class="column col-lg-3 col-md-3 col-sm-12">
          <h3>Jobs Listing</h3>
          <ul>
            <li><a href="job-list-v1.html">Jobs List – v1</a></li>
            <li><a href="job-list-v2.html">Jobs List – v2</a></li>
            <li><a href="job-list-v3.html">Jobs List – v3</a></li>
            <li><a href="job-list-v4.html">Jobs List – v4</a></li>
            <li><a href="job-list-v5.html">Jobs List – v5</a></li>
          </ul>
        </div>

        <div class="column col-lg-3 col-md-3 col-sm-12">
          <ul>
            <li><a href="job-list-v6.html">Jobs List – v6</a></li>
            <li><a href="job-list-v7.html">Jobs List – v7</a></li>
            <li><a href="job-list-v8.html">Jobs List – v8</a></li>
            <li><a href="job-list-v9.html">Jobs List – v9</a></li>
            <li><a href="job-list-v10.html">Jobs List – v10</a></li>
          </ul>
        </div>

        <div class="column col-lg-3 col-md-3 col-sm-12">
          <ul>
            <li><a href="job-list-v11.html">Jobs List – v11</a></li>
            <li><a href="job-list-v12.html">Jobs List – v12</a></li>
            <li><a href="job-list-v13.html">Jobs List – v13</a></li>
            <li><a href="job-list-v14.html">Jobs List – v14</a></li>
          </ul>
        </div>

        <div class="column col-lg-3 col-md-3 col-sm-12">
          <h3>Jobs Single</h3>
          <ul>
            <li><a href="job-single.html">Job Single v1</a></li>
            <li><a href="job-single-2.html">Job Single v2</a></li>
            <li><a href="job-single-3.html">Job Single v3</a></li>
            <li><a href="job-single-4.html">Job Single v4</a></li>
            <li><a href="job-single-5.html">Job Single v5</a></li>
          </ul>
        </div>
      </div>
    </div>
</li>
