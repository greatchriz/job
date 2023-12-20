@props(['active'])

@php
    $classes = ($active ?? false)
@endphp

<li class="{{ $classes }}">
    <a href="dashboard.html"> <i class="la la-home"></i> Dashboard</a>
</li>
