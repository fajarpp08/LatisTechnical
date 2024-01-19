@extends('admin.layout.main')
@section('menuMobil', 'active')
@section('isi')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header text-center">Form Data Lembaga</h5>
                <div class="card-body">
                    <form class="needs-validation" action ="/lembaga" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                <label for="nama_lembaga">Nama Lembaga</label>
                                <input type="text" class="form-control" value="{{ old('nama_lembaga') }}"
                                    name="nama_lembaga" placeholder="masukan nama lembaga">
                                @error('nama_lembaga')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 ">
                                <button class="btn btn-primary btn-sm" type="submit" name="submit"><i
                                        class=" fas fa-save"> Submit</i>
                                </button>
                                <a href="/lembaga" class="btn btn-primary btn-sm"><i class=" fas fa-reply"> Back</i></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
