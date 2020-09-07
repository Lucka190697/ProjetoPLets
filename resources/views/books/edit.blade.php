@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                        <div class="col-md-9 float-left">
                            <h1>{{ $title }}</h1>
                        </div>
                        <div class="col-md-3 float-right">
                            <a href="{{ URL::previous() }}" class="btn btn-block btn-primary">
                                <i class="fas fa-fw fa-arrow-left mr-2"></i>Back
                            </a>
                        </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="form form-responsive">
                        <form class="form" action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @include('books.partials.forms.edit-form')
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
