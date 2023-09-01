@extends('layouts.main')

@section('content')
    
            <!-- Page Heading -->
            <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Users</h1>
                    </div>
            </div>
    <div class="row">
         <!-- Alert Message if It's Successfully! -->
         <div>
            @if (session()->has('message'))
            <div class="alert alert-success border border-3">
                {{ session ('message') }}
                </div>
            @endif
         </div>
         <!-- End of Alert Message if It's Successfully! -->
        <div class="card col-12">
           
            <div class="card-header border border-3">
                <div class="row">
                    <div class="col">
                        <form action=" {{route('users.index')}} " method="GET">
                            
                            <div class="form-row align-items-center">
                                <div class="col">
                                    <input type="search" name="search" id="inLineFormInput" class="form-control mb-2" placeholder="Search here.....">
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary btn-sm mb-2">Search</button>
                                </div>
                            </div>

                        </form>
                    </div>
                        <div>
                            <a href="{{ route('users.create') }}" class="float-right btn btn-primary btn btn-sm">Create</a>
                        </div>
                </div>
              
            </div>
           
           
            <div class="card-body border border-3"> 
                <table class="table table-striped" id="myDataTable">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
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
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn btn-sm fas fa-edit"></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>

    </div>


@endsection