@extends('layouts.dashboard.layout')

@section('upper-title')

<div class="upper-title-box">
    <h3>Edit Job</h3>

</div>

@endsection

@section('content')

<!-- Forms -->
<div class="row">
    <div class="col-lg-12">
        <h4 class="title">Form </h4>
        <div class="row">

            <div class="column col-lg-6 col-md-12">
                <form class="default-form">
                    <!-- Input -->
                    <div class="form-group">
                        <label>Input</label>
                        <input type="text" name="name" placeholder="Ali Tuf..">
                    </div>

                    <!-- Search Select -->
                    <div class="form-group chosen-search">
                        <label>Search Select boxes</label>
                        <select class="chosen-search-select">
                            <option>All Categories</option>
                            <option>Residential</option>
                            <option>Commercial</option>
                            <option>Industrial</option>
                            <option>Apartments</option>
                        </select>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group chosen-search">
                        <label>Textarea</label>
                        <textarea placeholder="Message"></textarea>
                    </div>
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
