@extends('admin.layout.main')
@section('menuMobil', 'active')
@section('isi')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header text-center">Edit Data Siswa</h5>
                <div class="card-body">
                    <form class="needs-validation" action ="/siswa/{{ $siswas->id }}" method="post"
                        enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                <label for="validationCustom01">NIS</label>
                                <input type="text" class="form-control  @error('nis') is-invalid @enderror"
                                    value="{{ old('nis', $siswas->nis) }}" name="nis" required>
                                @error('nis')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                <label for="validationCustom01">Nama Siswa</label>
                                <input type="text" class="form-control  @error('nama_siswa') is-invalid @enderror"
                                    value="{{ old('nama_siswa', $siswas->nama_siswa) }}" name="nama_siswa" required>
                                @error('nama_siswa')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                <label for="validationCustom01">Email</label>
                                <input type="text" class="form-control  @error('email') is-invalid @enderror"
                                    value="{{ old('email', $siswas->email) }}" name="email" required>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                <label for="lembaga_id">Lembaga</label>
                                {{-- <input type="text" class="form-control" value="{{ old('name') }}" name="name"
                                    placeholder="masukan nama"> --}}
                                <select class="form-control" type="text" id="lembaga_id" placeholder="Pilih Kategori"
                                    name="lembaga_id">
                                    <option selected disabled>- Pilih Lembaga -</option>
                                    @foreach ($lembagas as $lembaga)
                                        @if (old('lembaga_id', $lembaga->lembaga_id) == $lembaga->id)
                                            <option value="{{ $lembaga->id }}" selected>{{ $lembaga->nama_lembaga }}
                                            </option>
                                        @else
                                            <option value="{{ $lembaga->id }}">{{ $lembaga->nama_lembaga }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('lembaga_id')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                <label for="validationCustom01">Foto</label>
                                <input type="file" class="form-control  @error('file') is-invalid @enderror"
                                    value="{{ old('file', $siswas->file) }}" name="file">
                                @error('file')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4">
                                <button class="btn btn-primary btn-sm" type="submit" name="submit"><i
                                        class=" fas fa-edit">Update</i></button>
                                <a href="/siswa" class="btn btn-primary btn-sm"><i class=" fas fa-reply"> Back</i></a>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
