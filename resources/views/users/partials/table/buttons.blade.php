<a href="{{ route('user.edit', $user->id) }}" class="btn btn-success">
    <i class="fas fa-fw fa-pen mr-1"> </i>
    @lang('buttons.Edit')
</a>
@if(auth()->user()->id != $user->id)
<a href="{{ route('user.destroy', $user->id) }}" class="btn btn-danger">
    <i class="fas fa-fw fa-times mr-1"></i>
    @lang('buttons.Delete')
</a>
@endif
