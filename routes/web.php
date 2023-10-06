<?php
use App\Http\Controllers\StudentsController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::view('/', 'pages.logins')->name ('logins');
//Route::view('add', 'students.add')->name ('add');
Route::view('editstudent', 'students.editstudent')->name ('editstudent');
Route::get('test', [App\Http\Controllers\TextController::class, 'test'])->name ('test');
//Route::get('signout', [App\Http\Controllers\LoginController::class, 'logout'])->name('signout');
//Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


//Students::routes();
//GET ->name('students.create')
Route::prefix('students')->group(function () {
Route::get('/', [App\Http\Controllers\StudentsController::class,'index'])->name('students.index');
Route::get('/create', [App\Http\Controllers\StudentsController::class,'create'])->name('students.create');
Route::get('/{id}', [App\Http\Controllers\StudentsController::class,'show'])->name('students.show');
//Post
Route::post('/', [App\Http\Controllers\StudentsController::class,'store'])->name('students.store');
//PUT OR PARTCh
Route::get('/edit/{id}', [App\Http\Controllers\StudentsController::class,'edit']);
Route::patch('/{id}', [App\Http\Controllers\StudentsController::class,'updete']);
//DELETE
Route::delete('/{id}', [App\Http\Controllers\StudentsController::class,'destroy'])->name('students.destroy');
});

Route::resource('student', StudentsController::class)->middleware('auth');






//Route::get('/students', [App\Http\Controllers\Students\StudentsController::class,'student'])->name('students');
//Route::get('/addstudent', [App\Http\Controllers\Students\AddstudController::class,'insertstud'])->name('addstudent');
//Route::post('/addstudent', [App\Http\Controllers\Students\AddstudController::class,'insert'])->name('addstudent');

//add stude
///Route::get('insert','App\Http\Controllers\StudentsController@create1');
//Route::post('createat','App\Http\Controllers\Students\AddstudController@insert');


//Route::get('addstudt','AddController@insertform');
//Route::post('addstud','AddController@addstud');
//Route::view('stud_create', 'stud_create')->name ('stud_create');
//Route::get('insert','App\Http\Controllers\StudinsertController@insertform');
//Route::post('create','App\Http\Controllers\StudinsertController@insert');
