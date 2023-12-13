@props(['terms_and_condition'])
<div class="text-box">


    <h3><b>{{ $terms_and_condition['title'] }}</b></h3>

    {{ $slot }}

    @isset($terms_and_condition['content'])

            <p>
                {!! $terms_and_condition['content'] !!}
            </p>
    @endisset

    @isset($terms_and_condition['sub_content'])
        @foreach ($terms_and_condition['sub_content'] as $subcontent)

            <h3 style="margin-top: 25px">{{ $subcontent['title'] }}</h3>

            <div>
                {!! $subcontent['content'] !!}
            </div>
        @endforeach

    @endisset







</div>
