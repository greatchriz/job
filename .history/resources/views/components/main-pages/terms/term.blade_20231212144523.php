@props(['terms_and_conditions'])
<div class="text-box">
    <h3><b>{{ $terms_and_conditions['title'] }}</b></h3>
    @if($terms_and_conditions['sub_content' == ''])
        <div>
            {!! $terms_and_conditions['content'] !!}
        </div>
    @endif


</div>
