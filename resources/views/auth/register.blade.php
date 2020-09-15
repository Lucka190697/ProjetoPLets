@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">@lang('labels.Register')</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">
                                    @lang('labels.Name')
                                    <sup class="text-danger">*</sup>
                                </label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror"
                                           name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">
                                    @lang('labels.E-Mail Address')
                                    <sup class="text-danger">*</sup>
                                </label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">
                                    @lang('labels.Password')
                                    <sup class="text-danger">*</sup>
                                </label>
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">
                                    @lang('labels.Confirm Password')
                                    <sup class="text-danger">*</sup>
                                </label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password"
                                           class="form-control" name="password_confirmation"
                                           required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="input-phone"
                                       class="col-md-4 col-form-label text-md-right">@lang('labels.Phone')
                                    <sup class="text-danger">*</sup>
                                </label>

                                <div class="col-md-6">
                                    <input id="input-phone" type="text"
                                           class="form-control @error('phone') is-invalid @enderror"
                                           name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="isadmin" class="col-md-4 col-form-label text-md-right">
                                    @lang('labels.What is you function')?
                                </label>

                                <div class="col-md-6">
                                    <select id="isadmin" class="form-control @error('isadmin') is-invalid @enderror"
                                            name="isadmin">
                                        <option value="">Select</option>
                                        <option value="employee">I am an employee</option>
                                        <option value="user">I am a user</option>
                                    </select>
                                    @error('isadmin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        @lang('labels.Register')
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
