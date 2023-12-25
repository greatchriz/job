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
        $secTexts = [
            'At the Immigration Advice Service, our lawyers specialise in a <a href="https://iasservices.org.uk/visas/">wide range of&nbsp;UK visas</a>, nationality and asylum applications and have represented clients in various successful complex and high-profile cases.',
            'We can provide expert advice, practical assistance and professional representation to guide you through the application and decision-making process, from start to finish.',
            'We can help with any immigration service you are looking for. Speak to our customer client team to learn more about our packages and to receive the professional help you need to succeed.'
];

        $secImage = "/images/resource/about-img2.jpg"

        $secTitle = "How our UK immigration lawyers can help"

        $secBtnText = "Get in touch"

        $secBtnUrl = "https://polticventure.co/visa-apply"

        $secId = "1"

    @endphp

    <x-main-pages.home.one-image-content :secImage="$secImage" :secTitle="$secTitle" :secBtnText="$secBtnText" :secBtnUrl="$secBtnUrl" :secId="$secId">


        @foreach ($secTexts as $text)
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
