<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Laravel SB Admin 2">
    <meta name="author" content="Alejandro RH">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon" type="image/png">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
            style="background-color: #D2B48C; color: #000;" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}"
                style="color: #000;">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink" style="color: #000;"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            @auth
                @if (Auth::user()->role == '1')
                    <li class="nav-item {{ Nav::isRoute('dashboard') }}">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <i class="fas fa-fw fa-tachometer-alt"style="color: #000;"></i>
                            <span style="color: #000;">{{ __('Dashboard') }}</span></a>
                    </li>

                    <li class="nav-item {{ Nav::isRoute('index_properti') }}">
                        <a class="nav-link" href="{{ route('index_properti') }}">
                            <i class="fas fa-fw fa-building"style="color: #000;"></i>
                            <span style="color: #000;">{{ __('Properti') }}</span></a>
                    </li>

                    <li class="nav-item {{ Nav::isRoute('index_penghuni') }}">
                        <a class="nav-link" href="{{ route('index_penghuni') }}">
                            <i class="fas fa-fw fa-users"style="color: #000;"></i>
                            <span style="color: #000;">{{ __('penghuni') }}</span></a>
                    </li>

                    <li class="nav-item {{ Nav::isRoute('index_keuangan') }}">
                        <a class="nav-link" href="{{ route('index_keuangan') }}">
                            <i class="fas fa-fw fa-dollar-sign"style="color: #000;"></i>
                            <span style="color: #000;">{{ __('keuangan') }}</span></a>
                    </li>

                    <li class="nav-item {{ Nav::isRoute('index_komplain') }}">
                        <a class="nav-link" href="{{ route('index_komplain') }}">
                            <i class="fas fa-fw fa-exclamation-circle"style="color: #000;"></i>
                            <span style="color: #000;">{{ __('komplain') }}</span></a>
                    </li>

                    <li class="nav-item {{ Nav::isRoute('index_account_penyewa') }}">
                        <a class="nav-link" href="{{ route('index_account_penyewa') }}">
                            <i class="fas fa-fw fa-users"style="color: #000;"></i>
                            <span style="color: #000;">{{ __('account penyewa') }}</span></a>
                    </li>
                @endif
            @endauth

            @auth
                @if (Auth::user()->role == '2')
                    <li class="nav-item {{ Nav::isRoute('dashboard_penyewa') }}">
                        <a class="nav-link" href="{{ route('dashboard_penyewa') }}">
                            <i class="fas fa-fw fa-tachometer-alt"style="color: #000;"></i>
                            <span style="color: #000;">{{ __('Dashboard') }}</span></a>
                    </li>

                    <li class="nav-item {{ Nav::isRoute('index_komplain_penyewa') }}">
                        <a class="nav-link" href="{{ route('index_komplain_penyewa') }}">
                            <i class="fas fa-fw fa-exclamation-circle" style="color: #000;"></i>
                            <span style="color: #000;">{{ __('ajukan komplain') }}</span>
                        </a>
                    </li>

                    <li class="nav-item {{ Nav::isRoute('index_keuangan_penyewa') }}">
                        <a class="nav-link" href="{{ route('index_keuangan_penyewa') }}">
                            <i class="fas fa-fw fa-dollar-sign" style="color: #000;"></i>
                            <span style="color: #000;">{{ __('pembayaran') }}</span>
                        </a>
                    </li>
                @endif
            @endauth

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading" style="color: #000;">
                {{ __('Settings') }}
            </div>

            <!-- Nav Item - Profile -->
            {{-- <li class="nav-item {{ Nav::isRoute('profile') }}">
                <a class="nav-link" href="{{ route('profile') }}">
                    <i class="fas fa-fw fa-user" style="color: #000;"></i>
                    <span style="color: #000;">{{ __('Profile') }}</span>
                </a>
            </li> --}}

            <!-- Nav Item - About -->
            <li class="nav-item {{ Nav::isRoute('about') }}">
                <a class="nav-link" href="{{ route('about') }}">
                    <i class="fas fa-fw fa-hands-helping" style="color: #000;"></i>
                    <span style="color: #000;">{{ __('About') }}</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->


                        <!-- Nav Item - Messages -->


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    {{ session('username') }}
                                </span>

                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                {{-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('keluar') }}" data-target="">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @yield('main-content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Maintained by <a href="https://github.com/aleckrh" target="_blank">AleckRH</a>.
                            {{ now()->year }}</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('Ready to Leave?') }}</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-link" type="button" data-dismiss="modal">{{ __('Cancel') }}</button>
                    <a class="btn btn-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>

</html>
