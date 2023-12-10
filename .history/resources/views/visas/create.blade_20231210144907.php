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

                    @slot('personal')

                    @endslot

                    @slot('passport')

                    @endslot

                    @slot('travel')

                    @endslot

                    @slot('employment')

                    @endslot

                    @slot('education')

                    @endslot

                    @slot('financial')

                    @endslot

                    @slot('additional')

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
