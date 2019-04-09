<?php
/* Smarty version 3.1.33, created on 2019-04-09 11:31:03
  from 'C:\laragon\www\university-app\app\public\views\templates\parts\student.aside.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cac82776b24a5_36971392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f65b77fdff16ee0e77f3d6af1ef3912c02d3b746' => 
    array (
      0 => 'C:\\laragon\\www\\university-app\\app\\public\\views\\templates\\parts\\student.aside.tpl',
      1 => 1554569051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cac82776b24a5_36971392 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\university-app\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!-- Profile Image -->
<div class="box box-primary">
    <div class="box-body box-profile">
      <img class="profile-user-img img-responsive img-circle" src="<?php echo $_smarty_tpl->tpl_vars['_TEMPLATE_VIEWS_URL']->value;?>
assets/img/<?php echo $_smarty_tpl->tpl_vars['_RS']->value->genre;?>
_student.png" alt="<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['aside_alt_avatar'];?>
">

      <h3 class="profile-username text-center"><?php echo $_smarty_tpl->tpl_vars['_RS']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['_RS']->value->surname;?>
</h3>

      <p class="text-muted text-center"><?php echo $_smarty_tpl->tpl_vars['_RS']->value->email;?>
</p>

      <ul class="list-group list-group-unbordered">
        <li class="list-group-item">
          <b><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['list_column_birthdate'];?>
</b> <a class="pull-right"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['_RS']->value->birthdate,'%d/%m/%Y');?>
</a>
        </li>
        <li class="list-group-item">
          <b><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['list_column_dni'];?>
</b> <a class="pull-right"><?php echo $_smarty_tpl->tpl_vars['_RS']->value->dni;?>
</a>
        </li>
        <li class="list-group-item">
          <b><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['list_column_telephone'];?>
</b> 
          <?php $_smarty_tpl->_assignInScope('telephones', explode(",",$_smarty_tpl->tpl_vars['_RS']->value->telephone));?>
          <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['telephones']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?> 
          <a class="pull-right"><span class="label label-primary"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['telephones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)], ENT_QUOTES, 'UTF-8', true);?>
</span></a>
          <?php
}
}
?>
        </li>
      </ul>
      <?php $_smarty_tpl->_assignInScope('params', array('id'=>$_smarty_tpl->tpl_vars['_RS']->value->id));?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['_router']->value->generate('student-edit',$_smarty_tpl->tpl_vars['params']->value);?>
" class="btn btn-default btn-block"><b><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['aside_button_modify'];?>
</b></a>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

      <!-- About Me Box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['box_title_personal_data'];?>
</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

          <strong><i class="fa fa-map-marker margin-r-5"></i> <?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['aside_address'];?>
</strong>

          <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['_RS']->value->address;?>

              <br><?php echo $_smarty_tpl->tpl_vars['_RS']->value->cp;?>
 - <?php echo (($tmp = @$_smarty_tpl->tpl_vars['_RS']->value->town)===null||$tmp==='' ? '' : $tmp);?>
 (<?php echo $_smarty_tpl->tpl_vars['_RS']->value->province;?>
)
          </p>

          <hr>

          
        
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box --><?php }
}
