@props(['terms_and_condition'])
<div class="text-box">

    @isset($terms_and_condition['content'])

            <h3><b>{{ $terms_and_condition['title'] }}</b></h3>

            <div>
                {!! $terms_and_condition['content'] !!}
            </div>
    @endisset

    @isset($terms_and_condition['sub_content'])
        @foreach ($terms_and_condition['sub_content'] as $subcontent)

            <h3 style="margin-top: 25px"><b>{{ $subcontent['title'] }}</b></h3>

            <div>
                {!! $subcontent['content'] !!}
            </div>
        @endforeach

    @endisset







</div>
