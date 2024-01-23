@extends('admin.layout.main')
@section('menuUser', 'active')
@section('isi')

    @if (session()->has('pesan'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <i class="fas fa-check"></i> {{ session('pesan') }}
        </div>
    @endif
    <div class="row mt-4">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h4 class="card-header text-center">Data User</h4>
                <a href="/useradm/create" class="btn btn-sm btn-primary" style="width: 120px;"><i
                        class="fas fa-arrow-down"></i> Add Data</a>

                <!-- Add the search form -->
                {{-- <form action="{{ route('useradm.search') }}" method="get"
                    class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 mt-4 px-4">
                    <div class="input-group">
                        <input type="text" name="keyword" value="{{ isset($keyword) ? $keyword : '' }}"
                            class="form-control" placeholder="Cari Berdasarkan Nama">
                        <div class="input-group-append px-2">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form> --}}

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered first">
                            <thead class="text-center">
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr class="text-center">
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="table-cell">{{ $user->name }}</td>
                                        <td class="table-cell">{{ $user->email }}</td>
                                        <td class="table-cell">{{ $user->role }}</td>
                                        <td class="text-center table-cell">
                                            <div class="d-flex justify-content-center">
                                                <!-- Tambahkan div untuk membuat tombol sejajar -->
                                                <a href="/useradm/{{ $user->id }}/edit"
                                                    class="btn btn-primary btn-sm me-2"><i class="fas fa-pencil-alt"></i>
                                                    Update</a>

                                                <form action="/useradm/{{ $user->id }}" method="post" class="d-inline">
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
                    @if (isset($users) && $users instanceof \Illuminate\Pagination\LengthAwarePaginator)
                        {{ $users->links('pagination::bootstrap-5') }}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
