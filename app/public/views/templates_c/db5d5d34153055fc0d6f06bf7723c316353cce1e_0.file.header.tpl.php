<?php
/* Smarty version 3.1.33, created on 2019-04-09 11:19:07
  from 'C:\laragon\www\university-app\app\public\views\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cac7fabd9c3c1_23558019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db5d5d34153055fc0d6f06bf7723c316353cce1e' => 
    array (
      0 => 'C:\\laragon\\www\\university-app\\app\\public\\views\\templates\\header.tpl',
      1 => 1554808118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cac7fabd9c3c1_23558019 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['APP']['title'];?>
</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="shorcut icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['_TEMPLATE_VIEWS_URL']->value;?>
assets/img/favicon.ico"/>
  
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_BASE_URL']->value;?>
vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_BASE_URL']->value;?>
vendor/fortawesome/font-awesome/css/font-awesome.min.css">
  
  <!-- Ionicons -->
  <!--
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_TEMPLATE_VIEWS_URL']->value;?>
bower_components/Ionicons/css/ionicons.min.css">
  -->

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_BASE_URL']->value;?>
vendor/almasaeed2010/adminlte/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_TEMPLATE_VIEWS_URL']->value;?>
plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_TEMPLATE_VIEWS_URL']->value;?>
assets/css/skins/_all-skins.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- jQuery 3 -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_BASE_URL']->value;?>
vendor/components/jquery/jquery.min.js"><?php echo '</script'; ?>
>

</head>
<body class="sidebar-mini skin-red <?php echo (($tmp = @$_smarty_tpl->tpl_vars['_BODY_CLASS']->value)===null||$tmp==='' ? '' : $tmp);?>
" id="body"><?php }
}
