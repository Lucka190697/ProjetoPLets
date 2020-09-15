<div class="form-group">
    <label class="label" for="book_id">@lang('labels.Book')</label>
    <select class="form-control" name="book_id" id="book_id" required>
        <option value="{{ $loan->book->id }}">
            {{$loan->book->title}} - ({{$loan->book->author}})
        </option>
    </select>
    @error('book_id')
    <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
    @enderror
</div>
<div class="form-group">
    <label class="label" for="loans_date">@lang('labels.Loans date')</label>
    <input
        id="loans_date"
        type="text"
        class="form-control @error('loans_date') is-invalid @enderror"
        value="{{ $loan->loans_date ? date('d/m/Y', strtotime($loan->loans_date))  : '' }}"
        name="loans_date" autocomplete="loans_date"
        required autofocus>
    @error('loans_date')
    <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
    @enderror
</div>
<div class="form-group">
    <label class="label" for="return_date">@lang('labels.Return date')</label>
    <input
        id="return_date"
        type="text"
        class="form-control @error('return_date') is-invalid @enderror"
        value="{{ $loan->return_date ? date('d/m/Y', strtotime($loan->return_date))  : '' }}"
        name="return_date" autocomplete="return_date"
        required autofocus>
    @error('return_date')
    <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
    @enderror
</div>
