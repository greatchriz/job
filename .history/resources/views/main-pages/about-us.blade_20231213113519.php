<x-main-pages.layout>

    {{-- named slots oh header --}}

    @slot('mainHeader')
        <x-main-pages.header class="header-style-four" />

    @endslot

    <!-- Page Title -->
    <x-main-pages.page-title pageTitle="About Us" />

</x-main-pages.layout>
