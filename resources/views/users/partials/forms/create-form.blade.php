<div class="col-md-6 float-left">
    <div class="form-group">
        <label class="label" for="name">Name:</label>
        <input
            id="name"
            type="text"
            class="form-control @error('name') is-invalid @enderror"
            name="name" value="{{ old('name') }}" autocomplete="name"
            required autofocus>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>

    <div class="form-group">
        <label class="label" for="email">Email:</label>
        <input
            id="email"
            type="text"
            class="form-control @error('email') is-invalid @enderror"
            name="email" value="{{ old('email') }}" autocomplete="email"
            required autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
    <div class="form-group">
        <label class="label" for="password">Password:</label>
        <input
            id="password"
            type="password"
            class="form-control @error('password') is-invalid @enderror"
            name="password" value="{{ old('password') }}" autocomplete="password"
            required autofocus>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
</div>
    <div class="col-md-6 float-right">
        <div class="form-group">
        <label class="label" for="password">Password confirmation:</label>
        <input
            id="password_confirmation"
            type="password"
            class="form-control @error('password_confirmation') is-invalid @enderror"
            name="password_confirmation" value="{{ old('password_confirmation') }}" autocomplete="password_confirmation"
            required autofocus>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
    <div class="form-group">
        <label class="label" for="phone">Phone:</label>
        <input
            id="input-phone"
            type="text"
            class="form-control @error('phone') is-invalid @enderror"
            name="phone" value="{{ old('phone') }}" autocomplete="phone"
            required autofocus>
            @error('phone')
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
            required autofocus>
            @error('thumbnail')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
</div>
