<a href="{{ route('books.edit', $book->id) }}" class="btn btn-success">
    <i class="fas fa-fw fa-pen mr-1"> </i>
    @lang('buttons.Edit')
</a>
<a href="{{ route('books.destroy', $book->id) }}" class="btn btn-danger">
    <i class="fas fa-fw fa-times mr-1"></i>
    @lang('buttons.Delete')
</a>
{{--@if($item->is_loan == true)--}}
{{--    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">--}}
{{--        <i class="fas fa-fw fa-pen mr-1"> </i>emprestar--}}
{{--    </a>--}}
{{--@endif--}}

