<div class="col-md-6 float-left">
    <div class="form-group">
        <label class="label" for="name">
            @lang('labels.Name')
        </label>
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
        <label class="label" for="email">
            @lang('labels.Email')
        </label>
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
        <label class="label" for="password">
            @lang('labels.Password:')
        </label>
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
        <label class="label" for="password">
            @lang('labels.Password confirmation')
        </label>
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
        <label class="label" for="phone">
            @lang('labels.Phone')
        </label>
        <input
        id="mask-phone"
            type="text"
            class="form-control mask-phone"
            name="phone" value="{{ old('phone') }}"
            required>
            @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
    <div class="form-group">
        <label class="label" for="thumbnail">
            @lang('labels.Thumbnail')
        </label>
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
