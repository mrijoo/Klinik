@extends('admin.layout.main')

@section('title', 'Add Department')
@section('main')
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Department</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Department</li>
                </ol>
            </nav>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="ms-panel">
                <div class="ms-panel-header ms-panel-custome">
                    <h6>Add Department</h6>
                    <a href="{{ url('admins/department/department-list'); }}" class="ms-text-primary  ">Department List</a>
                </div>
                <div class="ms-panel-body">
                    <form class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Doctor Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom01"
                                        placeholder="Enter Doctor Name" required>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom02">Department Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom02"
                                        placeholder="Enter Department Name" required>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-2">
                                <label>Department Head</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom04"
                                        placeholder="Enter Department Head Name" required>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label>Status</label>
                                <ul class="ms-list d-flex">
                                    <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="statusExample" value="">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span> Active </span>
                                    </li>
                                    <li class="ms-list-item">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="statusExample" value="" checked="">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span> Inactive </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Reset</button>
                        <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
