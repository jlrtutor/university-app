<div class="box">

    <!-- /.box-header -->
    <div class="box-body">

        <table id="subjects_table" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="">
        <thead>
        <tr role="row">
            <th>{$_LANG.Subject.list_table_column_course}</th>
            <th>{$_LANG.Subject.list_table_column_semester}</th>
            <th>{$_LANG.Subject.list_table_column_reference}</th>
            <th>{$_LANG.Subject.list_table_column_name}</th>
            <th>{$_LANG.Subject.list_table_column_type}</th>
            <th>{$_LANG.Subject.list_table_column_credits}</th>
            <th></th>
            <th class="no-sort"></th>
        </tr>
        </thead>
        <tbody>
            {foreach $_RS as $subject}
            {assign var=params value=['id'=>$subject->id]}
            <tr role="row">
                <td align="center">{$subject->course}º</td>
                <td align="center">{$subject->semester}º</td>
                <td>{$subject->code}</td>
                <td>{$subject->name}</td>
                <td>{$subject->type}</td>
                <td align="center">{$subject->credits}</td>
                <td align="center">{if $subject->active}<i ajax_url="{$_router->generate('subject-ajax-active', $params)}" class="toggle-active fa fa-toggle-on"></i>{else}<i ajax_url="{$_router->generate('subject-ajax-active', $params)}" class="toggle-active fa fa-toggle-off"></i>{/if}</td>
                <td>
                    <a href="{$_router->generate('subject-edit', $params)}" title="{$_LANG.Subject.list_table_row_button_edit}" class="btn-edit btn btn-primary btn-xs" role="{$subject->id}"> <i class="fa fa-edit"></i> </a>
                    <a href="{$_router->generate('subject-delete', $params)}" title="{$_LANG.Subject.list_table_row_button_delete}" class="btn-delete btn btn-danger btn-xs" role="{$subject->id}"> <i class="fa fa-trash"></i> </a>
                </td>
            </tr>
            {/foreach}
        </tbody>
        <tfoot>
        <tr>
            <th>{$_LANG.Subject.list_table_column_course}</th>
            <th>{$_LANG.Subject.list_table_column_semester}</th>
            <th>{$_LANG.Subject.list_table_column_reference}</th>
            <th>{$_LANG.Subject.list_table_column_name}</th>
            <th>{$_LANG.Subject.list_table_column_type}</th>
            <th>{$_LANG.Subject.list_table_column_credits}</th>
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
                    toastr["success"]("{$_LANG.Subject.list_change_status_ok_message}", "{$_LANG.Subject.list_change_status_ok_title}");
                    
                    if(item_toggle.hasClass('fa-toggle-on'))
                    {
                        item_toggle.removeClass('fa-toggle-on').addClass('fa-toggle-off').css('color', 'red');
                    } else {
                        item_toggle.removeClass('fa-toggle-off').addClass('fa-toggle-on').css('color','green');
                    }
                } else {
                    toastr["error"]("{$_LANG.Subject.list_change_status_ko_message}", "{$_LANG.Subject.list_change_status_ko_title}");
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
                "url": "{$_TEMPLATE_VIEWS_URL}assets/js/datatables/lang/{$_LANG_CODE}.json"
            }   
        });
    });


</script>