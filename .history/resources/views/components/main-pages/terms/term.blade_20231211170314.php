@props(['title', 'text' => '', 'text2' => '', 'text3' => '', 'text4' => '', 'text5' => ''])
<div class="text-box">
    <h3>{{ $title }}</h3>
    {{-- check if text is not empty --}}
    @if (!empty($text))
        <p>{{ $text }}</p>
    @endif
    @if (!empty($text2))
        <p>{{ $text2 }}</p>
    @endif
    @if (!empty($text3))
        <p>{{ $text3 }}</p>
    @endif
    @if (!empty($text4))
        <p>{{ $text4 }}</p>
    @endif
    @if (!empty($text5))
        <p>{{ $text5 }}</p>
    @endif
  </div>
