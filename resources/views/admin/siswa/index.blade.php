@extends('admin.layout.main')
@section('menuMobil', 'active')
@section('isi')

    @if (session()->has('pesan'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <i class="fas fa-check"></i> {{ session('pesan') }}
        </div>
    @endif
    <div class="row mt-4">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h4 class="card-header text-center">Data Siswa</h4>
                <div class="flex flex-md-row">
                    <a href="/siswa/create" class="btn btn-sm btn-primary" style="width: 120px;"><i
                            class="fas fa-arrow-down"></i>
                        insert</a>
                    {{-- <a href="/siswa/exportExcel/?keyword={{ $keyword }}" class="btn btn-sm btn-primary"
                        style="width: 120px;"><i class="fas fa-arrow-down"></i>
                        export</a> --}}
                    <a href="{{ route('exportExcelSiswa') }}" class="btn btn-sm btn-primary" style="width: 120px;"><i
                            class="fas fa-arrow-down"></i>export</a>
                    {{-- <a href="/products/export-excel?search={{ $search }}">Export to Excel</a> --}}
                </div>

                <form action="{{ route('siswas.search') }}" method="get"
                    class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 mt-4 px-4">
                    <div class="input-group">
                        <input type="text" name="keyword" value="{{ isset($keyword) ? $keyword : '' }}"
                            class="form-control" placeholder="masukan kata kunci">
                        <div class="input-group-append px-2">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered first">
                            <thead class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>NIS</th>
                                    <th>Nama Siswa</th>
                                    <th>Email</th>
                                    <th>Lembaga</th>
                                    <th>Foto</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswas->sortByDesc('created_at') as $siswa)
                                    <!-- Menggunakan sortByDesc untuk mengurutkan dari terbaru ke terlama -->
                                    <tr class="text-center">
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="table-cell">{{ $siswa->nis }}</td>
                                        <td class="table-cell">{{ $siswa->nama_siswa }}</td>
                                        <td class="table-cell">{{ $siswa->email }}</td>
                                        <td class="table-cell">{{ $siswa->lembaga->nama_lembaga }}</td>
                                        <td class="table-cell">
                                            @if ($siswa->file)
                                                <img src="{{ asset('storage/siswa/' . $siswa->file) }}" alt="mobil"
                                                    class="img-fluid" width="150">
                                            @else
                                                <img src="{{ asset('images/foto-profile.png') }}" alt="mobil"
                                                    class="img-fluid rounded-circle" width="80">
                                            @endif
                                        </td>
                                        <td class="text-center table-cell">
                                            <div class="d-flex justify-content-center">
                                                <!-- Tambahkan div untuk membuat tombol sejajar -->
                                                <a href="/siswa/{{ $siswa->id }}/edit"
                                                    class="btn btn-primary btn-sm me-2"><i class="fas fa-pencil-alt"></i>
                                                    Update</a>

                                                <form action="/siswa/{{ $siswa->id }}" method="post" class="d-inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Yakin akan menghapus data')"><i
                                                            class="fas fa-trash"></i> Delete</button>
                                                </form>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Use the correct variable for pagination -->
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 mt-2 px-4">
                    @if (isset($mobils) && $mobils instanceof \Illuminate\Pagination\LengthAwarePaginator)
                        {{ $mobils->links('pagination::bootstrap-5') }}
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
