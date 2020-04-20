@if ($paginator->hasPages())
<div class="row" style="margin-top: 25px;">
    <div class="col-12">
        <ul class="c-pagination u-mb-medium">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li><a class="c-pagination__link" href="javascript:;" aria-disabled="true" disabled><i class="feather icon-chevron-left"></i> </a></li>
            @else
                <li><a class="c-pagination__link" href="{{ $paginator->previousPageUrl() }}" ><i class="feather icon-chevron-left"></i> </a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li><span class="c-pagination__link" style="background: transparent;">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li><a class="c-pagination__link is-active" href="javascript:;" aria-disabled="true" disabled>{{ $page }}</a></li>
                        @else
                            <li><a class="c-pagination__link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a class="c-pagination__link" href="{{ $paginator->nextPageUrl() }}" > <i class="feather icon-chevron-right"></i> </a>
                </li>
            @else
                <li>
                    <a class="c-pagination__link"  href="javascript:;" aria-disabled="true" disabled > <i class="feather icon-chevron-right"></i> </a>
                </li>
            @endif
        </ul>
    </div>
</div>
@endif