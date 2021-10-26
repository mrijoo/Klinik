@extends('admin.layout.main')

@section('title', 'Patient List')
@section('main')
<div class="ms-content-wrapper">
   <div class="row">
      <div class="col-md-12">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Patient</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Patient List</li>
               </ol>
            </nav>
            <div class="ms-panel">
               <div class="ms-panel-header ms-panel-custome">
                  <h6>Patient List</h6>
                  <a href="{{ url('admins/patient/add-patient'); }}" class="ms-text-primary">Add Patient</a>
               </div>
               <div class="ms-panel-body">
                  <div class="table-responsive">
                        <table id="data-table-2" class="table table-striped thead-primary w-100"></table>
                  </div>
               </div>
            </div>
      </div>
   </div>
</div>
@endsection
