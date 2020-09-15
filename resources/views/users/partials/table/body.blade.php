<tr>
    <td>
        <a href="{{ route('user.show', $user->id) }}">
        <img src="{{ asset('/users/'. $user->thumbnail) }}"
        class="img thumbnail"
        width="50" height="auto">
        </a>
    </td>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->phone }}</td>
    <td>{{ date('d/m/Y', strtotime($user->created_at)) }} </td>
    <td class="badge badge-info">
        {{ $user->isadmin == true ? 'Admin' : 'User' }}
    </td>
    <td>
        @include('users.partials.table.buttons')
    </td>
</tr>
