<a href="{{route('loans.edit', $loan->id)}}" class="btn btn-success">
    <i class="fa fa-pencil-alt"></i> @lang('buttons.Edit')
</a>
<a href="{{route('loans.destroy', $loan->id)}}" class="btn btn-danger">
    <i class="fa fa-times"></i> @lang('buttons.Delete')
</a>
