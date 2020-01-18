<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/student/add', 'StudentController@create');

Route::group(['middleware' => ['auth', 'student']], function () {
    Route::get('/student/dashboard', 'StudentController@viewDashboard');
    Route::get('/student/edit', 'StudentController@edit');
    Route::post('/student/update', 'StudentController@update');
    Route::get('/job_detail/{id}', 'JobDetailController@index');
    Route::get('/student/view-placement-papers', 'PlacementPaperController@show');
    Route::get('/student/view-job-postings', 'jobPostingsController@show');
    Route::resource('/student', 'StudentController');
//    Route::get('/student/edit', function () {
//        return view('/student/edit');
//    });
});


//PlacementPaper Controller

Route::post('/po/upload', 'PlacementPaperController@store');

//Charts route
//Route::get('/po/view-chart','PlacementOfficer\ChartsController@index');
//Route::get('/po/view-gpa-chart','PlacementOfficer\ChartsController@viewGPAChart');

// Student Routes

Route::get('/admin/searchStudents', 'StudentController@viewSearchStudents');
Route::post('/student/uploadResume', 'JobApplicationsController@resumeUpload');
Route::post('/po/selectStudent', 'PlacedStudentController@selectStudent');
Route::get('/student_details/{id}', 'StudentDetailController@index');
Route::post('/ContactUs/insert', 'ContactUsController@insertData');

Route::get('/home', function () {
    return view('/');
});

Route::get('/adminlogin', function () {
    return view('/auth/login');
});

Route::get('/', function () {
    return view('/home');
});

Route::get('/contact-us', function () {
    return view('/student/contact-us');
});

Route::get('/about-us', function () {
    return view('/student/about-us');
});


// Auth Route email verify

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

// Admin Group Routes

Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::resource('admin/placement-officers', 'Admin\PlacementOfficerController');
    Route::resource('admin1/faqs', 'FAQController');

    Route::get('/dashboard', function () {
        return view('/admin1/admin-dashboard');
    });

    Route::get('/admin/update-contact-us', function () {
        return view('/admin1/update-contact-us');
    });

    Route::get('/admin1/dashboard', function () {
        return view('/admin1/admin-dashboard');
    });

    Route::get('/admin1/add-faq', function () {
        return view('/admin1/add-faq');
    });

    Route::get('/admin', function () {
        return view('/admin1/admin-dashboard');
    });

    Route::get('/admin/manage-students', 'StudentController@viewStudents');

    Route::get('/admin/searchStudents', 'StudentController@viewSearchStudents');

});

// Po - group - routes
Route::group(['middleware' => ['auth', 'po']], function () {

    Route::resource('placement-officer/job-postings', 'PlacementOfficer\JobPostingController');

    Route::get('/dashboard1', function () {
        return view('/placementOfficer1/dashboard');
    });

    Route::get('/po/dashboard', function () {
        return view('/placementOfficer1/dashboard');
    });

    Route::get('/po/upload-placement-papers', function () {
        return view('/placementOfficer1/upload-placement-papers');
    });

    Route::get('/po/view-student-list', 'StudentListController@show');

//    Route::resource('/po/update-delete-jobs', 'PlacementOfficer\JobPostingController@index');

    Route::resource('placement-officer/job-postings', 'PlacementOfficer\JobPostingController');

    Route::resource('placement-officer/companies', 'PlacementOfficer\CompanyController');

    Route::get('/po/view-chart', 'PlacementOfficer\ChartsController@index');

    Route::get('/po/view-gpa-chart', 'PlacementOfficer\ChartsController@viewGPAChart');

    Route::post('/po/upload', 'PlacementPaperController@store');

});
