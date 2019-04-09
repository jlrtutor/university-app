<div class="box">
    <!-- /.box-header -->
    <div class="box-body">

        <table id="subjects_table" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="">
        <thead>
        <tr role="row">
            <th>{$_LANG.Student.list_table_column_name}</th>
            <th>{$_LANG.Student.list_table_column_surname}</th>
            <th>{$_LANG.Student.list_table_column_birthdate}</th>
            <th>{$_LANG.Student.list_table_column_email}</th>
            <th class="no-sort">{$_LANG.Student.list_table_column_telephone}</th>
            <th class="no-sort"></th>
            <th class="no-sort"></th>
        </tr>
        </thead>
        <tbody>
            {foreach $_RS as $student}
            {assign var=params value=['id'=>$student->id]}
            <tr role="row">
            <td>{$student->name}</td>
            <td>{$student->surname}</td>
            <td data-order="{$student->birthdate|date_format:'%Y%m%d'}">{$student->birthdate|date_format:'%d/%m/%Y'}</td>
            <td>{$student->email}</td>
            <td>
                {assign var="telephones" value=","|explode:$student->telephone}
                {section name=i loop=$telephones} 
                <span class="label label-primary">{$telephones[i]|escape}</span>
                {/section}
            </td>
            <td align="center">
                <a href="{$_router->generate('student-course', $params)}" title="{$_LANG.Student.list_button_suscriptions}" class="btn-edit btn btn-default btn-xs" role="{$student->id}"> <i class="fa fa-graduation-cap"></i> {$_LANG.Student.list_button_suscriptions} </a>
            </td>
            <td align="center">
                <a href="{$_router->generate('student-edit', $params)}" title="{$_LANG.Student.list_button_edit}" class="btn-edit btn btn-primary btn-xs" role="{$student->id}"> <i class="fa fa-edit"></i> </a>
                <a href="{$_router->generate('student-delete', $params)}" title="{$_LANG.Student.list_button_delete}" class="btn-delete btn btn-danger btn-xs" role="{$student->id}"> <i class="fa fa-trash"></i> </a>
            </td>
            </tr>
            {/foreach}
        </tbody>
        <tfoot>
        <tr>
            <th>{$_LANG.Student.list_table_column_name}</th>
            <th>{$_LANG.Student.list_table_column_surname}</th>
            <th>{$_LANG.Student.list_table_column_birthdate}</th>
            <th>{$_LANG.Student.list_table_column_email}</th>
            <th>{$_LANG.Student.list_table_column_telephone}</th>
            <th></th>
            <th></th>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>

{include file="parts/modal_delete.tpl"}

<!-- DataTables -->
<script src="{$_BASE_URL}vendor/datatables/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="{$_BASE_URL}vendor/datatables/datatables/media/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{$_BASE_URL}vendor/datatables/datatables/media/css/dataTables.bootstrap.min.css">

<!-- page script -->
<script>

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
                "url": "{$_TEMPLATE_VIEWS_URL}assets/js/datatables/lang/{$_LANG_CODE}.json"
            }   
        });
    });


</script>