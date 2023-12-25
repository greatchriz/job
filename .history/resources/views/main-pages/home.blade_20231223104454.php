{{-- add main-pages/layout component --}}

<x-main-pages.layout>

    {{-- named slots oh header --}}

    @slot('mainHeader')
        <x-main-pages.header class="header-style-four" />

    @endslot

    <x-main-pages.home.banner-section />

    <x-main-pages.home.about-section />


    <x-main-pages.home.content-section />

    @php
        // <div class="container container--col-1-1">
        // <div class="block col-1-1__block block--1">
        // <div class="titles">
        // <h2 class="title h2">
        // <strong>How our UK immigration lawyers can help</strong>
        // </h2>
        // </div>
        // <div class="content-area list-2-columns">
        // <p>At the Immigration Advice Service, our lawyers specialise in a <a href="https://iasservices.org.uk/visas/">wide range of&nbsp;UK visas</a>, nationality and asylum applications and have represented clients in various successful complex and high-profile cases.</p>
        // <p>We can provide expert advice, practical assistance and professional representation to guide you through the application and decision-making process, from start to finish.</p>
        // <p>We can help with any immigration service you are looking for. Speak to our customer client team to learn more about our packages and to receive the professional help you need to succeed.</p>
        // </div>
        // <div class="image">
        // </div>
        // </div>
        // <div class="block col-1-1__block block--2">
        // <div class="image">

        // <img src="/app/uploads/2019/09/immigration-visa-uk.jpg" srcset="" class="content-img" sizes="(max-width: 540px) 100vw,
        //             (max-width: 1359px) 50vw,
        //             680px" alt="immigration lawyers">
        // </div>
        // </div>
        // </div>

        // @props(['sectionImage' => '', 'sectionTitle' => '', 'sectionBtnText' => '', 'sectionBtnUrl' => '', 'sectionId' => ''])


        $sectionTexts = [
            'At the Immigration Advice Service, our lawyers specialise in a <a href="https://iasservices.org.uk/visas/">wide range of&nbsp;UK visas</a>, nationality and asylum applications and have represented clients in various successful complex and high-profile cases.',
            'We can provide expert advice, practical assistance and professional representation to guide you through the application and decision-making process, from start to finish.',
            'We can help with any immigration service you are looking for. Speak to our customer client team to learn more about our packages and to receive the professional help you need to succeed.'
        ]

        $sectionImage = '/images/resource/about-img2.jpg'

    @endphp

    <x-main-pages.home.one-image-content>


        @foreach ($sectionTexts as $text)
        <div class="text">{{ $text }}</div>

        @endforeach

    </x-main-pages.home.one-image-content>

    {{-- <x-main-pages.home.job-categories /> --}}

    <x-main-pages.home.work-section />


    {{-- <x-main-pages.home.job-section /> --}}

    <x-main-pages.home.registeration-banners />

    <x-main-pages.home.top-companies />

    {{-- <x-main-pages.home.pricing-section /> --}}

    {{-- <x-main-pages.home.subscribe-section /> --}}



</x-main-pages.layout>
