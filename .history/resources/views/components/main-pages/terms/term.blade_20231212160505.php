@props(['terms_and_condition'])
<div class="text-box">
    <h3><b>{{ $terms_and_condition['title'] }}</b></h3>

    @isset($terms_and_condition['sub_content'])
        @foreach ($terms_and_condition['sub_content'] as $subcontent)
            <div>
                {!! $subcontent['content'] !!}
            </div>
        @endforeach

    @endisset





</div>
