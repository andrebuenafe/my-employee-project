@extends('layouts.main')

@section('content')
    
            <!-- Page Heading -->
            <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Users</h1>
                    </div>
            </div>
    <div class="row">
        
        <div class="card mx-auto">
            <div>
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session ('message') }}
                        </div>
                    @endif
            </div>
            <div class="card-header border border-3">
                <a href="{{ route('users.create') }}" class="float-right btn btn-primary btn btn-sm">Create</a>
            </div>
        <div class="card-body border border-3"> 
                <table class="table table-striped" id="myDataTable">
                    <thead>
                    <tr>
                        <th scope="col">#id</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Manage</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id}}</th>
                                <td>{{ $user->username }}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn btn-sm">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>

    </div>


@endsection