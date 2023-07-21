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

    <title>Sistem SAW</title>

    <!-- Fonts -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css"> --}}
    

    <!-- Styles -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link href="{{ asset('img/1.jpeg') }}" rel="icon" type="image/png">
</head>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gold sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand bg-white d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon" style="color: black;">
                {{-- <i class="fas fa-laugh-wink"></i> --}}
                <img style="max-width: 30%;" src="{{ url('img/1.jpeg') }}" alt="">
            </div>
            <div class="sidebar-brand-text mx-3"></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ Nav::isRoute('home') }}">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>{{ __('Dashboard') }}</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            {{ __('Input Kriteria') }}
        </div>


        {{-- Nav Item Kriteria --}}

        <li class="nav-item {{ Nav::isRoute('inputDataSiswa') }}">
            <a class="nav-link" href="{{ route('inputDataSiswa') }}">
                <i class="fas fa-fw fa-plus"></i>
                <span>{{ __('Input Kriteria') }}</span>
            </a>
        </li>

        @if (Auth::user() != '')
        <div class="mt-3 sidebar-heading">
            {{ __('Data Siswa') }}
        </div>
        
        {{-- Nav Item Siswa --}}
        <li class="nav-item {{ Nav::isRoute('lihatDataSiswa') }}">
            <a class="nav-link" href="{{ route('lihatDataSiswa') }}">
                <i class="fas fa-fw fa-list"></i>
                <span>{{ __('Lihat Data Siswa') }}</span>
            </a>
        </li>

        @endif

       


        <div class="mt-3 sidebar-heading">
            {{ __('Sistem SPK SAW') }}
        </div>

        <li class="nav-item {{ Nav::isRoute('detail') }}">
            <a class="nav-link" href="{{ route('detail') }}">
                <i class="fas fa-fw fa-info"></i>
                <span>{{ __('Detail Sistem') }}</span>
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


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">



                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    @if (Auth::user() == '')
                    <li class="nav-item m-auto">
                        <a href="{{ route('login') }}" style="font-weight: 700;"> Log In 
                            <figure class="img-profile rounded-circle avatar font-weight-bold" data-initial=""><i class="fa fa-user text-white-500"></i></figure></a>
                    </li>
                    @else
                        
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    {{ Auth::user()->name }}
                            </span>
                            <figure class="img-profile rounded-circle avatar font-weight-bold" data-initial="
                            {{ Auth::user()->name[0] }}
                            "></figure>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Profile') }}
                            </a>
                            {{-- <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Settings') }}
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Activity Log') }}
                            </a> --}}
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Logout') }}
                            </a>
                        </div>
                    </li>
                    @endif

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
                    <span>Copyright &copy; Neli@MANH {{ now()->year }}</span>
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
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <button class="btn btn-link" style="color: #557153; text-decoration:none;" type="button" data-dismiss="modal">{{ __('Cancel') }}</button>
                <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
{{-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script> --}}

</body>
</html>
