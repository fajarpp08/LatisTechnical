@extends('admin.layout.main')

@section('menuDashboard', 'active')

@section('isi')
    <div class="row row-cards">
        <div class="col-xl-6 col-xxl-3 col-sm-12 col-lg-6 col-md-6">
            <div class="card card-img-holder text-default bg-color">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="my-auto">
                            <div class="circle-icon  text-center align-self-center "><img
                                    src="https://spruko.com/demo/django/adminor/Adminor/assets/img/svgicons/no-data.svg"
                                    alt="circle" class="card-img-absolute"><i
                                    class= "bx bx-user tx-30 icon-user-bx text-white"></i></div>
                        </div>
                        <div class="project-content">
                            <h3 class="mb-0 tx-18">Data Lembaga</h3>
                            <div class="">
                                <a class="px-2 text-muted" href="/lembaga" style="color: blue;">lihat data</a>
                            </div>
                        </div>
                        <h2 class="mt-2 ms-auto">{{ @count($lembagas) }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-3 col-sm-12 col-lg-6 col-md-6">
            <div class="card card-img-holder text-default bg-color">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="my-auto">
                            <div class="circle-icon  text-center align-self-center "><img
                                    src="https://spruko.com/demo/django/adminor/Adminor/assets/img/svgicons/no-data.svg"
                                    alt="circle" class="card-img-absolute"><i
                                    class= "bx bx-user tx-30 icon-user-bx  text-white"></i></div>
                        </div>
                        <div class="project-content">
                            <h3 class="mb-0 tx-18">Data Siswa</h3>
                            <div class="">
                                <a class="px-2 text-muted" href="/siswa" style="color: blue;">lihat data</a>
                            </div>
                        </div>
                        <h2 class="mt-2 ms-auto">{{ @count($siswas) }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-3 col-sm-12 col-lg-6 col-md-6">
            <div class="card card-img-holder text-default bg-color">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="my-auto">
                            <div class="circle-icon bg-success text-center align-self-center shadow-success"><img
                                    src="https://spruko.com/demo/django/adminor/Adminor/assets/img/svgicons/circle.svg"
                                    alt="circle" class="card-img-absolute"><i
                                    class= "bx bx-user tx-30 icon-user-bx  text-white"></i></div>
                        </div>
                        <div class="project-content">
                            <h3 class="mb-0 tx-18">Data User</h3>
                            <div class="">
                                <a class="px-2 text-muted" href="/user" style="color: blue;">lihat data</a>
                            </div>
                        </div>
                        <h2 class="mt-2 ms-auto">{{ @count($users) }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
