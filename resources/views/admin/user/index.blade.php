@extends('layouts.admin.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __("Users") }}</div>

                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">User</th>
                                <th scope="col">Details</th>
                                <th scope="col">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button
                                            type="button"
                                            class="btn btn-sm btn-outline-primary"
                                        >
                                            <i
                                                class="fa-regular fa-pen-to-square"
                                            ></i>
                                        </button>
                                        <button
                                            type="button"
                                            class="btn btn-sm btn-outline-primary"
                                        >
                                            <i
                                                class="fa-regular fa-trash-can"
                                            ></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
