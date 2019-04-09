<?php
/* Smarty version 3.1.33, created on 2019-04-09 10:11:39
  from 'C:\laragon\www\university-app\app\public\views\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cac6fdb413a45_07886777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bde66c4006473a2d58cbeb57d71aca5638771778' => 
    array (
      0 => 'C:\\laragon\\www\\university-app\\app\\public\\views\\templates\\login.tpl',
      1 => 1554752415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5cac6fdb413a45_07886777 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="login-container"></div>

    <div class="login-box" style="position:absolute;top:50px;left:35%;right:60%;">
        <div class="login-logo">
            <a href="#"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Login']['form_title'];?>
</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
    <p class="login-box-msg"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Login']['form_subtitle'];?>
</p>
    
    <form action="" method="post" autocomplete="off">
        <div class="form-group has-feedback">
        <input type="text" name="email" class="form-control" placeholder="Email" value="root@root.com">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" value="admin">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row">
        <div class="col-xs-8">
            <div class="checkbox icheck">
                <label>
                    <input type="checkbox"> <?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Login']['form_reminder'];?>

                </label>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Login']['form_submit_button'];?>
</button>
        </div>
        <!-- /.col -->
    </div>
</form>


</div>
<!-- /.login-box-body -->
<?php if ($_smarty_tpl->tpl_vars['_ERROR_MSG']->value) {?>
<div class="alert alert-danger mtop-20">
    <?php echo $_smarty_tpl->tpl_vars['_ERROR_MSG']->value;?>

</div>

<?php echo '<script'; ?>
>
$("div.alert").delay(3000).fadeOut(function() {
    //
});
<?php echo '</script'; ?>
>

<?php }?>
</div>
<!-- /.login-box -->


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_TEMPLATE_VIEWS_URL']->value;?>
/plugins/Polygonal-Particles-Background-polygonizr/src/polygonizr.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(function () {
        $('div.login-container').polygonizr({
            'nodeFancyEntrance':true
        });
    });
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
