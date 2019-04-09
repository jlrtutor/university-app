<?php
/* Smarty version 3.1.33, created on 2019-04-09 11:19:07
  from 'C:\laragon\www\university-app\app\public\views\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cac7fabec4b99_41292849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ed2e7311f0e7ab78c076ad070b7d4df59a911e1' => 
    array (
      0 => 'C:\\laragon\\www\\university-app\\app\\public\\views\\templates\\footer.tpl',
      1 => 1554808375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cac7fabec4b99_41292849 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Bootstrap 3.3.7 -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_BASE_URL']->value;?>
vendor/twbs/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- iCheck -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_TEMPLATE_VIEWS_URL']->value;?>
plugins/iCheck/icheck.min.js"><?php echo '</script'; ?>
>
<!-- AdminLTE App -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_BASE_URL']->value;?>
vendor/almasaeed2010/adminlte/dist/js/adminlte.min.js"><?php echo '</script'; ?>
>
<!-- Toastr Notifications-->
<link href="<?php echo $_smarty_tpl->tpl_vars['_BASE_URL']->value;?>
vendor/stinger-soft/toastr/build/toastr.min.css" rel="stylesheet"/>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_BASE_URL']->value;?>
vendor/stinger-soft/toastr/build/toastr.min.js"><?php echo '</script'; ?>
>


<!-- Custom CSS -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_TEMPLATE_VIEWS_URL']->value;?>
assets/css/custom.css">


<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
