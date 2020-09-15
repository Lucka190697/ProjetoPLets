<div class="col-md-6 float-left">
    <div class="form-group">
        <label class="label" for="isbn">ISBN:</label>
        <input
            id="isbn"
            type="text"
            class="form-control @error('name') is-invalid @enderror"
            name="isbn" value="{{ $book->isbn ? $book->isbn : '' }}"
            autocomplete="isbn" required autofocus>
            @error('isbn')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>

    <div class="form-group">
        <label class="label" for="title">@lang('labels.Title')</label>
        <input
            id="title"
            type="text"
            class="form-control @error('title') is-invalid @enderror"
            name="title" value="{{ $book->title ? $book->title : '' }}" autocomplete="title"
            required autofocus>
            @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
    <div class="form-group">
        <label class="label" for="author">@lang('labels.Author')</label>
        <input
            id="author"
            type="text"
            class="form-control @error('author') is-invalid @enderror"
            name="author" value="{{  $book->author ? $book->author : '' }}" autocomplete="author"
            required autofocus>
            @error('author')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
</div>
    <div class="col-md-6 float-right">
        <div class="form-group">
        <label class="label" for="giver">@lang('labels.Giver By')</label>
        <input
            id="giver"
            type="text"
            class="form-control @error('giver') is-invalid @enderror"
            name="giver" value="{{ $book->giver ? $book->giver : '' }}" autocomplete="giver"
            required autofocus>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
    <div class="form-group">
        <label class="label" for="entryDate">@lang('labels.Entry Date')</label>
        <input
            id="input-phone" type="text" name="entryDate"
            class="form-control @error('entryDate') is-invalid @enderror"
            value="{{ $book->entryDate ? $book->entryDate = date('d/m/Y', strtotime($book->entryDate)) : '' }}" autocomplete="entryDate"
            required autofocus>
            @error('entryDate')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
    <div class="form-group">
        <label class="label" for="thumbnail">@lang('labels.Thumbnail')</label>
        <input
            id="thumbnail"
            type="file"
            class="form-control @error('thumbnail') is-invalid @enderror"
            name="thumbnail" value="{{ $book->thumbnail ? $book->thumbnail : '' }}" autocomplete="thumbnail"
            autofocus>
            @error('thumbnail')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
</div>
