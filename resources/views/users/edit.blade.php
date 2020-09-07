@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{-- <div class="col-12"> --}}
                        <div class="col-md-9 float-left">
                            <h1>{{ $title }}</h1>
                        </div>
                        <div class="col-md-3 float-right">
                            <a href="{{ URL::previous() }}" class="btn btn-block btn-primary">
                                {{-- <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                </svg> Add User --}}
                                <i class="fas fa-fw fa-arrow-left mr-2"></i>Back
                            </a>
                        </div>
                        {{-- </div> --}}
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="form form-responsive">
                        <form class="form" action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @include('users.partials.forms.edit-form')
                            <div class="col-md-6 col-sm-12 float-right" >
                                <button type="submit" class="btn btn-block btn-success">
                                    <i class="fas fa-fw fa-check"></i> Ok
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
