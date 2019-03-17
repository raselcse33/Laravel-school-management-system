<?php

Auth::routes();

/* Front side */

Route::get('/', 'FrontController@index')->name('front');
Route::any('/result', 'FrontController@result')->name('result');
Route::any('result/front-result-download', 'FrontController@frontResultDownload')->name('front.result.download');
/* result frontends */
//Route::get('/result',function(){return view('front.result');});

/* Online Admission */
Route::get('/online/admission', 'FrontController@showAdmission')->name('online.admission');
Route::post('online/admission/store', 'FrontController@storeAdmision')->name('admission.store');
/*Leave application*/
Route::get('leave/application/','FrontController@leave_application_create')->name('leave.application');
Route::post('leave/application/store','FrontController@leave_application_store')->name('leave.application.store');
/*show managing committee*/
Route::get('managing/committee/show','FrontController@show_managing_committee')->name('show.managing.committee');
/* page details */

Route::get('page/{slug}', 'FrontController@pageDetails')->name('page.pageDetails');
Route::get('post/{slug}', 'FrontController@postDetails')->name('post.postDetails');
Route::get('contact-us', 'FrontController@contactUs')->name('contact.contactUs');
Route::get('academic/{slug}','FrontController@showAcademic')->name('academic');
// Route::get('academic','FrontController@academic')->name('academic.academicDetails');

/*show Event*/
Route::get('show/{type}','FrontController@showEvent')->name('show.event');
Route::get('event/{type}','FrontController@showNotice')->name('show.notice');
Route::get('gallery/show','FrontController@showGalleries')->name('gallery');




/* Show routine */
Route::get('/routine/show', 'FrontController@showRoutine')->name('show.routine');
/* exam routine */
Route::get('/exam/routine/show', 'FrontController@showExamroutine')->name('show.exam_routine');



