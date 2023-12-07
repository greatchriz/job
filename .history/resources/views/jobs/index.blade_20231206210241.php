<x-app-layout>
    <x-dashboard-card>
        <div class="row ">

            @foreach($jobs as $job)
            <x-job-card :job="$job" />
            @endforeach

        </div>
    </x-dashboard-card>
</x-app-layout>
