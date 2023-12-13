@props(['title', 'text' => '', 'text2' => '', 'text3' => '', 'text4' => '', 'text5' => ''])
<div class="text-box">
    <h3>{{ $title }}</h3>
    <p>{{ $text }}</p>
    <p>{{ $text2 }}</p>
    {{ $text }}
  </div>
