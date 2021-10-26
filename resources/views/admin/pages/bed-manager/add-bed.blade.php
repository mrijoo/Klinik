@extends('admin.layout.main')

@section('title', 'Add Bed')
@section('main')
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Bed Manager</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Bed</li>
                </ol>
            </nav>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="ms-panel">
                <div class="ms-panel-header ms-panel-custome">
                    <h6>Add Bed</h6>
                    <a href="{{ url('admins/bed-manager/bed-list'); }}" class="ms-text-primary">Bed List</a>
                </div>
                <div class="ms-panel-body">
                    <form class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom001">First Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom001"
                                        placeholder="Enter First Name" required>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Last Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom002"
                                        placeholder="Enter Last Name" required>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom003">Room No.</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom003"
                                        placeholder="Enter Room No." required>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom004">Bed Type</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom004"
                                        placeholder="Bed Type" required>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom005">Admit Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom005"
                                        placeholder="Admit Date" required>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom006">Bed capacity</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom006"
                                        placeholder="Enter Bed capacity" required>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-2">
                                <label>Description</label>
                                <div class="input-group">
                                    <textarea class="form-control" id="exampleTextarea" placeholder="Add Description"
                                        rows="3"></textarea>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label>Sex</label>
                                <ul class="ms-list d-flex">
                                    <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="statusExample1" value="">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span> Male </span>
                                    </li>
                                    <li class="ms-list-item">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="statusExample1" value="" checked="">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span> Female </span>
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
