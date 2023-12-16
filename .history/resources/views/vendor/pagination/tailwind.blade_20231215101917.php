@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="ls-pagination">
        <ul>
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())

                <li class="prev">
                    <a href="#">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                </li>
            @else
                <li class="prev">
                    <a href="{{ $paginator->previousPageUrl() }}">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                </li>
            @endif

            @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li><a href="#">{{ $element }}</a></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li><a href="#" class="current-page">{{ $page }}</a></li>
                                @else
                                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
            @endforeach


            @if ($paginator->hasMorePages())

                <li class="next">
                    <a href="{{ $paginator->nextPageUrl() }}">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </li>
            @else
                <li class="next">
                    <a href="#">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </li>
            @endif




        </ul>

    </nav>

    <div class="showing-result">
        <div class="text">
            {!! __('Showing') !!}
            @if ($paginator->firstItem())
                <strong>{{ $paginator->firstItem() }}</strong>
                {!! __('to') !!}
                <strong>{{ $paginator->lastItem() }}</strong>
            @else
                <strong>{{ $paginator->count() }}</strong>
            @endif
            {!! __('of') !!}
            <strong>{{ $paginator->total() }}</strong>
            {!! __('results') !!}
        </div>
    </div>
@endif
