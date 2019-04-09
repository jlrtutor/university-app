<?php
/* Smarty version 3.1.33, created on 2019-04-09 10:11:40
  from 'C:\laragon\www\university-app\app\public\views\templates\parts\content-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cac6fdcda1967_28120893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51b8f76b01c6e27d4ee4fb480b48755d0ceb1169' => 
    array (
      0 => 'C:\\laragon\\www\\university-app\\app\\public\\views\\templates\\parts\\content-header.tpl',
      1 => 1554224985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cac6fdcda1967_28120893 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="content-header">
    <h1><?php echo (($tmp = @$_smarty_tpl->tpl_vars['_SECTION_TITLE']->value)===null||$tmp==='' ? '' : $tmp);?>
 <small><?php echo (($tmp = @$_smarty_tpl->tpl_vars['_SECTION_DESCRIPTION']->value)===null||$tmp==='' ? '' : $tmp);?>
</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> <?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Header']['home'];?>
</a></li>
        <?php if (isset($_smarty_tpl->tpl_vars['_SECTION_MODULE']->value)) {?>
        <li><a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_SECTION_MODULE_URL']->value)===null||$tmp==='' ? '#' : $tmp);?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['_SECTION_MODULE']->value)===null||$tmp==='' ? '' : $tmp);?>
</a></li>
        <?php }?>
        <li class="active"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['_SECTION_ACTIVITY']->value)===null||$tmp==='' ? '' : $tmp);?>
</li>
    </ol>
</section><?php }
}
