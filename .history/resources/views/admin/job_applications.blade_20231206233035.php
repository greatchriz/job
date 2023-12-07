<x-app-layout>
    <x-dashboard-card>


        <x-inner-banner />

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
