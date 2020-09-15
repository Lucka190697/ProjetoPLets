<tr>
    <td>
        <a href="{{ route('books.show', $book->id) }}">
            <img src="{{ asset('/book/'. $book->thumbnail) }}"
                 class="img thumbnail"
                 width="70" height="auto">
        </a>
    </td>
    <td>{{ $book->title }}</td><!-- $book->title -->
    <td>{{ $book->author }}</td>
    <td>{{ $book->isbn }}</td>
    <td>{{ $book->giver }}</td>
    <td>{{ date('d/m/Y', strtotime($book->entryDate)) }}</td>
    <td>@include('books.partials.table.buttons')</td>
</tr>
