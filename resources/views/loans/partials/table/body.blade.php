<tr>
    <td>{{$loan->book_id}}</td>
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
