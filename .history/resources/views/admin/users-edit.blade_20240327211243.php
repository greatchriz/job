@extends('layouts.dashboard.layout')

@section('upper-title')

<div class="upper-title-box">
    <h4>Edit <b>{{ $user->name }}</b>
    </h4>

</div>

@endsection

@section('content')

<!-- Forms -->
<div class="row" style="background-color: white">
    <div class="col-lg-12">
        <div class="row">

            <div class="column col-md-12">
                {{-- <form action="{{ route('admin.jobs.update', $job->id) }}" method="POST" class="default-form">

                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Select Location </label>
                        <select class="chosen-select" name="location_id">
                            @foreach ($locations as $location)
                                <option @if ($location->id == $job->location_id) selected @endif value="{{ $location->id }} ">{{ $location->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Job Title</label>
                        <input type="text" name="title" placeholder="Job Title" value="{{ $job->title }}">
                    </div>

                    <div class="form-group chosen-search">
                        <label>Job Description</label>
                        <textarea placeholder="Description" name="description">
                            {{ $job->description }}
                        </textarea>
                    </div>

                    <div class="form-group chosen-search">
                        <label>Job Responsibilities</label>
                        <textarea placeholder="Responsibilities" name="responsibilities">
                            {{ $job->responsibilities }}
                        </textarea>
                    </div>

                    <div class="form-group chosen-search">
                        <label>Job Requirements</label>
                        <textarea placeholder="Requirements" name="requirements">
                            {{ $job->requirements }}
                        </textarea>
                    </div>


                    <div class="form-group">
                        <label>Experiences</label>
                        <input type="text" name="experiences" placeholder="Experiences" value="{{ $job->experiences }}">
                    </div>


                    <div class="form-group chosen-search">
                        <label>Job Duties</label>
                        <textarea placeholder="Duties" name="duties">
                            {{ $job->duties }}
                        </textarea>
                    </div>


                    <div class="form-group chosen-search">
                        <label>Job Benefits</label>
                        <textarea placeholder="Benefits" name="benefits">
                            {{ $job->benefits }}
                        </textarea>
                    </div>


                    <div class="form-group">
                        <label>Salary</label>
                        <input type="text" name="salary" placeholder="Salary" value="{{ $job->salary }}">
                    </div>



                    <div class="form-group">
                        <label>Deadline</label>
                        <input type="date" name="deadline" placeholder="Deadline" value="{{ $job->deadline }}">
                    </div>


                    <div class="form-group">
                        <label>Posted Date</label>
                        <input type="date" name="postedDate" placeholder="Posted Date" value="{{ $job->postedDate }}">
                    </div>


                    <div class="form-group">
                        <button class="theme-btn btn-style-one" type="submit">Update Job</button>
                      </div>

                </form> --}}
            </div>



        </div>
    </div>
</div>

@endsection
