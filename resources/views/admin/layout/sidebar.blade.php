<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
<div class="sticky">
    <aside class="app-sidebar sidebar-scroll">
        <div class="app-sidebar__user">
            <div class="dropdown user-pro-body text-center">
                <div class="user-pic">
                    <img src="{{ asset('assets3/img/users/rental.jpg') }}" alt="user-img"
                        class="rounded-circle mCS_img_loaded" style="margin-top: 30px">
                </div>
            </div>
        </div>
        <div class="main-sidemenu">

            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                <li class="slide">
                    <a class="side-menu__item {{ Request::is('/dashboard') ? 'active' : '' }}" href="{{ url('/dashboard') }}"
                        data-bs-toggle="slide" href="javascript:void(0);"><i
                            class="side-menu__icon bx bx-home-alt"></i><span
                            class="side-menu__label">Dashboard</span></a>
                </li>

                <li class="slide">
                    <a class="side-menu__item {{ Request::is('/lembaga') ? 'active' : '' }}" href="{{ url('/lembaga') }}"
                        data-bs-toggle="slide" href="javascript:void(0);"><i
                            class="side-menu__icon mdi mdi-zip-box"></i><span class="side-menu__label">Data
                            Lembaga</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item {{ Request::is('/siswa') ? 'active' : '' }}" href="{{ url('/siswa') }}"
                        data-bs-toggle="slide" href="javascript:void(0);"><i
                            class="side-menu__icon mdi mdi-zip-box"></i><span class="side-menu__label">Data
                            Siswa</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item {{ Request::is('/useradm') ? 'active' : '' }}" href="{{ url('/useradm') }}"
                        data-bs-toggle="slide" href="javascript:void(0);"><i
                            class="side-menu__icon mdi mdi-account-settings-variant"></i><span
                            class="side-menu__label">Data
                            User</span></a>
                </li>
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </aside>
</div>
