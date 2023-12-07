<x-app-layout>
    <x-dashboard-card>

        <div class="inner-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-content text-center">
                            <h1>Job Listing</h1>
                            <span></span>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a
                                            href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active"
                                        aria-current="page">Job Listing </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @auth
            @if(auth()->user()->can('view all applications'))

                <div class="job-listing-wrrap">
                    <div class="row ">
                        @foreach ($jobApplications as $jobApplication)
                            <x-applied-job :jobApplication="$jobApplication" />
                        @endforeach
                    </div>
                </div>

            @else

                <div class="alert alert-danger">
                    You don't have permission to view this page
                </div>

            @endif
        @endauth


    </x-dashboard-card>
</x-app-layout>
