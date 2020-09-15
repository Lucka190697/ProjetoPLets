<div class="form-group">
    <label class="label" for="book_id">@lang('labels.Book')</label>
    <select class="form-control" name="book_id" id="book_id" required>
        @foreach($books as $book)
            <option value="{{ $book->id }}">
                {{$book->title}} - ({{$book->author}}) {{$book->loan}}
            </option>
        @endforeach
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
        name="loans_date" value="{{ old('loans_date') }}" autocomplete="loans_date"
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
        name="return_date" value="{{ old('return_date') }}" autocomplete="return_date"
        required autofocus>
    @error('return_date')
    <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
    @enderror
</div>
