<?php
/* Smarty version 3.1.33, created on 2019-04-09 10:11:40
  from 'C:\laragon\www\university-app\app\public\views\templates\parts\modal_delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cac6fdce0ef93_77790422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f48f00351b47eb903206ce3bc98cc1d62dcfead6' => 
    array (
      0 => 'C:\\laragon\\www\\university-app\\app\\public\\views\\templates\\parts\\modal_delete.tpl',
      1 => 1554744500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cac6fdce0ef93_77790422 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal modal-danger fade" id="modal-warning">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Modal']['delete_button_close'];?>
">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Modal']['delete_title'];?>
</h4>
        </div>
        <div class="modal-body">
            <p><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Modal']['delete_message'];?>
</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Modal']['delete_button_close'];?>
</button>
            <button type="button" class="btn btn-outline" id="btn-delete-confirm"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Modal']['delete_button_delete'];?>
</button>
        </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div><?php }
}
