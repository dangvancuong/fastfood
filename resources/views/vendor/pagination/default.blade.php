@if ($paginator->hasPages())
    <div class="pagination-wrapper m-t-20">
        <nav class="pagination is-centered">
            @if ($paginator->onFirstPage())
                <a class="pagination-previous" disabled>{{ __('validation.other.left') }}</a>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="pagination-previous" rel="prev">
                    {{ __('validation.other.left') }}</a>
            @endif
            <ul class="pagination-list">
                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    @if (is_string($element))
                        <li><span class="pagination-ellipsis">{{ __('validation.other.cham') }}</span></li>
                    @endif
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li>
                                    <a class="pagination-link is-current">{{ $page }}</a>
                                </li>
                            @else
                                <li><a href="{{ $url }}" class="pagination-link">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </ul>
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="pagination-next" rel="next">
                    {{ __('validation.other.right') }}</a>
            @else
                <a class="pagination-next" disabled>{{ __('validation.other.right') }}</a>
            @endif
        </nav>
    </div>
@endif
