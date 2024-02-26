@extends('layouts.dashboard.layout')

@section('upper-title')

<div class="upper-title-box">
    <h3>Edit Job</h3>

</div>

@endsection

@section('content')

<!-- Forms -->
<div class="row" style="background-color: white">
    <div class="col-lg-12">
        <div class="row">

            <div class="column col-lg-6 col-md-12">
                <form class="default-form">

                    <!-- Input -->
                    <div class="form-group">
                        <label>Select Location </label>
                        <select class="chosen-select">
                            @foreach ($locations as $location)
                                <option @if ($location->id == $job->location_id) selected @endif value="{{ $location->id }} ">{{ $location->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- $table->text('companyLogo')->nullable();
            $table->string('companyName')->nullable();
            $table->string('jobLocation')->nullable();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('responsibilities')->nullable();
            $table->text('requirements')->nullable();
            $table->string('experiences')->nullable();
            $table->text('duties')->nullable();
            $table->text('benefits')->nullable();
            $table->string('salary')->nullable();
            $table->date('deadline')->nullable();
            $table->date('postedDate')->nullable(); --}}



                    <!-- jobLocation -->
                    <div class="form-group">
                        <label>Job Location</label>
                        <input type="text" name="jobLocation" placeholder="Job Location" value="{{ $job->jobLocation }}">
                    </div>


                    <!-- title -->
                    <div class="form-group">
                        <label>Job Title</label>
                        <input type="text" name="title" placeholder="Job Title" value="{{ $job->title }}">
                    </div>

                    <!-- description -->
                    <div class="form-group chosen-search">
                        <label>Job Description</label>
                        <textarea placeholder="Description" name="description">
                            {{ $job->description }}
                        </textarea>
                    </div>

                    <!-- responsibilities -->
                    <div class="form-group chosen-search">
                        <label>Job Responsibilities</label>
                        <textarea placeholder="Responsibilities" name="responsibilities">
                            {{ $job->responsibilities }}
                        </textarea>
                    </div>

                    {{-- requirements --}}
                    <div class="form-group chosen-search">
                        <label>Job Requirements</label>
                        <textarea placeholder="Requirements" name="requirements">
                            {{ $job->requirements }}
                        </textarea>
                    </div>

                    {{-- experiences --}}

                    <div class="form-group">
                        <label>Experiences</label>
                        <input type="text" name="experiences" placeholder="Experiences" value="{{ $job->experiences }}">
                    </div>

                    {{-- duties --}}

                    <div class="form-group chosen-search">
                        <label>Job Duties</label>
                        <textarea placeholder="Duties" name="duties">
                            {{ $job->duties }}
                        </textarea>
                    </div>

                    {{-- benefits --}}

                    <div class="form-group chosen-search">
                        <label>Job Benefits</label>
                        <textarea placeholder="Benefits" name="benefits">
                            {{ $job->benefits }}
                        </textarea>
                    </div>

                    {{-- salary --}}

                    <div class="form-group">
                        <label>Salary</label>
                        <input type="text" name="salary" placeholder="Salary" value="{{ $job->salary }}">
                    </div>


                    {{-- deadline --}}

                    {{-- postedDate --}}

                </form>
            </div>

            <div class="column col-lg-6 col-md-12">
                <form class="default-form">
                    <!-- Input -->
                    <div class="form-group">
                        <label>Select boxes </label>
                        <select class="chosen-select">
                            <option>All Categories</option>
                            <option>Residential</option>
                            <option>Commercial</option>
                            <option>Industrial</option>
                            <option>Apartments</option>
                        </select>
                    </div>

                    <!-- Search Select -->
                    <div class="form-group">
                        <label>Multiple Select boxes </label>
                        <select data-placeholder="Choose a category..." class="chosen-select" multiple tabindex="4">
                            <option value="Banking">Banking</option>
                            <option value="Digital&Creative">Digital & Creative</option>
                            <option value="Retail">Retail</option>
                            <option value="Human Resources">Human Resources</option>
                            <option value="Management">Management</option>
                        </select>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                        <div class="row">
                            <div class="form-group col-lg-4 col-md-4 col-sm-12">
                                <label>Radiobox</label>
                                <div class="radio-outer margin-top-10">
                                    <div class="radio-box">
                                        <input type="radio" name="radio" id="radio-1" checked="">
                                        <label for="radio-1">Items</label>
                                    </div>
                                    <div class="radio-box">
                                        <input type="radio" name="radio" id="radio-2" checked="">
                                        <label for="radio-2">Items</label>
                                    </div>
                                    <div class="radio-box">
                                        <input type="radio" name="radio" id="radio-3" checked="">
                                        <label for="radio-3">Items</label>
                                    </div>
                                    <div class="radio-box">
                                        <input type="radio" name="radio" id="radio-4" checked="">
                                        <label for="radio-4">Items</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-lg-4 col-md-4 col-sm-12">
                                <label>Checkbox</label>
                                <!-- Checkboxes Ouer -->
                                <div class="checkbox-outer margin-top-10">
                                    <ul class="checkboxes square">
                                        <li>
                                            <input id="check-a" type="checkbox" name="check">
                                            <label for="check-a">Items</label>
                                        </li>
                                        <li>
                                            <input id="check-b" type="checkbox" name="check">
                                            <label for="check-b">Items</label>
                                        </li>
                                        <li>
                                            <input id="check-c" type="checkbox" name="check">
                                            <label for="check-c">Items</label>
                                        </li>
                                        <li>
                                            <input id="check-d" type="checkbox" name="check">
                                            <label for="check-d">Items</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="form-group col-lg-4 col-md-4 col-sm-12">
                                <label>Switch</label>
                                <!-- Switchbox Outer -->
                                <div class="switchbox-outer margin-top-10">
                                    <ul class="switchbox">
                                        <li>
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                <span class="title">Freelance</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                                <span class="title">Full Time</span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                                <span class="title">Part Time</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection