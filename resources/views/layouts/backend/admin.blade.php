<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description"
        content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">


    <title>WineCulture Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="  <link rel=" stylesheet"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css"
        integrity="sha512-42kB9yDlYiCEfx2xVwq0q7hT4uf26FUgSIZBK8uiaEnTdShXjwr8Ip1V4xGJMg3mHkUt9nNuTDxunHF0/EgxLQ=="
        crossorigin="anonymous" />
    <link src="{{ asset('assets\plugins\backend\jvectormap\jquery-jvectormap-2.0.3.css') }}">
    </link>
    <link src="{{ asset('assets\plugins\backend\daterangepicker\daterangepicker.css') }}">
    </link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css"
        integrity="sha512-6S2HWzVFxruDlZxI3sXOZZ4/eJ8AcxkQH1+JjSe/ONCEqR9L4Ysq5JdT5ipqtzU7WHalNwzwBv+iE51gNHJNqQ=="
        crossorigin="anonymous" />
    <link src="{{ asset('public\assets\css\paginas\backend\blog.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" />


    <link rel="stylesheet" href="{{ URL::asset('assets/css/layouts/backend/admin.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/backend/dashboard.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/paginas/backend/faq_backend.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"
        integrity="sha512-bUg5gaqBVaXIJNuebamJ6uex//mjxPk8kljQTdM1SwkNrQD7pjS+PerntUSD+QRWPNJ0tq54/x4zRV8bLrLhZg=="
        crossorigin="anonymous"></script>
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">

    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();

    </script>


    <div id="toaster"></div>


    <div class="wrapper">

        <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
                <!-- Aplication Brand -->
                <div class="app-brand">
                    <a href="/admin" title="logo" style="width: 100px !important; ">
                      <img src="{{ URL::asset('assets\img\logos\wineculture_logo_darkmode.png') }}">
                    </a>
                </div>
                <!-- begin sidebar scrollbar -->
                <div class="sidebar-scrollbar">
                    <!-- sidebar menu -->
                    <ul class="nav sidebar-inner" id="sidebar-menu">
                        <li @if (Route::currentRouteName()=='admin_dashboard') class="has-sub active expand" @else class="has-sub" @endif>
                            <a class="sidenav-item-link" href="{{route('admin_dashboard')}}" data-toggle="collapse"
                                data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span class="nav-text">Dashboard</span>
                            </a>
                        </li>
                        <!-- Blog Menu -->
                        <li @if (Route::currentRouteName()=='admin_blog') class="has-sub active expand" @else class="has-sub" @endif>
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#app" aria-expanded="false" aria-controls="app">
                                <i class="mdi mdi-pencil-box-multiple"></i>
                                <span class="nav-text">Blog</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="app" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li>
                                        <a class="sidenav-item-link" @if (Route::currentRouteName()=='admin_blog') class="active" @endif href="{{route('admin_blog')}}">
                                            <span class="nav-text">Data Table</span>

                                        </a>
                                    </li>

                                    <li>
                                        <a class="sidenav-item-link" @if (Route::currentRouteName()=='blog.store') class="active" @endif href="{{route('blog.store')}}">
                                            <span class="nav-text">Insert Info</span>

                                        </a>
                                    </li>

                                </div>
                            </ul>
                        </li>
                        <!-- End of Blog Menu -->
                        <li @if (Route::currentRouteName()=='admin_receitas') class="has-sub active expand" @else class="has-sub" @endif>
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#components" aria-expanded="false" aria-controls="components">
                                <i class="mdi mdi-table"></i>
                                <span class="nav-text">Receitas</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="components" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li>
                                        <a class="sidenav-item-link"href="{{route('admin_receitas')}}">
                                            <span class="nav-text">Data table</span>

                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidenav-item-link" href="badge.html">
                                            <span class="nav-text">Inserte Info</span>

                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <li @if (Route::currentRouteName()=='admin_faq') class="has-sub active expand" @else class="has-sub" @endif>
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#icons" aria-expanded="false" aria-controls="icons">
                                <i class="fas fa-question-circle"></i>
                                <span class="nav-text">FAQ</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="icons" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li>
                                        <a class="sidenav-item-link" href="{{route('admin_faq')}}">
                                            <span class="nav-text">Data Table</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidenav-item-link" href="flag-icon.html">
                                            <span class="nav-text">Inserir Pergunta</span>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <li @if (Route::currentRouteName()=='admin_contactos') class="has-sub active expand" @else class="has-sub" @endif>
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#contactos" aria-expanded="false" aria-controls="icons">
                                <i class="mdi mdi-email-mark-as-unread"></i>
                                <span class="nav-text">Contactos</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="contactos" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li>
                                        <a class="sidenav-item-link" href="{{route('admin_contactos')}}">
                                            <span class="nav-text">Mensagens</span>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>

                </div>

                <div class="sidebar-footer">
                    <hr class="separator mb-0" />
                    <div class="sidebar-footer-content">
