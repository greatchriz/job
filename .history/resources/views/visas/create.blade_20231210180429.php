<x-app-layout>
    <x-dashboard-card>



        <x-inner-banner pageTitle="Apply For A Visa" />

        <div class="edit-profile-inner">
            <div class="form-wrapper">
                <x-create-visa-form>
                    {{-- Personal information --}}
                    {{-- Passport information --}}
                    {{-- Travel information --}}
                    {{-- Employment information --}}
                    {{-- Educational background --}}
                    {{-- Financial information --}}
                    {{-- Additional information --}}

                    {{-- $inpts --}}
                    {{-- $inpts2 --}}
                    {{-- $inpts3 --}}
                    {{-- $inpts4 --}}
                    {{-- $inpts5 --}}
                    {{-- $inpts6 --}}
                    {{-- $inpts7 --}}

                    @slot('personal')

                    <form class="edit-profile-form profile-form  mb-60">
                        <div class="row">
                            @foreach ($inpts as $inpt )
                                <x-create-visa-input  :label="$inpt->label" :type="$inpt->type" :placehelder="$inpt->placehelder" :name="$inpt->name" :icon="$inpt->icon" />
                            @endforeach

                        </div>
                    </form>

                    @endslot

                    @slot('passport')

                    <form class="edit-profile-form profile-form  mb-60">
                        <div class="row">
                            @foreach ($inpts2 as $inpt )
                                <x-create-visa-input  :label="$inpt->label" :type="$inpt->type" :placehelder="$inpt->placehelder" :name="$inpt->name" :icon="$inpt->icon" />
                            @endforeach

                        </div>
                    </form>

                    @endslot

                    @slot('travel')

                    <form class="edit-profile-form profile-form  mb-60">
                        <div class="row">
                            @foreach ($inpts3 as $inpt )
                                <x-create-visa-input  :label="$inpt->label" :type="$inpt->type" :placehelder="$inpt->placehelder" :name="$inpt->name" :icon="$inpt->icon" />
                            @endforeach

                        </div>
                    </form>

                    @endslot

                    @slot('employment')

                        <form class="edit-profile-form profile-form  mb-60">
                            <div class="row">
                                @foreach ($inpts4 as $inpt )
                                    <x-create-visa-input  :label="$inpt->label" :type="$inpt->type" :placehelder="$inpt->placehelder" :name="$inpt->name" :icon="$inpt->icon" />
                                @endforeach

                            </div>
                        </form>

                    @endslot

                    @slot('education')

                        <form class="edit-profile-form profile-form  mb-60">
                            <div class="row">
                                @foreach ($inpts5 as $inpt )
                                    <x-create-visa-input  :label="$inpt->label" :type="$inpt->type" :placehelder="$inpt->placehelder" :name="$inpt->name" :icon="$inpt->icon" />
                                @endforeach

                            </div>
                        </form>

                    @endslot

                    @slot('financial')

                        <form class="edit-profile-form profile-form  mb-60">
                            <div class="row">
                                @foreach ($inpts6 as $inpt )
                                    <x-create-visa-input  :label="$inpt->label" :type="$inpt->type" :placehelder="$inpt->placehelder" :name="$inpt->name" :icon="$inpt->icon" />
                                @endforeach

                            </div>
                        </form>

                    @endslot

                    @slot('additional')

                        <form class="edit-profile-form profile-form  mb-60">
                            <div class="row">
                                @foreach ($inpts7 as $inpt )
                                    <x-create-visa-input  :label="$inpt->label" :type="$inpt->type" :placehelder="$inpt->placehelder" :name="$inpt->name" :icon="$inpt->icon" />
                                @endforeach

                            </div>
                        </form>

                    @endslot


                        @slot('tabPane')

                        @foreach ($tabPanes as $tabpane)

                            <x-tab-button
                                :id="$tabpane['id']"
                                :label="$tabpane['label']"
                            />
                            @endforeach

                        @endslot


                </x-create-visa-form>


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
