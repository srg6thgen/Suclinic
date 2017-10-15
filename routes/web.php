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

Route::get('/', ['as'=>'/','uses'=>'LoginController@getLogin']);
Route::post('/login',['as'=>'login','uses'=>'LoginController@postLogin']);

Route::get('/noPermission', function(){
		return view('permission.noPermission');

});

Route::group(['middleware'=>['authen']],function(){
	Route::get('/logout',['as'=>'logout','uses'=>'LoginController@getLogout']);
});

Route::group(['middleware'=>['authen','roles'],'roles'=>['admin']],function()
{

	Route::get('/admin-dashboard',['as'=>'dashboard','uses'=>'admin\adminController@admin_dashboard']);
	Route::get('/admin-set-student',['as'=>'admin_setup_student','uses'=>'admin\adminController@admin_setup_student']);


	Route::post('import-csv-excel-employee',array('as'=>'import-employee','uses'=>'admin\employeeController@importFileIntoDB_employee'));
	Route::post('import-csv-excel-student',array('as'=>'import-csv-excel-student','uses'=>'admin\studentController@importFileIntoDB_student'));


	Route::resource('ManageUsers', 'UserController');
	Route::resource('ManageEmployee', 'admin\employeeController');
	Route::resource('ManageStudent', 'admin\studentController');
	Route::resource('ManageAppointmentType', 'admin\apptypeController');
		
});


Route::group(['middleware'=>['authen','roles'],'roles'=>['management']],function()
{
	Route::get('/management-dashboard',['as'=>'management_dashboard','uses'=>'managementController@management_dashboard']);
	
});

Route::group(['middleware'=>['authen','roles'],'roles'=>['staff']],function(){

	Route::get('/staff-dashboard',['as'=>'staff_dashboard','uses'=>'staff\staffController@staff_dashboard']);
	Route::get('ManageUtilityStored-uti/{id}', ['as'=>'ManageUtilityStored_uti', 'uses'=>'staff\UtilityStoredController@store']);
	Route::get('AddPatient-employee/{id}',['as'=>'AddPatient_employee','uses'=> 'staff\patientController@employee_store']);
	Route::get('AddPatient-student/{id}',['as'=>'AddPatient_student','uses'=> 'staff\patientController@student_store']);
	Route::get('Issuance_List/{patient_id}',['as'=>'Issuance_List','uses'=> 'staff\IssuanceController@IssuanceList']);
	Route::get('Create_Issue/{patient_id}',['as'=>'Create_Issue','uses'=> 'staff\IssuanceController@Newissuepatient']);
	Route::get('invoice-issuance/{Issuance}/{patient_id}',['as'=>'invoice-issuance','uses'=>'staff\IssuanceController@invoice_issuance']);
	Route::post('ManageWalkin_store/{id}', ['as'=>'ManageWalkin_store', 'uses'=>'staff\walkinController@store']);
	Route::post('ManageMedicineStored-med/{id}', ['as'=>'ManageMedicineStored_med', 'uses'=>'staff\MedicineStoredController@storemed']);
	Route::post('Vitals/{id}', ['as'=>'Vitalstore', 'uses'=>'staff\vitalsController@storevitals']);
	Route::post('Issue_Med/{Issuance}/{Patient_id}', ['as'=>'Issue_Med', 'uses'=>'staff\IssuanceController@Issuemedicine']);


	Route::resource('Issuance', 'staff\IssuanceController');
	Route::resource('ManageVitals', 'staff\vitalsController');
	Route::resource('ManageRoom', 'staff\RoomController');
	Route::resource('AddPatient', 'staff\patientController');
	Route::resource('ManageMedicine', 'staff\MedicineController');
	Route::resource('ManageUtility', 'staff\UtilityController1');
	Route::resource('Appointment', 'staff\appointmentController');
	Route::resource('ManageMedicineStored', 'staff\MedicineStoredController');
	Route::resource('ManageUtilityStored', 'staff\UtilityStoredController');

	Route::resource('ManageWalkin', 'staff\walkinController');



});



Route::group(['middleware'=>['authen','roles'],'roles'=>['doctor']],function()
{
/*
	Route::get('/',['as'=>'doctor_dashboard','uses'=>'doctor\doctorController@doctor_dashboard']);*/
	Route::get('invoice/{visitkek}',['as'=>'invoice','uses'=>'doctor\visitController@invoice_visit']);
	Route::get('invoice_walk/{visitkek}',['as'=>'invoice','uses'=>'doctor\visitController@invoice_visit_walk']);
	Route::get('/doctor-transaction',['as'=>'doctor_transaction','uses'=>'doctor\doctorController@doctor_transaction']);
	Route::get('Visit-dis/{id}/{appointment_id}/{walk_in_id}',['as'=>'Visit_dis','uses'=> 'doctor\visitController@index']);


	Route::post('Visit-diag','doctor\visitController@storediagnosis');
	Route::post('Visit-med','doctor\visitController@storemedicine');
	Route::post('Visit/{appointment_id}/{walk_in_id}',['as'=>'Visit','uses'=> 'doctor\visitController@storeappointment']);

	Route::resource('doctor-dashboard', 'doctor\dashboardController');
	Route::resource('DoctorTransaction', 'doctor\dashboardController');
	Route::resource('PatientList', 'doctor\patientlistController');
	Route::resource('AppointmentList', 'doctor\appointmentlistController');
	Route::resource('ManageVisit', 'doctor\visitController');
	Route::resource('VisitList', 'doctor\visitlistController');
	


});




