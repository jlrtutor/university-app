<!-- bootstrap datepicker -->
<link rel="stylesheet" href="{$_BASE_URL}vendor/eternicode/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<!-- bootstrap datepicker -->
<script src="{$_BASE_URL}vendor/eternicode/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="{$_BASE_URL}vendor/eternicode/bootstrap-datepicker/dist/locales/bootstrap-datepicker.es.min.js" charset="UTF-8"></script>
<!-- tag input -->
<link rel="stylesheet" href="{$_BASE_URL}vendor/life2016/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
<script src="{$_BASE_URL}vendor/life2016/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

<!-- custom tag input css -->
<style>
.bootstrap-tagsinput {
    display: block !important;
    border: 1px solid #d2d6de !important;
    border-radius: 0px;
    height: 34px;
    padding: 4px 8px;
    box-shadow: none;
}
.bootstrap-tagsinput .tag { 
    font-size: 85%;
}
</style>

<form method="POST">
    <div class="box box-default">

        <input type="hidden" name="id" value="{$_RS->id|default:''}"/>

        <div class="box-header with-border">
            <h3 class="box-title">{$_LANG.Student.box_title_personal_data}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>{$_LANG.Student.form_name_label}<sup>*</sup></label>
                        <input type="text" name="name" id="name" value="{$_RS->name|default:''}" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>{$_LANG.Student.form_surname_label}<sup>*</sup></label>
                        <input type="text" name="surname" id="surname" value="{$_RS->surname|default:''}" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>{$_LANG.Student.form_genre_label}<sup>*</sup></label>
                        <select name="genre" id="genre" class="form-control" data-placeholder="">
                            <option value=""></option>
                            <option {if $_RS->genre|default:'' == "male"}selected="selected"{/if} value="male">{$_LANG.Student.form_genre_option_male}</option>
                            <option {if $_RS->genre|default:'' == "female"}selected="selected"{/if} value="female">{$_LANG.Student.form_genre_option_female}</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>{$_LANG.Student.form_birthdate_label}<sup>*</sup></label>
                        <input data-date-language="es" type="text" name="birthdate" id="birthdate" value="{$_RS->birthdate|date_format:'d/m/Y'|default:''}" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>{$_LANG.Student.form_email_label}<sup>*</sup></label>
                        <input type="email" class="form-control" value="{$_RS->email|default:''}" name="email" id="email" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>{$_LANG.Student.form_dni_label}<sup>*</sup></label>
                        <input type="text" class="form-control" value="{$_RS->dni|default:''}" name="dni" id="dni" placeholder="">
                    </div>
                </div>
            </div>
        </div>
    
        
        <div class="box-header with-border">
            <h3 class="box-title">{$_LANG.Student.box_title_contact_data}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>{$_LANG.Student.form_address_label}<sup>*</sup></label>
                        <input type="text" name="address" id="address" value="{$_RS->address|default:''}" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>{$_LANG.Student.form_postalcode_label}<sup>*</sup></label>
                        <input type="text" name="cp" id="cp" value="{$_RS->cp|default:''}" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>{$_LANG.Student.form_town_label}<sup>*</sup></label>
                        <input type="text" name="town" id="town" value="{$_RS->town|default:''}" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>{$_LANG.Student.form_province_label}<sup>*</sup></label>
                        <input type="text" name="province" id="province" value="{$_RS->province|default:''}" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group tags">
                        <label>{$_LANG.Student.form_telephone_label}<sup>*</sup></label>
                        <input type="text" name="telephone" id="telephone" value="{$_RS->telephone|default:''}" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            {if isset($_RS->id) && $_RS->id != ""}
            {assign var=params value=['id'=>$_RS->id]}
            <a href="{$_router->generate('student-course', $params)}" type="button" class="btn btn-default btn-flat">Matriculaciones</a> 
            {/if}
            <button type="submit" class="btn btn-primary btn-flat pull-right">{$_LANG.Form.button_submit}</button>
        </div>

    </div>
</form>


<!-- page script -->
<script>
        $(function () {
            //Date picker
            $('#birthdate').datepicker({
                autoclose: true,
                orientation: 'auto bottom',
                defaultDate: ''
            });
            //Tag Input
            $('#telephone').tagsinput();

            
            toastr.options = {
                                    "closeButton": false,
                                    "debug": false,
                                    "newestOnTop": false,
                                    "progressBar": true,
                                    "positionClass": "toast-bottom-full-width",
                                    "preventDuplicates": false,
                                    "showDuration": "300",
                                    "hideDuration": "1000",
                                    "timeOut": "5000",
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
            {/if}

            {if isset($_MESSAGE)}
            {if $_MESSAGE == 'NOT_FOUND'}
                toastr["error"]("{$_LANG.Student.not_found_error_message}", "{$_LANG.Student.not_found_error_title}");
            {/if}
            {if $_MESSAGE == 'INSERT_OK'}
                toastr["success"]("{$_LANG.Student.insert_ok_message}", "{$_LANG.Student.insert_ok_title}");
            {/if}
            {if $_MESSAGE == 'INSERT_KO'}
                toastr["error"]("{$_LANG.Student.insert_ko_message}", "{$_LANG.Student.insert_ko_title}");
            {/if}
            {if $_MESSAGE == 'UPDATE_OK'}
                toastr["success"]("{$_LANG.Student.update_ok_message}", "{$_LANG.Student.update_ok_title}");
            {/if}
            {if $_MESSAGE == 'UPDATE_KO'}
                toastr["error"]("{$_LANG.Student.update_ok_message}", "{$_LANG.Student.update_ko_title}");
            {/if}
        {/if}
        });
    </script>