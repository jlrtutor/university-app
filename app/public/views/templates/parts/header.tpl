<header class="main-header">
    <!-- Logo -->
    <a href="{$_router->generate('home')}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">{$_LANG.APP.title|truncate:3:""}</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">{$_LANG.APP.title}</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">{$_LANG.Header.toggle_button_title}</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            
            
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{$_TEMPLATE_VIEWS_URL}assets/img/avatar5.png" class="user-image" alt="User Image">
                <span class="hidden-xs">{$_USER.name} {$_USER.surname}</span>
            </a>
            <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                <img src="{$_TEMPLATE_VIEWS_URL}assets/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                    {$_USER.name} {$_USER.surname}
                    <br/>
                    {$_USER.comments}
                </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                <div class="row">
                    <div class="col-xs-4 text-center">
                    <a href="https://twitter.com/SpeedRT" target="_blank">Twitter</a>
                    </div>
                    <div class="col-xs-4 text-center">
                    <a href="mailto:juanluis.ramirez.tutor@gmail.com">Gmail</a>
                    </div>
                    <div class="col-xs-4 text-center">
                    <a href="https://github.com/jlrtutor" target="_blank">GitHub</a>
                    </div>
                </div>
                <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                <div class="pull-right">
                    <a href="{$_router->generate('logout')}" class="btn btn-danger btn-flat">{$_LANG.Header.button_close_session}</a>
                </div>
                </li>
            </ul>
            </li>
        </ul>
        </div>
    </nav>
</header>

<!-- =============================================== -->