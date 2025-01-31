@extends('layout.layout')
@section('content')

<div class="container">
    <div style="height: 20px"></div>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-header">
                    Member
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('member.store')}}">
                        @csrf
                        <div class="mb-3">
                            <label>Member Name</label>
                            <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
                                placeholder="Member Name">
                        </div>
                        <div class="mb-3">
                            <label>Mobile</label>
                            <input type="number" class="form-control" name="mobile" id="exampleFormControlInput1"
                                placeholder="Mobile Number">
                        </div>

                        <div class="mb-3">
                            <label>E-mail</label>
                            <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
                                placeholder="Member E-mail">
                        </div>

                        <div class="mb-3">
                            <label>Member Password</label>
                            <input type="password" class="form-control" name="password" id="exampleFormControlInput1"
                                placeholder="Member Password">
                        </div>

                        <div class="mb-3">
                            <label for="">Active State</label>
                            <select class="form-select" aria-label="Default select example" name="active">
                                <option selected>Open this select</option>
                                <option value="1">Active</option>
                                <option value="2">Deactive</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="">Role</label>
                            <select class="form-select" aria-label="Default select example" name="role">
                                <option selected>Open this select</option>
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Join Date</label>
                            <input type="date" class="form-control" name="join_date" id="exampleFormControlInput1"
                                placeholder="Join Date">
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Register</button>
                            <button type="submit" class="btn btn-warning">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="height: 20px;"></div>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header">
                <table class="table table-dark table-striped">

                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Member Name</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">e-mail</th>
                            <th scope="col">active</th>
                            <th scope="col">Role</th>
                            <th scope="col">Join Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $members as $key => $member )
                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $member->name }}</td>
                            <td scope="col">{{ $member->mobile }}</td>
                            <td scope="col">{{ $member->email }}</td>
                            <td scope="col">{{ $member->active }}</td>
                            <td scope="col">{{ $member->role }}</td>
                            <td scope="col">{{ $member->join_date }}</td>
                            <td scope="col">
                                <a href="{{ route('member.edit', $member->id) }}">

                                    <button class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                    </button>
                                </a>

                                <form action="{{ route('member.destroy', $member->id) }}" method="POST"
                                    style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
