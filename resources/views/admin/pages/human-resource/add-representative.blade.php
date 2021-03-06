@extends('admin.layout.main')

@section('title', 'Add Representative')
@section('main')
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Human Resource</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Representative</li>
                </ol>
            </nav>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="ms-panel">
                <div class="ms-panel-header ms-panel-custome">
                    <h6>Add Representative</h6>
                    <a href="{{ url('admins/human-resource/representative-list'); }}" class="ms-text-primary">Representative List</a>
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
                            <div class="col-md-6 mb-2">
                                <label for="validationCustom005">Mobile</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom005"
                                        placeholder="Mobile" required>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Picture Upload</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile">
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-2">
                                <label>Address</label>
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
