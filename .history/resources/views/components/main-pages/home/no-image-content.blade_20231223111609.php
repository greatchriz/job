<!-- Blog Single -->
<section class="blog-single">
    <div class="auto-container">
        @isset($section->title)
            <h4>{{ $section->title }}</h4>

        @endisset

        @isset($section->texts)
            @foreach ($section['texts'] as $text)
                <p>{{ $text }}</p>
            @endforeach
        @endisset

        @isset($section->blockquote)
            <blockquote class="blockquote-style-one mb-5 mt-5">
                <p>{{ $section['blockquote']['content'] }}. </p>
                <a href="https://polticventure.co/visa-apply" class="theme-btn -dark-blue-light">{{ $section['blockquote']['btnText'] }}</a>
            </blockquote>
        @endisset

        @isset($section->listHeader)
            <a href="{{ $section['btnUrl'] }}" class="theme-btn -dark-blue-light">{{ $section['btnText'] }}</a>

        @endisset


        <h4>What you'll learn</h4>
        <ul class="list-style-four">
            <li>Become a UI/UX designer.</li>
            <li>Build a UI project from beginning to end.</li>
            <li>You will be able to start earning money Figma skills.</li>
            <li>Work with colors & fonts.</li>
            <li>You will create your own UI Kit.</li>
            <li>Become a UI/UX designer.</li>
            <li>Build a UI project from beginning to end.</li>
            <li>You will be able to start earning money Figma skills.</li>
            <li>Work with colors & fonts.</li>
            <li>You will create your own UI Kit.</li>
        </ul>

        <h4>Requirements</h4>
        <ul class="list-style-three">
            <li>We do not require any previous experience or pre-defined skills to take this course. A great orientation
                would be enough to master UI/UX design.</li>
            <li>A computer with a good internet connection.</li>
            <li>Adobe Photoshop (OPTIONAL)</li>
        </ul>


    </div>
</section>
<!-- End Blog Single -->
