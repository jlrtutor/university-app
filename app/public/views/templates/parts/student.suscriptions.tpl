<section class="content">
    <div class="row">
        <div class="col-md-4">
            {include file='parts/student.aside.tpl'}
        </div>
        <!-- /.col -->
        
        {assign var=params value=['id'=>$_STUDENT_ID,'course_id'=>$_COURSE_ID, 'level'=>$_LEVEL]}
        <div class="col-md-8">
            <form method="POST" action="{$_router->generate('student-course-subject-add', $params)}">
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <i class="fa fa-rocket"></i>
                        <h3 class="box-title">{$_LANG.Student.suscriptions_box_title_grades}</h3>
                    </div>
                    
                    <div class="">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th style="width:5%">#</th>
                                    <th>{$_LANG.Student.suscriptions_table_column_year}</th>
                                    <th style="text-align:center;width:10%">{$_LANG.Student.suscriptions_table_column_course}</th>
                                    <th style="text-align:center;width:20%">{$_LANG.Student.suscriptions_table_column_date_of_creation}</th>
                                    <th style="text-align:center;width:20%">{$_LANG.Student.suscriptions_table_column_average_grade}</th>
                                    <th>{$_LANG.Student.suscriptions_table_column_progress}</th>
                                    <th></th>
                                    <th style="width:5%"></th>
                                </tr>
                                
                                {foreach $_STUDENT_REGISTRATION as $course}
                                {assign var="total_subject" value=$_CALIFICATIONS->getNumSubjects($_STUDENT_ID, $course->id, $course->level)->total}
                                {assign var="average_calification" value=$_CALIFICATIONS->getAverageCalification($_STUDENT_ID, $course->id, $course->level)->avg}
                                {assign var="approved_subject" value=$_CALIFICATIONS->getApprovedSubjects($_STUDENT_ID, $course->id, $course->level)->total}
                                
                                {if !$total_subject}
                                {assign var="progress_percentage" value=0} 
                                {else}
                                {assign var="progress_percentage" value=($approved_subject/$total_subject)*100} 
                                {/if}
                                
                
                                <tr>
                                    <td><i class="fa  fa-ellipsis-v"></i></td>
                                    <td>{$course->getCourse()->name}</td>
                                    <td style="text-align:center;">{$course->level}º</td>
                                    <td style="text-align:center;">{$course->date_of_creation|date_format:"%d/%m/%Y"}</td>
                                    <td style="text-align:center;">{$average_calification|round:2}</td>
                                    <td style="text-align:center;">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-{if $progress_percentage == 100}success{else}danger{/if}" style="width: {$progress_percentage|round:1}%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-{if $progress_percentage == 100}green{else}red{/if}">{$progress_percentage|round:1}%</span></td>
                                    {assign var=params value=['id'=>$_STUDENT_ID,'course_id'=>$course->id, 'level'=>$course->level]}
                                    <td style="text-align:right;"><a href="{$_router->generate('student-course-subject', $params)}" title="{$_LANG.Student.suscriptions_button_edit}" class="btn-edit btn btn-default btn-xs" role="{$course->id}"> <i class="fa fa-pencil"></i></a></td>
                                </tr>
                                {/foreach}
                            </tbody>
                        </table>

                        <hr>
                        
                        <table id="subjects_table" class="table table-striped table-condensed" role="grid" aria-describedby="">
                            <thead>
                                <tr role="row">
                                    <th style="width:10%">{$_LANG.Student.suscriptions_table_column_semester}</th>
                                    <th style="width:55%">{$_LANG.Student.suscriptions_table_column_name}</th>
                                    <th style="width:25%">{$_LANG.Student.suscriptions_table_column_type}</th>
                                    <th style="width:10%">{$_LANG.Student.suscriptions_table_column_grades}</th>
                                </tr>
                            </thead>
                            <tbody>
                                {foreach $_SUBJECTS as $subject}
                                {assign var=params value=['id'=>$subject->id]}
                                <tr role="row">
                                    <td align="center">{$subject->semester}º</td>
                                    <td>{$subject->name}</td>
                                    <td>{$subject->type}</td>
                                    <td>
                                        {assign var="calification" value=$_CALIFICATIONS->getCalification($_STUDENT_ID, $subject->id, $_COURSE_ID, $_LEVEL)}
                                        <input maxlength="4" name="subject[{$subject->id}]" class="form-control input-sm" style="text-align:right;" type="text" placeholder="" 
                                        value="{if $calification}{$calification->calification}{/if}">
                                    </td>
                                </tr>
                                {/foreach}
                            </tbody>
                        </table>    
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <!--
                            <button type="reset" class="btn btn-default">Borrar</button>
                        -->
                        <button type="submit" class="btn btn-primary btn-flat pull-right">{$_LANG.Student.suscriptions_button_send}</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>