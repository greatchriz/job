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
                                <label>Amount</label>
                                <input type="text" name="amount" placeholder="">
                            </div>

                            <div class="form-group col-lg-6 col-md-12">
                                <label>Crypto Account</label>
                                <select class="chosen-select">
                                    <option>Bitcoin <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="24px" height="24px" version="1.1" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 4091.27 4091.73" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
                                        <g id="Layer_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer" />
                                            <g id="_1421344023328">
                                                <path fill="#F7931A" fill-rule="nonzero" d="M4030.06 2540.77c-273.24,1096.01 -1383.32,1763.02 -2479.46,1489.71 -1095.68,-273.24 -1762.69,-1383.39 -1489.33,-2479.31 273.12,-1096.13 1383.2,-1763.19 2479,-1489.95 1096.06,273.24 1763.03,1383.51 1489.76,2479.57l0.02 -0.02z" />
                                                <path fill="white" fill-rule="nonzero" d="M2947.77 1754.38c40.72,-272.26 -166.56,-418.61 -450,-516.24l91.95 -368.8 -224.5 -55.94 -89.51 359.09c-59.02,-14.72 -119.63,-28.59 -179.87,-42.34l90.16 -361.46 -224.36 -55.94 -92 368.68c-48.84,-11.12 -96.81,-22.11 -143.35,-33.69l0.26 -1.16 -309.59 -77.31 -59.72 239.78c0,0 166.56,38.18 163.05,40.53 90.91,22.69 107.35,82.87 104.62,130.57l-104.74 420.15c6.26,1.59 14.38,3.89 23.34,7.49 -7.49,-1.86 -15.46,-3.89 -23.73,-5.87l-146.81 588.57c-11.11,27.62 -39.31,69.07 -102.87,53.33 2.25,3.26 -163.17,-40.72 -163.17,-40.72l-111.46 256.98 292.15 72.83c54.35,13.63 107.61,27.89 160.06,41.3l-92.9 373.03 224.24 55.94 92 -369.07c61.26,16.63 120.71,31.97 178.91,46.43l-91.69 367.33 224.51 55.94 92.89 -372.33c382.82,72.45 670.67,43.24 791.83,-303.02 97.63,-278.78 -4.86,-439.58 -206.26,-544.44 146.69,-33.83 257.18,-130.31 286.64,-329.61l-0.07 -0.05zm-512.93 719.26c-69.38,278.78 -538.76,128.08 -690.94,90.29l123.28 -494.2c152.17,37.99 640.17,113.17 567.67,403.91zm69.43 -723.3c-63.29,253.58 -453.96,124.75 -580.69,93.16l111.77 -448.21c126.73,31.59 534.85,90.55 468.94,355.05l-0.02 0z" />
                                            </g>
                                        </g>
                                    </svg>
                                </span></option>
                                    <option>USDT TRC20</option>

                                </select>
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
