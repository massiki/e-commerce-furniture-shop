@if ($paginator->hasPages())
  <ul class="pagination justify-content-center">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
      <li class="page-item disabled" aria-disabled="true">
        <span class="page-link"><i class="fa fa-angle-left"></i></span>
      </li>
    @else
      <li class="page-item">
        <button class="page-link" wire:click="setPage({{ $paginator->currentPage() - 1 }})" rel="prev" type="button">
          <i class="fa fa-angle-left"></i>
        </button>
      </li>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
      {{-- "Three Dots" Separator --}}
      @if (is_string($element))
        <li class="page-item disabled" aria-disabled="true">
          <span class="page-link">{{ $element }}</span>
        </li>
      @endif

      {{-- Array Of Links --}}
      @if (is_array($element))
        @foreach ($element as $page => $url)
          <li class="page-item">
            @if ($page == $paginator->currentPage())
              <button type="button" class="page-link active" aria-current="page">{{ $page }}</button>
            @else
              <button type="button" class="page-link"
                wire:click="setPage({{ $page }})">{{ $page }}</button>
            @endif
          </li>
        @endforeach
      @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
      <li class="page-item">
        <button class="page-link" wire:click="setPage({{ $paginator->currentPage() + 1 }})" rel="next"
          type="button">
          <i class="fa fa-angle-right"></i>
        </button>
      </li>
    @else
      <li class="page-item disabled" aria-disabled="true">
        <span class="page-link"><i class="fa fa-angle-right"></i></span>
      </li>
    @endif
  </ul>
@endif
