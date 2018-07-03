@extends('back.layouts.app')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> User Admin</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-info">
                                <th>
                                    User
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Created On
                                </th>
                                <th>
                                    Role
                                </th>
                                <th class="text-center">
                                    Actions
                                </th>
                                </thead>
                                @if($users->count() > 0) @foreach($users as $user)
                                    <tbody>
                                    <tr>
                                        <td>
                                            {{ $user->username }}
                                        </td>
                                        <td>
                                            {{ $user->email }}
                                        </td>
                                        <td>
                                            {{ $user->created_at->format('F j, Y') }}
                                        </td>
                                        <td>
                                            @foreach ($user->roles as $user_role)
                                                <span class="badge badge-secondary">{{ $user_role->name }}</span>
                                            @endforeach
                                        </td>
                                        <td class="text-center">
                                            <a class="badge badge-info box-shadow"
                                               href="{{ route('user.edit', ['id' => $user->id ]) }}">{{ __('Edit User') }}</a>
                                            <a class="badge badge-danger box-shadow"
                                               href="{{ route('user.delete', ['id' => $user->id ]) }}">{{ __('Delete User') }}</a>
                                        </td>
                                    </tr>
                                    @endforeach @else
                                        <h3>{{ __('No Users') }}</h3> @endif
                                    </tbody>
                            </table>
                        </div>
                        <br/>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
