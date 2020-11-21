<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/home',[UserController::class,'index'] )->name('home');

//company
Route::get('/company',[UserController::class,'company'] )->name('company');
Route::post('/company/posts',[UserController::class,'companypost'] )->name('companypost');

Route::get('/company/lists',[UserController::class,'companylist'] )->name('companylist');

//Vacancy

Route::get('/vacancy/lists',[Backend\VacancyController::class,'vacancylist'] )->name('vacancylist');

//Employee
Route::get('/employee/lists',[UserController::class,'employeelist'] )->name('employeelist');

//Candidate
Route::get('/candidate/lists',[UserController::class,'candidatelist'] )->name('candidatelist');
//Category
Route::get('/category/lists',[UserController::class,'categorylist'] )->name('categorylist');


//comment



