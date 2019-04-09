<?php
/* Smarty version 3.1.33, created on 2019-04-09 10:11:48
  from 'C:\laragon\www\university-app\app\public\views\templates\parts\subject.add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cac6fe4a7c0a0_54107121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53b9134ac8fa3e68fbf579a96e43583eed659c83' => 
    array (
      0 => 'C:\\laragon\\www\\university-app\\app\\public\\views\\templates\\parts\\subject.add.tpl',
      1 => 1554756887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cac6fe4a7c0a0_54107121 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="box box-default">
    <form method="POST">

        <input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->id)===null||$tmp==='' ? '' : $tmp);?>
"/>

    <div class="box-header with-border">
        <h3 class="box-title"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['box_title_subject_data'];?>
</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['form_name_label'];?>
<sup>*</sup></label>
                    <input type="text" name="name" id="name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->name)===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="">
                </div>
                <!-- /.form-group -->
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['form_type_label'];?>
<sup>*</sup></label>
                    <select name="type" name="type" id="type" class="form-control" data-placeholder="<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['form_type_placeholder'];?>
">
                        <option value=""></option>
                        <option <?php if ((($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->type)===null||$tmp==='' ? '' : $tmp) == "FORMACIÓN BÁSICA") {?>selected="selected"<?php }?>value="FORMACIÓN BÁSICA">FORMACIÓN BÁSICA</option>
                        <option <?php if ((($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->type)===null||$tmp==='' ? '' : $tmp) == "OBLIGATORIAS") {?>selected="selected"<?php }?>value="OBLIGATORIAS">OBLIGATORIAS</option>
                        <option <?php if ((($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->type)===null||$tmp==='' ? '' : $tmp) == "OPTATIVAS") {?>selected="selected"<?php }?>value="OPTATIVAS">OPTATIVAS</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['form_reference_label'];?>
<sup>*</sup></label>
                    <input type="text" name="code" id="code" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->code)===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['form_course_label'];?>
<sup>*</sup></label>
                    <select name="course" id="course" class="form-control" data-placeholder="<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['form_course_placeholder'];?>
">
                        <option value=""></option>
                        <option <?php if ((($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->course)===null||$tmp==='' ? '' : $tmp) == "1") {?>selected="selected"<?php }?> value="1">1º</option>
                        <option <?php if ((($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->course)===null||$tmp==='' ? '' : $tmp) == "2") {?>selected="selected"<?php }?> value="2">2º</option>
                        <option <?php if ((($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->course)===null||$tmp==='' ? '' : $tmp) == "3") {?>selected="selected"<?php }?> value="3">3º</option>
                        <option <?php if ((($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->course)===null||$tmp==='' ? '' : $tmp) == "4") {?>selected="selected"<?php }?> value="4">4º</option>
                        <option <?php if ((($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->course)===null||$tmp==='' ? '' : $tmp) == "5") {?>selected="selected"<?php }?> value="5">5º</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['form_semester_label'];?>
<sup>*</sup></label>
                    <select name="semester" id="semester" class="form-control" data-placeholder="<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['form_semester_placeholder'];?>
">
                        <option value=""></option>
                        <option <?php if ((($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->semester)===null||$tmp==='' ? '' : $tmp) == "1") {?>selected="selected"<?php }?> value="1">1º</option>
                        <option <?php if ((($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->semester)===null||$tmp==='' ? '' : $tmp) == "2") {?>selected="selected"<?php }?> value="2">2º</option>
                        <option <?php if ((($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->semester)===null||$tmp==='' ? '' : $tmp) == "3") {?>selected="selected"<?php }?> value="3">3º</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['form_credits_label'];?>
<sup>*</sup></label>
                    <input type="text" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->credits)===null||$tmp==='' ? '' : $tmp);?>
" name="credits" id="credits" class="form-control" placeholder="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="checkbox checbox-switch switch-primary">
                    <label class="pl-0">
                        <input type="checkbox" name="active" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->active)===null||$tmp==='' ? '' : $tmp)) {?>checked="checked"<?php }?> />
                        <span></span>
                        <?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['button_active'];?>

                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer">
        <button type="submit" class="btn btn-primary  btn-flat pull-right"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['button_send'];?>
</button>
    </div>

    </form>
</div>

<!-- page script -->
<?php echo '<script'; ?>
>

    $(function () {
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

            toastr["error"]("<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['invalid_data_message'];?>
", "<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['invalid_data_title'];?>
");
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['_MESSAGE']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['_MESSAGE']->value == 'NOT_FOUND') {?>
                toastr["error"]("<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['not_found_error_message'];?>
", "<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['not_found_error_title'];?>
");          
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['_MESSAGE']->value == 'INSERT_OK') {?>
                toastr["success"]("<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['insert_ok_message'];?>
", "<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['insert_ok_title'];?>
");
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['_MESSAGE']->value == 'INSERT_KO') {?>
                toastr["error"]("<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['insert_ko_message'];?>
", "<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['insert_ko_title'];?>
");
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['_MESSAGE']->value == 'UPDATE_OK') {?>
                toastr["success"]("<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['update_ok_message'];?>
", "<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['update_ok_title'];?>
");
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['_MESSAGE']->value == 'UPDATE_KO') {?>
                toastr["error"]("<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['update_ko_message'];?>
", "<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['update_ko_title'];?>
");
            <?php }?>
        <?php }?>
    });
<?php echo '</script'; ?>
><?php }
}
