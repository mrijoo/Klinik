@extends('admin.layout.main')

@section('title', 'Employee List')
@section('main')
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Human Resource</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Employee List</li>
                </ol>
            </nav>
            <div class="ms-panel">
                <div class="ms-panel-header ms-panel-custome">
                    <h6>Employee List</h6>
                    <a href="add-employee.html" class="ms-text-primary">Add Employee</a>
                </div>
                <div class="ms-panel-body">
                    <div class="table-responsive">
                        <table id="data-table11" class="table w-100 thead-primary"></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