<p>
                        &copy; <span id="copy-year">2020</span> Copyright by
                        <a class="text-primary">Wineculture</a>.
                    </p>
                    </div>
                </div>
            </div>
        </aside>


        <div class="page-wrapper">
            <!-- Header -->
            <header class="main-header " id="header">
                <nav class="navbar navbar-static-top navbar-expand-lg">
                    <!-- Sidebar toggle button -->
                    <button id="sidebar-toggler" class="sidebar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <!-- search form -->
                    <div class="search-form d-none d-lg-inline-block">
                        <div class="input-group">
                            <button type="button" name="search" id="search-btn" class="btn btn-flat">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <input type="text" name="query" id="search-input" class="form-control"
                                placeholder="'button', 'chart' etc." autofocus autocomplete="off" />
                        </div>
                        <div id="search-results-container">
                            <ul id="search-results"></ul>
                        </div>
                    </div>

                    <div class="navbar-right ">
                        <ul class="nav navbar-nav">
                            <li class="dropdown notifications-menu">
                                <button class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="mdi mdi-bell-outline"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-header">You have 5 notifications</li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-account-plus"></i> New user registered
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 10 AM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-account-remove"></i> User deleted
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 07 AM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 12 PM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-account-supervisor"></i> New client
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 10 AM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-server-network-off"></i> Server overloaded
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 05 AM</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-footer">
                                        <a class="text-center" href="#"> View All </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="right-sidebar-in right-sidebar-2-menu">
                                <i class="mdi mdi-settings mdi-spin"></i>
                            </li>
                            <!-- User Account -->
                            <li class="dropdown user-menu">
                                <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <img src="assets/img/user/user.png" class="user-image" alt="User Image" />
                                    <span class="d-none d-lg-inline-block">Administrador</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <!-- User image -->
                                    <li class="dropdown-header">
                                        <img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
                                        <div class="d-inline-block">
                                            Administrador <small class="pt-1">admin@wineculure.com</small>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="user-profile.html">
                                            <i class="mdi mdi-account"></i> My Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-email"></i> Message
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                                    </li>
                                    <li class="right-sidebar-in">
                                        <a href="javascript:0"> <i class="mdi mdi-settings"></i> Setting </a>
                                    </li>

                                    <li class="dropdown-footer">
                                        <a href="{{route('index')}}"> <i class="mdi mdi-logout"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            @yield ('content')
            @yield ('content1')
            <div class="right-sidebar-2">
                <div class="right-sidebar-container-2">
                    <div class="slim-scroll-right-sidebar-2">

                        <div class="right-sidebar-2-header">
                            <h2>Layout Settings</h2>
                            <p>User Interface Settings</p>
                            <div class="btn-close-right-sidebar-2">
                                <i class="mdi mdi-window-close"></i>
                            </div>
                        </div>

                        <div class="right-sidebar-2-body">
                            <span class="right-sidebar-2-subtitle">Header Layout</span>
                            <div class="no-col-space">
                                <a href="javascript:void(0);"
                                    class="btn-right-sidebar-2 header-fixed-to btn-right-sidebar-2-active">Fixed</a>
                                <a href="javascript:void(0);" class="btn-right-sidebar-2 header-static-to">Static</a>
                            </div>

                            <span class="right-sidebar-2-subtitle">Sidebar Layout</span>
                            <div class="no-col-space">
                                <select class="right-sidebar-2-select" id="sidebar-option-select">
                                    <option value="sidebar-fixed">Fixed Default</option>
                                    <option value="sidebar-fixed-minified">Fixed Minified</option>
                                    <option value="sidebar-fixed-offcanvas">Fixed Offcanvas</option>
                                    <option value="sidebar-static">Static Default</option>
                                    <option value="sidebar-static-minified">Static Minified</option>
                                    <option value="sidebar-static-offcanvas">Static Offcanvas</option>
                                </select>
                            </div>

                            <span class="right-sidebar-2-subtitle">Header Background</span>
                            <div class="no-col-space">
                                <a href="javascript:void(0);"
                                    class="btn-right-sidebar-2 btn-right-sidebar-2-active header-light-to">Light</a>
                                <a href="javascript:void(0);" class="btn-right-sidebar-2 header-dark-to">Dark</a>
                            </div>

                            <span class="right-sidebar-2-subtitle">Navigation Background</span>
                            <div class="no-col-space">
                                <a href="javascript:void(0);"
                                    class="btn-right-sidebar-2 btn-right-sidebar-2-active sidebar-dark-to">Dark</a>
                                <a href="javascript:void(0);" class="btn-right-sidebar-2 sidebar-light-to">Light</a>
                            </div>

                            <span class="right-sidebar-2-subtitle">Direction</span>
                            <div class="no-col-space">
                                <a href="javascript:void(0);"
                                    class="btn-right-sidebar-2 btn-right-sidebar-2-active ltr-to">LTR</a>
                                <a href="javascript:void(0);" class="btn-right-sidebar-2 rtl-to">RTL</a>
                            </div>

                            <div class="d-flex justify-content-center" style="padding-top: 30px">
                                <div id="reset-options" style="width: auto; cursor: pointer"
                                    class="btn-right-sidebar-2 btn-reset">Reset
                                    Settings</div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

                <script>
                    var d = new Date();
                    var year = d.getFullYear();
                    document.getElementById("copy-year").innerHTML = year;

                </script>
            </footer>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"
        integrity="sha512-cJMgI2OtiquRH4L9u+WQW+mz828vmdp9ljOcm/vKTQ7+ydQUktrPVewlykMgozPP+NUBbHdeifE6iJ6UVjNw5Q=="
        crossorigin="anonymous"></script>




    <script src="{{ asset('assets\plugins\backend\jekyll-search.min.js') }}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"
        integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
        crossorigin="anonymous"></script>

    <script src="{{ asset('assets\plugins\backend\jvectormap\jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('assets\plugins\backend\jvectormap\jquery-jvectormap-world-mill.js') }}"></script>

    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <script src="{{ asset('assets\plugins\backend\daterangepicker\moment.min.js') }}"></script>
    <script src="{{ asset('assets\plugins\backend\daterangepicker\daterangepicker.js') }}"></script>

    <script>
        jQuery(document).ready(function() {
            jQuery('input[name="dateRange"]').daterangepicker({
                autoUpdateInput: false,
                singleDatePicker: true,
                locale: {
                    cancelLabel: 'Clear'
                }
            });
            jQuery('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
                jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
            });
            jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
                jQuery(this).val('');
            });
        });

    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });

    </script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"
        integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ=="
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('assets\js\layouts\backend\admin.js') }}"></script>
    <script src="{{ asset('assets\js\paginas\backend\dashboard.js') }}"></script>
    <script src="{{ asset('assets\js\paginas\backend\receitas.js') }}"></script>
    <script src="{{ asset('assets\js\paginas\backend\blog.js') }}"></script>
    <script src="{{ asset('assets\js\paginas\backend\faq.js') }}"></script>
    <script src="{{ asset('assets\js\paginas\backend\contactos.js') }}"></script>
</body>

</html>
