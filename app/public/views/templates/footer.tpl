<!-- Bootstrap 3.3.7 -->
<script src="{$_BASE_URL}vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="{$_TEMPLATE_VIEWS_URL}plugins/iCheck/icheck.min.js"></script>
<!-- AdminLTE App -->
<script src="{$_BASE_URL}vendor/almasaeed2010/adminlte/dist/js/adminlte.min.js"></script>
<!-- Toastr Notifications-->
<link href="{$_BASE_URL}vendor/stinger-soft/toastr/build/toastr.min.css" rel="stylesheet"/>
<script src="{$_BASE_URL}vendor/stinger-soft/toastr/build/toastr.min.js"></script>


<!-- Custom CSS -->
<link rel="stylesheet" href="{$_TEMPLATE_VIEWS_URL}assets/css/custom.css">


<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });

  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
