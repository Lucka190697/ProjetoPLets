@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>{{ $title }}</h1>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-12">
                        <div class="col-6 float-left">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <img src="{{ asset('/books/'. $book->thumbnail) }}"
                                    width="250" height="auto" class="img img-profile">
                                </li>
                            <ul>
                        </div>
                        <div class="col-6 float-right">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <strong>ID: </strong>{{ $book->id }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Name: </strong>{{ $book->name }}
                                </li>
                                <li class="list-group-item">
                                    <strong> Email: </strong>{{ $book->email }}
                                </li>
                                <li class="list-group-item">
                                    <strong> Phone: </strong>{{ $book->phone }}
                                </li>
                                <li class="list-group-item">
                                    <strong> Created at: </strong>{{ $book->created_at = date('d/m/Y', strtotime($book->created_at)) }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="col-md-6 float-left">
                        <a href="{{ URL::previous() }}" class="btn btn-block btn-primary">
                            <i class="fas fa-fw fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="col-md-6 float-right">
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-block btn-success">
                            <i class="fas fa-fw fa-pen"></i> Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
