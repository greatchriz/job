@props(['terms_and_conditions'])
<div class="text-box">
    <h3><b>{{ $terms_and_conditions['title'] }}</b></h3>

    <div>
        {!! $terms_and_conditions['content'] !!}
</div>

</div>
