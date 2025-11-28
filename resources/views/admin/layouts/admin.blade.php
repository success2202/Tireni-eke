<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{config('app.name')}}</title>
    <!-- Favicon -->
 <link rel="stylesheet" href="{{asset('/backend/vendors/dataTable/dataTables.min.css')}}" type="text/css">
 <link rel="shortcut icon" href="{{asset('/images/fav.png')}}" type="image/x-icon"/>
    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{asset('/backend/vendors/bundle.css')}}" type="text/css">
  <!-- Datepicker -->
    <link rel="stylesheet" href="{{asset('/backend/vendors/clockpicker/bootstrap-clockpicker.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/backend/vendors/datepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('/backend/vendors/slick/slick.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/backend/vendors/slick/slick-theme.css')}}" type="text/css">
    <!-- Vmap -->
    <link rel="stylesheet" href="{{asset('/backend/vendors/vmap/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/backend/css/app.min.css')}}" type="text/css">
    <script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>

<style>
.BGG{
    background-color: green !important;
}
</style>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css" integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <body>
    <!-- App styles  -->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
@include('admin.layouts.header')
<div id="main" class="d-flex">

    <!-- ================= SIDEBAR WRAPPER ================= -->
    <aside class="navigation shadow-sm">

        <!-- ===== Top Mini Icon Bar ===== -->
        <div class="navigation-menu-tab d-flex flex-column align-items-center py-3 BGG">

            <!-- Logo Icon Small -->
            {{-- <div class="navigation-menu-tab-header mb-3" data-toggle="tooltip" title="Admin">
                <a href="#" class="nav-link">
                    <figure class="avatar avatar-sm">
                        <img src="{{ asset('images/logo/logo.jpeg') }}" alt="logo" class="rounded-circle" width="40">
                    </figure>
                </a>
            </div> --}}

            <!-- Middle Icons -->
            <ul class="flex-grow-1 nav flex-column align-items-center">
                <li class="nav-item mb-3">
                    <a class="nav-link active" href="{{ route('admin.index') }}" data-toggle="tooltip" title="Dashboard">
                        <i data-feather="bar-chart-2"></i>
                    </a>
                </li>
            </ul>

            <!-- Bottom Icons -->
            <ul class="nav flex-column align-items-center mt-auto">
                <li class="nav-item mb-3">
                    <a href="{{ route('admin.settings.index') }}" class="nav-link" data-toggle="tooltip" title="Settings">
                       <b> <i data-feather="settings"></i> </b>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       class="nav-link" data-toggle="tooltip" title="Logout">
                        <i data-feather="log-out"></i>
                    </a>

                    <form id="logout-form" method="POST" action="{{ route('logout') }}" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>

        </div>

        <!-- ================= FULL SIDEBAR BODY ================= -->
        <div class="navigation-menu-body">

            <!-- Sidebar Logo -->
            <div id="navigation-logo" class="text-center py-4 border-bottom ">
                <a href="{{ route('admin.index') }}">
                    <img src="{{ asset('images/logo/wt.jpeg') }}" class="logo mb-2" width="110">
                   
                </a>
            </div>

            <!-- Sidebar Menu Items -->
            @include('admin.layouts.sidebar')
        </div>

    </aside>


    <!-- ================= MAIN CONTENT ================= -->
    <div class="main-content flex-grow-1">

        <!-- Page Header -->
        <div class="page-header shadow-sm bg-white mb-4">
            <div class="container-fluid d-flex justify-content-between align-items-center py-3">
                <h4 class="mb-0">{{ $bheading }}</h4>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.index') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb }}</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Page Body -->
        <div class="container-fluid">
            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="mt-5 py-3 bg-white text-center">
            <div class="container-fluid small text-muted">
                © 2024 {{ $settings->site_name }}, All Rights Reserved
            </div>
        </footer>

    </div>

</div>

<!-- end::main -->

<!-- Plugin scripts -->
<script src="{{asset('/backend/vendors/bundle.js')}}"></script>
<!-- Chartjs -->
<script src="{{asset('/backend/vendors/charts/chartjs/chart.min.js')}}"></script>
<script src="{{asset('/backend/vendors/dataTable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/backend/vendors/dataTable/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('/backend/vendors/dataTable/dataTables.bootstrap4.min.js')}}"></script>
<!-- Apex chart -->
<script src="{{asset('/backend/vendors/charts/apex/apexcharts.min.js')}}"></script>
<script src="{{asset('/backend/vendors/irregular-data-series.js')}}"></script>
<script src="{{asset('/backend/vendors/charts/apex/apexcharts.min.js')}}"></script>

<!-- Circle progress -->
<script src="{{asset('/backend/vendors/circle-progress/circle-progress.min.js')}}"></script>
<!-- Peity -->
<script src="{{asset('/backend/vendors/charts/peity/jquery.peity.min.js')}}"></script>
<script src="{{asset('/backend/js/examples/charts/peity.js')}}"></script>

<script src="{{asset('/backend/vendors/prism/prism.js')}}"></script>
<script src="{{asset('/backend/js/examples/clockpicker.js')}}"></script>
<!-- Datepicker -->
<script src="{{asset('/backend/vendors/datepicker/daterangepicker.js')}}"></script>
<script src="{{asset('/backend/vendors/clockpicker/bootstrap-clockpicker.min.js')}}"></script>
<!-- Slick -->
<script src="{{asset('/backend/vendors/slick/slick.min.js')}}"></script>
<!-- Vamp -->
<script src="{{asset('/backend/vendors/vmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('/backend/vendors/vmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{asset('/backend/js/examples/vmap.js')}}"></script>



<script src="{{asset('/backend/js/examples/dashboard.js')}}"></script>
<div class="colors"> <!-- To use theme colors with Javascript -->
    <div class="bg-primary"></div>
    <div class="bg-primary-bright"></div>
    <div class="bg-secondary"></div>
    <div class="bg-secondary-bright"></div>
    <div class="bg-info"></div>
    <div class="bg-info-bright"></div>
    <div class="bg-success"></div>
    <div class="bg-success-bright"></div>
    <div class="bg-danger"></div>
    <div class="bg-danger-bright"></div>
    <div class="bg-warning"></div>
    <div class="bg-warning-bright"></div>
</div>
<!-- App scripts -->
<script src="{{asset('/backend/js/app.min.js')}}"></script>
{{-- <script>
   $(document).ready(function() {
        $('#summernote').summernote({
            height: 400, 
        });
    });
</script> --}}
<script>
    CKEDITOR.replace( 'summernote' );
</script>

@yield('script')


</body>
</html>