@props(['jobs'])

<!-- Listing Section -->
<section class="ls-section">
    <div class="auto-container">
        <div class="filters-backdrop"></div>

        <div class="row">
            <!-- Content Column -->
            <div class="content-column col-lg-12 col-md-12 col-sm-12">
                <div class="ls-outer">
                    <button type="button" class="theme-btn btn-style-two toggle-filters">Show Filters</button>

                    <!-- ls Switcher -->
                    <div class="ls-switcher">

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

                    {{ $slot }}

                </div>
            </div>
        </div>
    </div>
</section>
<!--End Listing Page Section -->
