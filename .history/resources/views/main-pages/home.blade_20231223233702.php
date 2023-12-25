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
    'At the Immigration Advice Service, our lawyers specialise in a <a href="#">wide range of&nbsp;UK visas</a>, nationality
    and asylum applications and have represented clients in various successful complex and high-profile cases.',
    'We can provide expert advice, practical assistance and professional representation to guide you through the application
    and decision-making process, from start to finish.',
    'We can help with any immigration service you are looking for. Speak to our customer client team to learn more about our
    packages and to receive the professional help you need to succeed.'
    ];

    $secImage = "/images/resource/about-img2.jpg";

    $secTitle = "How our UK immigration lawyers can help";

    $secBtnText = "Get in touch";

    $secBtnUrl = "https://polticventure.co/visa-apply";

    $secId = "1";

    @endphp

    <x-main-pages.home.one-image-content
        :secImage="$secImage"
        :secTitle="$secTitle"
        :secBtnText="$secBtnText"
        :secBtnUrl="$secBtnUrl"
        :secId="$secId"
    >


        @foreach ($secTexts as $text)
        <div class="text">{!! $text !!}</div>

        @endforeach

    </x-main-pages.home.one-image-content>


    @php
        //<div class="block col-1__block">
        // <div class="content-area">
        // <h2 style="text-align: center;"><strong>Why choose the Immigration Advice Service team?</strong></h2>
        // <p style="text-align: center;">Navigating the complexities of UK immigration law and visa applications can be a confusing process without the right help. Whatever the nature of your case, IAS’ immigration lawyers are ready to take this stressful burden away from you and your family.</p>
        // </div>
        // </div>

        $section = [
            'title' => 'Why choose the Immigration Advice Service team?',
            'texts' => [
                'Navigating the complexities of UK immigration law and visa applications can be a confusing process without the right help. Whatever the nature of your case, IAS’ immigration lawyers are ready to take this stressful burden away from you and your family.',
            ]
        ]
    @endphp

    <x-main-pages.home.no-image-content
        :section="$section"
    />

    @php


        $section = [
            'text' => 'Our experienced UK immigration lawyers can help you through each step of the immigration process.
            ?',

            'btnText' => 'Get in touch',

            'btnUrl' => 'https://polticventure.co/contact-us',

        ]
    @endphp

    <x-main-pages.home.call-to-action
        :section="$section"
    />

    <x-main-pages.home.work-section />


    {{-- <x-main-pages.home.job-section /> --}}

    <x-main-pages.home.registeration-banners />

    <x-main-pages.home.top-companies />

    {{-- <x-main-pages.home.pricing-section /> --}}

    {{-- <x-main-pages.home.subscribe-section /> --}}



</x-main-pages.layout>
