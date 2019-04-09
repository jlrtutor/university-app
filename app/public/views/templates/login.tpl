{include file="header.tpl"}

<div class="login-container"></div>

    <div class="login-box" style="position:absolute;top:50px;left:35%;right:60%;">
        <div class="login-logo">
            <a href="#">{$_LANG.Login.form_title}</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
    <p class="login-box-msg">{$_LANG.Login.form_subtitle}</p>
    
    <form action="" method="post" autocomplete="off">
        <div class="form-group has-feedback">
        <input type="text" name="email" class="form-control" placeholder="Email" value="root@root.com">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" value="admin">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row">
        <div class="col-xs-8">
            <div class="checkbox icheck">
                <label>
                    <input type="checkbox"> {$_LANG.Login.form_reminder}
                </label>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">{$_LANG.Login.form_submit_button}</button>
        </div>
        <!-- /.col -->
    </div>
</form>


</div>
<!-- /.login-box-body -->
{if $_ERROR_MSG}
<div class="alert alert-danger mtop-20">
    {$_ERROR_MSG}
</div>

<script>
$("div.alert").delay(3000).fadeOut(function() {
    //
});
</script>

{/if}
</div>
<!-- /.login-box -->


<script src="{$_TEMPLATE_VIEWS_URL}/plugins/Polygonal-Particles-Background-polygonizr/src/polygonizr.min.js"></script>

<script>
    $(function () {
        $('div.login-container').polygonizr({
            'nodeFancyEntrance':true
        });
    });
</script>

{include file="footer.tpl"}