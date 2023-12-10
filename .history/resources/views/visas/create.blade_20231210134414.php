<x-app-layout>
    <x-dashboard-card>



        <x-inner-banner pageTitle="Apply For A Visa" />

        <div class="edit-profile-inner">
            <div class="form-wrapper">
                <ul class="nav nav-tabs" id="myTab"
                    role="tablist">
                    {{-- loop over $tabPanes array and disoplay this nav-item-tab --}}

                    {{--
                        Personal information
                     Passport information
                     Travel information
                     Employment information
                     Educational background
                     Financial information
                     Additional information
                     Other --}}


                    <x-tab-button active="active" id="home" label="Personal information" />

                    <x-tab-button active="" id="passport" label="Passport information" />

                    <x-tab-button active="" id="travel" label="Travel information" />

                    <x-tab-button active="" id="employment" label="Employment information" />

                    <x-tab-button active="" id="education" label="Educational background" />

                    <x-tab-button active="" id="financial" label="Financial information" />

                    <x-tab-button active="" id="additional" label="Additional information" />



                    {{-- <li class="nav-item" role="presentation">
                        <button
                            class="nav-link active"
                            id="home-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#home"
                            type="button"
                            role="tab"
                            aria-controls="home"
                            aria-selected="true"
                        ><span></span>Basic
                            Information:</button>
                    </li> --}}

                    {{-- <li class="nav-item" role="presentation">
                        <button class="nav-link"
                            id="profile-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#profile"
                            type="button" role="tab"
                            aria-controls="profile"
                            aria-selected="false"><span></span>Profile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link"
                            id="contact-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#contact"
                            type="button" role="tab"
                            aria-controls="contact"
                            aria-selected="false"><span></span>Education</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link"
                            id="professional-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#professional"
                            type="button" role="tab"
                            aria-controls="professional"
                            aria-selected="false"><span></span>Professional
                            Info</button>
                    </li> --}}
                </ul>
                <div class="tab-content" id="myTabContent">


                        {{--
                            'inpts' => $inpts,
                            'inpts2' => $inpts2,
                            'inpts3' => $inpts3,
                            'inpts4' => $inpts4,
                            'inpts5' => $inpts5,
                            'inpts6' => $inpts6,
                            'inpts7' => $inpts7,
                        --}}

                        <x-tab-content active="show active" id="home" label="Personal information" :inpts="$inpts"/>

                        <x-tab-content active="" id="passport" label="Passport information" :inpts="$inpts2"/>

                        <x-tab-content active="" id="travel" label="Travel information" :inpts="$inpts3"/>

                        <x-tab-content active="" id="employment" label="Employment information" :inpts="$inpts4"/>

                        <x-tab-content active="" id="education" label="Educational background" :inpts="$inpts5"/>

                        <x-tab-content active="" id="financial" label="Financial information" :inpts="$inpts6"/>

                        <x-tab-content active="" id="additional" label="Additional information" :inpts="$inpts7"/>
                </div>
            </div>
        </div>


        {{-- <div class="col-md-6">
            <div
                class="form-inner mb-25">
                <label for="country_selector">Select a country here*</label>
                <div class="input-area">

                    <input type="text"
                        style="margin-left: 50px"
                        id="country_selector"
                        name="firstname"
                        >
                </div>
            </div>
        </div> --}}








    </x-dashboard-card>
</x-app-layout>
