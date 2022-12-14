<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Harde || CRUD(guzzle)</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ url('vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ url('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/all.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="{{ url('css/fontawesome.css') }}"> -->

    <link href="{{ url('home/assets/css/variables.css') }}" rel="stylesheet">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ url('css/vertical-layout-light/style.css') }}">
    <link rel="stylesheet" href="{{ url('vendors/mdi/css/materialdesignicons.min.css') }}">
     <!-- DataTables -->

    <link rel="stylesheet" href="{{ url('css/dataTables.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    @include('layouts.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <!-- partial -->
      <div class="main-panel">
       <!-- content-wrapper begins -->
       @yield('content')
        <!-- content-wrapper ends -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

   <!-- plugins:js -->
 <script src="{{ url('vendors/js/vendor.bundle.base.js') }}"></script>
 <!-- endinject -->
 <!-- Plugin js for this page -->
 <script src="{{ url('vendors/chart.js/Chart.min.js') }}"></script>
 <script src="{{ url('vendors/datatables.net/jquery.dataTables.js') }}"></script>
 <script src="{{ url('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
 <script src="{{ url('js/dataTables.select.min.js') }}"></script>
 <script src="{{ url('js/all.js') }}"></script>
 <!-- <script src="{{ url('js/fontawesome.js') }}"></script> -->

 <!-- <script src="{{ url('js/jquery-3.5.1.js') }}"></script> -->
 <!-- End plugin js for this page -->

 <!-- inject:js -->
 <script src="{{ url('js/off-canvas.js') }}"></script>
 <script src="{{ url('js/hoverable-collapse.js') }}"></script>
 <!-- <script src="{{ url('js/template.js') }}"></script> -->
 <script src="{{ url('js/settings.js') }}"></script>
 <script src="{{ url('js/todolist.js') }}"></script>
 <!-- endinject -->

 <!-- Custom js for this page-->
 <script src="{{ url('js/dashboard.js') }}"></script>
 <script src="{{ url('js/Chart.roundedBarCharts.js') }}"></script>
 <script src="{{ url('js/custom.js') }}"></script>
 <!-- End custom js for this page-->

  <!-- sweet alerts 2 -->
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>

</html>

