<?php
/* Smarty version 3.1.33, created on 2019-04-09 13:00:54
  from 'C:\laragon\www\university-app\app\public\views\templates\parts\subject.list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cac97860a8ff5_42906725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '592526abfdeebf2334c67357e10a3e0216b361c1' => 
    array (
      0 => 'C:\\laragon\\www\\university-app\\app\\public\\views\\templates\\parts\\subject.list.tpl',
      1 => 1554814838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:parts/modal_delete.tpl' => 1,
  ),
),false)) {
function content_5cac97860a8ff5_42906725 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="box">

    <!-- /.box-header -->
    <div class="box-body">

        <table id="subjects_table" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="">
        <thead>
        <tr role="row">
            <th><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['list_table_column_course'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['list_table_column_semester'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['list_table_column_reference'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['list_table_column_name'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['list_table_column_type'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['list_table_column_credits'];?>
</th>
            <th></th>
            <th class="no-sort"></th>
        </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_RS']->value, 'subject');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subject']->value) {
?>
            <?php $_smarty_tpl->_assignInScope('params', array('id'=>$_smarty_tpl->tpl_vars['subject']->value->id));?>
            <tr role="row">
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['subject']->value->course;?>
º</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['subject']->value->semester;?>
º</td>
                <td><?php echo $_smarty_tpl->tpl_vars['subject']->value->code;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['subject']->value->name;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['subject']->value->type;?>
</td>
                <td align="center"><?php echo $_smarty_tpl->tpl_vars['subject']->value->credits;?>
</td>
                <td align="center"><?php if ($_smarty_tpl->tpl_vars['subject']->value->active) {?><i ajax_url="<?php echo $_smarty_tpl->tpl_vars['_router']->value->generate('subject-ajax-active',$_smarty_tpl->tpl_vars['params']->value);?>
" class="toggle-active fa fa-toggle-on"></i><?php } else { ?><i ajax_url="<?php echo $_smarty_tpl->tpl_vars['_router']->value->generate('subject-ajax-active',$_smarty_tpl->tpl_vars['params']->value);?>
" class="toggle-active fa fa-toggle-off"></i><?php }?></td>
                <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_router']->value->generate('subject-edit',$_smarty_tpl->tpl_vars['params']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['list_table_row_button_edit'];?>
" class="btn-edit btn btn-primary btn-xs" role="<?php echo $_smarty_tpl->tpl_vars['subject']->value->id;?>
"> <i class="fa fa-edit"></i> </a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_router']->value->generate('subject-delete',$_smarty_tpl->tpl_vars['params']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['list_table_row_button_delete'];?>
" class="btn-delete btn btn-danger btn-xs" role="<?php echo $_smarty_tpl->tpl_vars['subject']->value->id;?>
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
            <th><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['list_table_column_course'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['list_table_column_semester'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['list_table_column_reference'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['list_table_column_name'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['list_table_column_type'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['list_table_column_credits'];?>
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
        //Delete subject function
        $('a.btn-delete').on('click', function(e) {
            e.preventDefault();
            var url = $(this).attr('href');

            $('#modal-warning').modal()
            .on('click', '#btn-delete-confirm', function(e) {
                document.location.href = url;
            });
        });

        //Change subject status function
        $("i.toggle-active").on('click', function(){
            var item_toggle = $(this);
            var url = $(this).attr('ajax_url');
            $.get(url, function(data){

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

                if(data) 
                {
                    toastr["success"]("<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['list_change_status_ok_message'];?>
", "<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['list_change_status_ok_title'];?>
");
                    
                    if(item_toggle.hasClass('fa-toggle-on'))
                    {
                        item_toggle.removeClass('fa-toggle-on').addClass('fa-toggle-off').css('color', 'red');
                    } else {
                        item_toggle.removeClass('fa-toggle-off').addClass('fa-toggle-on').css('color','green');
                    }
                } else {
                    toastr["error"]("<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['list_change_status_ko_message'];?>
", "<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Subject']['list_change_status_ko_title'];?>
");
                }
            });
        })
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
