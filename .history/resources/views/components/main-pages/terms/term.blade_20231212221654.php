@props(['terms_and_condition'])
<div class="text-box">


    {{ $slot }}

    {{ $SubContent }}

    @isset($terms_and_condition['content'])

            <h3>{{ $terms_and_condition['title'] }}</h3>

            <p>
                {!! $terms_and_condition['content'] !!}
            </p>
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
