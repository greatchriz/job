<x-app-layout>
    <x-dashboard-card>



        <x-inner-banner pageTitle="Apply For A Visa" />

        {{--  html escape blade rendering --}}
        @foreach ($textFormInputs as $textFormInput)
            <a href=""> Obi is a boy </a>
        @endforeach









    </x-dashboard-card>
</x-app-layout>
