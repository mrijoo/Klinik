@extends('admin.layout.main')

@section('title', 'Doctor List')
@section('main')
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="ms-panel-custome">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Doctor-List</li>
                </ol>

            </nav>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="ms-card">
                <div class="ms-card-body">
                    <div class="media fs-14">
                        <div class="mr-2 align-self-center">
                            <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-1.jpg'); }}" class="ms-img-round"
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
                            <h6 class="mt-2">
                                <span class="fs-14">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span>
                                United States, San Francisco</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
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
                            <h6 class="mt-2">
                                <span class="fs-14">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span>
                                United States, San Francisco</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="ms-card">
                <div class="ms-card-body">
                    <div class="media fs-14">
                        <div class="mr-2 align-self-center">
                            <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-3.jpg'); }}" class="ms-img-round"
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
                            <h6 class="mt-2">
                                <span class="fs-14">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span> United States, San Francisco</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="ms-card">
                <div class="ms-card-body">
                    <div class="media fs-14">
                        <div class="mr-2 align-self-center">
                            <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-4.jpg'); }}" class="ms-img-round"
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
                            <h6 class="mt-2">
                                <span class="fs-14">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span> United States, New York</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="ms-card">
                <div class="ms-card-body">
                    <div class="media fs-14">
                        <div class="mr-2 align-self-center">
                            <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-5.jpg'); }}" class="ms-img-round"
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
                            <h6 class="mt-2">
                                <span class="fs-14">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span> United States, California</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="ms-card">
                <div class="ms-card-body">
                    <div class="media fs-14">
                        <div class="mr-2 align-self-center">
                            <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-1.jpg'); }}" class="ms-img-round"
                                alt="people">
                        </div>
                        <div class="media-body">
                            <h6>Justin Parker</h6>
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
                            <p class="fs-12 my-1 text-disabled">Pediatrics</p>
                            <h6 class="mt-2">
                                <span class="fs-14">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span> United States, New York</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="ms-card">
                <div class="ms-card-body">
                    <div class="media fs-14">
                        <div class="mr-2 align-self-center">
                            <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-2.jpg'); }}" class="ms-img-round"
                                alt="people">
                        </div>
                        <div class="media-body">
                            <h6>Shirley Willis </h6>
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
                            <p class="fs-12 my-1 text-disabled">Radiologist</p>
                            <h6 class="mt-2">
                                <span class="fs-14">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span> United States, San Francisco</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="ms-card">
                <div class="ms-card-body">
                    <div class="media fs-14">
                        <div class="mr-2 align-self-center">
                            <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-3.jpg'); }}" class="ms-img-round"
                                alt="people">
                        </div>
                        <div class="media-body">
                            <h6>Diana Bailey</h6>
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
                            <p class="fs-12 my-1 text-disabled">General Surgery</p>
                            <h6 class="mt-2">
                                <span class="fs-14">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span> United States, California</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="ms-card">
                <div class="ms-card-body">
                    <div class="media fs-14">
                        <div class="mr-2 align-self-center">
                            <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-4.jpg'); }}" class="ms-img-round"
                                alt="people">
                        </div>
                        <div class="media-body">
                            <h6>Albert Sandoval</h6>
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
                            <p class="fs-12 my-1 text-disabled">Neurologist</p>
                            <h6 class="mt-2">
                                <span class="fs-14">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span> United States, San Francisco</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Chat Widget (Active Chats) -->
        <div class="col-xl-7 col-md-12">
            <div class="ms-panel ms-widget ">
                <div class="ms-panel-body py-3 px-0">
                    <div class="ms-chat-container">
                        <div class="ms-chat-header px-3">
                            <div class="ms-chat-user-container media clearfix">
                                <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                                    <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-1.jpg'); }}"
                                        class="ms-img-round" alt="people">
                                </div>
                                <div class="media-body ms-chat-user-info mt-1">
                                    <h6>Anny Farisha</h6>
                                    <a href="#" class="text-disabled has-chevron fs-12" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Available
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="ms-dropdown-list">
                                            <a class="media p-2" href="#">
                                                <div class="media-body">
                                                    <span>Busy</span>
                                                </div>
                                            </a>
                                            <a class="media p-2" href="#">
                                                <div class="media-body">
                                                    <span>Away</span>
                                                </div>
                                            </a>
                                            <a class="media p-2" href="#">
                                                <div class="media-body">
                                                    <span>Offline</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <form class="ms-form my-3" method="post">
                                <div class="ms-form-group my-0 mb-0 has-icon fs-14">
                                    <input type="search" class="ms-form-input w-100" name="search"
                                        placeholder="Search for People and Groups" value="">
                                    <i class="flaticon-search text-disabled"></i>
                                </div>
                            </form>
                        </div>
                        <div class="ms-chat-body">
                            <ul class="nav nav-tabs tabs-bordered d-flex nav-justified px-3" role="tablist">
                                <li role="presentation" class="fs-12"><a href="#chats-2" class="active show" role="tab"
                                        data-toggle="tab"> Chats </a></li>
                                <li role="presentation" class="fs-12"><a href="#groups-2" role="tab" data-toggle="tab">
                                        Groups </a></li>
                                <li role="presentation" class="fs-12"><a href="#contacts-2" role="tab"
                                        data-toggle="tab"> Contacts </a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active show fade in" id="chats-2">
                                    <ul class="ms-scrollable">
                                        <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                                            <div
                                                class="ms-chat-status ms-status-away ms-has-new-msg ms-chat-img mr-3 align-self-center">
                                                <span class="msg-count">3</span>
                                                <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-2.jpg'); }}"
                                                    class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>
                                                <span class="ms-chat-time">2 Hours ago</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu
                                                    turpis. Nunc</p>
                                                <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="ms-dropdown-list">
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body">
                                                                <span>Archive</span>
                                                            </div>
                                                        </a>
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body">
                                                                <span>Pin</span>
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
                                        </li>
                                        <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                                            <div
                                                class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                                                <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-3.jpg'); }}"
                                                    class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>
                                                <span class="ms-chat-time">3 Days ago</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu
                                                    turpis. Nunc</p>
                                                <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="ms-dropdown-list">
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body">
                                                                <span>Archive</span>
                                                            </div>
                                                        </a>
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body">
                                                                <span>Pin</span>
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
                                        </li>
                                        <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                                            <div
                                                class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                                                <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-4.jpg'); }}"
                                                    class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>
                                                <span class="ms-chat-time">3 Days ago</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu
                                                    turpis. Nunc</p>
                                                <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="ms-dropdown-list">
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body">
                                                                <span>Archive</span>
                                                            </div>
                                                        </a>
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body">
                                                                <span>Pin</span>
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
                                        </li>
                                        <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                                            <div
                                                class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                                                <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-5.jpg'); }}"
                                                    class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>
                                                <span class="ms-chat-time">3 Days ago</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu
                                                    turpis. Nunc</p>
                                                <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="ms-dropdown-list">
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body">
                                                                <span>Archive</span>
                                                            </div>
                                                        </a>
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body">
                                                                <span>Pin</span>
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
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="groups-2">
                                    <ul class="ms-scrollable">
                                        <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                                            <div class="ms-chat-img mr-3 align-self-center">
                                                <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-1.jpg'); }}"
                                                    class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>
                                                <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu
                                                    turpis. Nunc</p>
                                                <ul class="ms-group-members clearfix mt-3 mb-0">
                                                    <li> <img
                                                            src="{{ URL::asset('admin/assets/img/dashboard/doctor-1.jpg'); }}"
                                                            alt="member"> </li>
                                                    <li> <img
                                                            src="{{ URL::asset('admin/assets/img/dashboard/doctor-1.jpg'); }}"
                                                            alt="member"> </li>
                                                    <li> <img
                                                            src="{{ URL::asset('admin/assets/img/dashboard/doctor-1.jpg'); }}"
                                                            alt="member"> </li>
                                                    <li class="ms-group-count"> + 12 more </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                                            <div class="ms-chat-img mr-3 align-self-center">
                                                <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-1.jpg'); }}"
                                                    class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>
                                                <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu
                                                    turpis. Nunc</p>
                                                <ul class="ms-group-members clearfix mt-3 mb-0">
                                                    <li> <img
                                                            src="{{ URL::asset('admin/assets/img/dashboard/doctor-1.jpg'); }}"
                                                            alt="member"> </li>
                                                    <li> <img
                                                            src="{{ URL::asset('admin/assets/img/dashboard/doctor-1.jpg'); }}"
                                                            alt="member"> </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                                            <div class="ms-chat-img mr-3 align-self-center">
                                                <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-1.jpg'); }}"
                                                    class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>
                                                <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu
                                                    turpis. Nunc</p>
                                                <ul class="ms-group-members clearfix mt-3 mb-0">
                                                    <li> <img
                                                            src="{{ URL::asset('admin/assets/img/dashboard/doctor-1.jpg'); }}"
                                                            alt="member"> </li>
                                                    <li> <img
                                                            src="{{ URL::asset('admin/assets/img/dashboard/doctor-1.jpg'); }}"
                                                            alt="member"> </li>
                                                    <li> <img
                                                            src="{{ URL::asset('admin/assets/img/dashboard/doctor-1.jpg'); }}"
                                                            alt="member"> </li>
                                                    <li class="ms-group-count"> + 4 more </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="contacts-2">
                                    <ul class="ms-scrollable">
                                        <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                                            <div class="ms-chat-img mr-3 align-self-center">
                                                <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-1.jpg'); }}"
                                                    class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>
                                                <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu
                                                    turpis. Nunc</p>
                                            </div>
                                        </li>
                                        <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                                            <div class="ms-chat-img mr-3 align-self-center">
                                                <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-1.jpg'); }}"
                                                    class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>
                                                <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu
                                                    turpis. Nunc</p>
                                            </div>
                                        </li>
                                        <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                                            <div class="ms-chat-img mr-3 align-self-center">
                                                <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-1.jpg'); }}"
                                                    class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>
                                                <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu
                                                    turpis. Nunc</p>
                                            </div>
                                        </li>
                                        <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                                            <div class="ms-chat-img mr-3 align-self-center">
                                                <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-1.jpg'); }}"
                                                    class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>
                                                <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu
                                                    turpis. Nunc</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Followers Widget -->
        <div class="col-xl-5 col-md-12">
            <div class="ms-panel ms-panel-fh ms-widget">
                <div class="ms-panel-header">
                    <h6>Active/Inactive Doctors</h6>
                </div>
                <div class="ms-panel-body p-0">
                    <ul class="ms-followers ms-list ms-scrollable">
                        <li class="ms-list-item media">
                            <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-3.jpg'); }}"
                                class="ms-img-small ms-img-round" alt="people">
                            <div class="media-body mt-1">
                                <h4>James Zathila</h4>
                                <span class="fs-12">Gynaecologist</span>
                            </div>
                            <button type="button" class="ms-btn-icon btn-info" name="button"><i
                                    class="material-icons">person_add</i> </button>
                        </li>
                        <li class="ms-list-item media">
                            <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-4.jpg'); }}"
                                class="ms-img-small ms-img-round" alt="people">
                            <div class="media-body mt-1">
                                <h4>John Doe</h4>
                                <span class="fs-12">Radiotherapist</span>
                            </div>
                            <button type="button" class="ms-btn-icon btn-success" name="button"><i
                                    class="material-icons">check</i> </button>
                        </li>
                        <li class="ms-list-item media">
                            <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-5.jpg'); }}"
                                class="ms-img-small ms-img-round" alt="people">
                            <div class="media-body mt-1">
                                <h4>Khadiza Rehna</h4>
                                <span class="fs-12"> General Surgeon </span>
                            </div>
                            <button type="button" class="ms-btn-icon btn-info" name="button"><i
                                    class="material-icons">person_add</i> </button>
                        </li>
                        <li class="ms-list-item media">
                            <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-1.jpg'); }}"
                                class="ms-img-small ms-img-round" alt="people">
                            <div class="media-body mt-1">
                                <h4>Peter Amber</h4>
                                <span class="fs-12">Orthopedic</span>
                            </div>
                            <button type="button" class="ms-btn-icon btn-success" name="button"><i
                                    class="material-icons">check</i> </button>
                        </li>
                        <li class="ms-list-item media">
                            <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-4.jpg'); }}"
                                class="ms-img-small ms-img-round" alt="people">
                            <div class="media-body mt-1">
                                <h4>Helen Southern</h4>
                                <span class="fs-12"> Heart Surgeon</span>
                            </div>
                            <button type="button" class="ms-btn-icon btn-success" name="button"><i
                                    class="material-icons">check</i> </button>
                        </li>
                        <li class="ms-list-item media">
                            <img src="{{ URL::asset('admin/assets/img/dashboard/doctor-4.jpg'); }}"
                                class="ms-img-small ms-img-round" alt="people">
                            <div class="media-body mt-1">
                                <h4>Jordan</h4>
                                <span class="fs-12"> Heart Surgeon</span>
                            </div>
                            <button type="button" class="ms-btn-icon btn-info" name="button"><i
                                    class="material-icons">person_add</i> </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
