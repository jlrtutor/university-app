<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
        
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
        <div class="pull-left image">
            <img src="{$_TEMPLATE_VIEWS_URL}assets/img/avatar5.png" class="img-circle" alt="{$_LANG.Aside.user_image}">
        </div>
        <div class="pull-left info">
            <p>{$_USER.name} {$_USER.surname}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> {$_LANG.Aside.user_status_online}</a>
        </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
        <li class="header">{$_LANG.Aside.main_menu|upper}</li>
        
        <li class="treeview {if $__module=="student"}active{/if}">
            <a href="#">
            <i class="fa fa-users"></i> <span> {$_LANG.Aside.menu_students}</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="{$_router->generate('student-add')}" {if $__module=="student" && $__controller=="add"}class="item-active"{/if}><i class="fa fa-circle-o"></i> {$_LANG.Aside.menu_students_add}</a></li>
            <li><a href="{$_router->generate('students')}" {if $__module=="student" && $__controller=="list"}class="item-active"{/if}><i class="fa fa-circle-o"></i> {$_LANG.Aside.menu_students_list}</a></li>
            </ul>
        </li>
        <li class="treeview {if $__module=="subject"}active{/if}">
            <a href="#">
            <i class="fa fa-book"></i> <span>{$_LANG.Aside.menu_subjects}</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="{$_router->generate('subject-add')}" {if $__module=="subject" && $__controller=="add"}class="item-active"{/if}><i class="fa fa-circle-o"></i> {$_LANG.Aside.menu_subjects_add}</a></li>
            <li><a href="{$_router->generate('subjects')}" {if $__module=="subject" && $__controller=="list"}class="item-active"{/if}><i class="fa fa-circle-o"></i> {$_LANG.Aside.menu_subjects_list}</a></li>
            </ul>
        </li>
        <li class="treeview {if $__module=="course"}active{/if}">
            <a href="#">
            <i class="fa fa-calendar"></i> <span>{$_LANG.Aside.menu_courses}</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="{$_router->generate('course-add')}" {if $__module=="course" && $__controller=="add"}class="item-active"{/if}><i class="fa fa-circle-o"></i> {$_LANG.Aside.menu_courses_add_list}</a></li>
            </ul>
        </li>
        
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->