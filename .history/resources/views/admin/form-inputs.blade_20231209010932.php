<x-app-layout>
    <x-dashboard-card>



        <x-inner-banner pageTitle="Job Applications" />

        @auth
            @if(auth()->user()->can('view all applications'))

                <div class="job-listing-wrrap">
                    <div class="row ">
                        @foreach ($formInputs as $formInput)
                            <x-applied-job :formInput="$formInput" />
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
