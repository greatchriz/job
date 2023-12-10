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


                    <x-tab-button active="active" id="personal" label="Personal information" />

                    <x-tab-button active="" id="passport" label="Passport information" />



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
                    <form action="{{ route('visas.store') }}" method="POST" enctype="multipart/form-data" style="display: none">
                        @csrf

                        @foreach ($tabPanes as $tabPane)

                            {{-- $inpts variable from the controller --}}
                            <div class="tab-pane fade show active"
                                id="{{ $tabPane['id'] }}" role="tabpanel"
                                aria-labelledby="{{ $tabPane['label'] }}">
                                <form class="edit-profile-form profile-form  mb-60" @disabled(true)>
                                    <div class="row">

                                        {{--  html escape blade rendering --}}
                                        @foreach ($inpts as $inpt)
                                            <div class="col-md-6">
                                                <div
                                                    class="form-inner mb-25">
                                                    <label for="{{ $inpt->id }}">{{ $inpt->label }}*</label>
                                                    <div class="input-area">
                                                        <img
                                                            src="{{ $inpt->icon }}"
                                                            alt>
                                                        <input type="text"
                                                            id="{{ $inpt->id }}"
                                                            name="{{ $inpt->name }}"
                                                            value="{{ old($inpt->name) }}"
                                                            placeholder="{{ $inpt->placeholder }}">
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </form>
                            </div>

                        @endforeach

                        {{-- $inpts2 variable from the controller --}}
                        <div
                            class="tab-pane fade"
                            id="profile"
                            role="tabpanel"
                            aria-labelledby="profile-tab"
                        >
                            <form class="edit-profile-form profile-form" @disabled(true)>
                                <div class="row">
                                    {{--  html escape blade rendering --}}
                                    @foreach ($inpts2 as $inpt2)
                                        <div class="col-md-6">
                                            <div
                                                class="form-inner mb-25">
                                                <label for="{{ $inpt2->id }}">{{ $inpt2->label }}*</label>
                                                <div class="input-area">
                                                    <img
                                                        src="{{ $inpt2->icon }}"
                                                        alt>
                                                    <input type="text"
                                                        id="{{ $inpt2->id }}"
                                                        name="{{ $inpt2->name }}"
                                                        value="{{ old($inpt2->name) }}"
                                                        placeholder="{{ $inpt2->placeholder }}">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-md-6">
                                        <div
                                            class="form-inner mb-25">
                                            <label for="country_selector">Select a country here*</label>
                                            <div class="input-area">
                                                {{-- <img
                                                    src="assets/images/icon/user-2.svg"
                                                    alt> --}}
                                                <input type="text"
                                                    style="margin-left: 50px"
                                                    id="country_selector"
                                                    name="firstname"
                                                    >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        {{-- $inpts3 variable from the controller --}}
                        <div
                            class="tab-pane fade"
                            id="profile"
                            role="tabpanel"
                            aria-labelledby="profile-tab"
                        >
                            <form class="edit-profile-form profile-form" @disabled(true)>
                                <div class="row">
                                    {{--  html escape blade rendering --}}
                                    @foreach ($inpts3 as $inpt3)
                                        <div class="col-md-6">
                                            <div
                                                class="form-inner mb-25">
                                                <label for="{{ $inpt3->id }}">{{ $inpt3->label }}*</label>
                                                <div class="input-area">
                                                    <img
                                                        src="{{ $inpt3->icon }}"
                                                        alt>
                                                    <input type="text"
                                                        id="{{ $inpt3->id }}"
                                                        name="{{ $inpt3->name }}"
                                                        value="{{ old($inpt3->name) }}"
                                                        placeholder="{{ $inpt3->placeholder }}">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </form>
                        </div>

                        {{-- $inpts4 variable from the controller --}}
                        <div
                            class="tab-pane fade"
                            id="profile"
                            role="tabpanel"
                            aria-labelledby="profile-tab"
                        >
                            <form class="edit-profile-form profile-form" @disabled(true)>
                                <div class="row">
                                    {{--  html escape blade rendering --}}
                                    @foreach ($inpts4 as $inpt4)
                                        <div class="col-md-6">
                                            <div
                                                class="form-inner mb-25">
                                                <label for="{{ $inpt4->id }}">{{ $inpt4->label }}*</label>
                                                <div class="input-area">
                                                    <img
                                                        src="{{ $inpt4->icon }}"
                                                        alt>
                                                    <input type="text"
                                                        id="{{ $inpt4->id }}"
                                                        name="{{ $inpt4->name }}"
                                                        value="{{ old($inpt4->name) }}"
                                                        placeholder="{{ $inpt4->placeholder }}">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </form>
                        </div>

                        {{-- $inpts5 variable from the controller --}}
                        <div
                            class="tab-pane fade"
                            id="profile"
                            role="tabpanel"
                            aria-labelledby="profile-tab"
                        >
                            <form class="edit-profile-form profile-form" @disabled(true)>
                                <div class="row">
                                    {{--  html escape blade rendering --}}
                                    <div class="col-md-6">
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
                                    </div>
                                    @foreach ($inpts5 as $inpt5)
                                        <div class="col-md-6">
                                            <div
                                                class="form-inner mb-25">
                                                <label for="{{ $inpt5->id }}">{{ $inpt5->label }}*</label>
                                                <div class="input-area">
                                                    <img
                                                        src="{{ $inpt5->icon }}"
                                                        alt>
                                                    <input type="text"
                                                        id="{{ $inpt5->id }}"
                                                        name="{{ $inpt5->name }}"
                                                        value="{{ old($inpt5->name) }}"
                                                        placeholder="{{ $inpt5->placeholder }}">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </form>
                        </div>

                        {{-- $inpts6 variable from the controller --}}
                        <div
                            class="tab-pane fade"
                            id="profile"
                            role="tabpanel"
                            aria-labelledby="profile-tab"
                        >
                            <form class="edit-profile-form profile-form" @disabled(true)>
                                <div class="row">
                                    {{--  html escape blade rendering --}}
                                    @foreach ($inpts6 as $inpt6)
                                        <div class="col-md-6">
                                            <div
                                                class="form-inner mb-25">
                                                <label for="{{ $inpt6->id }}">{{ $inpt6->label }}*</label>
                                                <div class="input-area">
                                                    <img
                                                        src="{{ $inpt6->icon }}"
                                                        alt>
                                                    <input type="text"
                                                        id="{{ $inpt6->id }}"
                                                        name="{{ $inpt6->name }}"
                                                        value="{{ old($inpt6->name) }}"
                                                        placeholder="{{ $inpt6->placeholder }}">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </form>
                        </div>

                        {{-- $inpts7 variable from the controller --}}
                        <div
                            class="tab-pane fade"
                            id="profile"
                            role="tabpanel"
                            aria-labelledby="profile-tab"
                        >
                            <form class="edit-profile-form profile-form" @disabled(true)>
                                <div class="row">
                                    {{--  html escape blade rendering --}}
                                    @foreach ($inpts7 as $inpt7)
                                        <div class="col-md-6">
                                            <div
                                                class="form-inner mb-25">
                                                <label for="{{ $inpt7->id }}">{{ $inpt7->label }}*</label>
                                                <div class="input-area">
                                                    <img
                                                        src="{{ $inpt7->icon }}"
                                                        alt>
                                                    <input type="text"
                                                        id="{{ $inpt7->id }}"
                                                        name="{{ $inpt7->name }}"
                                                        value="{{ old($inpt7->name) }}"
                                                        placeholder="{{ $inpt7->placeholder }}">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </form>
                        </div>





                    </form>
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
