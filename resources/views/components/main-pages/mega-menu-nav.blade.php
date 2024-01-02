@props(['current', 'navTitle', 'megaMenus'])

@php
    $classes = ($current ?? false)
    ? 'current'
    : '';
@endphp

<li {{ $attributes->merge(['class' => $classes]) }}>
    <span>{{ $navTitle }}</span>
    <div class="mega-menu">
      <div class="mega-menu-bar row">

        @foreach ($megaMenus as $megaMenu)
            <div class="column col-lg-3 col-md-3 col-sm-12">
                @isset($megaMenu['title'])
                    <h3>{{ $megaMenu['title'] }}</h3>
                @endisset
              <ul>
                @foreach ($megaMenu['links'] as $link)
                    <li><a href="{{ $link['href'] }}">{{ $link['title'] }}</a></li>
                @endforeach
              </ul>
            </div>

        @endforeach

      </div>
    </div>
</li>
