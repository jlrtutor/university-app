<?php
/* Smarty version 3.1.33, created on 2019-04-09 10:11:40
  from 'C:\laragon\www\university-app\app\public\views\templates\parts\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cac6fdcd7a859_55924395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ebe0e3d3b76c023e7b09a6b0351a084acd0a11b' => 
    array (
      0 => 'C:\\laragon\\www\\university-app\\app\\public\\views\\templates\\parts\\content.tpl',
      1 => 1549563251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:parts/content-header.tpl' => 1,
  ),
),false)) {
function content_5cac6fdcd7a859_55924395 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php $_smarty_tpl->_subTemplateRender('file:parts/content-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- Main content -->
    <section class="content">
        <!-- Init parts/<?php echo $_smarty_tpl->tpl_vars['_section']->value;?>
 -->
        <?php if (isset($_smarty_tpl->tpl_vars['_section']->value)) {?>
            <?php ob_start();
echo "parts/".((string)$_smarty_tpl->tpl_vars['_section']->value);
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('template', $_prefixVariable1);?>
            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php }?>
        <!-- End parts/<?php echo $_smarty_tpl->tpl_vars['_section']->value;?>
 -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper --><?php }
}