Route::get('/home', 'HomeController@index')->name('home');
Route::Group(['middleware' => 'AuthenticeMiddleware'], function() {
    Route::get('/profile/{id}', 'UserController@index')->name('user.profile');
    Route::post('/profile/update', 'UserController@updateUser')->name('user.update');
    
});
Route::Group(['middleware' => 'AuthenticeMiddleware'], function() {

    Route::get('/setting/create', 'SettingController@index')->middleware('AuthenticeMiddleware');
    /*start system setting
    *date(2-10-2019)
    */
    Route::get('system/setting/create','SettingController@createSystemSetting')->name('system.setting.create');
    Route::post('system/setting/store','SettingController@storeSystemSetting')->name('system.setting.store');
    /*end system setting
    *date(2-10-2019)
    */


    /*db setting 12-2-2019*/
    Route::get('db/setting/create','SettingController@createDbSetting')->name('db.setting.create');
    Route::post('db/setting/store','SettingController@truncateDbSetting')->name('db.setting.store');

    /*end db setting 12-2-2019*/
    Route::post('/setting/add', 'SettingController@add_setting')->name('setting.add');
    Route::any('/banner/delete/{id}', 'SettingController@deleteBanner')->name('banner.delete');
    /* Class */
    
    Route::get('/class/create', 'SettingController@showClass');
    Route::post('/class/create', 'SettingController@createClass')->name('add.class');
    Route::get('/class/edit/{id}','SettingController@editClass');
    Route::post('/class/edit','SettingController@updateClass')->name('update.class');
 
    /* Subject */
    Route::get('/subject/add', 'SettingController@showSubject');
    Route::post('/subject/add', 'SettingController@createSubject')->name('subject.create');
    Route::get('/subject/edit/{id}', 'SettingController@editSubject')->name('subject.edit');
    Route::post('/subject/update', 'SettingController@updateSubject')->name('subject.update');


    /* Subject GPA Range */
    Route::get('gpa/mark/add', 'SettingController@showGpaRange');
    Route::post('gpa/store', 'SettingController@storeGpaRange')->name('gpa.store');
    Route::get('gpa/store/edit/{id}', 'SettingController@editGpaRange')->name('gpa.range.edit');
    Route::post('gpa/store/update', 'SettingController@updateGpaRange')->name('gpa.update');
    /* section */

    Route::get('/section/create', ['uses' => 'SettingController@showSection', 'as' => 'section.create']);
    Route::post('/section/store', ['uses' => 'SettingController@storeSection', 'as' => 'section.store']);
    Route::get('/section/edit/{id}', 'SettingController@editSection')->name('section.edit');
    Route::post('/section/edit', 'SettingController@updateSection')->name('section.update');
    /* Group */
    Route::get('/group/create', ['uses' => 'SettingController@showGroup', 'as' => 'group.create']);

    Route::post('/group/store', ['uses' => 'SettingController@storeGroup', 'as' => 'group.store']);
    Route::get('/group/edit/{id}', 'SettingController@editGroup')->name('group.edit');
    Route::post('/group/update', 'SettingController@updateGroup')->name('group.update');
    /* Exam */

    Route::get('/exam/create', ['uses' => 'SettingController@createExam', 'as' => 'exam.create']);
    Route::post('/exam/store', ['uses' => 'SettingController@storeExam', 'as' => 'exam.store']);
    Route::get('/exam/store/{id}','SettingController@editExam')->name('exam/edit');
    Route::post('/exam/update','SettingController@updateExam')->name('update.exam');
    /* Slider  */
    Route::get('/slider/create', 'SettingController@showSlider')->name('slide.create');
    Route::post('/slider/create', 'SettingController@storeSlider')->name('slider.store');
    Route::get('/slider/edit/{id}', 'SettingController@editSlider')->name('slider.edit');
    Route::post('/slider/update', 'SettingController@updateSlider')->name('slider.update');
    Route::get('/slider/delete/{id}', 'SettingController@deleteSlider')->name('slider.delete');
    
    /*useful links*/
    Route::get('useful/link/create','SettingController@createUsefulLink')->name('useful_link.create');
    Route::post('useful/link/store','SettingController@storeUsefulLink')->name('useful_link.store');
    Route::get('useful/link/edit/{id}','SettingController@editUsefulLink')->name('useful_link.edit');
    Route::post('useful/link/update/{id}','SettingController@updateUsefulLink')->name('useful_link.update');
    Route::get('useful/link/delete/{id}','SettingController@deleteUsefulLink')->name('useful_link.delete');
    
    

    /* Gallary */
    Route::get('/gallary/create', 'SettingController@showGallary')->name('gallary.create');
    Route::post('/gallary/store', 'SettingController@storeGallary')->name('gallary.store');
    Route::get('/gallery/edit/{id}', 'SettingController@editGallery')->name('gallery.edit');
    Route::post('/gallary/update', 'SettingController@updateGallery')->name('gallary.update');
    Route::get('/gallary/delete/{id}', 'SettingController@deleteGallery')->name('gallery.delete');
    /* routine */
    Route::get('/routine/create', 'SettingController@routineCreate')->name('routine.create');
    Route::post('/routine/store', 'SettingController@routineStore')->name('routine.store');
    Route::get('/routine/edit/{id}', 'SettingController@editRoutine')->name('routine.edit');
    Route::post('/routine/update', 'SettingController@updateRoutine')->name('routine.update');
//    Route::post('/routine/update', 'SettingController@updateRoutine')->name('exam.routine.edit');
    /* Exam Routine */
    Route::get('/exam/routine/create', 'SettingController@createExamRoutine')->name('exam_routine.create');
    Route::post('/exam/routine/store', 'SettingController@storeExamRoutine')->name('store.exam_routine');
    Route::get('/exam/routine/edit/{id}', 'SettingController@editExamRoutine')->name('exam.routine.edit');
    Route::post('/exam/routine/update', 'SettingController@updateExamRoutine')->name('exam_routine.update');
    /* Academic Calender */
    Route::get('/academic/calender/add', 'SettingController@addAcademic')->name('academic.calender.add');
    Route::post('/academic/calender/sotre', 'SettingController@storeAcademic')->name('academic.calender.store');
    
});
Route::Group(['middleware' => 'AuthenticeMiddleware'], function() {
    /* Subject  marks */
    Route::get('subject/mark/add', 'SubjectMarkController@index');
    Route::post('subject/mark/add', 'SubjectMarkController@subjectMark')->name('subject.marks.create');
    Route::get('subject/mark/list', 'SubjectMarkController@subjectMarkList')->name('subject.mark.list');
    Route::get('subject/mark/edit/{id}', 'SubjectMarkController@subjectMarkEdit')->name('marks.setting.edit');
    Route::post('subject/mark/update', 'SubjectMarkController@subjectMarkUpdate')->name('subject.marks.update');
    Route::any('subject/marks/check',[ 'uses'=>'SubjectMarkController@subject_marks_check','as'=>'subject.marks.check']);
});

 






