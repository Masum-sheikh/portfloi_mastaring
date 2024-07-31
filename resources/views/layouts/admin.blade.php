
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin')}}/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{asset('admin')}}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('admin')}}/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="{{asset('admin')}}/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="{{asset('admin')}}/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{asset('admin')}}/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admin')}}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('admin')}}/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('admin')}}/images/favicon.png" />
  </head>
  <body class="with-welcome-text">
  @yield('admincontent')
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('admin')}}/vendors/js/vendor.bundle.base.js"></script>
    <script src="{{asset('admin')}}/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('admin')}}/vendors/chart.js/chart.umd.js"></script>
    <script src="{{asset('admin')}}/vendors/progressbar.js/progressbar.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('admin')}}/js/off-canvas.js"></script>
    <script src="{{asset('admin')}}/js/template.js"></script>
    <script src="{{asset('admin')}}/js/settings.js"></script>
    <script src="{{asset('admin')}}/js/hoverable-collapse.js"></script>
    <script src="{{asset('admin')}}/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('admin')}}/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="{{asset('admin')}}/js/dashboard.js"></script>
    <!-- <script src="{{asset('admin')}}/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
  </body>
</html>
