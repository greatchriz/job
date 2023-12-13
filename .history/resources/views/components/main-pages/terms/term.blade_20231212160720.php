@props(['terms_and_condition'])
<div class="text-box">

    @isset($terms_and_condition['sub_content'])
        @foreach ($terms_and_condition['sub_content'] as $subcontent)

            <h3><b>{{ $subcontent['title'] }}</b></h3>

            <div>
                {!! $subcontent['content'] !!}
            </div>
        @endforeach

    @endisset







</div>
