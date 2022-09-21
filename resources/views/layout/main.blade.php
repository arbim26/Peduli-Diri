<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Peduli Diri</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../Assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="../Assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../Assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../Assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../Assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../Assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../Assets/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../Assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="/dashboard"><img src="../Assets/images/logo.svg"
                        class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="/dashboard"><img src="../Assets/images/logo-mini.svg"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-primary fs-30" aria-current="page" href="/dashboard">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-primary fs-30" aria-current="page" href="/perjalanan">Catatan
                            Perjalanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-primary fs-30" aria-current="page" href="/tambah">Isi Daftar</a>
                    </li>

                </ul>
            </div>
        </nav>
        <!-- partial -->
        @foreach ($posts as $post)
        @if ($post = Auth::user())
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas text-center" id="sidebar">
                <div class="pt-3">
                    <h4 class="mt-3 text-primary">Nama  : {{$post->name}}</h>
                    <h6 class="mt-3 text-primary">Nik   : {{$post->nik}}</h6>
                    <h6 class="mt-3 text-primary">Email : {{$post->email}}</h6>
                </div>
                <a href="/logout" class="btn btn-danger mt-5">Logout</a>
            </nav>

            <div class="main-panel">

             @yield('content')

            </div>
            <!-- page-body-wrapper ends -->
        </div>
        @endif
       @endforeach


        <!-- container-scroller -->

        <!-- plugins:js -->
        <script src="../Assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="../Assets/vendors/chart.js/Chart.min.js"></script>
        <script src="../Assets/vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="../Assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <script src="../Assets/js/dataTables.select.min.js"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="../Assets/js/off-canvas.js"></script>
        <script src="../Assets/js/hoverable-collapse.js"></script>
        <script src="../Assets/js/template.js"></script>
        <script src="../Assets/js/settings.js"></script>
        <script src="../Assets/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="../Assets/js/dashboard.js"></script>
        <script src="../Assets/js/Chart.roundedBarCharts.js"></script>
        <!-- End custom js for this page-->
</body>

</html>
