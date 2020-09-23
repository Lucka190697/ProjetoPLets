<a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-success">
    <i class="fas fa-fw fa-pen mr-1"> </i>
</a>
@if(auth()->user()->id != $user->id)
<a href="{{ route('user.destroy', $user->id) }}" class="btn btn-sm btn-danger">
    <i class="fas fa-fw fa-times mr-1"></i>
</a>
@endif
