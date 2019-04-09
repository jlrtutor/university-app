<?php
/**
 * App Routes
 */
$_app_routes = [
    /**************************************************************/
    /** HOME PAGE */
    /**************************************************************/
    array('GET', '', 'App\Http\Controllers\StudentController#list', 'home'),
    
    /**************************************************************/
    /** LOGIN PAGE*/
    /**************************************************************/
    array('GET', 'login', 'App\Http\Controllers\LoginController#index', 'login'),
    array('POST', 'login', 'App\Http\Controllers\LoginController#checkLogin', 'checklogin'),
    array('GET', 'logout', 'App\Http\Controllers\LoginController#logout', 'logout'),
    
    /**************************************************************/
    /** INIT DATABASE */
    /**************************************************************/
    array('GET', 'init', 'App\Http\Controllers\InitDatabaseController#index', 'init_database'),
    /**************************************************************/
    
    /**************************************************************/
    /** PAGE NOT FOUND */
    /**************************************************************/
    array('GET', 'page-not-found', 'App\Http\Controllers\ErrorController#index', 'page-not-found'),
    
    /**************************************************************/
    /** STUDENT */
    /**************************************************************/
    array('GET', 'student/add', 'App\Http\Controllers\StudentController#add', 'student-add'),
    array('POST', 'student/add', 'App\Http\Controllers\StudentController#insert', 'student-add-post'),
    array('GET', 'student/edit/[i:id]', 'App\Http\Controllers\StudentController#edit', 'student-edit'),
    array('POST', 'student/edit/[i:id]', 'App\Http\Controllers\StudentController#update', 'student-update'),
    array('GET', 'student/delete/[i:id]', 'App\Http\Controllers\StudentController#delete', 'student-delete'),
    array('GET', 'students', 'App\Http\Controllers\StudentController#list', 'students'),
    array('GET', 'student/edit/[i:id]/courses', 'App\Http\Controllers\StudentController#course', 'student-course'),
    array('POST', 'student/edit/[i:id]/courses', 'App\Http\Controllers\StudentController#addCourse', 'student-course-add'),
    array('GET', 'student/edit/[i:id]/course/[i:course_id]/level/[i:level]', 'App\Http\Controllers\StudentController#studentCourse', 'student-course-subject'),
    array('POST', 'student/edit/[i:id]/course/[i:course_id]/level/[i:level]', 'App\Http\Controllers\StudentController#addStudentCourse', 'student-course-subject-add'),

    /**************************************************************/
    /** SUBJECT */
    /**************************************************************/
    array('GET', 'subject/add', 'App\Http\Controllers\SubjectController#add', 'subject-add'),
    array('POST', 'subject/add', 'App\Http\Controllers\SubjectController#insert', 'subject-add-post'),
    array('GET', 'subject/edit/[i:id]', 'App\Http\Controllers\SubjectController#edit', 'subject-edit'),
    array('POST', 'subject/edit/[i:id]', 'App\Http\Controllers\SubjectController#update', 'subject-update'),    
    array('GET', 'subjects', 'App\Http\Controllers\SubjectController#list', 'subjects'),
    array('GET', 'subject/delete/[i:id]', 'App\Http\Controllers\SubjectController#delete', 'subject-delete'),
    //AJAX ACTIVE Status change
    array('GET', 'subject/ajax/changeActive/[i:id]', 'App\Http\Controllers\SubjectController#ajaxToggleActive', 'subject-ajax-active'),

    /**************************************************************/
    /** COURSE */
    /**************************************************************/
    array('GET',    'course/add', 'App\Http\Controllers\CourseController#add', 'course-add'),
    array('POST',   'course/add', 'App\Http\Controllers\CourseController#insert', 'course-add-post'), 
    array('GET',    'course/delete/[i:id]', 'App\Http\Controllers\CourseController#delete', 'course-delete'),
    array('GET',    'course/edit/[i:id]', 'App\Http\Controllers\CourseController#edit', 'course-edit'),
    array('POST',   'course/edit/[i:id]', 'App\Http\Controllers\CourseController#update', 'course-update')       
];
