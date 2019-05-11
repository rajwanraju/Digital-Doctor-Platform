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

Route::get('/', function () {
    return view('frontEnd.master');
});

Route::get('/signUp','AuthController@registerPage');
Route::get('/compose/message','MessageController@compose');
Route::get('/message/list','MessageController@messageList');
Route::get('/message/view/{id}','MessageController@messageView');
Route::get('/message/reply/{id}','MessageController@messageReply');
Route::post('/message/reply/store','MessageController@storemessageReply');
Route::post('/message/compose/store','MessageController@storeMessageCompose');
Route::post('/user/signUp','AuthController@registration');
Route::get('/profile','HomeController@profile');

Route::post('/register/Doctor','AdminDashBoardController@registerDoctor');
Route::group(['middleware'=>'Admin'],function (){

Route::get('/adminDashboard','AdminDashBoardController@adminDashboard');
Route::get('/doctors','AdminDashBoardController@doctorList');
Route::get('/Patients','AdminDashBoardController@patientList');
Route::get('/create/doctor','AdminDashBoardController@doctorAdd');
Route::post('/register/Doctor','AdminDashBoardController@registerDoctor');


});
Route::group(['middleware'=>'Doctor'],function (){

Route::get('/doctorDashboard','DoctorDashboardController@dashboard');
Route::get('/profile/complete','DoctorProfileController@profileComplete');
Route::get('/my/Patient','DoctorDashboardController@appointmentList');
Route::post('doctor/profile/complete','DoctorProfileController@postprofileComplete');


Route::get('prescription/{id}','DoctorDashboardController@prescription');
Route::post('prescription/store','DoctorDashboardController@prescriptionStore');
Route::get('my/prescription','DoctorDashboardController@myPrescription');
Route::get('my/appointment','DoctorDashboardController@appointment');
Route::get('my/appointment/{id}','DoctorDashboardController@appointmentUser');


});
Route::group(['middleware'=>'User'],function (){

Route::get('/userDashboard','UserDashBoardController@dashboard');
Route::get('/doctor/list','UserDashBoardController@doctorList');
Route::get('/doctor/profile/{id}','UserDashBoardController@doctorProfile');

Route::get('user/profile','UserDashBoardController@profileComplete');

Route::post('user/profile/complete','UserDashBoardController@postprofileComplete');
Route::get('/appointment/{id}','UserDashBoardController@appointment');
Route::get('/myappointment/list','UserDashBoardController@appointmentList');


Route::get('user/prescription','UserDashBoardController@myPrescription');
Route::get('print/prescription/{id}','UserDashBoardController@printPrescription');


});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
