@props(['terms_and_condition'])
<div class="text-box">
    <h3><b>{{ $terms_and_condition['title'] }}</b></h3>
    @if($terms_and_condition['sub_content' == ''])
        <div>
            {!! $terms_and_condition['content'] !!}
        </div>
    @else
        @foreach ($terms_and_condition['sub_content'] as $sub_content)
            <div>
                {!! $terms_and_condition['sub_content']['content'] !!}
            </div>
        @endforeach
    @endif



</div>
