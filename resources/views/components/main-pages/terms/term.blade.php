@props(['terms_and_condition'])
<div class="text-box">

    @unless($terms_and_condition['title'] === 'Introduction')

    <h3><b>{{ $terms_and_condition['title'] }}</b></h3>

    @endunless

    {{ $slot }}

</div>
