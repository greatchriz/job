@props(['section'])

<!-- Call To Action Two -->
<section
    class="call-to-action-two"
    style="background-image: url(images/background/8.png);"
>
    <div class="auto-container wow fadeInUp">
        <div class="sec-title light text-center">
            @isset($section['title'])
                <h2>{{ $section['title'] }}</h2>

            @endisset
            @isset($section['text'])
                <div class="text">{{ $section['text'] }}</div>

            @endisset
        </div>

        @isset($section['btnText'])
        <div class="btn-box">
            <a
                href="{{ $section['btnUrl'] }}"
                class="theme-btn btn-style-three"
            >{{ $section['btnText'] }}</a>
        </div>
        @endisset
    </div>
</section>
<!-- End Call To Action -->
