<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>GHC | Limited</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Toastr Css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/plugins/toastr/toastr.min.css') }}">
  <!-- Tempusdominus Css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

  @livewireStyles
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    @include('layouts.partials.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('layouts.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        {{ $slot }}
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('layouts.partials.footer')
    </div>
    <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>
  <script src="{{ asset('backend/dist/js/pages/dashboard2.js') }}"></script>
  <!-- ChartJS -->
  <script src="{{ asset('backend/plugins/chart.js/Chart.min.js') }}"></script>
  <!-- Toastr JS -->
  <script type="text/javascript" src="{{ asset('backend/plugins/toastr/toastr.min.js') }}"></script>
  <!-- Moment JS -->
  <script type="text/javascript" src="{{ asset('backend/plugins/moment/moment.min.js') }}"></script>
  <!-- Tempusdominus JS -->
  <script type="text/javascript" src="{{ asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

  <script>
    $(document).ready(function(){
      toastr.options = {
        "positionClass": "toast-top-right",
        "progressBar": true,
        "timeOut": "2000",
      }

      window.addEventListener('hide-form', event => {
        $('#form').modal('hide');
        toastr.success(event.detail.message, 'Success!');
      })
    });
  </script>

  <script>
    window.addEventListener('show-form', event => {
      $('#form').modal('show');
    })

    window.addEventListener('show-delete-modal', event => {
      $('#confirmationModal').modal('show');
    })

    window.addEventListener('hide-delete-modal', event => {
      $('#confirmationModal').modal('hide');
      toastr.success(event.detail.message, 'Success!');
    })

  </script>

  <script type="text/javascript">
    $(document).ready(function () {
        $('#commencementDate').datetimepicker({
            format: 'L'
        });

        $('#endDate').datetimepicker({
            format: 'L'
        });

        $('#birthDate').datetimepicker({
            format: 'L'
        });

        $('#birthDate').on("change.datetimepicker", function (e) {
          let birthDate = $(this).data('birthdate');
          eval(birthDate).set('data.birthDate', $('#birthDateInput').val());
        });

        $('#commencementDate').on("change.datetimepicker", function (e) {
          let commencementDate = $(this).data('commencementdate');
          eval(commencementDate).set('data.commencementDate', $('#commencementDateInput').val());
        });

        $('#endDate').on("change.datetimepicker", function (e) {
          let endDate = $(this).data('endingdate');
          eval(endDate).set('data.endDate', $('#endingDateInput').val());
        });
    });
  </script>

  @livewireScripts
</body>
</html>
