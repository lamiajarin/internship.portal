<?php

use App\Http\Controllers\Backend\AdminEntryController;
use App\Http\Controllers\Backend\CandidateListController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CompanyController;
use App\Http\Controllers\Backend\EmployeeListController;
use App\Http\Controllers\Backend\PostInternshipController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Frontend\ApplyJobController;
use App\Http\Controllers\Frontend\CandidateController;
use App\Http\Controllers\Frontend\EmployeeController;
use App\Http\Controllers\Frontend\UserEntry;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::get('/brows/Job', [UserController::class, 'BrowsJob'])->name('job.want');
Route::post('/user/login/post', [UserEntry::class, 'user_login_post'])->name('user_login_post');


Route::get('/ok', function () {
    return view('frontend.partial.main');
});
Route::get('/', [UserController::class, 'home'])->name('home');
//userlogin

Route::get('/user/login', [UserEntry::class, 'user_login'])->name('user_login');
Route::get('/user/registration', [UserEntry::class, 'user_registration'])->name('user_registration');;
Route::post('/user/registration/post', [UserEntry::class, 'user_registration_post'])->name('user_registration_post');


Route::group(['prefix' => 'admin'], function () {
    Route::get('admin/login', [AdminEntryController::class, 'login'])->name('login');
    Route::post('admin/login/post', [AdminEntryController::class, 'login_post'])->name('login_post');
    Route::get('search', [UserController::class, 'search'])->name('job.search');
    Route::post('subscribe', [UserController::class, 'subscribe'])->name('subscribe');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', [UserController::class, 'Dashboard'])->name('dashboard');
    Route::get('/admin', [UserController::class, 'index'])->name('home.admin');
    Route::get('/logout', [AdminEntryController::class, 'logout'])->name('logout');


//company
    Route::get('/company/lists', [CompanyController::class, 'companylist'])->name('companylist');
    Route::get('/company/view/{id}', [CompanyController::class, 'companyView'])->name('company_view');
    Route::get('/company/delete/{id}', [CompanyController::class, 'companyDelete'])->name('company_delete');

//Vacancy

    Route::get('/internship/lists', [PostInternshipController::class, 'vacancyList'])->name('vacancyList');;
    Route::get('/internship/change', [PostInternshipController::class, 'changeStatus'])->name('changeStatus');

//Employee
    Route::get('/employee/lists', [EmployeeListController::class, 'employeeList'])->name('employeeList');
    Route::get('/employee/delete/{id}', [EmployeeListController::class, 'employeeDelete'])->name('employee_delete');

//Candidate
    Route::get('/candidate/lists', [CandidateListController::class, 'candidateList'])->name('candidateList');


//Category
    Route::get('/category', [CategoryController::class, 'Category'])->name('category');
    Route::post('/category/post', [CategoryController::class, 'CategoryPost'])->name('category_post');
    Route::get('/category/lists', [CategoryController::class, 'Category_list'])->name('category_list');
    Route::get('category/edit/{id}', [CategoryController::class, 'categoryEdit'])->name('category_edit');
    Route::put('category/update/{id}', [CategoryController::class, 'categoryUpdate'])->name('category_update');
    Route::get('category/delete/{id}', [CategoryController::class, 'categoryDelete'])->name('category_delete');
//report
    Route::get('/report', [ReportController::class, 'AdminReport'])->name('admin_report');
//search
//   Route::get('/report/search', [ReportController::class, 'AdminReportSearch'])->name('admin_report_search');


});


//comment


//frontend

//Route::get('/job-post', function () {
//    return view('frontend/post_job');
//})->name('new.job');