/* add subject wise marks */
Route::Group(['middleware' => 'AuthenticeMiddleware'], function() {
    /* Student marks */
    Route::get('marks/add', 'StudentMarksController@index');
    Route::post('marks/add', 'StudentMarksController@studentMark')->name('students.mark.add');
    Route::post('student/marks/add', 'StudentMarksController@marksAdd')->name('marks.create');
    Route::get('student/marks/view', 'StudentMarksController@showMark')->name('marks.view');
    Route::post('student/marks/view', 'StudentMarksController@viewMarks')->name('students.mark.view');
    Route::post('student/marks', 'StudentMarksController@updateMarks')->name('student.mark.update');
    Route::get('student/marks/show', 'StudentMarksController@showStudentMarks')->name('students.marks.view');
    Route::get('/admission/student/info/{id}', 'StudentController@admissionStudentView')->name('admission.student.view');
    
    
    Route::get('join/marks', 'StudentMarksController@addJoinMarks')->name('join.marks');
    Route::post('join/marks', 'StudentMarksController@storeJoinMarks')->name('join.marks.create');
    Route::get('join/marks/view', 'StudentMarksController@viewJoinMarks')->name('join.marks.view');
    Route::get('join/marks/edit/{id}', 'StudentMarksController@editJoinMarks')->name('marks.join.edit');
    Route::post('join/marks/update', 'StudentMarksController@updateJoinMarks')->name('join.marks.update');
    Route::get('join/marks/delete/{id}', 'StudentMarksController@deleteJoinMarks')->name('marks.join.delete');
});
/* Result */
Route::Group(['middleware' => 'AuthenticeMiddleware'], function() {
    Route::any('result/view', 'ResultController@index');
    Route::post('result/download', 'ResultController@resultDownload')->name('result.download');
    Route::any('class/results', 'ResultController@classResults')->name('class.results');
    Route::any('class/results/download', 'ResultController@classResultDownload')->name('class.result.download');
});
Route::Group(['middleware' => 'AuthenticeMiddleware'], function() {
    //Create Student Page
    Route::any('/student/create', ['uses' => 'StudentController@create', 'as' => 'student']);
    //Store Student
    Route::post('/studentstore', ['uses' => 'StudentController@store', 'as' => 'insert.student']);
    Route::get('student/list', 'StudentController@showStudent')->name('list.student');
    Route::get('student/view/{id}', 'StudentController@viewStudent')->name('view.student');
    Route::get('/student/edit/{id}', 'StudentController@editStudent')->name('edit.student');
    Route::post('/student/update/{id}', 'StudentController@updateStudent')->name('update.student');
    Route::get('/student/academic', 'StudentController@academicStudent')->name('student.academic');
    Route::get('/student/subject', 'StudentController@subjectStudent')->name('student.subject');
    Route::get('/admission/student', 'StudentController@admissionView')->name('admission.student.list');
    Route::get('/admission/student/info', 'StudentController@admissionViewInfo')->name('student.info.view');
    Route::any('/student/id/create','StudentController@createStudentId')->name('create.student.id');
    
});
//Create Teacher Page
Route::Group(['middleware' => 'AuthenticeMiddleware'], function() {
    Route::get('/teacher/create', ['uses' => 'TeacherController@create', 'as' => 'teacher']);
    //Store Teacher
    Route::post('/teacher/store', ['uses' => 'TeacherController@storeTeacher', 'as' => 'insert.teacher']);
    Route::get('teacher/manage', 'TeacherController@showTeacher')->name('teacher.manage');
    Route::get('teacher/update/{id}', 'TeacherController@editTeacher')->name('teacher.edit');
    Route::post('teacher/update/{id}', 'TeacherController@updateTeacher')->name('teacher.update');
});
//Route::Group(['middleware' => 'AuthenticeMiddleware'], function() {
//// Managing Committee//
//
//Route::get('managing/committee/create','ManagingCommitteeController@create')->name('managing.committee.create');
//Route::post('managing/committee/store','ManagingCommitteeController@store_managing_committee')->name('managing.committee.store');
//});
Route::Group(['middleware' => 'AuthenticeMiddleware'], function() {
// Managing Committee//

Route::get('managing/committee/create','ManagingCommitteeController@create')->name('managing.committee.create');
Route::post('managing/committee/store','ManagingCommitteeController@store_managing_committee')->name('managing.committee.store');
Route::get('managing/committee/list','ManagingCommitteeController@listManagingCommittee')->name('managing.committee.list');
Route::get('managing/committee/edit/{id}','ManagingCommitteeController@editManagingCommittee')->name('managging.committee.edit');
Route::post('managing/committee/update','ManagingCommitteeController@updateManagingCommittee')->name('managing.committee.update');
Route::get('managing/committee/delete/{id}','ManagingCommitteeController@deleteManagingCommittee')->name('managging.committee.delete');
});
Route::Group(['middleware' => 'AuthenticeMiddleware'], function() {
// Page 

    Route::get('/pages/create', ['uses' => 'PagesController@create', 'as' => 'page']);
    Route::post('/pagestore', ['uses' => 'PagesController@storePage', 'as' => 'insert.page']);
    Route::get('/pages/list', 'PagesController@showPage')->name('list.page');
    Route::get('/page/edit/{id}', 'PagesController@editPage')->name('edit.page');
    Route::post('page/update/{id}', 'PagesController@updatePage')->name('update.page');
});

