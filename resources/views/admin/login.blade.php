<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>awal bros</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('assets/skydash/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('assets/skydash/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/skydash/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('assets/skydash/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('assets/skydash/images/logo.jpg')}}" />
</head>

<body>

<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth px-0" style="background-image: url('https://www.pekanbaru.go.id/berkas_file/news/15052018/84554-8499772842%206375ee6255%20jpg');background-size: cover;height: 100vh;">
      <div class="row w-100 mx-0">
        <div class="col-lg-4 mx-auto">
          <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            <div class="brand-logo">
              <img src="images/awal.png" alt="logo">
            </div>
            <h4>Halo! mari kita mulai</h4>
            <h6 class="font-weight-light">Masuk untuk melanjutkan.</h6>

            <form class="user">
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="Enter Username or Email Address...">
              </div>
              <div class="form-group">
                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
              </div>
              <div class="form-group">
                <div class="custom-control custom-checkbox small">
                  <input type="checkbox" class="custom-control-input" id="customCheck">
                  <label class="custom-control-label" for="customCheck">Remember Me</label>
                </div>
              </div>
              <a href="#" onclick="validateLogin()" class="btn btn-primary btn-user btn-block" id="loginButton">Login</a>
            </form>

            <div class="text-center mt-4 font-weight-light">
              Belum Punya Akun? <a href="/regis" class="text-primary">Daftar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts -->
<script src="js/sb-admin-2.min.js"></script>

<script>
  function validateLogin() {
    var username = document.getElementById("exampleInputUsername").value;
    var password = document.getElementById("exampleInputPassword").value;

    if (username === "admin@gmail.com" && password === "admin123") {
      window.location.href = "/tabel";
    }else if(username === "febri@gmail.com" && password === "febri123") {
      window.location.href = "/tabel";
    }
     else {
      alert("Invalid username or password");
    }
  }
</script>

    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('assets/skydash/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('assets/skydash/js/off-canvas.js')}}"></script>
  <script src="{{asset('assets/skydash/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('assets/skydash/js/template.js')}}"></script>
  <script src="{{asset('assets/skydash/js/settings.js')}}"></script>
  <script src="{{asset('assets/skydash/js/todolist.js')}}"></script>
  <!-- endinject -->
</body>

</html>