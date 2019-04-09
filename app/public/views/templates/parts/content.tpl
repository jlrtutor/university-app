<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    {include file='parts/content-header.tpl'}

    <!-- Main content -->
    <section class="content">
        <!-- Init parts/{$_section} -->
        {if isset($_section)}
            {assign var=template value={"parts/$_section"}}
            {include file=$template}
        {/if}
        <!-- End parts/{$_section} -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->