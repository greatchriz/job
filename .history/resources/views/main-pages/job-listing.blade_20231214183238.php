@extends('normal-layout')
    @section('header')
        @include('normal-header')
    @endsection

    @section('page-title')
        @include('page-title', ['pageTitle' => 'Job Listing'])
    @endsection

    @section('content')
        <!-- Listing Section -->
            <section class="ls-section">
                <div class="auto-container">
                <div class="filters-backdrop"></div>

                <div class="row">

                    <!-- Filters Column -->
                    <div class="filters-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="filters-outer">
                        <button type="button" class="theme-btn close-filters">X</button>

                        <!-- Filter Block -->
                        <div class="filter-block">
                            <h4>Search by Keywords</h4>
                            <div class="form-group">
                            <input type="text" name="listing-search"
                                placeholder="Job title, keywords, or company">
                            <span class="icon flaticon-search-3"></span>
                            </div>
                        </div>

                        <!-- Filter Block -->
                        <div class="filter-block">
                            <h4>Location</h4>
                            <div class="form-group">
                            <input type="text" name="listing-search"
                                placeholder="City or postcode">
                            <span class="icon flaticon-map-locator"></span>
                            </div>
                            <p>Radius around selected destination</p>
                            <div class="range-slider-one">
                            <div class="area-range-slider"></div>
                            <div class="input-outer">
                                <div class="amount-outer"><span class="area-amount"></span>km</div>
                            </div>
                            </div>
                        </div>

                        <!-- Filter Block -->
                        <div class="filter-block">
                            <h4>Category</h4>
                            <div class="form-group">
                            <select class="chosen-select">
                                <option>Choose a category</option>
                                <option>Residential</option>
                                <option>Commercial</option>
                                <option>Industrial</option>
                                <option>Apartments</option>
                                <option>Residential</option>
                                <option>Commercial</option>
                                <option>Industrial</option>
                                <option>Apartments</option>
                                <option>Residential</option>
                                <option>Commercial</option>
                                <option>Industrial</option>
                                <option>Apartments</option>
                            </select>
                            <span class="icon flaticon-briefcase"></span>
                            </div>
                        </div>

                        <!-- Switchbox Outer -->
                        <div class="switchbox-outer">
                            <h4>Job type</h4>
                            <ul class="switchbox">
                            <li>
                                <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                                <span class="title">Freelance</span>
                                </label>
                            </li>
                            <li>
                                <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                                <span class="title">Full Time</span>
                                </label>
                            </li>
                            <li>
                                <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                                <span class="title">Internship</span>
                                </label>
                            </li>
                            <li>
                                <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                                <span class="title">Part Time</span>
                                </label>
                            </li>
                            <li>
                                <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                                <span class="title">Temporary</span>
                                </label>
                            </li>
                            </ul>
                        </div>

                        <!-- Checkboxes Ouer -->
                        <div class="checkbox-outer">
                            <h4>Date Posted</h4>
                            <ul class="checkboxes">
                            <li>
                                <input id="check-f" type="checkbox" name="check">
                                <label for="check-f">All</label>
                            </li>
                            <li>
                                <input id="check-a" type="checkbox" name="check">
                                <label for="check-a">Last Hour</label>
                            </li>
                            <li>
                                <input id="check-b" type="checkbox" name="check">
                                <label for="check-b">Last 24 Hours</label>
                            </li>
                            <li>
                                <input id="check-c" type="checkbox" name="check">
                                <label for="check-c">Last 7 Days</label>
                            </li>
                            <li>
                                <input id="check-d" type="checkbox" name="check">
                                <label for="check-d">Last 14 Days</label>
                            </li>
                            <li>
                                <input id="check-e" type="checkbox" name="check">
                                <label for="check-e">Last 30 Days</label>
                            </li>
                            </ul>
                        </div>

                        <!-- Checkboxes Ouer -->
                        <div class="checkbox-outer">
                            <h4>Experience Level</h4>
                            <ul class="checkboxes square">
                            <li>
                                <input id="check-ba" type="checkbox" name="check">
                                <label for="check-ba">All</label>
                            </li>
                            <li>
                                <input id="check-bb" type="checkbox" name="check">
                                <label for="check-bb">Internship</label>
                            </li>
                            <li>
                                <input id="check-bc" type="checkbox" name="check">
                                <label for="check-bc">Entry level</label>
                            </li>
                            <li>
                                <input id="check-bd" type="checkbox" name="check">
                                <label for="check-bd">Associate</label>
                            </li>
                            <li>
                                <input id="check-be" type="checkbox" name="check">
                                <label for="check-be">Mid-Senior level4</label>
                            </li>
                            <li>
                                <button class="view-more"><span
                                    class="icon flaticon-plus"></span> View More</button>
                            </li>
                            </ul>
                        </div>

                        <!-- Filter Block -->
                        <div class="filter-block">
                            <h4>Salary</h4>

                            <div class="range-slider-one salary-range">
                            <div class="salary-range-slider"></div>
                            <div class="input-outer">
                                <div class="amount-outer">
                                <span class="amount salary-amount">
                                    $<span class="min">0</span>
                                    $<span class="max">0</span>
                                </span>
                                </div>
                            </div>
                            </div>
                        </div>

                        <!-- Filter Block -->
                        <div class="filter-block">
                            <h4>Tags</h4>
                            <ul class="tags-style-one">
                            <li><a href="#">app</a></li>
                            <li><a href="#">administrative</a></li>
                            <li><a href="#">android</a></li>
                            <li><a href="#">wordpress</a></li>
                            <li><a href="#">design</a></li>
                            <li><a href="#">react</a></li>
                            </ul>
                        </div>
                        </div>

                        <!-- Call To Action -->
                        <div class="call-to-action-four">
                        <h5>Recruiting?</h5>
                        <p>Advertise your jobs to millions of monthly users and search
                            15.8 million CVs in our database.</p>
                        <a href="#" class="theme-btn btn-style-one bg-blue"><span
                            class="btn-title">Start Recruiting Now</span></a>
                        <div class="image"
                            style="background-image: url(images/resource/ads-bg-4.png);"></div>
                        </div>
                        <!-- End Call To Action -->
                    </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="ls-outer">
                        <button type="button"
                        class="theme-btn btn-style-two toggle-filters">Show Filters</button>

                        <!-- ls Switcher -->
                        <div class="ls-switcher">
                        <div class="showing-result">
                            <div class="text">Showing
                                <strong>
                                    {{-- display $jobs  current page number --}}
                                    {{ $jobs->currentPage() }}
                                </strong> of <strong>{{ $jobs->count() }}</strong>
                            jobs</div>
                        </div>
                        <div class="sort-by">
                            <select class="chosen-select">
                            <option>New Jobs</option>
                            <option>Freelance</option>
                            <option>Full Time</option>
                            <option>Internship</option>
                            <option>Part Time</option>
                            <option>Temporary</option>
                            </select>

                            <select class="chosen-select">
                            <option>Show 10</option>
                            <option>Show 20</option>
                            <option>Show 30</option>
                            <option>Show 40</option>
                            <option>Show 50</option>
                            <option>Show 60</option>
                            </select>
                        </div>
                        </div>

                        @foreach ($jobs as $job)
                            <!-- Job Block -->
                            <div class="job-block">
                                <div class="inner-box">
                                    <div class="content">
                                    <span class="company-logo"><img
                                        src="{{ $job->company->logo }}" alt></span>
                                    <h4><a href="#">{{ $job->title }}</a></h4>
                                    <ul class="job-info">
                                        <li><span class="icon flaticon-briefcase"></span>
                                        Segment</li>
                                        <li><span class="icon flaticon-map-locator"></span>
                                        London, UK</li>
                                        <li><span class="icon flaticon-clock-3"></span> 11 hours
                                        ago</li>
                                        <li><span class="icon flaticon-money"></span> $35k -
                                        $45k</li>
                                    </ul>
                                    <ul class="job-other-info">
                                        <li class="time">Full Time</li>
                                        <li class="privacy">Private</li>
                                        <li class="required">Urgent</li>
                                    </ul>
                                    <button class="bookmark-btn"><span
                                        class="flaticon-bookmark"></span></button>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <!-- Pagination -->
                        <nav class="ls-pagination">
                            {{-- display $jobs links --}}

                            <ul>

                            <li class="prev"><a href="{{ $jobs->previousPageUrl() }}"><i class="fa fa-arrow-left"></i></a></li>
                            {{-- loop through $jobs page links --}}
                                {{-- <li><a href="#" class="current-page">2</a></li>
                                <li><a href="#">3</a></li> --}}

                                @foreach ($jobs->links() as $links)
                                `<li><a href="#" class="current-page">2</a></li>

                                @endforeach
                                <li class="{{ $jobs->nextPageUrl() }}"><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                            </ul>
                        </nav>

                        <!-- Listing Show More -->
                        <div class="ls-show-more">
                        <p>Showing {{ $jobs->count() }} of {{ $totalJobs }} Jobs</p>
                        {{-- using @case i want to say if the current page is 1 display 10% and if the current page is 2 display 20% and so on --}}

                        @switch($jobs->currentPage())
                            @case(1)
                                @php
                                    $percentage = 10;
                                @endphp
                            @break
                            @case(2)
                                @php
                                    $percentage = 20;
                                @endphp
                            @break
                            @case(3)
                                @php
                                    $percentage = 30;
                                @endphp
                            @break
                            @case(4)
                                @php
                                    $percentage = 40;
                                @endphp
                            @break
                            @case(5)
                                @php
                                    $percentage = 50;
                                @endphp
                            @break
                            @case(6)
                                @php
                                    $percentage = 60;
                                @endphp
                            @break
                            @default
                                @php
                                    $percentage = 0;
                                @endphp
                        @endswitch

                        <div class="bar"><span class="bar-inner" style="width: {{ $percentage }}%"></span></div>
                        <button class="show-more">Show More</button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </section>
        <!--End Listing Page Section -->
    @endsection
