
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
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
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../Assets/images/logo.svg" alt="logo">
              </div>
              <h4>Ayo catat perjalanan mu!</h4>
              <h6 class="font-weight-light">Masuk untuk lanjut</h6>

              <form action="/postlogin" method="POST">
              @csrf
                <div class="input-group mb-3">
                  <input type="text" name="email" class="form-control" placeholder="Email">
                  <div class="input-group-append">
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="password" name="password" class="form-control" placeholder="Password">
                  <div class="input-group-append">
                  </div>
                </div>
                <div class="col-4 m-auto">
                  <button type="submit" name="submit" class="btn btn-primary ">Masuk</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Belum Punya Akun? <a href="/register" class="text-primary">Buat</a>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
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
