<!-- Profile Image -->
<div class="box box-primary">
    <div class="box-body box-profile">
      <img class="profile-user-img img-responsive img-circle" src="{$_TEMPLATE_VIEWS_URL}assets/img/{$_RS->genre}_student.png" alt="{$_LANG.Student.aside_alt_avatar}">

      <h3 class="profile-username text-center">{$_RS->name} {$_RS->surname}</h3>

      <p class="text-muted text-center">{$_RS->email}</p>

      <ul class="list-group list-group-unbordered">
        <li class="list-group-item">
          <b>{$_LANG.Student.list_column_birthdate}</b> <a class="pull-right">{$_RS->birthdate|date_format:'%d/%m/%Y'}</a>
        </li>
        <li class="list-group-item">
          <b>{$_LANG.Student.list_column_dni}</b> <a class="pull-right">{$_RS->dni}</a>
        </li>
        <li class="list-group-item">
          <b>{$_LANG.Student.list_column_telephone}</b> 
          {assign var="telephones" value=","|explode:$_RS->telephone}
          {section name=i loop=$telephones} 
          <a class="pull-right"><span class="label label-primary">{$telephones[i]|escape}</span></a>
          {/section}
        </li>
      </ul>
      {assign var=params value=['id'=>$_RS->id]}
      <a href="{$_router->generate('student-edit', $params)}" class="btn btn-default btn-block"><b>{$_LANG.Student.aside_button_modify}</b></a>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

      <!-- About Me Box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">{$_LANG.Student.box_title_personal_data}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

          <strong><i class="fa fa-map-marker margin-r-5"></i> {$_LANG.Student.aside_address}</strong>

          <p class="text-muted">{$_RS->address}
              <br>{$_RS->cp} - {$_RS->town|default:''} ({$_RS->province})
          </p>

          <hr>

          
        
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->