<?php
/* Smarty version 3.1.33, created on 2019-04-09 10:11:40
  from 'C:\laragon\www\university-app\app\public\views\templates\parts\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cac6fdcd2c633_13161211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6a5454df270ce37b1bac702932f9ec1a7882de4' => 
    array (
      0 => 'C:\\laragon\\www\\university-app\\app\\public\\views\\templates\\parts\\header.tpl',
      1 => 1554746267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cac6fdcd2c633_13161211 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\university-app\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo $_smarty_tpl->tpl_vars['_router']->value->generate('home');?>
" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['_LANG']->value['APP']['title'],3,'');?>
</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['APP']['title'];?>
</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Header']['toggle_button_title'];?>
</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            
            
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo $_smarty_tpl->tpl_vars['_TEMPLATE_VIEWS_URL']->value;?>
assets/img/avatar5.png" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['_USER']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['_USER']->value['surname'];?>
</span>
            </a>
            <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                <img src="<?php echo $_smarty_tpl->tpl_vars['_TEMPLATE_VIEWS_URL']->value;?>
assets/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                    <?php echo $_smarty_tpl->tpl_vars['_USER']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['_USER']->value['surname'];?>

                    <br/>
                    <?php echo $_smarty_tpl->tpl_vars['_USER']->value['comments'];?>

                </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                <div class="row">
                    <div class="col-xs-4 text-center">
                    <a href="https://twitter.com/SpeedRT" target="_blank">Twitter</a>
                    </div>
                    <div class="col-xs-4 text-center">
                    <a href="mailto:juanluis.ramirez.tutor@gmail.com">Gmail</a>
                    </div>
                    <div class="col-xs-4 text-center">
                    <a href="https://github.com/jlrtutor" target="_blank">GitHub</a>
                    </div>
                </div>
                <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                <div class="pull-right">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_router']->value->generate('logout');?>
" class="btn btn-danger btn-flat"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Header']['button_close_session'];?>
</a>
                </div>
                </li>
            </ul>
            </li>
        </ul>
        </div>
    </nav>
</header>

<!-- =============================================== --><?php }
}
