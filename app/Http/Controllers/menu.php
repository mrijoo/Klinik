<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menu extends Controller
{
    public function admin_dashboard() {
        return view('admin/index', ['menu' => 'dashboard']);
    }

    public function admin_login() {
        return view('admin/pages/auth/login', ['menu' => '']);
    }

    public function admin_register() {
        return view('admin/pages/auth/register', ['menu' => '']);
    }

    public function admin_doctor_add() {
        return view('admin/pages/doctor/add-doctor', ['menu' => 'doctor_add-doctor']);
    }

    public function admin_doctor_list() {
        return view('admin/pages/doctor/doctor-list', ['menu' => 'doctor_doctor-list']);
    }

    public function admin_patient_add() {
        return view('admin/pages/patient/add-patient', ['menu' => 'patient_add_patient']);
    }

    public function admin_patient_list() {
        return view('admin/pages/patient/patient-list', ['menu' => 'patient_patient_list']);
    }

    public function admin_department_add() {
        return view('admin/pages/department/add-department', ['menu' => '']);
    }

    public function admin_department_list() {
        return view('admin/pages/department/department-list', ['menu' => '']);
    }

    public function admin_doctor_schedule_add() {
        return view('admin/pages/doctor-schedule/add-schedule', ['menu' => '']);
    }

    public function admin_doctor_schedule_list() {
        return view('admin/pages/doctor-schedule/schedule-list', ['menu' => '']);
    }

    public function admin_appointment_add() {
        return view('admin/pages/appointment/add-appointment', ['menu' => '']);
    }

    public function admin_appointment_list() {
        return view('admin/pages/appointment/appointment-list', ['menu' => '']);
    }

    public function admin_payment_add() {
        return view('admin/pages/payment/add-payment', ['menu' => '']);
    }

    public function admin_payment_invoice() {
        return view('admin/pages/payment/payment-invoice', ['menu' => '']);
    }

    public function admin_payment_list() {
        return view('admin/pages/payment/payment-list', ['menu' => '']);
    }

    public function admin_report_doctor() {
        return view('admin/pages/report/doctor-report', ['menu' => '']);
    }

    public function admin_report_patient() {
        return view('admin/pages/report/patient-report', ['menu' => '']);
    }

    public function admin_humanresource_addemployee() {
        return view('admin/pages/human-resource/add-employee', ['menu' => '']);
    }
    
    public function admin_humanresource_addnurse() {
        return view('admin/pages/human-resource/add-nurse', ['menu' => '']);
    }

    public function admin_humanresource_addpharmacist() {
        return view('admin/pages/human-resource/add-pharmacist', ['menu' => '']);
    }

    public function admin_humanresource_addrepresentative() {
        return view('admin/pages/human-resource/add-representative', ['menu' => '']);
    }

    public function admin_humanresource_employeelist() {
        return view('admin/pages/human-resource/employee-list', ['menu' => '']);
    }

    public function admin_humanresource_nurselist() {
        return view('admin/pages/human-resource/nurse-list', ['menu' => '']);
    }

    public function admin_humanresource_pharmacistlist() {
        return view('admin/pages/human-resource/pharmacist-list', ['menu' => '']);
    }

    public function admin_humanresource_representativelist() {
        return view('admin/pages/human-resource/representative-list', ['menu' => '']);
    }

    public function admin_bedmanager_add() {
        return view('admin/pages/bed-manager/add-bed', ['menu' => '']);
    }

    public function admin_bedmanager_list() {
        return view('admin/pages/bed-manager/bed-list', ['menu' => '']);
    }

    public function admin_notice_add() {
        return view('admin/pages/notice/add-notice', ['menu' => '']);
    }

    public function admin_notice_list() {
        return view('admin/pages/notice/notice-list', ['menu' => '']);
    }

    public function admin_apps_chat() {
        return view('admin/pages/apps/chat', ['menu' => '']);
    }

    public function admin_apps_email() {
        return view('admin/pages/apps/email', ['menu' => '']);
    }

    public function admin_apps_todolist() {
        return view('admin/pages/apps/to-do-list', ['menu' => '']);
    }
}
