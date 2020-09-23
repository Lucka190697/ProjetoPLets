<div class="dropdown">
    <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"><i class="fa fa-list mr-2"></i>
    </a>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item text-success" href="{{ route('books.edit', $book->id) }}">
            <i class="fas fa-fw fa-pen mr-1"> </i>
        </a>
        <a class="dropdown-item text-danger" href="{{ route('books.destroy', $book->id) }}">
            <i class="fas fa-fw fa-times mr-1"></i>
        </a>
        <a class="dropdown-item text-info" href="{{route('loans.reservation', $book->id)}}">
            <i class="fa fa-check"></i>
        </a>
    </div>
</div>
