@extends('admin.layout.main')

@section('title', 'Schedule List')
@section('main')
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Bed Manager</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bed List</li>
                </ol>
            </nav>
            <div class="ms-panel">
                <div class="ms-panel-header ms-panel-custome">
                    <h6>Bed List</h6>
                    <a href="{{ url('admins/bed-manager/add-bed'); }}" class="ms-text-primary">Add Bed</a>
                </div>
                <div class="ms-panel-body">
                    <div class="table-responsive">
                        <table id="data-table9" class="table  thead-primary w-100"></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
