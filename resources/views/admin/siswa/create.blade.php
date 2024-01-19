@extends('admin.layout.main')
@section('menuMobil', 'active')
@section('isi')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header text-center">Form Data Siswa</h5>
                <div class="card-body">
                    <form class="needs-validation" action ="/siswa" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                <label for="nis">NIS</label>
                                <input type="text" class="form-control" value="{{ old('nis') }}" name="nis"
                                    placeholder="masukkan nomor nis">
                                @error('nis')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                <label for="nama_siswa">Nama Siswa</label>
                                <input type="text" class="form-control" value="{{ old('nama_siswa') }}" name="nama_siswa"
                                    placeholder="masukan nama siswa">
                                @error('nama_siswa')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" value="{{ old('email') }}" name="email"
                                    placeholder="masukan nomor plat mobil">
                                @error('email')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                <label for="lembaga_id">Lembaga</label>
                                {{-- <input type="text" class="form-control" value="{{ old('name') }}" name="name"
                                placeholder="masukan nama"> --}}
                                <select class="form-control" type="text" id="lembaga_id" placeholder="Pilih Lembaga"
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
                                <label for="file">Foto Siswa</label>
                                <input type="file" class="form-control" value="{{ old('file') }}" name="file"
                                    placeholder="tambahkan foto siswa">
                                @error('file')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 ">
                                <button class="btn btn-primary btn-sm" type="submit" name="submit"><i
                                        class=" fas fa-save"> Submit</i>
                                </button>
                                <a href="/siswa" class="btn btn-primary btn-sm"><i class=" fas fa-reply"> Back</i></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
