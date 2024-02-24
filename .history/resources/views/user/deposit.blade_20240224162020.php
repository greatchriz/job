@extends('layouts.dashboard.layout')

@section('upper-title')

<div class="upper-title-box">
    <!--this is a job Application Form -->
    <h4> Make Deposit</h4>
    <div class="text">
        Fill this form to make deposit.
    </div>
</div>

@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <!-- Ls widget -->
        <div class="ls-widget">
            <div class="tabs-box">
                <div class="widget-content" style="padding: 30px 30px 10px;">
                    <form class="default-form">
                        <div class="row">


                            <!-- Input -->
                            <div class="form-group col-lg-6 col-md-12">
                                <label>Email Address</label>
                                <input type="text" name="name" placeholder="">
                            </div>

                            <!-- Input -->
                            <div class="form-group col-lg-6 col-md-12">
                                <label>Username</label>
                                <input type="text" name="name" placeholder="">
                            </div>

                            <!-- Search Select -->
                            <div class="form-group col-lg-6 col-md-12">
                                <label>Specialisms </label>
                                <select data-placeholder="Categories" class="chosen-select multiple" multiple tabindex="4">
                                    <option value="Banking">Banking</option>
                                    <option value="Digital&Creative">Digital & Creative</option>
                                    <option value="Retail">Retail</option>
                                    <option value="Human Resources">Human Resources</option>
                                    <option value="Management">Management</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-6 col-md-12">
                                <label>Job Type</label>
                                <select class="chosen-select">
                                    <option>Select</option>
                                    <option>Banking</option>
                                    <option>Digital & Creative</option>
                                    <option>Retail</option>
                                    <option>Human Resources</option>
                                    <option>Management</option>
                                </select>
                            </div>

                            <!-- Input -->
                            <div class="form-group col-lg-6 col-md-12">
                                <label>Offered Salary</label>
                                <select class="chosen-select">
                                    <option>Select</option>
                                    <option>$1500</option>
                                    <option>$2000</option>
                                    <option>$2500</option>
                                    <option>$3500</option>
                                    <option>$4500</option>
                                    <option>$5000</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-6 col-md-12">
                                <label>Career Level</label>
                                <select class="chosen-select">
                                    <option>Select</option>
                                    <option>Banking</option>
                                    <option>Digital & Creative</option>
                                    <option>Retail</option>
                                    <option>Human Resources</option>
                                    <option>Management</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-6 col-md-12">
                                <label>Experience</label>
                                <select class="chosen-select">
                                    <option>Select</option>
                                    <option>Banking</option>
                                    <option>Digital & Creative</option>
                                    <option>Retail</option>
                                    <option>Human Resources</option>
                                    <option>Management</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-6 col-md-12">
                                <label>Gender</label>
                                <select class="chosen-select">
                                    <option>Select</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-6 col-md-12">
                                <label>Industry</label>
                                <select class="chosen-select">
                                    <option>Select</option>
                                    <option>Banking</option>
                                    <option>Digital & Creative</option>
                                    <option>Retail</option>
                                    <option>Human Resources</option>
                                    <option>Management</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-6 col-md-12">
                                <label>Qualification</label>
                                <select class="chosen-select">
                                    <option>Select</option>
                                    <option>Banking</option>
                                    <option>Digital & Creative</option>
                                    <option>Retail</option>
                                    <option>Human Resources</option>
                                    <option>Management</option>
                                </select>
                            </div>

                            <!-- Input -->
                            <div class="form-group col-lg-12 col-md-12">
                                <label>Application Deadline Date</label>
                                <input type="text" name="name" placeholder="06.04.2020">
                            </div>

                            <!-- Input -->
                            <div class="form-group col-lg-6 col-md-12">
                                <label>Country</label>
                                <select class="chosen-select">
                                    <option>Australia</option>
                                    <option>Pakistan</option>
                                    <option>Chaina</option>
                                    <option>Japan</option>
                                    <option>India</option>
                                </select>
                            </div>

                            <!-- Input -->
                            <div class="form-group col-lg-6 col-md-12">
                                <label>City</label>
                                <select class="chosen-select">
                                    <option>Melbourne</option>
                                    <option>Pakistan</option>
                                    <option>Chaina</option>
                                    <option>Japan</option>
                                    <option>India</option>
                                </select>
                            </div>

                            <!-- Input -->
                            <div class="form-group col-lg-12 col-md-12">
                                <label>Complete Address</label>
                                <input type="text" name="name" placeholder="329 Queensberry Street, North Melbourne VIC 3051, Australia.">
                            </div>

                            <!-- Input -->
                            <div class="form-group col-lg-6 col-md-12">
                                <label>Find On Map</label>
                                <input type="text" name="name" placeholder="329 Queensberry Street, North Melbourne VIC 3051, Australia.">
                            </div>

                            <!-- Input -->
                            <div class="form-group col-lg-3 col-md-12">
                                <label>Latitude</label>
                                <input type="text" name="name" placeholder="Melbourne">
                            </div>

                            <!-- Input -->
                            <div class="form-group col-lg-3 col-md-12">
                                <label>Longitude</label>
                                <input type="text" name="name" placeholder="Melbourne">
                            </div>

                            <!-- Input -->
                            <div class="form-group col-lg-12 col-md-12">
                                <button class="theme-btn btn-style-three">Search Location</button>
                            </div>


                            <div class="form-group col-lg-12 col-md-12">
                                <div class="map-outer">
                                    <div class="map-canvas map-height" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap" data-hue="#ffc400" data-title="Envato" data-icon-path="images/resource/map-marker.png" data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                                    </div>
                                </div>
                            </div>

                            <!-- Input -->
                            <div class="form-group col-lg-12 col-md-12 text-right">
                                <button class="theme-btn btn-style-one">Next</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