Route::Group(['middleware' => 'AuthenticeMiddleware'], function() {
//Post

    Route::get('/posts/create', ['uses' => 'PostsController@create', 'as' => 'post']);
    Route::post('/poststore', ['uses' => 'PostsController@storePost', 'as' => 'insert.post']);
    Route::get('/posts/list', 'PostsController@showPost')->name('list.post');
    Route::get('/post/edit/{id}', 'PostsController@editPost')->name('edit.post');
    Route::post('/post/update/{id}', 'PostsController@updatePost')->name('update.post');
});
Route::Group(['middleware' => 'AuthenticeMiddleware'], function() {
    /* Admit_Cart */

    Route::any('/admit/show', ['uses' => 'AdmitController@index', 'as' => 'show.admit']);
});
Route::Group(['middleware' => 'AuthenticeMiddleware'], function() {
    /* Exam Seat Planning */

    Route::any('/seat/planing', ['uses' => 'ExamSeatPlainingController@index', 'as' => 'seat.plane']);

    Route::post('/seat/show', ['uses' => 'ExamSeatPlainingController@show', 'as' => 'seat.plean']);
});




Route::Group(['middleware' => 'AuthenticeMiddleware'], function() {
    /* Staff */
    Route::get('staff/add', 'StaffController@index');
    Route::post('staff/add', 'StaffController@createStaff')->name('staff.create');
    /*2-4-2019*/
    Route::get('staff/view','StaffController@listStaff')->name('list.staff');
    Route::get('staff/details/{id}','StaffController@viewStaff')->name('view.staff');
    Route::get('staff/edit/{id}','StaffController@editStaff')->name('edit.staff');
    Route::post('staff/update/{id}','StaffController@updateStaff')->name('update.staff');
});

Route::Group(['middleware' => 'AuthenticeMiddleware'], function() {
    /* Academic Controller */
   
    Route::get('student/testimonial', 'AcademicDocumentController@testimonialView')->name('testimonial');
    Route::get('student/certificate', 'AcademicDocumentController@certificateView')->name('certificate');
    Route::get('transfer/certificate', 'AcademicDocumentController@tcView')->name('transfer.certificate');
    Route::post('student/certificate', 'AcademicDocumentController@documentDownload')->name('academic.document');
   
});



