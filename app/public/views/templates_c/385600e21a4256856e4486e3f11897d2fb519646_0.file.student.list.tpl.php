<?php
/* Smarty version 3.1.33, created on 2019-04-09 12:56:24
  from 'C:\laragon\www\university-app\app\public\views\templates\parts\student.list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cac96781703e0_02527190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '385600e21a4256856e4486e3f11897d2fb519646' => 
    array (
      0 => 'C:\\laragon\\www\\university-app\\app\\public\\views\\templates\\parts\\student.list.tpl',
      1 => 1554814579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:parts/modal_delete.tpl' => 1,
  ),
),false)) {
function content_5cac96781703e0_02527190 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\university-app\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="box">
    <!-- /.box-header -->
    <div class="box-body">

        <table id="subjects_table" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="">
        <thead>
        <tr role="row">
            <th><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['list_table_column_name'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['list_table_column_surname'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['list_table_column_birthdate'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['list_table_column_email'];?>
</th>
            <th class="no-sort"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['list_table_column_telephone'];?>
</th>
            <th class="no-sort"></th>
            <th class="no-sort"></th>
        </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_RS']->value, 'student');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['student']->value) {
?>
            <?php $_smarty_tpl->_assignInScope('params', array('id'=>$_smarty_tpl->tpl_vars['student']->value->id));?>
            <tr role="row">
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value->name;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value->surname;?>
</td>
            <td data-order="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['student']->value->birthdate,'%Y%m%d');?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['student']->value->birthdate,'%d/%m/%Y');?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value->email;?>
</td>
            <td>
                <?php $_smarty_tpl->_assignInScope('telephones', explode(",",$_smarty_tpl->tpl_vars['student']->value->telephone));?>
                <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['telephones']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?> 
                <span class="label label-primary"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['telephones']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)], ENT_QUOTES, 'UTF-8', true);?>
</span>
                <?php
}
}
?>
            </td>
            <td align="center">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_router']->value->generate('student-course',$_smarty_tpl->tpl_vars['params']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['list_button_suscriptions'];?>
" class="btn-edit btn btn-default btn-xs" role="<?php echo $_smarty_tpl->tpl_vars['student']->value->id;?>
"> <i class="fa fa-graduation-cap"></i> <?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['list_button_suscriptions'];?>
 </a>
            </td>
            <td align="center">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_router']->value->generate('student-edit',$_smarty_tpl->tpl_vars['params']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['list_button_edit'];?>
" class="btn-edit btn btn-primary btn-xs" role="<?php echo $_smarty_tpl->tpl_vars['student']->value->id;?>
"> <i class="fa fa-edit"></i> </a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_router']->value->generate('student-delete',$_smarty_tpl->tpl_vars['params']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['list_button_delete'];?>
" class="btn-delete btn btn-danger btn-xs" role="<?php echo $_smarty_tpl->tpl_vars['student']->value->id;?>
"> <i class="fa fa-trash"></i> </a>
            </td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
        <tfoot>
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['list_table_column_name'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['list_table_column_surname'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['list_table_column_birthdate'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['list_table_column_email'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['list_table_column_telephone'];?>
</th>
            <th></th>
            <th></th>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>

<?php $_smarty_tpl->_subTemplateRender("file:parts/modal_delete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- DataTables -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_BASE_URL']->value;?>
vendor/datatables/datatables/media/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_BASE_URL']->value;?>
vendor/datatables/datatables/media/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_BASE_URL']->value;?>
vendor/datatables/datatables/media/css/dataTables.bootstrap.min.css">

<!-- page script -->
<?php echo '<script'; ?>
>

    $(document).ready(function(){
        $('a.btn-delete').on('click', function(e) {
            e.preventDefault();
            var url = $(this).attr('href');
            $('#modal-warning').modal()
            .on('click', '#btn-delete-confirm', function(e) {
                document.location.href = url;
            });
        });
    });


    $(function () {
        $('#subjects_table').DataTable({
            select: true,
            ordering: true,
            columnDefs: [ { targets: 'no-sort', orderable: false }],
            language:{
                "url": "<?php echo $_smarty_tpl->tpl_vars['_TEMPLATE_VIEWS_URL']->value;?>
assets/js/datatables/lang/<?php echo $_smarty_tpl->tpl_vars['_LANG_CODE']->value;?>
.json"
            }   
        });
    });


<?php echo '</script'; ?>
><?php }
}
