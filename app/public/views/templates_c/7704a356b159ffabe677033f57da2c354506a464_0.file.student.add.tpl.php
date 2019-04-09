<?php
/* Smarty version 3.1.33, created on 2019-04-09 12:47:18
  from 'C:\laragon\www\university-app\app\public\views\templates\parts\student.add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cac94561a8858_36797480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7704a356b159ffabe677033f57da2c354506a464' => 
    array (
      0 => 'C:\\laragon\\www\\university-app\\app\\public\\views\\templates\\parts\\student.add.tpl',
      1 => 1554809504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cac94561a8858_36797480 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\university-app\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_BASE_URL']->value;?>
vendor/eternicode/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<!-- bootstrap datepicker -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_BASE_URL']->value;?>
vendor/eternicode/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_BASE_URL']->value;?>
vendor/eternicode/bootstrap-datepicker/dist/locales/bootstrap-datepicker.es.min.js" charset="UTF-8"><?php echo '</script'; ?>
>
<!-- tag input -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_BASE_URL']->value;?>
vendor/life2016/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_BASE_URL']->value;?>
vendor/life2016/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"><?php echo '</script'; ?>
>

<!-- custom tag input css -->
<style>
.bootstrap-tagsinput {
    display: block !important;
    border: 1px solid #d2d6de !important;
    border-radius: 0px;
    height: 34px;
    padding: 4px 8px;
    box-shadow: none;
}
.bootstrap-tagsinput .tag { 
    font-size: 85%;
}
</style>

<form method="POST">
    <div class="box box-default">

        <input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->id)===null||$tmp==='' ? '' : $tmp);?>
"/>

        <div class="box-header with-border">
            <h3 class="box-title"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['box_title_personal_data'];?>
</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['form_name_label'];?>
<sup>*</sup></label>
                        <input type="text" name="name" id="name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->name)===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['form_surname_label'];?>
<sup>*</sup></label>
                        <input type="text" name="surname" id="surname" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->surname)===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['form_genre_label'];?>
<sup>*</sup></label>
                        <select name="genre" id="genre" class="form-control" data-placeholder="">
                            <option value=""></option>
                            <option <?php if ((($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->genre)===null||$tmp==='' ? '' : $tmp) == "male") {?>selected="selected"<?php }?> value="male"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['form_genre_option_male'];?>
</option>
                            <option <?php if ((($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->genre)===null||$tmp==='' ? '' : $tmp) == "female") {?>selected="selected"<?php }?> value="female"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['form_genre_option_female'];?>
</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['form_birthdate_label'];?>
<sup>*</sup></label>
                        <input data-date-language="es" type="text" name="birthdate" id="birthdate" value="<?php echo (($tmp = @smarty_modifier_date_format($_smarty_tpl->tpl_vars['_RS']->value->birthdate,'d/m/Y'))===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['form_email_label'];?>
<sup>*</sup></label>
                        <input type="email" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->email)===null||$tmp==='' ? '' : $tmp);?>
" name="email" id="email" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['form_dni_label'];?>
<sup>*</sup></label>
                        <input type="text" class="form-control" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->dni)===null||$tmp==='' ? '' : $tmp);?>
" name="dni" id="dni" placeholder="">
                    </div>
                </div>
            </div>
        </div>
    
        
        <div class="box-header with-border">
            <h3 class="box-title"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['box_title_contact_data'];?>
</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['form_address_label'];?>
<sup>*</sup></label>
                        <input type="text" name="address" id="address" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->address)===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['form_postalcode_label'];?>
<sup>*</sup></label>
                        <input type="text" name="cp" id="cp" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->cp)===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['form_town_label'];?>
<sup>*</sup></label>
                        <input type="text" name="town" id="town" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->town)===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['form_province_label'];?>
<sup>*</sup></label>
                        <input type="text" name="province" id="province" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->province)===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group tags">
                        <label><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['form_telephone_label'];?>
<sup>*</sup></label>
                        <input type="text" name="telephone" id="telephone" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->telephone)===null||$tmp==='' ? '' : $tmp);?>
" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <?php if (isset($_smarty_tpl->tpl_vars['_RS']->value->id) && $_smarty_tpl->tpl_vars['_RS']->value->id != '') {?>
            <?php $_smarty_tpl->_assignInScope('params', array('id'=>$_smarty_tpl->tpl_vars['_RS']->value->id));?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_router']->value->generate('student-course',$_smarty_tpl->tpl_vars['params']->value);?>
" type="button" class="btn btn-default btn-flat">Matriculaciones</a> 
            <?php }?>
            <button type="submit" class="btn btn-primary btn-flat pull-right"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Form']['button_submit'];?>
</button>
        </div>

    </div>
</form>


<!-- page script -->
<?php echo '<script'; ?>
>
        $(function () {
            //Date picker
            $('#birthdate').datepicker({
                autoclose: true,
                orientation: 'auto bottom',
                defaultDate: ''
            });
            //Tag Input
            $('#telephone').tagsinput();

            
            toastr.options = {
                                    "closeButton": false,
                                    "debug": false,
                                    "newestOnTop": false,
                                    "progressBar": true,
                                    "positionClass": "toast-bottom-full-width",
                                    "preventDuplicates": false,
                                    "showDuration": "300",
                                    "hideDuration": "1000",
                                    "timeOut": "5000",
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
            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['_MESSAGE']->value)) {?>
            <?php if ($_smarty_tpl->tpl_vars['_MESSAGE']->value == 'NOT_FOUND') {?>
                toastr["error"]("<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['not_found_error_message'];?>
", "<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['not_found_error_title'];?>
");
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['_MESSAGE']->value == 'INSERT_OK') {?>
                toastr["success"]("<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['insert_ok_message'];?>
", "<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['insert_ok_title'];?>
");
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['_MESSAGE']->value == 'INSERT_KO') {?>
                toastr["error"]("<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['insert_ko_message'];?>
", "<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['insert_ko_title'];?>
");
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['_MESSAGE']->value == 'UPDATE_OK') {?>
                toastr["success"]("<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['update_ok_message'];?>
", "<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['update_ok_title'];?>
");
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['_MESSAGE']->value == 'UPDATE_KO') {?>
                toastr["error"]("<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['update_ok_message'];?>
", "<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['update_ko_title'];?>
");
            <?php }?>
        <?php }?>
        });
    <?php echo '</script'; ?>
><?php }
}
