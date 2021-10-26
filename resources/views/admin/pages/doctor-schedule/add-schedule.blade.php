@extends('admin.layout.main')

@section('title', 'Add Schedule')
@section('main')
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Doctor Schedule</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Schedule</li>
                </ol>
            </nav>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="ms-card">
                        <div class="ms-card-body">
                            <div class="media fs-14">
                                <div class="mr-2 align-self-center">
                                    <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-4.jpg'); }}" class="ms-img-round"
                                        alt="people">
                                </div>
                                <div class="media-body">
                                    <h6>Michael Sullivan </h6>
                                    <div class="dropdown float-right">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="ms-dropdown-list">
                                                <a class="media p-2" href="#">
                                                    <div class="media-body">
                                                        <span>View Details</span>
                                                    </div>
                                                </a>
                                                <a class="media p-2" href="#">
                                                    <div class="media-body">
                                                        <span>Assign</span>
                                                    </div>
                                                </a>
                                                <a class="media p-2" href="#">
                                                    <div class="media-body">
                                                        <span>Edit</span>
                                                    </div>
                                                </a>
                                                <a class="media p-2" href="#">
                                                    <div class="media-body">
                                                        <span>Delete</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="fs-12 my-1 text-disabled">Ophthalmologist</p>
                                    <h6 class="mt-2"><span><i class="far fa-calendar"></i></span> 21 Jan 2020</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="ms-card">
                        <div class="ms-card-body">
                            <div class="media fs-14">
                                <div class="mr-2 align-self-center">
                                    <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-2.jpg'); }}" class="ms-img-round"
                                        alt="people">
                                </div>
                                <div class="media-body">
                                    <h6>Linda Barrett</h6>
                                    <div class="dropdown float-right">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="ms-dropdown-list">
                                                <a class="media p-2" href="#">
                                                    <div class="media-body">
                                                        <span>View Details</span>
                                                    </div>
                                                </a>
                                                <a class="media p-2" href="#">
                                                    <div class="media-body">
                                                        <span>Assign</span>
                                                    </div>
                                                </a>
                                                <a class="media p-2" href="#">
                                                    <div class="media-body">
                                                        <span>Edit</span>
                                                    </div>
                                                </a>
                                                <a class="media p-2" href="#">
                                                    <div class="media-body">
                                                        <span>Delete</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="fs-12 my-1 text-disabled">Dentist</p>
                                    <h6 class="mt-2"><span><i class="far fa-calendar"></i></span> 25 Jan 2020</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="ms-card">
                        <div class="ms-card-body">
                            <div class="media fs-14">
                                <div class="mr-2 align-self-center">
                                    <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-1.jpg'); }}" class="ms-img-round"
                                        alt="people">
                                </div>
                                <div class="media-body">
                                    <h6>Ronald Jacobs</h6>
                                    <div class="dropdown float-right">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="ms-dropdown-list">
                                                <a class="media p-2" href="#">
                                                    <div class="media-body">
                                                        <span>View Details</span>
                                                    </div>
                                                </a>
                                                <a class="media p-2" href="#">
                                                    <div class="media-body">
                                                        <span>Assign</span>
                                                    </div>
                                                </a>
                                                <a class="media p-2" href="#">
                                                    <div class="media-body">
                                                        <span>Edit</span>
                                                    </div>
                                                </a>
                                                <a class="media p-2" href="#">
                                                    <div class="media-body">
                                                        <span>Delete</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="fs-12 my-1 text-disabled">Oncologist</p>
                                    <h6 class="mt-2"><span><i class="far fa-calendar"></i></span> 22 Jan 2020</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="ms-card">
                        <div class="ms-card-body">
                            <div class="media fs-14">
                                <div class="mr-2 align-self-center">
                                    <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-5.jpg'); }}" class="ms-img-round"
                                        alt="people">
                                </div>
                                <div class="media-body">
                                    <h6>Mark Hunter </h6>
                                    <div class="dropdown float-right">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="ms-dropdown-list">
                                                <a class="media p-2" href="#">
                                                    <div class="media-body">
                                                        <span>View Details</span>
                                                    </div>
                                                </a>
                                                <a class="media p-2" href="#">
                                                    <div class="media-body">
                                                        <span>Assign</span>
                                                    </div>
                                                </a>
                                                <a class="media p-2" href="#">
                                                    <div class="media-body">
                                                        <span>Edit</span>
                                                    </div>
                                                </a>
                                                <a class="media p-2" href="#">
                                                    <div class="media-body">
                                                        <span>Delete</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="fs-12 my-1 text-disabled">Cardiologist</p>
                                    <h6 class="mt-2"><span><i class="far fa-calendar"></i></span> 19 Jan 2020</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="ms-card">
                        <div class="ms-card-body">
                            <div class="media fs-14">
                                <div class="mr-2 align-self-center">
                                    <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-2.jpg'); }}" class="ms-img-round"
                                        alt="people">
                                </div>
                                <div class="media-body">
                                    <h6>Cristina Groves</h6>
                                    <div class="dropdown float-right">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="ms-dropdown-list">
                                                <a class="media p-2" href="#">
                                                    <div class="media-body">
                                                        <span>View Details</span>
                                                    </div>
                                                </a>
                                                <a class="media p-2" href="#">
                                                    <div class="media-body">
                                                        <span>Assign</span>
                                                    </div>
                                                </a>
                                                <a class="media p-2" href="#">
                                                    <div class="media-body">
                                                        <span>Edit</span>
                                                    </div>
                                                </a>
                                                <a class="media p-2" href="#">
                                                    <div class="media-body">
                                                        <span>Delete</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="fs-12 my-1 text-disabled">Psychiatrist</p>
                                    <h6 class="mt-2"><span><i class="far fa-calendar"></i></span> 21 Jan 2020</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="ms-card">
                        <div class="ms-card-body">
                            <div class="media fs-14">
                                <div class="mr-2 align-self-center">
                                    <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-1.jpg'); }}" class="ms-img-round"
                                        alt="people">
                                </div>
                                <div class="media-body">
                                    <h6>Cristina Groves</h6>
                                    <div class="dropdown float-right">
                                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="ms-dropdown-list">
                                                <a class="media p-2" href="#">
                                                    <div class="media-body">
                                                        <span>View Details</span>
                                                    </div>
                                                </a>
                                                <a class="media p-2" href="#">
                                                    <div class="media-body">
                                                        <span>Assign</span>
                                                    </div>
                                                </a>
                                                <a class="media p-2" href="#">
                                                    <div class="media-body">
                                                        <span>Edit</span>
                                                    </div>
                                                </a>
                                                <a class="media p-2" href="#">
                                                    <div class="media-body">
                                                        <span>Delete</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="fs-12 my-1 text-disabled">Psychiatrist</p>
                                    <h6 class="mt-2"><span><i class="far fa-calendar"></i></span> 15 JAN 2020</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="ms-panel">
                <div class="ms-panel-header  ms-panel-custome">
                    <h6>Add Schedule</h6>
                    <a href="{{ url('admins/doctor-schedule/schedule-list') }}" class="ms-text-primary">Schedule List</a>
                </div>
                <div class="ms-panel-body">
                    <form class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom001">Doctor Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom001"
                                        placeholder="Enter Doctor Name" required>

                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="validationCustom004">Available time</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom004"
                                        placeholder="Available time" required>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom003">Add Department</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom003"
                                        placeholder="Enter Department Name" required>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom002">Available days</label>
                                <div class="input-group">
                                    <select class="form-control" id="validationCustom002" required>
                                        <option value="">Sunday</option>
                                        <option value="">Monday</option>
                                        <option value="">Tuesday</option>
                                        <option value="">Wednesday</option>
                                        <option value="">Thursday</option>
                                        <option value="">Friday</option>
                                        <option value="">Saturday</option>
                                    </select>

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
                        <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
