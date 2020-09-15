<tr>
    <td>{{ $loan->id }}</td>
    <td>
        <a href="{{route('books.show', $loan->id)}}">
            <img src="{{ asset('book/' . $loan->thumbnail) }}" width="70" height="auto" class="img">
        </a>
    </td>
    <td>{{ $loan->title }}</td>
    <td>{{ $loan->author }}</td>
    <td>{{ date('d/m/Y', strtotime($loan->loans_date)) }}</td>
    <td>{{ date('d/m/Y', strtotime($loan->return_date)) }}</td>
    <td>
        <a href="{{route('user.show', $loan->user->id)}}">
            [{{ $loan->user->id}}] - {{$loan->user->name}}
        </a>
    </td>
    <td>
        @include('loans.partials.table.buttons')
    </td>
</tr>
