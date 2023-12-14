@props(['number' => '', 'title' => '', 'rate' => ''])

<div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
    <div class="count-box"><span
            class="count-text"
            data-speed="3000"
            data-stop="{{ $number }}"
        >0</span>{{ $rate }}</div>
    <h4 class="counter-title">{{ $title }}</h4>
</div>
