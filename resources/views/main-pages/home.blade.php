{{-- add main-pages/layout component --}}

<x-main-pages.layout>

    {{-- named slots oh header --}}

    @slot('mainHeader')
        <x-main-pages.header class="header-style-four" />

    @endslot

    <x-main-pages.home.banner-section />

    <x-main-pages.home.about-section />


    {{-- <x-main-pages.home.job-categories /> --}}

    <x-main-pages.home.work-section />


    {{-- <x-main-pages.home.job-section /> --}}

    <x-main-pages.home.registeration-banners />

    <x-main-pages.home.top-companies />

    <x-main-pages.home.pricing-section />

    {{-- <x-main-pages.home.subscribe-section /> --}}



</x-main-pages.layout>
