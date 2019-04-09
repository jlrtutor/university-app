<?php
/* Smarty version 3.1.33, created on 2019-04-09 10:11:52
  from 'C:\laragon\www\university-app\app\public\views\templates\error\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cac6fe8145fd8_94004257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7778d2c7b05ea1f1f2ca72ae3cfda68495095b7c' => 
    array (
      0 => 'C:\\laragon\\www\\university-app\\app\\public\\views\\templates\\error\\404.tpl',
      1 => 1549393302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_5cac6fe8145fd8_94004257 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- Main content -->
    <section class="content mtop-20">
      <div class="error-page">
        <h2 class="headline text-yellow"> 404</h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i> Oops! Página no encontrada.</h3>

          <p>
            No hemos podido encontrar la página que buscas.
            <br>
            Prueba a volver a la <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">página de inicio</a>.
          </p>

          <div>
            <img src="<?php echo $_smarty_tpl->tpl_vars['_TEMPLATE_VIEWS_URL']->value;?>
/assets/img/einstein-circle.png" width="100">
          </div>
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>
    <!-- /.content -->

<?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
