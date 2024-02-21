<div class="art-a art-pagination">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <a href="#" class="art-link art-color-link art-w-chevron art-left-link art-link-disabled"><span>Previous
                page</span></a>
    @else
        <a href="{{ $paginator->previousPageUrl() }}"
            class="art-link art-color-link art-w-chevron art-left-link"><span>Previous
                page</span></a>
    @endif
    {{-- Pagination Elements --}}
    <div class="art-pagination-center art-m-hidden">
        <a href="#"></a>
        @foreach ($elements as $element)
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="art-active-pag" href="#">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach
    </div>
    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="art-link art-color-link art-w-chevron "><span>Next
                page</span></a>
    @else
        <a href="#" class="art-link art-color-link art-w-chevron art-link-disabled "><span>Next
                page</span></a>
    @endif
</div>
