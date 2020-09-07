<a href="{{ route('user.edit', $user->id) }}" class="btn btn-success">
    <i class="fas fa-fw fa-pen mr-1"> </i>Edit
</a>
<a href="{{ route('user.destroy', $user->id) }}" class="btn btn-danger">
    <i class="fas fa-fw fa-times mr-1"></i>Del
</a>
