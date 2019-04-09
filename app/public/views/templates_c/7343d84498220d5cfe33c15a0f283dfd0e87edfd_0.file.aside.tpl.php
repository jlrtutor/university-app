<?php
/* Smarty version 3.1.33, created on 2019-04-09 10:11:40
  from 'C:\laragon\www\university-app\app\public\views\templates\parts\aside.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cac6fdcd5b453_89225071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7343d84498220d5cfe33c15a0f283dfd0e87edfd' => 
    array (
      0 => 'C:\\laragon\\www\\university-app\\app\\public\\views\\templates\\parts\\aside.tpl',
      1 => 1554747537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cac6fdcd5b453_89225071 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
        
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
        <div class="pull-left image">
            <img src="<?php echo $_smarty_tpl->tpl_vars['_TEMPLATE_VIEWS_URL']->value;?>
assets/img/avatar5.png" class="img-circle" alt="<?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Aside']['user_image'];?>
">
        </div>
        <div class="pull-left info">
            <p><?php echo $_smarty_tpl->tpl_vars['_USER']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['_USER']->value['surname'];?>
</p>
            <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Aside']['user_status_online'];?>
</a>
        </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['_LANG']->value['Aside']['main_menu'], 'UTF-8');?>
</li>
        
        <li class="treeview <?php if ($_smarty_tpl->tpl_vars['__module']->value == "student") {?>active<?php }?>">
            <a href="#">
            <i class="fa fa-users"></i> <span> <?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Aside']['menu_students'];?>
</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_router']->value->generate('student-add');?>
" <?php if ($_smarty_tpl->tpl_vars['__module']->value == "student" && $_smarty_tpl->tpl_vars['__controller']->value == "add") {?>class="item-active"<?php }?>><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Aside']['menu_students_add'];?>
</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_router']->value->generate('students');?>
" <?php if ($_smarty_tpl->tpl_vars['__module']->value == "student" && $_smarty_tpl->tpl_vars['__controller']->value == "list") {?>class="item-active"<?php }?>><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Aside']['menu_students_list'];?>
</a></li>
            </ul>
        </li>
        <li class="treeview <?php if ($_smarty_tpl->tpl_vars['__module']->value == "subject") {?>active<?php }?>">
            <a href="#">
            <i class="fa fa-book"></i> <span><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Aside']['menu_subjects'];?>
</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_router']->value->generate('subject-add');?>
" <?php if ($_smarty_tpl->tpl_vars['__module']->value == "subject" && $_smarty_tpl->tpl_vars['__controller']->value == "add") {?>class="item-active"<?php }?>><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Aside']['menu_subjects_add'];?>
</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_router']->value->generate('subjects');?>
" <?php if ($_smarty_tpl->tpl_vars['__module']->value == "subject" && $_smarty_tpl->tpl_vars['__controller']->value == "list") {?>class="item-active"<?php }?>><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Aside']['menu_subjects_list'];?>
</a></li>
            </ul>
        </li>
        <li class="treeview <?php if ($_smarty_tpl->tpl_vars['__module']->value == "course") {?>active<?php }?>">
            <a href="#">
            <i class="fa fa-calendar"></i> <span><?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Aside']['menu_courses'];?>
</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_router']->value->generate('course-add');?>
" <?php if ($_smarty_tpl->tpl_vars['__module']->value == "course" && $_smarty_tpl->tpl_vars['__controller']->value == "add") {?>class="item-active"<?php }?>><i class="fa fa-circle-o"></i> <?php echo $_smarty_tpl->tpl_vars['_LANG']->value['Aside']['menu_courses_add_list'];?>
</a></li>
            </ul>
        </li>
        
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== --><?php }
}
