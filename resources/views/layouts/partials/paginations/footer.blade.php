<div class="card-footer py-4">
    @if($title == 'Search')
    <nav class="d-flex justify-content-end">
        <a href="{{ URL::previous() }}" class="btn btn-secondary">
            <span class="fa fa-arrow-left mr-2"></span> @lang('buttons.Back')
        </a>
    </nav>
    @else
    <nav class="d-flex justify-content-end">
        {{$title == 'Books List' ? $books->links() : ''}}
    </nav>
    @endif
</div>
