<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>LaraBill</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/mystyle.css')}}">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('layouts.snippets.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.snippets.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
    <!-- Main content -->
    <div class="content">
      @yield('content')
     
    </div>
    <!-- /.content -->
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
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Satisfaction is our motto
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">LaraBill</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/adminlte.min.js')}}"></script>
<script>
  $('#edit').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var name = button.data('myname')
    var capacity = button.data('mycapacity')
    var status = button.data('mystatus')
    var tab_id = button.data('table_id')
    var modal = $(this)
    modal.find('.modal-body #name').val(name);
    modal.find('.modal-body #capacity').val(capacity);
    modal.find('.modal-body #status').val(status);
    modal.find('.modal-body #tab_id').val(tab_id);
  });
  $('#delete').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var tab_id = button.data('table_id')
    var modal = $(this)
    modal.find('.modal-body #table_id').val(tab_id);
  });
</script>
</body>
</html>
