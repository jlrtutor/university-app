<div class="box box-default">
    <form method="POST">

        <input type="hidden" name="id" value="{$_RS->id|default:''}"/>

    <div class="box-header with-border">
        <h3 class="box-title">{$_LANG.Subject.box_title_subject_data}</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>{$_LANG.Subject.form_name_label}<sup>*</sup></label>
                    <input type="text" name="name" id="name" value="{$_RS->name|default:''}" class="form-control" placeholder="">
                </div>
                <!-- /.form-group -->
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>{$_LANG.Subject.form_type_label}<sup>*</sup></label>
                    <select name="type" name="type" id="type" class="form-control" data-placeholder="{$_LANG.Subject.form_type_placeholder}">
                        <option value=""></option>
                        <option {if $_RS->type|default:'' == "FORMACIÓN BÁSICA"}selected="selected"{/if}value="FORMACIÓN BÁSICA">FORMACIÓN BÁSICA</option>
                        <option {if $_RS->type|default:'' == "OBLIGATORIAS"}selected="selected"{/if}value="OBLIGATORIAS">OBLIGATORIAS</option>
                        <option {if $_RS->type|default:'' == "OPTATIVAS"}selected="selected"{/if}value="OPTATIVAS">OPTATIVAS</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>{$_LANG.Subject.form_reference_label}<sup>*</sup></label>
                    <input type="text" name="code" id="code" value="{$_RS->code|default:''}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>{$_LANG.Subject.form_course_label}<sup>*</sup></label>
                    <select name="course" id="course" class="form-control" data-placeholder="{$_LANG.Subject.form_course_placeholder}">
                        <option value=""></option>
                        <option {if $_RS->course|default:'' == "1"}selected="selected"{/if} value="1">1º</option>
                        <option {if $_RS->course|default:'' == "2"}selected="selected"{/if} value="2">2º</option>
                        <option {if $_RS->course|default:'' == "3"}selected="selected"{/if} value="3">3º</option>
                        <option {if $_RS->course|default:'' == "4"}selected="selected"{/if} value="4">4º</option>
                        <option {if $_RS->course|default:'' == "5"}selected="selected"{/if} value="5">5º</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>{$_LANG.Subject.form_semester_label}<sup>*</sup></label>
                    <select name="semester" id="semester" class="form-control" data-placeholder="{$_LANG.Subject.form_semester_placeholder}">
                        <option value=""></option>
                        <option {if $_RS->semester|default:'' == "1"}selected="selected"{/if} value="1">1º</option>
                        <option {if $_RS->semester|default:'' == "2"}selected="selected"{/if} value="2">2º</option>
                        <option {if $_RS->semester|default:'' == "3"}selected="selected"{/if} value="3">3º</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>{$_LANG.Subject.form_credits_label}<sup>*</sup></label>
                    <input type="text" value="{$_RS->credits|default:''}" name="credits" id="credits" class="form-control" placeholder="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="checkbox checbox-switch switch-primary">
                    <label class="pl-0">
                        <input type="checkbox" name="active" {if $_RS->active|default:''}checked="checked"{/if} />
                        <span></span>
                        {$_LANG.Subject.button_active}
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="box-footer">
        <button type="submit" class="btn btn-primary  btn-flat pull-right">{$_LANG.Subject.button_send}</button>
    </div>

    </form>
</div>

<!-- page script -->
<script>

    $(function () {
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

            toastr["error"]("{$_LANG.Subject.invalid_data_message}", "{$_LANG.Subject.invalid_data_title}");
        {/if}

        {if isset($_MESSAGE)}
            {if $_MESSAGE == 'NOT_FOUND'}
                toastr["error"]("{$_LANG.Subject.not_found_error_message}", "{$_LANG.Subject.not_found_error_title}");          
            {/if}
            {if $_MESSAGE == 'INSERT_OK'}
                toastr["success"]("{$_LANG.Subject.insert_ok_message}", "{$_LANG.Subject.insert_ok_title}");
            {/if}
            {if $_MESSAGE == 'INSERT_KO'}
                toastr["error"]("{$_LANG.Subject.insert_ko_message}", "{$_LANG.Subject.insert_ko_title}");
            {/if}
            {if $_MESSAGE == 'UPDATE_OK'}
                toastr["success"]("{$_LANG.Subject.update_ok_message}", "{$_LANG.Subject.update_ok_title}");
            {/if}
            {if $_MESSAGE == 'UPDATE_KO'}
                toastr["error"]("{$_LANG.Subject.update_ko_message}", "{$_LANG.Subject.update_ko_title}");
            {/if}
        {/if}
    });
</script>