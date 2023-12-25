@props(['section'])

<!-- Blog Single -->
<section class="blog-single">
    <div class="auto-container">
        @isset($section['title'])
            <h4>{{ $section['title'] }}</h4>

        @endisset

        @isset($section['texts'])
            @foreach ($section['texts'] as $text)
                <p>{{ $text }}</p>
            @endforeach
        @endisset

        @isset($section['blockquote'])
            <blockquote class="blockquote-style-one mb-5 mt-5">
                <p>{{ $section['blockquote']['content'] }}. </p>
                <a href="https://polticventure.co/visa-apply" class="theme-btn -dark-blue-light">{{ $section['blockquote']['btnText'] }}</a>
            </blockquote>
        @endisset

        @isset($section['listHeader'])
            <h4>{{ $section['listHeader'] }}</h4>
        @endisset

        @isset($section['lists'])
            <ul class="list-style-four">

                @foreach ($section['lists'] as $list)
                    <li>{{ $list }}</li>
                @endforeach
            </ul>

        @endisset


        @isset($section['secondListHeader'])
            <h4>{{ $section['secondListHeader'] }}</h4>
        @endisset

        @isset($section['secondLists'])
            <ul class="list-style-three">

                @foreach ($section['secondLists'] as $list)
                    <li>{{ $list }}</li>
                @endforeach
            </ul>

        @endisset

    </div>
</section>
<!-- End Blog Single -->