/*
*route:by rasel
*/

 Route::Group(['middleware' => 'AuthenticeMiddleware'], function() {
    /*useful links*/
    Route::get('useful/link/create','SettingController@createUsefulLink')->name('useful_link.create');
    Route::post('useful/link/store','SettingController@storeUsefulLink')->name('useful_link.store');
    Route::get('useful/link/edit/{id}','SettingController@editUsefulLink')->name('useful_link.edit');
    Route::post('useful/link/update/{id}','SettingController@updateUsefulLink')->name('useful_link.update');
    Route::get('useful/link/delete/{id}','SettingController@deleteUsefulLink')->name('useful_link.delete');

    /*successful student*/
    Route::get('successful/student/create','StudentController@createSuccessfulStudent')->name('successful.student');
    Route::post('successful/student/store','StudentController@storeSuccessfulStudent')->name('successful_student.store');
    Route::get('successful/student/edit/{id}','StudentController@editSuccessfulStudent')->name('successful_student.edit');
    Route::post('successful/student/update/{id}','StudentController@updateSuccessfulStudent')->name('successful_student.update');
    Route::get('successful/student/delete/{id}','StudentController@deleteSuccessfulStudent')->name('successful_student.delete');

    /*pass mark*/
    Route::get('pass/mark/create','SettingController@createPassMark')->name('pass_mark.create');
    Route::post('pass/mark/store','SettingController@storePassMark')->name('pass_mark.store');
    Route::get('pass/mark/edit/{id}','SettingController@editPassMark')->name('pass_mark.edit');
    Route::post('pass/mark/update/{id}','SettingController@updatePassMark')->name('pass_mark.update');

    /*Class teacher*/
    Route::get('class/teacher/create','TeacherController@createClassTeacher')->name('class.teacher');
    Route::post('class/teacher/store','TeacherController@storeClassTeacher')->name('class_teacher.store');

    /*result published date*/
    Route::get('result/published','SettingController@createResultPublished')->name('result_date.create');
    Route::post('result/published/store','SettingController@storeResultPublished')->name('result_published.store');
    Route::get('result/published/edit/{id}','SettingController@editResultPublished')->name('result_published.edit');
    Route::post('result/published/update/{id}','SettingController@updateResultPublished')->name('result_published.update');

});


/*All Delete Option
* work by Rasel
*/
 Route::Group(['middleware' => 'AuthenticeMiddleware'], function() {

/*class delete route*/
Route::get('class/delete/{id}','SettingController@deleteClass')->name('class.delete');
/*section delete route*/
Route::get('section/delete/{id}','SettingController@deleteSection')->name('section.delete');
/*group delete route*/
Route::get('group/delete/{id}','SettingController@deleteGroup')->name('group.delete');
/*Subject delete route*/
Route::get('subject/delete/{id}','SettingController@deleteSubject')->name('subject.delete');
/*gpa Delete route*/
Route::get('gpa/delete/{id}','SettingController@deleteGpa')->name('gpa.range.delete');
/*exam delete route*/
Route::get('exam/delete/{id}','SettingController@deleteExam')->name('exam.delete');
/*class Routine Delete */
Route::get('class/routine/delete/{id}','SettingController@deletClassRoutine')->name('routine.delete');
/*Exam routine Delete route*/
Route::get('exam/routine/delete/{id}','SettingController@deleteExamRoutine')->name('exam.routine.delete');
/*result published delete route*/
Route::get('result/published/delete/{id}','SettingController@deleteResultPublished')->name('result_published.delete');
/*pass mark delete route*/
Route::get('pass/mark/delete/{id}','SettingController@deletePassMark')->name('pass_mark.delete');
/*teachere delete route*/
Route::get('teacher/delete/{id}','TeacherController@deleteTeacher')->name('teacher.delete');
/*Academic calender*/
Route::get('academic/calender/edit/{id}','SettingController@editCalender')->name('calender.edit');
Route::post('academic/calender/update/{id}','SettingController@updateAcademicCalender')->name('academics.update');
Route::get('academic/calender/delete/{id}','SettingController@deleteAcademicCalender')->name('calender.delete');
/*delete page*/
Route::get('delete/page/{id}','PagesController@deletePage')->name('delete.page');

/*delete post*/
Route::get('delete/post/{id}','PostsController@deletePost')->name('delete.post');

});

 /*student Attendence
*work by:rasel
*/
Route::Group(['middleware' => 'AuthenticeMiddleware'], function() {
  Route::get('attendance', 'StudentAttendanceController@attendenceView')->name('students.attendance');
  Route::post('student/attendance/create','StudentAttendanceController@createAttendence')->name('students.attendance.create');
  Route::post('student/attendance/add','StudentAttendanceController@addAttendance')->name('student_attendance.add');

  /*2-2-2019 edit*/
  Route::get('edit/student/','StudentAttendanceController@editStudentAttendance')->name('edit_students.attendance');
  Route::post('show/attendance/student','StudentAttendanceController@studentAttendanceList')->name('students.attendance.edit');
});

/*font work
*
*/
Route::Group(['middleware' => 'AuthenticeMiddleware'], function() {
    Route::get('attendance/list','FrontController@showAttendance')->name('attendance.list');
/*
*search student
*/
Route::get('search/student','StudentController@searchStudent')->name('search.student');

/*visitior counter
*/

Route::post('visitor/counter','FrontController@visitorCounter')->name('visitor.counter');

});