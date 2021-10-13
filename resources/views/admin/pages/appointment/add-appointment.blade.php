@extends('admin.layout.main')

@section('title', 'Add Appointment')
@section('main')
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Appointment</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Appointment</li>
                </ol>
            </nav>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="ms-panel">
                <div class="ms-panel-header ms-panel-custome">
                    <h6>Add Appointment</h6>
                    <a href="appointment-list.html" class="ms-text-primary">Appointment List</a>
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
                                <label for="validationCustom002">Last name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom002"
                                        placeholder="Enter Last Name" required>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom003">Email Address</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="validationCustom003"
                                        placeholder="Enter Email" required>

                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="validationCustom004">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="validationCustom004"
                                        placeholder="Enter Password" required>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom005">Patient Id</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom005"
                                        placeholder="Enter Id" required>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom006">Department Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom006"
                                        placeholder="Enter Department Name" required>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom007">Appointment With</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom007"
                                        placeholder="Enter Doctor Name" required>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom008">Appointment Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom008"
                                        placeholder="Enter Appointment Date" required>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-2">
                                <label>Problem</label>
                                <div class="input-group">
                                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label>Sex</label>
                                <ul class="ms-list d-flex">
                                    <li class="ms-list-item pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample" value="">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span> Male </span>
                                    </li>
                                    <li class="ms-list-item">
                                        <label class="ms-checkbox-wrap">
                                            <input type="radio" name="radioExample" value="" checked="">
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <span> Female </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Reset</button>
                        <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
