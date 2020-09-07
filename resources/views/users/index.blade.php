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
                        <a href="{{ route('user.create') }}" class="btn btn-block btn-primary">
                              <i class="fas fa-fw fa-plus mr-2"></i>Add User
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


                    <div class="table table-responsive">
                        <table class="table table-responsive table-default">
                                @include('users.partials.table.head')
                                @foreach ($users as $user)
                                @include('users.partials.table.body')
                                @endforeach
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end">
                            {{$users->links()}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
