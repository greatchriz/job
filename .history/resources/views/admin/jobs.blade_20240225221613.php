@extends('layouts.dashboard.layout')

@section('upper-title')

<div class="upper-title-box">
    <h3>List of all Jobs</h3>

</div>

@endsection

@section('content')
    <div class="row">
        <!-- Job Block -->
        @forelse ($jobs as $job)

            <x-job-card :job="$job">
                <div class="apply-btn">
                    <a href="{{ route('admin.jobs.edit', $job->id) }}}}"><span><img
                                src="/assets/images/icon/apply-ellipse.svg"
                                alt></span>Edit Job</a>
                </div>
            </x-job-card>



            @empty
                <div class="message-box error">
                    <p>You have not applied for any jobs</p>
                </div>

                <div class="col-12" style="display: flex; justify-content: center">
                        <a href="{{ route('admin.jobs.create') }}" class="theme-btn btn-style-four large">Add Job</a>
                </div>

            @endforelse

        </div>
    @endsection