Route::group(['prefix' => 'candidate', 'middleware' => 'frontAuth'], function () {


    Route::get('user/logout', [UserEntry::class, 'user_logout'])->name('user_logout');
//Candidate
    Route::get('/', [CandidateController::class, 'candidate'])->name('candidate');
//CandidateProfile
    Route::get('/profile', [CandidateController::class, 'candidate_profile'])->name('candidate_profile');
    Route::post('/profile/post', [CandidateController::class, 'candidate_profile_post'])->name('candidate_profile_post');
    Route::get('/profile/edit/{id}', [CandidateController::class, 'candidate_profile_edit'])->name('candidate_profile_edit');
    Route::put('/profile/update/{id}', [CandidateController::class, 'candidate_profile_update'])->name('candidate_profile_update');

//education details
    Route::get('/education', [CandidateController::class, 'candidate_education'])->name('candidate_education');
    Route::post('/education/post', [CandidateController::class, 'candidate_education_post'])->name('candidate_education_post');
    Route::get('education/delete/{id}', [CandidateController::class, 'candidate_education_delete'])->name('candidate_education_delete');
    Route::get('/education/edit/{id}', [CandidateController::class, 'candidate_education_edit'])->name('candidate_education_edit');
//experience
    Route::get('/experience', [CandidateController::class, 'candidate_experience'])->name('candidate_experience');
    Route::post('/experience/post', [CandidateController::class, 'candidate_experience_post'])->name('candidate_experience_post');
    Route::get('experience/delete/{id}', [CandidateController::class, 'candidate_experience_delete'])->name('candidate_experience_delete');
//skill
    Route::get('/skill', [CandidateController::class, 'candidate_skill'])->name('candidate_skill');
    Route::post('/skill/post', [CandidateController::class, 'candidate_skill_post'])->name('candidate_skill_post');
    Route::get('skill/delete/{id}', [CandidateController::class, 'candidate_skill_delete'])->name('candidate_skill_delete');
//training
    Route::get('/training', [CandidateController::class, 'candidate_training'])->name('candidate_training');
    Route::post('/training/post', [CandidateController::class, 'candidate_training_post'])->name('candidate_training_post');
    Route::get('training/delete/{id}', [CandidateController::class, 'candidate_training_delete'])->name('candidate_training_delete');
    //project
    Route::get('/project', [CandidateController::class, 'candidate_project'])->name('candidate_project');
    Route::post('/project/post', [CandidateController::class, 'candidate_project_post'])->name('candidate_project_post');
    Route::get('project/delete/{id}', [CandidateController::class, 'CandidateProjectDelete'])->name('candidate_project_delete');

//work_sample
    Route::get('/sample', [CandidateController::class, 'candidate_sample'])->name('candidate_sample');
    Route::post('/sample/post', [CandidateController::class, 'candidate_sample_post'])->name('candidate_sample_post');
    Route::get('sample/delete/{id}', [CandidateController::class, 'candidate_sample_delete'])->name('candidate_sample_delete');
    //edit resume
    Route::get('/edit', [CandidateController::class, 'Edit_Resume'])->name('edit');

//    Route::get('/edit', function () {
//        return view('frontend/candidate/edit_resume');
//    })->name('edit');

    //job_short_list
    Route::get('/job/short/list/{id}', [CandidateController::class, 'job_short_list'])->name('job_short_list');
    Route::get('/job/short/list', [CandidateController::class, 'job_short_list_view'])->name('job_short_list_view');

    //apply_jobs
    Route::get('/job/apply/{id}', [ApplyJobController::class, 'JobApply'])->name('JobApply');
//applied job
    Route::get('/job/applied/job/{id}', [ApplyJobController::class, 'AppliedJob'])->name('applied_job');
    Route::get('/job/applied/job/details/{id}', [ApplyJobController::class, 'AppliedJobDetails'])->name('applied_job_details');


});


Route::group(['prefix' => 'employee', 'middleware' => 'frontAuth'], function () {
//Employee
    Route::get('/', [EmployeeController::class, 'employee'])->name('employee');
//employee_profile
    Route::get('/profile', [EmployeeController::class, 'employee_profile'])->name('employee_profile');
    Route::post('/profile/post', [EmployeeController::class, 'employee_profile_post'])->name('employee_profile_post');

//company
    Route::get('/company', [CompanyController::class, 'company'])->name('company');
    Route::post('/company/posts', [CompanyController::class, 'companypost'])->name('companypost');

//PostJob
    Route::get('/post/jobs', [EmployeeController::class, 'PostJob'])->name('PostJob');
    Route::post('/post/jobs_post', [EmployeeController::class, 'PostJob_post'])->name('PostJob_post');

//manage_job
    Route::get('/manage/internship', [EmployeeController::class, 'manage_internship'])->name('manage_internship');
    Route::get('/manage/internship/edit/{id}', [EmployeeController::class, 'ManageInternshipEdit'])->name('manage_internship_edit');
    Route::put('/manage/internship/update/{id}', [EmployeeController::class, 'ManageInternshipUpdate'])->name('manage_internship_update');
    Route::get('/manage/internship/delete/{id}', [EmployeeController::class, 'ManageInternshipDelete'])->name('manage_internship_delete');

//candidate_list
    Route::get('/candidates/list', [EmployeeController::class, 'candidate_list'])->name('candidate_list');
    Route::post('/candidates/list/post', [EmployeeController::class, 'candidate_list_post'])->name('candidate_list_post');

//short_list
    Route::get('/short/list', [EmployeeController::class, 'shortList'])->name('short_list');
    //applied_candidate
    Route::get('/job/apply/candidates', [ApplyJobController::class, 'JobApplyCandidate'])->name('JobApplyCandidate');

//application details
    Route::get('/view/application/details/{id}', [ApplyJobController::class, 'ApplicationDetails'])->name('application_details');
    //action
//    Route::get('/view/application/details/{id}', [ApplyJobController::class, 'Action'])->name('Action');
    //takeAction
    Route::post('/job/apply/take/action', [ApplyJobController::class, 'TakeAction'])->name('take_action');
});

//applied candidate
//view resume
Route::get('/view/resume/{id}', [ApplyJobController::class, 'view_resume'])->name('view_resume');
//pdf
Route::get('/resume/pdf', [CandidateController::class, 'pdf'])->name('pdf');

//application details
Route::get('/view/application/details/{id}', [ApplyJobController::class, 'ApplicationDetails'])->name('application_details');

//view job_post
Route::get('internship/post/view/{id}', [UserController::class, 'view_internship_post'])->name('view_internship_post');
//under_category

Route::get('category/view/{id}', [CategoryController::class, 'CategoryView'])->name('category_view');


Route::get('/test', function () {

    $subscribes = \App\Models\Subscribe::select('email')->get();

    foreach ($subscribes as $subscribe) {

        $dear = 'Hello Jon doe';
        $ok = 'ok';

        \Illuminate\Support\Facades\Mail::to($subscribe)->send(new \App\Mail\SubscriberMail($dear, $ok));
    }


});

