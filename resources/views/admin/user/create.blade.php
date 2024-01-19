@extends('admin.layout.main')
@section('menuUser', 'active')
@section('isi')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header text-center">Form Data User</h5>
                <div class="card-body">
                    <form class="needs-validation" action ="/useradm" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                <label for="validationCustom01">Nama</label>
                                <input type="text" placeholder="masukan nama"
                                    class="form-control  @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                    name="name">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                <label for="validationCustom01">Email</label>
                                <input type="text" placeholder="masukan email"
                                    class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                    name="email">
                                @error('email')
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
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                <label for="validationCustom01">Role</label>
                                <select name="role" class="form-control  @error('role') is-invalid @enderror"
                                    value="{{ old('role') }}">
                                    <option value="">- Pilih Role -</option>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                                </select>
                                @error('role')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4 ">
                                <button class="btn btn-primary btn-sm" type="submit" name="submit"><i
                                        class=" fas fa-save"> Submit</i></button>
                                <a href="/useradm" class="btn btn-primary btn-sm"><i class=" fas fa-reply"> Back</i></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
