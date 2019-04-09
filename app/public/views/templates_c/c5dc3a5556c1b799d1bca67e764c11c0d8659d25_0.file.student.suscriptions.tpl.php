<?php
/* Smarty version 3.1.33, created on 2019-04-09 11:31:11
  from 'C:\laragon\www\university-app\app\public\views\templates\parts\student.suscriptions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cac827fb140d9_92255936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5dc3a5556c1b799d1bca67e764c11c0d8659d25' => 
    array (
      0 => 'C:\\laragon\\www\\university-app\\app\\public\\views\\templates\\parts\\student.suscriptions.tpl',
      1 => 1554654551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:parts/student.aside.tpl' => 1,
  ),
),false)) {
function content_5cac827fb140d9_92255936 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\university-app\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<section class="content">
    <div class="row">
        <div class="col-md-4">
            <?php $_smarty_tpl->_subTemplateRender('file:parts/student.aside.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <!-- /.col -->
        
        <?php $_smarty_tpl->_assignInScope('params', array('id'=>$_smarty_tpl->tpl_vars['_STUDENT_ID']->value,'course_id'=>$_smarty_tpl->tpl_vars['_COURSE_ID']->value,'level'=>$_smarty_tpl->tpl_vars['_LEVEL']->value));?>
        <div class="col-md-8">
            <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['_router']->value->generate('student-course-subject-add',$_smarty_tpl->tpl_vars['params']->value);?>
">
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <i class="fa fa-rocket"></i>
                        <h3 class="box-title"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['suscriptions_box_title_grades'];?>
</h3>
                    </div>
                    
                    <div class="">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th style="width:5%">#</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['suscriptions_table_column_year'];?>
</th>
                                    <th style="text-align:center;width:10%"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['suscriptions_table_column_course'];?>
</th>
                                    <th style="text-align:center;width:20%"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['suscriptions_table_column_date_of_creation'];?>
</th>
                                    <th style="text-align:center;width:20%"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['suscriptions_table_column_average_grade'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['suscriptions_table_column_progress'];?>
</th>
                                    <th></th>
                                    <th style="width:5%"></th>
                                </tr>
                                
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_STUDENT_REGISTRATION']->value, 'course');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['course']->value) {
?>
                                <?php $_smarty_tpl->_assignInScope('total_subject', $_smarty_tpl->tpl_vars['_CALIFICATIONS']->value->getNumSubjects($_smarty_tpl->tpl_vars['_STUDENT_ID']->value,$_smarty_tpl->tpl_vars['course']->value->id,$_smarty_tpl->tpl_vars['course']->value->level)->total);?>
                                <?php $_smarty_tpl->_assignInScope('average_calification', $_smarty_tpl->tpl_vars['_CALIFICATIONS']->value->getAverageCalification($_smarty_tpl->tpl_vars['_STUDENT_ID']->value,$_smarty_tpl->tpl_vars['course']->value->id,$_smarty_tpl->tpl_vars['course']->value->level)->avg);?>
                                <?php $_smarty_tpl->_assignInScope('approved_subject', $_smarty_tpl->tpl_vars['_CALIFICATIONS']->value->getApprovedSubjects($_smarty_tpl->tpl_vars['_STUDENT_ID']->value,$_smarty_tpl->tpl_vars['course']->value->id,$_smarty_tpl->tpl_vars['course']->value->level)->total);?>
                                
                                <?php if (!$_smarty_tpl->tpl_vars['total_subject']->value) {?>
                                <?php $_smarty_tpl->_assignInScope('progress_percentage', 0);?> 
                                <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('progress_percentage', ($_smarty_tpl->tpl_vars['approved_subject']->value/$_smarty_tpl->tpl_vars['total_subject']->value)*100);?> 
                                <?php }?>
                                
                
                                <tr>
                                    <td><i class="fa  fa-ellipsis-v"></i></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['course']->value->getCourse()->name;?>
</td>
                                    <td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['course']->value->level;?>
º</td>
                                    <td style="text-align:center;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['course']->value->date_of_creation,"%d/%m/%Y");?>
</td>
                                    <td style="text-align:center;"><?php echo round($_smarty_tpl->tpl_vars['average_calification']->value,2);?>
</td>
                                    <td style="text-align:center;">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-<?php if ($_smarty_tpl->tpl_vars['progress_percentage']->value == 100) {?>success<?php } else { ?>danger<?php }?>" style="width: <?php echo round($_smarty_tpl->tpl_vars['progress_percentage']->value,1);?>
%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-<?php if ($_smarty_tpl->tpl_vars['progress_percentage']->value == 100) {?>green<?php } else { ?>red<?php }?>"><?php echo round($_smarty_tpl->tpl_vars['progress_percentage']->value,1);?>
%</span></td>
                                    <?php $_smarty_tpl->_assignInScope('params', array('id'=>$_smarty_tpl->tpl_vars['_STUDENT_ID']->value,'course_id'=>$_smarty_tpl->tpl_vars['course']->value->id,'level'=>$_smarty_tpl->tpl_vars['course']->value->level));?>
                                    <td style="text-align:right;"><a href="<?php echo $_smarty_tpl->tpl_vars['_router']->value->generate('student-course-subject',$_smarty_tpl->tpl_vars['params']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['suscriptions_button_edit'];?>
" class="btn-edit btn btn-default btn-xs" role="<?php echo $_smarty_tpl->tpl_vars['course']->value->id;?>
"> <i class="fa fa-pencil"></i></a></td>
                                </tr>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>

                        <hr>
                        
                        <table id="subjects_table" class="table table-striped table-condensed" role="grid" aria-describedby="">
                            <thead>
                                <tr role="row">
                                    <th style="width:10%"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['suscriptions_table_column_semester'];?>
</th>
                                    <th style="width:55%"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['suscriptions_table_column_name'];?>
</th>
                                    <th style="width:25%"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['suscriptions_table_column_type'];?>
</th>
                                    <th style="width:10%"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['suscriptions_table_column_grades'];?>
</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_SUBJECTS']->value, 'subject');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subject']->value) {
?>
                                <?php $_smarty_tpl->_assignInScope('params', array('id'=>$_smarty_tpl->tpl_vars['subject']->value->id));?>
                                <tr role="row">
                                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['subject']->value->semester;?>
º</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['subject']->value->name;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['subject']->value->type;?>
</td>
                                    <td>
                                        <?php $_smarty_tpl->_assignInScope('calification', $_smarty_tpl->tpl_vars['_CALIFICATIONS']->value->getCalification($_smarty_tpl->tpl_vars['_STUDENT_ID']->value,$_smarty_tpl->tpl_vars['subject']->value->id,$_smarty_tpl->tpl_vars['_COURSE_ID']->value,$_smarty_tpl->tpl_vars['_LEVEL']->value));?>
                                        <input maxlength="4" name="subject[<?php echo $_smarty_tpl->tpl_vars['subject']->value->id;?>
]" class="form-control input-sm" style="text-align:right;" type="text" placeholder="" 
                                        value="<?php if ($_smarty_tpl->tpl_vars['calification']->value) {
echo $_smarty_tpl->tpl_vars['calification']->value->calification;
}?>">
                                    </td>
                                </tr>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>    
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <!--
                            <button type="reset" class="btn btn-default">Borrar</button>
                        -->
                        <button type="submit" class="btn btn-primary btn-flat pull-right"><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Student']['suscriptions_button_send'];?>
</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section><?php }
}
