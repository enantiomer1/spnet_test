@extends('back.layouts.app') 

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card box-shadow mb-4">
            <div class="card-header bg-secondary text-white font-weight-bold">User Management</div>
            <div class="card-body">
                <h5 class="d-inline-flex">Users</h5><a href="#" class="btn btn-sm btn-success float-right mb-3">Create New User</a>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>ID#</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach ($user->roles as $user_role)
                                    <span>{{ $user_role->name }}</span> @endforeach
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">Show</a>
                                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card box-shadow mb-4">
            <div class="card-header bg-secondary text-white font-weight-bold">Blog Management</div>
            <div class="card-body">
                <h5 class="d-inline-flex">Users</h5><a href="{{ route('post.create') }}" class="btn btn-sm btn-success float-right mb-3">Create New Aricle</a>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>ID#</th>
                                <th>Title</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->slug }}</td>
                                <td>{{ $post->created_at }}</td>
                                <td>{{ $post->status }}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">Show</a>
                                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
