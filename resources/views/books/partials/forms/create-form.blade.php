<div class="col-md-6 float-left">

    <div class="form-group">
        <label class="label" for="isbn">ISBN:</label>
        <input
            id="isbn"
            type="text"
            class="form-control @error('isbn') is-invalid @enderror"
            name="isbn" value="{{ old('isbn') }}"
            autocomplete="isbn" required autofocus>
            @error('isbn')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>

    <div class="form-group">
        <label class="label" for="title">Title:</label>
        <input
            id="title"
            type="text"
            class="form-control @error('title') is-invalid @enderror"
            name="title" value="{{ old('title')}}" autocomplete="title"
            required autofocus>
            @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
    <div class="form-group">
        <label class="label" for="author">Author:</label>
        <input
            id="author"
            type="text"
            class="form-control @error('author') is-invalid @enderror"
            name="author" value="{{ old('author') }}" autocomplete="author"
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
        <label class="label" for="giver">Guiver By:</label>
        <input
            id="giver"
            type="text"
            class="form-control @error('giver') is-invalid @enderror"
            name="giver" value="{{ old('giver') }}" autocomplete="giver"
            required autofocus>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
    <div class="form-group">
        <label class="label" for="entryDate">Entry Date:</label>
        <input
            id="input-phone" type="text" name="entryDate"
            class="form-control @error('entryDate') is-invalid @enderror"
            value="{{ old('entryDate') }}" autocomplete="entryDate"
            required autofocus>
            @error('entryDate')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
    <div class="form-group">
        <label class="label" for="thumbnail">Thumbnail:</label>
        <input
            id="thumbnail"
            type="file"
            class="form-control @error('thumbnail') is-invalid @enderror"
            name="thumbnail" value="{{ old('thumbnail') }}" autocomplete="thumbnail"
            autofocus>
            @error('thumbnail')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
</div>
