<section class="content">
  <div class="row">
    <div class="col-md-4">
      {include file='parts/student.aside.tpl'}
    </div>
    <!-- /.col -->
    <div class="col-md-8">
      <div class="box box-danger">
        <div class="box-header with-border">
          <i class="fa fa-rocket"></i>
          <h3 class="box-title">{$_LANG.Student.box_title_grades}</h3>
        </div>
        <div class="box-body">

          {if !$_STUDENT_REGISTRATION}
          <div class="callout callout-warning">
            <h4>{$_LANG.Student.grades_alert_not_registrated}</h4>
            <p>{$_LANG.Student.grades_alert_not_registrated_body}</p>
          </div>
          {/if}

          {assign var=params value=['id'=>$_RS->id]}
          <form method="POST" action="{$_router->generate('student-course-add', $params)}">  
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>{$_LANG.Student.grades_select_year}</label>
                  <select name="course_id" class="form-control">
                    <option value=""></option>
                    {foreach $_COURSES as $course}
                    <option value="{$course->id}">{$course->name}</option>
                    {/foreach}
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>{$_LANG.Student.grades_select_course}</label>
                  <select name="level" class="form-control">
                    <option value=""></option>
                    <option value="1">1º</option>
                    <option value="2">2º</option>
                    <option value="3">3º</option>
                    <option value="4">4º</option>
                    <option value="5">5º</option>
                  </select>
                </div>
              </div>
            </div>
            <!-- row -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary btn-flat pull-right">{$_LANG.Student.grades_button_registration}</button>
            </div>
          </form>

          {if $_STUDENT_REGISTRATION}
          <hr>
          <table class="table table-striped">
            <tbody>
              <tr>
                <th style="width:5%">#</th>
                <th style="">{$_LANG.Student.grades_table_column_year}</th>
                <th style="text-align:center;width:10%">{$_LANG.Student.grades_table_column_course}</th>
                <th style="text-align:center;width:20%">{$_LANG.Student.grades_table_column_date_of_creation}</th>
                <th style="text-align:center;width:20%">{$_LANG.Student.grades_table_column_average_grade}</th>
                <th style="">{$_LANG.Student.grades_table_column_progress}</th>
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
              
              {assign var=params value=['id'=>$_STUDENT_ID,'course_id'=>$course->id, 'level'=>$course->level]}
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
                <td style="text-align:right;"><a href="{$_router->generate('student-course-subject', $params)}" title="Notas" class="btn-edit btn btn-default btn-xs" role="{$course->id}"> <i class="fa fa-pencil"></i> {$_LANG.Student.grades_button_grades}</a></td>
              </tr>
              {/foreach}
            </tbody>
          </table>
          {/if}
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>