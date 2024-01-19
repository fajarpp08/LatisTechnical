@extends('admin.layout.main')
@section('menuMobil', 'active')
@section('isi')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header text-center">EDIT DATA MOBIL</h5>
                <div class="card-body">
                    <form class="needs-validation" action ="/lembaga/{{ $lembagas->id }}" method="post">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                <label for="validationCustom01">Nama Lembaga</label>
                                <input type="text" class="form-control  @error('nama_lembaga') is-invalid @enderror"
                                    value="{{ old('nama_lembaga', $lembagas->nama_lembaga) }}" name="nama_lembaga" required>
                                @error('nama_lembaga')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4">
                                <button class="btn btn-primary btn-sm" type="submit" name="submit"><i
                                        class=" fas fa-edit"> Update</i></button>
                                <a href="/lembaga" class="btn btn-primary btn-sm"><i class=" fas fa-reply"> Back</i></a>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
