<?php
/* Smarty version 3.1.33, created on 2019-04-09 10:11:40
  from 'C:\laragon\www\university-app\app\public\views\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cac6fdccede22_44279653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5415a28ab16ad10f22764f84c5a6351ff10b631f' => 
    array (
      0 => 'C:\\laragon\\www\\university-app\\app\\public\\views\\templates\\index.tpl',
      1 => 1549395243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:parts/header.tpl' => 1,
    'file:parts/aside.tpl' => 1,
    'file:parts/content.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5cac6fdccede22_44279653 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- Site wrapper -->
    <div class="wrapper">
        <?php $_smarty_tpl->_subTemplateRender("file:parts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:parts/aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:parts/content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <!-- ./wrapper -->

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
