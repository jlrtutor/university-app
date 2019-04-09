<?php
/* Smarty version 3.1.33, created on 2019-04-09 10:13:35
  from 'C:\laragon\www\university-app\app\public\views\templates\parts\course.add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cac704f8678f0_43470013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34af3518282740b29f249d53ed65bd23f8ff8d2c' => 
    array (
      0 => 'C:\\laragon\\www\\university-app\\app\\public\\views\\templates\\parts\\course.add.tpl',
      1 => 1554229502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cac704f8678f0_43470013 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="content">
    <div class="row">
        <div class="col-md-5">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><?php echo $_smarty_tpl->tpl_vars['_SECTION_TITLE']->value;?>
</h3>
                </div>
                <form role="form" action="<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
" method="POST">
                    <input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->id)===null||$tmp==='' ? '' : $tmp);?>
"/>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Course']['form_name_label'];?>
</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->name)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Course']['form_name_placeholder'];?>
">
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-flat"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Form']['button_submit'];?>
</button>
                    </div>
                </form>
              </div>
        </div>
        <div class="col-md-7">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Course']['list_title'];?>
</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                    <tbody><tr>
                        <th></th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Course']['list_column_name'];?>
</th>
                        <th style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Course']['list_column_enrollments'];?>
</th>
                        <th style="width: 100px"></th>
                    </tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['courses']->value, 'course', false, NULL, 'course', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['course']->value) {
?>
                    <tr>
                        <td><i class="fa  fa-ellipsis-v"></i></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['course']->value->name;?>
</td>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['_STUDENTS']->value->getNumStudents($_smarty_tpl->tpl_vars['course']->value->id)->total;?>
</td>
                        <td align="right">
                            <?php $_smarty_tpl->_assignInScope('params', array('id'=>$_smarty_tpl->tpl_vars['course']->value->id));?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_router']->value->generate('course-edit',$_smarty_tpl->tpl_vars['params']->value);?>
" title="Editar" class="btn-edit btn btn-danger btn-xs" role="<?php echo $_smarty_tpl->tpl_vars['course']->value->id;?>
"> <i class="fa fa-edit"></i> </a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_router']->value->generate('course-delete',$_smarty_tpl->tpl_vars['params']->value);?>
" title="Borrar" class="btn-delete btn btn-primary btn-xs" role="<?php echo $_smarty_tpl->tpl_vars['course']->value->id;?>
"> <i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody></table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a type="submit" class="pull-right btn btn-primary btn-flat" href="<?php echo $_smarty_tpl->tpl_vars['_router']->value->generate('course-add');?>
"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Form']['button_new'];?>
</a>
                </div>
                </div>
        </div>
    </div>
</section>

<div class="modal modal-danger fade" id="modal-warning">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Course']['alert_delete_title'];?>
</h4>
        </div>
        <div class="modal-body">
            <p><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Course']['alert_delete_body'];?>
</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Course']['alert_delete_button_close'];?>
</button>
            <button type="button" class="btn btn-outline" id="btn-delete-confirm"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Course']['alert_delete_button_confirm'];?>
</button>
        </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- page script -->
<?php echo '<script'; ?>
>

        $(function () {
            $('a.btn-delete').on('click', function(e) {
                e.preventDefault();
                var url = $(this).attr('href');
                $('#modal-warning').modal()
                .on('click', '#btn-delete-confirm', function(e) {
                    document.location.href = url;
                });
            });


            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-bottom-full-width",
                "preventDuplicates": false,
                "showDuration": "300",
                "hideDuration": "500",
                "timeOut": "3000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
                                }

            <?php if (isset($_smarty_tpl->tpl_vars['_ERRORS']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_ERRORS']->value, 'error', false, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value => $_smarty_tpl->tpl_vars['error']->value) {
?>
                    $("#<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
").addClass("error");
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
                toastr["error"]("<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Course']['validation_error_message'];?>
", "<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Course']['validation_error_title'];?>
");
            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['_MESSAGE']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['_MESSAGE']->value == 'NOT_FOUND') {?>
                    toastr["error"]("<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Course']['not_found_error_message'];?>
", "<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Course']['not_found_error_title'];?>
");
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['_MESSAGE']->value == 'INSERT_OK') {?>
                    toastr["success"]("<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Course']['insert_ok_message'];?>
", "<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Course']['insert_ok_title'];?>
");
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['_MESSAGE']->value == 'INSERT_KO') {?>
                    toastr["error"]("<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Course']['insert_ko_message'];?>
", "<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Course']['insert_ko_title'];?>
");
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['_MESSAGE']->value == 'UPDATE_KO') {?>
                    toastr["error"]("<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Course']['update_ko_message'];?>
", "<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Course']['update_ko_title'];?>
");
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['_MESSAGE']->value == 'UPDATE_OK') {?>
                    toastr["success"]("<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Course']['update_ok_message'];?>
", "<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Course']['update_ok_title'];?>
");
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['_MESSAGE']->value == 'DELETE_KO') {?>
                    toastr["error"]("<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Course']['delete_ko_message'];?>
", "<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Course']['delete_ko_title'];?>
");
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['_MESSAGE']->value == 'DELETE_OK') {?>
                    toastr["success"]("<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Course']['delete_ok_message'];?>
", "<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Course']['delete_ok_title'];?>
");
                <?php }?>
            <?php }?>
        });
    <?php echo '</script'; ?>
><?php }
}
