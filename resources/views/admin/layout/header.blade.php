<div class="main-header side-header sticky nav nav-item">
    <div class="container-fluid main-container ">
        <div class="main-header-left ">
            <div class="app-sidebar__toggle mobile-toggle" data-bs-toggle="sidebar">
                <a class="open-toggle" href="javascript:void(0);"><i class="header-icons" data-eva="menu-outline"></i></a>
                <a class="close-toggle" href="javascript:void(0);"><i class="header-icons"
                        data-eva="close-outline"></i></a>
            </div>
        </div>
        <button class="navbar-toggler nav-link icon navresponsive-toggler vertical-icon ms-auto" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
            aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
        </button>
        <div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0  mg-lg-s-auto">
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <div class="main-header-right">
                    <div class="dropdown nav-item main-layout">
                        <a href="javascript:void(0)" class="new theme-layout nav-link-bg layout-setting">
                            <span class="dark-layout"><i class="fe fe-moon"></i></span>
                            <span class="light-layout"><i class="fe fe-sun"></i></span>
                        </a>
                    </div>
                    <div class="nav nav-item  navbar-nav-right mg-lg-s-auto">
                        <div class="nav-item full-screen fullscreen-button">
                            <a class="new nav-link full-screen-link" href="javascript:void(0);"><i
                                    class="fe fe-maximize"></i></a>
                        </div>
                        <div class="dropdown main-profile-menu nav nav-item nav-link">
                            <a class="profile-user d-flex" href="javascript:void(0)"><img
                                    src="{{ asset('assets/images/media/admin3.jpg') }}" alt="user-img"
                                    class="rounded-circle mCS_img_loaded"><span></span></a>

                            <div class="dropdown-menu">
                                <div class="main-header-profile header-img bg-primary rounded-top-5 p-3">
                                    <h6>{{ auth()->user()->nama }}</h6><span>{{ auth()->user()->role }}</span>
                                </div>
                                <a class="dropdown-item" href="/logout"><i class="fe fe-log-out"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
