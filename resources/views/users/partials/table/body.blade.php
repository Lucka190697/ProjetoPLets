<tr>
    <td>
        <a href="{{ route('user.show', $user->id) }}">
        <img src="{{ asset('/users/'. $user->thumbnail) }}"
        class="img thumbnail"
        width="70" height="auto">
        </a>
    </td>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->phone }}</td>
    <td>{{ $user->created_at = date('d/m/Y', strtotime($user->created_at)) }} </td>
    <td>
        @include('users.partials.table.buttons')
    </td>
</tr>
