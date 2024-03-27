{{-- add main-pages/layout component --}}

<x-main-pages.layout>

    {{-- named slots oh header --}}

    @slot('mainHeader')
        <x-main-pages.header class="header-style-four" />

    @endslot

    @props(['section'])

    <!-- Call To Action Two -->
    <section
        class="call-to-action-two"
        style="background-image: url(images/background/8.png); margin-top: 40px;"
    >
        <div class="auto-container wow fadeInUp">
            <div class="sec-title light text-center">

                    <h2>title</h2>

                    <div class="text">text</div>

            </div>
        </div>
    </section>
    <!-- End Call To Action -->

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

    $secBtnUrl = "https://help-now.net/visa-apply";

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


        $section = [
            'text' => 'Our experienced UK immigration lawyers can help you through each step of the immigration process.
            ?',

            'btnText' => 'Get in touch',

            'btnUrl' => 'https://help-now.net/contact-us',

        ]
    @endphp

    <x-main-pages.home.call-to-action
        :section="$section"
    />

    @php

        $section = [
            'title' => 'Why choose the Immigration Advice Service team?',
            'texts' => [
                'Navigating the complexities of UK immigration law and visa applications can be a confusing process without the right help. Whatever the nature of your case, Helpnows’ immigration lawyers are ready to take this stressful burden away from you and your family.',
            ],
        ];
    @endphp

    <x-main-pages.home.no-image-content
        :section="$section"
    />

    @php

        $section = [
            'title' => 'Why hire one of Helpnows’ lawyers?',
            'texts' => [
                'Our experienced nationwide immigration lawyers have an exemplary track record in Family and Partner Visa cases, as well as other point-based applications, such as Tier 1 and Skilled worker permits',
                'Our bespoke services are available to those who plan to enter the UK, those who are already in the country and wish to extend their stay, and to asylum seekers and bail detainees.',
                'Our highly qualified and fully accredited immigration advisors have extensive knowledge of all key immigration legislation.',
                'All our lawyers and caseworkers undergo regular accredited training to keep abreast of any changes, including Home Office policies, practices and procedures, as well as in the Immigration and Asylum Tribunal.',
                'We are also leading voices in the industry and have provided in-depth insight for various publications on how immigration and other political policies can impact the UK. Our staff’s work has been featured in mainstream media, such as The Huffington Post, The Guardian and The Telegraph.',
            ],
        ];
    @endphp

    <x-main-pages.home.no-image-content
        :section="$section"
    />

    @php

    $section = [
        'title' => 'How can Helpnow help me and my family?',
        'texts' => [
            'We have a nationwide network of immigration advice centres, and we provide efficient and excellent support to all our clients across Britain. We employ some of the best immigration specialists and caseworkers in the UK, and our staff are OISC-trained and regulated.',
            'As well as making private and corporate applications for clients, we conduct publicly funded work for asylum-seekers, domestic-abuse survivors and victims of trafficking. IAS has a Legal Aid Agency Specialist Quality Mark (SQM).',
        ],
        'listHeader' => 'We offer professional assistance for several immigration processes, such as:',

        'lists' => [
            'Entry clearance, Leave to Enter and Leave to Remain',
            'Applications under the Point-Based System',
            'Marriage and Family Visas',
            'Permanent residency and British citizenship applications',
            'Work permits and employment Immigration services',
            'Deportation appeals, bail and detention matters',
            'Refugee and humanitarian protection enquiries',
            'Appeals and judicial review challenges',
        ]
    ];
@endphp

<x-main-pages.home.no-image-content
    :section="$section"
/>


    <x-main-pages.home.work-section />


    {{-- <x-main-pages.home.job-section /> --}}

    <x-main-pages.home.registeration-banners />

    <x-main-pages.home.top-companies />

</x-main-pages.layout>
