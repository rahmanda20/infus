<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Awal Bros Pekanbaru</title>

        <style>
#gant {
  width: 100%;
  height: 500px;
}

    .btn-primary {
        background-color: #fff;
        color: #007bff;
        border-color: #007bff;
    }
    
    .btn-primary.active, 
    .btn-primary:active, 
    .btn-primary:focus, 
    .btn-primary:hover {
        background-color: #007bff;
        border-color: #007bff;
        color: #fff;
    }
    
    .rounded-pill {
        border-radius: 50px;
    }
   .kat{
    width:80%;
    height:50%;
    justify-content:left;
    margin:100px;
    background-color:white;
border-radius:20px;
padding:70px;
   }
    </style>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}"> 
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{asset('assets/css/sb-admin-2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('assets/css/sb-admin-2.min.css')}}">

    <!-- Custom styles for this page -->
    <link rel="stylesheet" href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')}}">
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-hospital"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Smart Infus</div>
    </a>



            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>



           
            <li class="nav-item active">
                <a class="nav-link" href="/tabel">
                <i class="fas fa-fw fa-folder"></i>
                    <span>Data Infus</span></a>
            </li>

               
            <li class="nav-item active">
                <a class="nav-link" href="/pasien">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Data Pasien</span></a>
            </li>

               
            <li class="nav-item active">
                <a class="nav-link" href="/tampil">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Data Rekap Medis</span></a>
            </li>

   
            <li class="nav-item active">
                <a class="nav-link" href="/pengaturan">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Pengaturan</span></a>
            </li>

               
            <li class="nav-item active">
                <a class="nav-link" href="/login">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Logout</span></a>
            </li>


       <!-- Nav Item - Utilities Collapse Menu -->
      
          
            <!-- Nav Item - Tables -->
           
            <!-- Divider -->
          

            <!-- Sidebar Toggler (Sidebar) -->
          

            <!-- Sidebar Message -->
            
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

                        <!-- Nav Item - Alerts -->
                        

                        <!-- Nav Item - Messages -->
                       
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
src="/assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                        
                               <a class="nav-link" href="/">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
              
                </nav>
                <!-- End of Topbar -->
               
             <div class="row">
            <!-- End of Footer -->
            @yield('content')
        </div>
        <!-- End of Content Wrapper -->
        
    </div>
             
    <!-- End of Page Wrapper -->
 <!-- Bootstrap core JavaScript-->
 <!-- Core plugin JavaScript-->
<script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('assets/js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{ asset('assets/vendor/chart.js/Chart.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('assets/js/demo/chart-area-demo.js')}}"></script>
<script src="{{ asset('assets/js/demo/chart-pie-demo.js')}}"></script>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('assets/js/demo/datatables-demo.js')}}"></script>



</html>