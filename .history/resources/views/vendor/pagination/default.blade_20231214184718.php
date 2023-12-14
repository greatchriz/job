@if ($paginator->hasPages())
<nav class="ls-pagination">
    <ul class="">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="prev" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a href="#"><i class="fa fa-arrow-left"></i></a>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><a href="#">{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="current-page" aria-current="page">
                                <a href="#">{{ $page }}</a>
                            </li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="next">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif


<!-- Pagination -->
<nav class="ls-pagination">
    <ul>
      <li class="prev"><a href="#"><i class="fa fa-arrow-left"></i></a></li>
      <li><a href="#">1</a></li>
      <li><a href="#" class="current-page">2</a></li>
      <li><a href="#">3</a></li>
      <li class="next"><a href="#"><i class="fa fa-arrow-right"></i></a></li>
    </ul>
  </nav>
