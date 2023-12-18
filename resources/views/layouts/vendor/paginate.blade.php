
<!-- resources/views/layouts/vendor/paginate.blade.php -->
  
@if ($paginator->hasPages())
    <nav aria-label="Page navigation example">
        <ul class="pagination float-end">
            @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link">
                 First Page
                </span>
            </li>
            <li class="page-item disabled">
                <span class="page-link" >
                  <i class="bi bi-arrow-left"></i>
                </span>
            </li>
            @else
            <li class="page-item">
                <a class="page-link" 
                href="{{ $paginator->url('') }}">
                 First Page
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" 
                href="{{ $paginator->previousPageUrl() }}">
              <i class="bi bi-arrow-left"></i>
                </a>
            </li>
            @endif
    
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled">
                        <span class="page-link">{{ $element }}</span>
                    </li>
                @endif
    
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active">
                                <a class="page-link">{{ $page }}</a>
                            </li>
                        @else
                        <li class="page-item">
                            <a class="page-link" 
                            href="{{ $url }}">{{ $page }}</a>
                        </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
    
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" 
                    href="{{ $paginator->nextPageUrl() }}" 
                    rel="next">
                    <i class="bi bi-arrow-right"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}" rel="last" >Last Page</a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link">
                        <i class="bi bi-arrow-right"></i>
                    </span>
                </li>

                <li class="page-item disabled">
                    <span class="page-link">Last Page</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
  