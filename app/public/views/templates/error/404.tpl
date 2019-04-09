{include file="../header.tpl"}

    <!-- Main content -->
    <section class="content mtop-20">
      <div class="error-page">
        <h2 class="headline text-yellow"> 404</h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i> Oops! Página no encontrada.</h3>

          <p>
            No hemos podido encontrar la página que buscas.
            <br>
            Prueba a volver a la <a href="{$BASE_URL}">página de inicio</a>.
          </p>

          <div>
            <img src="{$_TEMPLATE_VIEWS_URL}/assets/img/einstein-circle.png" width="100">
          </div>
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>
    <!-- /.content -->

{include file="../footer.tpl"}