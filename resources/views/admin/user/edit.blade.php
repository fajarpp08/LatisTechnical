@extends('admin.layout.main')
@section('menuUser', 'active')
@section('isi')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header text-center">Edit Data User</h5>
                <div class="card-body">
                    <form class="needs-validation" action ="/useradm/{{ $users->id }}" method="post"
                        enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                <label for="validationCustom01">Nama</label>
                                <input type="text" class="form-control  @error('name') is-invalid @enderror"
                                    value="{{ old('name', $users->name) }}" name="name">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                <label for="validationCustom01">Email</label>
                                <input type="text" class="form-control  @error('email') is-invalid @enderror"
                                    value="{{ old('email', $users->email) }}" name="email">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                <label for="validationCustom01">Role</label>
                                <select name="role" class="form-control  @error('role') is-invalid @enderror">
                                    <option value="Admin" @if ($users->status == 'Admin') selected @endif>Admin</option>
                                    <option value="User" @if ($users->status == 'User') selected @endif>User</option>
                                </select>
                                @error('role')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                <label for="validationCustom01">Password</label>
                                <input type="text" placeholder="masukan password"
                                    class="form-control  @error('password') is-invalid @enderror"
                                    value="{{ old('password') }}" name="password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4 ">
                                <button class="btn btn-primary btn-sm" type="submit" name="submit"><i
                                        class=" fas fa-edit"> Update</i></button>
                                <a href="/useradm" class="btn btn-primary btn-sm"><i class=" fas fa-reply"> Back</i></a>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
