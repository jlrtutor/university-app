<section class="content">
    <div class="row">
        <div class="col-md-5">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">{$_SECTION_TITLE}</h3>
                </div>
                <form role="form" action="{$form_action}" method="POST">
                    <input type="hidden" name="id" value="{$_RS->id|default:''}"/>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">{$_LANG.Course.form_name_label}</label>
                            <input type="text" class="form-control" id="name" name="name" value="{$_RS->name|default:''}" placeholder="{$_LANG.Course.form_name_placeholder}">
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-flat">{$_LANG.Form.button_submit}</button>
                    </div>
                </form>
              </div>
        </div>
        <div class="col-md-7">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">{$_LANG.Course.list_title}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                    <tbody><tr>
                        <th></th>
                        <th>{$_LANG.Course.list_column_name}</th>
                        <th style="text-align:center;">{$_LANG.Course.list_column_enrollments}</th>
                        <th style="width: 100px"></th>
                    </tr>
                    {foreach $courses as $course name=course}
                    <tr>
                        <td><i class="fa  fa-ellipsis-v"></i></td>
                        <td>{$course->name}</td>
                        <td align="center">{$_STUDENTS->getNumStudents($course->id)->total}</td>
                        <td align="right">
                            {assign var=params value=['id'=>$course->id]}
                            <a href="{$_router->generate('course-edit', $params)}" title="Editar" class="btn-edit btn btn-danger btn-xs" role="{$course->id}"> <i class="fa fa-edit"></i> </a>
                            <a href="{$_router->generate('course-delete', $params)}" title="Borrar" class="btn-delete btn btn-primary btn-xs" role="{$course->id}"> <i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
                    {/foreach}
                    </tbody></table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a type="submit" class="pull-right btn btn-primary btn-flat" href="{$_router->generate('course-add')}">{$_LANG.Form.button_new}</a>
                </div>
                </div>
        </div>
    </div>
</section>

<div class="modal modal-danger fade" id="modal-warning">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">{$_LANG.Course.alert_delete_title}</h4>
        </div>
        <div class="modal-body">
            <p>{$_LANG.Course.alert_delete_body}</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">{$_LANG.Course.alert_delete_button_close}</button>
            <button type="button" class="btn btn-outline" id="btn-delete-confirm">{$_LANG.Course.alert_delete_button_confirm}</button>
        </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- page script -->
<script>

        $(function () {
            $('a.btn-delete').on('click', function(e) {
                e.preventDefault();
                var url = $(this).attr('href');
                $('#modal-warning').modal()
                .on('click', '#btn-delete-confirm', function(e) {
                    document.location.href = url;
                });
            });


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

            {if isset($_ERRORS)}
                {foreach $_ERRORS as $field=>$error}
                    $("#{$field}").addClass("error");
                {/foreach}
    
                toastr["error"]("{$_LANG.Course.validation_error_message}", "{$_LANG.Course.validation_error_title}");
            {/if}

            {if isset($_MESSAGE)}
                {if $_MESSAGE == 'NOT_FOUND'}
                    toastr["error"]("{$_LANG.Course.not_found_error_message}", "{$_LANG.Course.not_found_error_title}");
                {/if}
                {if $_MESSAGE == 'INSERT_OK'}
                    toastr["success"]("{$_LANG.Course.insert_ok_message}", "{$_LANG.Course.insert_ok_title}");
                {/if}
                {if $_MESSAGE == 'INSERT_KO'}
                    toastr["error"]("{$_LANG.Course.insert_ko_message}", "{$_LANG.Course.insert_ko_title}");
                {/if}
                {if $_MESSAGE == 'UPDATE_KO'}
                    toastr["error"]("{$_LANG.Course.update_ko_message}", "{$_LANG.Course.update_ko_title}");
                {/if}
                {if $_MESSAGE == 'UPDATE_OK'}
                    toastr["success"]("{$_LANG.Course.update_ok_message}", "{$_LANG.Course.update_ok_title}");
                {/if}
                {if $_MESSAGE == 'DELETE_KO'}
                    toastr["error"]("{$_LANG.Course.delete_ko_message}", "{$_LANG.Course.delete_ko_title}");
                {/if}
                {if $_MESSAGE == 'DELETE_OK'}
                    toastr["success"]("{$_LANG.Course.delete_ok_message}", "{$_LANG.Course.delete_ok_title}");
                {/if}
            {/if}
        });
    </script>