<?php

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

//
//Route::get('/', function () {
//    return view('welcome');
//});


// Route::get('/','myController@master')->name('master');
Route::get('/index','myController@index')->name('index');
Route::get('/about','myController@about')->name('about');
Route::get('/service','myController@service')->name('service');
Route::get('/caseStudy','myController@case')->name('case');
Route::get('/blog','myController@blog')->name('blog');
Route::get('/contact','myController@contact')->name('contact');
Route::get('/appointment','myController@appointment')->name('appointment');

Auth::routes();

Route::get('/home', 'Homecontroller@index')->name('home');

//Route::get('/admin','AdminController@home');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'admin','middleware'=>['auth','admin']],function(){
    Route::get('dashboard','DashboardController@dashboard')->name('main');
    Route::get('case-study-table','DashboardController@tableCaseStudy')->name('table-case');
    Route::get('add-case-study','DashboardController@case')->name('add-case-study');
    Route::get('add-blog','DashboardController@blog')->name('add-blog');
    Route::get('add-service','DashboardController@service')->name('add-service');
    Route::get('blog-table','DashboardController@tableBlog')->name('table-blog');
    Route::get('service-table','DashboardController@tableService')->name('table-service');
    Route::get('testimonials-table','DashboardController@tableTestimonials')->name('table-testimonials');
    Route::get('lawyer-table','DashboardController@tableLawyer')->name('table-lawyer');
    Route::get('category-table','DashboardController@tableCategory')->name('table-category');
    Route::get('add-lawyer','DashboardController@lawyer')->name('add-lawyer');
    Route::get('add-category','DashboardController@category')->name('add-category');
    Route::get('appointment-table','DashboardController@tableAppointment')->name('table-appointment');
    Route::get('appointment','DashboardController@appoint')->name('appoint');
    Route::get('add-testimonials','DashboardController@testimonial')->name('add-testimonial');


    Route::post('save/case','AdminFormController@caseSave')->name('form.case');
    Route::post('save/blog','AdminFormController@blogSave')->name('form.blog');
    Route::post('save/service','AdminFormController@serviceSave')->name('form.service');
    Route::post('save/testimonials','AdminFormController@testimonialsSave')->name('form.testimonials');
    Route::post('save/category','AdminFormController@categorySave')->name('form.category');
    Route::post('save/lawyer','AdminFormController@lawyerSave')->name('form.lawyer');
    Route::post('save/appointment','AdminFormController@appointmentSave')->name('form.appointment');


    Route::post('/service/update{id}','AdminFormController@update')->name('service.update');
    Route::get('/service/delete/{id}','AdminFormController@serviceDelete')->name('service.delete');

});


Route::group(['as'=>'user.','prefix'=>'user','namespace'=>'user','middleware'=>['auth','user']],function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('appointment','DashboardController@appointment')->name('appointment');
    Route::get('lawyer-table','DashboardController@lawyer')->name('lawyer');
    Route::post('form/save','DashboardController@save')->name('form.appointment');
    Route::get('form/edit{id}','DashboardController@save')->name('appointment.edit');
    Route::get('form/delete{id}','DashboardController@save')->name('appointment.delete');
});



//  Route::get('/user/appointment-table','UserController@appointmentTable')->name('appointment-table');
//  Route::get('/user/lawyer-table','UserController@lawyerTable')->name('user-lawyer-table');
//  Route::get('/user/main','UserController@dashboard')->name('user-main');

