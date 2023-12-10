<x-app-layout>
    <x-dashboard-card>



        <x-inner-banner pageTitle="Apply For A Visa" />

        {{--  html escape blade rendering --}}
        @foreach ($textFormInputs as $textFormInput)

        @endforeach

        {{--  html escape blade rendering --}}
        @foreach ($selectInpts as $selectInpt)

        @endforeach




    </x-dashboard-card>
</x-app-layout>
