<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from spruko.com/demo/django/adminor/Adminor/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jan 2023 09:43:37 GMT -->

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Django Bootstrap Responsive Admin Web Dashboard Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords"
        content="admin, Django, admin dashboard, Django admin dashboard template, admin panel template, Django admin template, bootstrap 5 admin template, bootstrap 5 dashboard, bootstrap admin dashboard, Django bootstrap admin template, bootstrap ui kit, dashboard bootstrap 5, Django dashboard design, dashboard html, Django dashboard template, dashboard ui kit, Django envato templates, Django flat ui, premium quality">

    <!-- Title -->
    <title>Latis Education</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/x-icon">

    <!-- Bootstrap css -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet" id="style">

    <!-- Style css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet">

    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

    <!-- Animations css -->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">

    <!-- Switcher css -->
    <link href="{{ asset('assets/switcher/css/switcher.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/switcher/demo.css') }}">

</head>

<body class="main-body app sidebar-mini ltr">

    <!-- Switcher -->
    <div class="switcher-wrapper">
        <div class="demo_changer">
            <div class="form_holder sidebar-right1">
                <div class="row">
                    <div class="predefined_styles">
                        <div class="swichermainleft switcher-nav">
                            <h4>Navigation Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Vertical Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15"
                                                id="myonoffswitch34" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch34" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Horizantal Click Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15"
                                                id="myonoffswitch35" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch35" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Horizantal Hover Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15"
                                                id="myonoffswitch111" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch111" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Light Theme Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Light Theme</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1"
                                                id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Theme</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1"
                                                id="myonoffswitch2" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Theme Primary Color</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Primary Color</span>
                                        <div class="">
                                            <input class=" input-color-picker color-primary-light" value="#4454c3"
                                                id="colorID" oninput="changePrimaryColor()" type="color"
                                                data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"
                                                name="lightPrimary">
                                        </div>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Background Color</span>
                                        <div class="">
                                            <input class="w-30p h-30 input-bg-picker background-primary-light"
                                                value="#1c203c" id="bgID" oninput="changeBackgroundColor()"
                                                type="color" data-id3="body" data-id4="theme"
                                                name="BackgroundPrimary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft leftmenu-styles">
                            <h4>Leftmenu Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Light Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2"
                                                id="myonoffswitch3" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch3" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Color Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2"
                                                id="myonoffswitch4" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2"
                                                id="myonoffswitch5" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch5" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft header-styles">
                            <h4>Header Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Light Header</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3"
                                                id="myonoffswitch6" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Color Header</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3"
                                                id="myonoffswitch7" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Header</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3"
                                                id="myonoffswitch8" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch8" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Layout Width Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Full Width</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4"
                                                id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Boxed</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4"
                                                id="myonoffswitch10" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft switcher-layout">
                            <h4>Layout Positions</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Fixed</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5"
                                                id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Scrollable</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5"
                                                id="myonoffswitch12" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft vertical-switcher">
                            <h4>Sidemenu layout Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Default Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch13" class="onoffswitch2-checkbox default-menu"
                                                checked>
                                            <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Closed Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch30" class="onoffswitch2-checkbox default-menu">
                                            <label for="myonoffswitch30" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Icon with Text</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch14" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch14" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Icon Overlay</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch15" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch15" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Hover Submenu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch32" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch32" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Hover Submenu style 1</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch33" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch33" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Double Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                id="switchbtn-doublemenu" class="onoffswitch2-checkbox">
                                            <label for="switchbtn-doublemenu" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Double Menu with Tabs</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                id="switchbtn-doublemenutabs" class="onoffswitch2-checkbox">
                                            <label for="switchbtn-doublemenutabs" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Reset All Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section my-4">
                                    <button class="btn btn-danger btn-block"
                                        onclick="localStorage.clear();
										document.querySelector('html').style = '';
										names() ;
										resetData()"
                                        type="button">Reset All
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->

    <!-- Loader -->
    <div id="global-loader">
        <img src="https://spruko.com/demo/django/adminor/Adminor/assets/img/loaders/loader-4.svg" class="loader-img"
            alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- page -->
    <div class="page custom-index">
        <div>

            <!-- main-header -->
            @include('admin.layout.header')
            <!-- /main-header -->

            <!-- main-sidebar -->
            @include('admin.layout.sidebar')
            <!-- main-sidebar -->
        </div>


        <!-- main-content -->
        <div class="main-content app-content">

            <!-- container -->
            <div class="main-container container-fluid">

                <!-- breadcrumb -->
                <div class="breadcrumb-header justify-content-between">
                    <div>
                        <h4 class="content-title mb-2"><a href="/admin">Dashboard</a></h4>
                    </div>
                    <div class="d-flex my-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                                <li class="breadcrumb-item active " aria-current="page">Aplikasi Rental Mobil</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- /breadcrumb -->

                <!-- main-content-body -->
                <div class="main-content-body">
                    @yield('isi')

                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /main-content -->



        <!-- Footer opened -->
        <div class="main-footer ht-45">
            <div class="container-fluid pd-t-0 ht-100p">
                <span> Aplikasi Rental Mobil</span>
            </div>
        </div>
        <!-- Footer closed -->
    </div>


    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    <!-- JQuery min js -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

    <!--- Datepicker js -->
    <script src="{{ asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>

    <!-- Bootstrap Bundle js -->
    <script src="{{ asset('assets/plugins/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!--Internal Sparkline js -->
    <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>

    <!-- ApexChart -->
    <script src="{{ asset('assets/js/apexcharts.min.js') }}"></script>

    <!-- Ionicons js -->
    <script src="{{ asset('assets/plugins/ionicons/ionicons.js') }}"></script>

    <!-- Eva-icons js -->
    <script src="{{ asset('assets/js/eva-icons.min.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>

    <!--- Perfect-scrollbar js -->
    <script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/p-scroll.js') }}"></script>

    <!-- Sidebar js -->
    <script src="{{ asset('assets/plugins/side-menu/sidemenu.js') }}"></script>

    <!-- sticky js -->
    <script src="{{ asset('assets/js/sticky.js') }}"></script>

    <!--- Scripts js -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <!--- Internal Sweet-Alert js -->
    <script src="{{ asset('assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweet-alert/jquery.sweet-alert.js') }}"></script>
    <script src="{{ asset('assets/js/sweet-alert.js') }}"></script>

    <!--- Select2 js -->
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

    <!--- Index js -->
    <script src="{{ asset('assets/js/index.js') }}"></script>

    <!--themecolor js-->
    <script src="{{ asset('assets/js/themecolor.js') }}"></script>

    <!--swither-styles js-->
    <script src="{{ asset('assets/js/swither-styles.js') }}"></script>

    <!-- Custom js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- Switcher js -->
    <script src="{{ asset('assets/switcher/js/switcher.js') }}"></script>

    <!-- INTERNAL WYSIWYG Editor JS -->
    <script src="{{ asset('assets/plugins/wysiwyag/jquery.richtext.js') }}"></script>
    <script src="{{ asset('assets/plugins/wysiwyag/wysiwyag.js') }}"></script>

    <!-- INTERNAL Summernote Editor js -->
    <script src="{{ asset('assets/plugins/summernote-editor/summernote1.js') }}"></script>
    <script src="{{ asset('assets/js/summernote.js') }}"></script>

    <!--Internal quill js -->
    <script src="{{ asset('assets/plugins/quill/quill.min.js') }}"></script>


</body>

<!-- Mirrored from spruko.com/demo/django/adminor/Adminor/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Jan 2023 09:44:27 GMT -->

</html>
