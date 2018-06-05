@if ($paginator->lastPage() > 1)
<ul class="pagination pg-teal justify-content-center">
    <!--Arrow left-->
        <li class="page-item {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
            <a class="page-link" aria-label="Previous" href="{{ $paginator->url(1) }}">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li class="page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
            <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
        </li>
    @endfor

    <!--Arrow right-->
        <li class="page-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
            <a class="page-link" aria-label="Next" href="{{ $paginator->url($paginator->currentPage()+1) }}" >
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
</ul>
@endif