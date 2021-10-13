<?php

use App\http\controllers\menu;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/admins', function () {
    return redirect('/admins/dashboard');
});

Route::get('/admins/dashboard', [menu::class, 'admin_dashboard']);

Route::get('/admins/doctor/add-doctor', [menu::class, 'admin_doctor_add']);

Route::get('/admins/doctor/doctor-list', [menu::class, 'admin_doctor_list']);

Route::get('/admins/patient/add-patient', [menu::class, 'admin_patient_add']);

Route::get('/admins/patient/patient-list', [menu::class, 'admin_patient_list']);

Route::get('/admins/department/add-department', [menu::class, 'admin_department_add']);

Route::get('/admins/department/department-list', [menu::class, 'admin_department_list']);

Route::get('/admins/doctor-schedule/add-schedule', [menu::class, 'admin_doctor_schedule_add']);

Route::get('/admins/doctor-schedule/schedule-list', [menu::class, 'admin_doctor_schedule_list']);

Route::get('/admins/appointment/add-appointment', [menu::class, 'admin_appointment_add']);

Route::get('/admins/appointment/appointment-list', [menu::class, 'admin_appointment_list']);

Route::get('/admins/payment/add-payment', [menu::class, 'admin_payment_add']);

Route::get('/admins/payment/payment-invoice', [menu::class, 'admin_payment_invoice']);

Route::get('/admins/payment/payment-list', [menu::class, 'admin_payment_list']);

Route::get('/admins/report/doctor-report', [menu::class, 'report_doctor']);

Route::get('/admins/report/patient-report', [menu::class, 'report_patient']);

Route::get('/admins/report/total-report', [menu::class, 'report_total']);

Route::get('/admins/human-resource/add-employee', [menu::class, 'admin_humanresource_addemployee']); //

Route::get('/admins/human-resource/add-nurse', [menu::class, 'admin_humanresource_addnurse']);

Route::get('/admins/human-resource/add-pharmacist', [menu::class, 'admin_humanresource_addpharmacist']);

Route::get('/admins/human-resource/add-representative', [menu::class, 'admin_humanresource_addrepresentative']);

Route::get('/admins/human-resource/employee-list', [menu::class, 'admin_humanresource_employeelist']);

Route::get('/admins/human-resource/nurse-list', [menu::class, 'admin_humanresource_nurselist']);

Route::get('/admins/human-resource/pharmacist-list', [menu::class, 'admin_humanresource_pharmacistlist']);

Route::get('/admins/human-resource/representative-list', [menu::class, 'admin_humanresource_representativelist']);

Route::get('/admins/bed-manager/add-bed', [menu::class, 'admin_bedmanager_add']);

Route::get('/admins/bed-manager/bed-list', [menu::class, 'admin_bedmanager_list']);

Route::get('/admins/notice/add-notice', [menu::class, 'admin_notice_add']);

Route::get('/admins/notice/notice-list', [menu::class, 'admin_notice_list']);

Route::get('/admins/apps/chat', [menu::class, 'admin_apps_chat']);

Route::get('/admins/apps/email', [menu::class, 'admin_apps_email']);

Route::get('/admins/apps/to-do-list', [menu::class, 'admin_apps_todolist']);