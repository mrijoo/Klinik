<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Medilab - @yield('title')</title>
    <!-- Iconic Fonts -->
    <link href="{{ URL::asset('admin/assets/css/icone91f.css'); }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/vendors/iconic-fonts/font-awesome/css/all.min.css'); }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('admin/vendors/iconic-fonts/flat-icons/flaticon.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/vendors/iconic-fonts/cryptocoins/cryptocoins.css'); }}">
    <link rel="stylesheet" href="{{ URL::asset('admin/vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css'); }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('admin/assets/css/bootstrap.min.css'); }}" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="{{ URL::asset('admin/assets/css/jquery-ui.min.css'); }}" rel="stylesheet">
    <!-- Page Specific CSS (Slick Slider.css) -->
    <link href="{{ URL::asset('admin/assets/css/slick.css'); }}" rel="stylesheet">
    <!-- Medilab styles -->
    <link href="{{ URL::asset('admin/assets/css/style.css'); }}" rel="stylesheet">

    <!-- Page Specific CSS (Morris Charts.css) -->
    <link href="{{ URL::asset('admin/assets/css/morris.css'); }}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
    <!-- Setting Panel -->
    <div class="ms-toggler ms-settings-toggle ms-d-block-lg">
        <i class="flaticon-gear"></i>
    </div>
    <div class="ms-settings-panel ms-d-block-lg">
        <div class="row">
            <div class="col-xl-4 col-md-4">
                <h4 class="section-title">Customize</h4>
                <div>
                    <label class="ms-switch">
                        <input type="checkbox" id="dark-mode">
                        <span class="ms-switch-slider round"></span>
                    </label>
                    <span> Dark Mode </span>
                </div>

            </div>
            <div class="col-xl-4 col-md-4">
                <h4 class="section-title">Keyboard Shortcuts</h4>
                <p class="ms-directions mb-0"><code>Esc</code> Close Quick Bar</p>
                <p class="ms-directions mb-0"><code>Alt + (1 -> 6)</code> Open Quick Bar Tab</p>
                <p class="ms-directions mb-0"><code>Alt + Q</code> Enable Quick Bar Configure Mode</p>
            </div>
        </div>
    </div>
    <!-- Preloader -->
    <div id="preloader-wrap">
        <div class="spinner spinner-8">
            <div class="ms-circle1 ms-child"></div>
            <div class="ms-circle2 ms-child"></div>
            <div class="ms-circle3 ms-child"></div>
            <div class="ms-circle4 ms-child"></div>
            <div class="ms-circle5 ms-child"></div>
            <div class="ms-circle6 ms-child"></div>
            <div class="ms-circle7 ms-child"></div>
            <div class="ms-circle8 ms-child"></div>
            <div class="ms-circle9 ms-child"></div>
            <div class="ms-circle10 ms-child"></div>
            <div class="ms-circle11 ms-child"></div>
            <div class="ms-circle12 ms-child"></div>
        </div>
    </div>
    <!-- Overlays -->
    <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
    <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity"
        data-toggle="slideRight"></div>
    <!-- Sidebar Navigation Left -->
    @include('admin.layout.menu')
    <!-- Sidebar Right -->
    <aside id="ms-recent-activity" class="side-nav fixed ms-aside-right ms-scrollable">
        <div class="ms-aside-header">
            <ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-3" role="tablist">
                <li role="presentation" class="fs-12"><a href="#activityLog" aria-controls="activityLog" class="active"
                        role="tab" data-toggle="tab"> Activity Log</a></li>
                <li role="presentation" class="fs-12"><a href="#recentPosts" aria-controls="recentPosts" role="tab"
                        data-toggle="tab"> Settings </a></li>
                <li><button type="button" class="close ms-toggler text-center" data-target="#ms-recent-activity"
                        data-toggle="slideRight"><span aria-hidden="true">&times;</span></button></li>
            </ul>
        </div>
        <div class="ms-aside-body">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active fade show" id="activityLog">
                    <ul class="ms-activity-log">
                        <li>
                            <div class="ms-btn-icon btn-pill icon btn-light">
                                <i class="flaticon-gear"></i>
                            </div>
                            <h6>Update 1.0.0 Pushed</h6>
                            <span> <i class="material-icons">event</i>1 January, 2020</span>
                            <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                        </li>
                        <li>
                            <div class="ms-btn-icon btn-pill icon btn-success">
                                <i class="flaticon-tick-inside-circle"></i>
                            </div>
                            <h6>Profile Updated</h6>
                            <span> <i class="material-icons">event</i>4 March, 2018</span>
                            <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam
                                pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                        </li>
                        <li>
                            <div class="ms-btn-icon btn-pill icon btn-warning">
                                <i class="flaticon-alert-1"></i>
                            </div>
                            <h6>Your payment is due</h6>
                            <span> <i class="material-icons">event</i>1 January, 2020</span>
                            <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                        </li>
                        <li>
                            <div class="ms-btn-icon btn-pill icon btn-danger">
                                <i class="flaticon-alert"></i>
                            </div>
                            <h6>Database Error</h6>
                            <span> <i class="material-icons">event</i>4 March, 2018</span>
                            <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam
                                pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                        </li>
                        <li>
                            <div class="ms-btn-icon btn-pill icon btn-info">
                                <i class="flaticon-information"></i>
                            </div>
                            <h6>Checkout what's Trending</h6>
                            <span> <i class="material-icons">event</i>1 January, 2020</span>
                            <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                                scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                        </li>
                        <li>
                            <div class="ms-btn-icon btn-pill icon btn-secondary">
                                <i class="flaticon-diamond"></i>
                            </div>
                            <h6>Your Dashboard is ready</h6>
                            <span> <i class="material-icons">event</i>4 March, 2018</span>
                            <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam
                                pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-primary d-block"> View All </a>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="recentPosts">
                    <h6>General Settings</h6>
                    <div class="ms-form-group">
                        <span class="ms-option-name fs-14">Location Tracking</span>
                        <label class="ms-switch float-right">
                            <input type="checkbox">
                            <span class="ms-switch-slider round"></span>
                        </label>
                    </div>
                    <div class="ms-form-group">
                        <span class="ms-option-name fs-14">Allow Notifications</span>
                        <label class="ms-switch float-right">
                            <input type="checkbox">
                            <span class="ms-switch-slider round"></span>
                        </label>
                    </div>
                    <div class="ms-form-group">
                        <span class="ms-option-name fs-14">Allow Popups</span>
                        <label class="ms-switch float-right">
                            <input type="checkbox" checked>
                            <span class="ms-switch-slider round"></span>
                        </label>
                    </div>
                    <h6>Log Settings</h6>
                    <div class="ms-form-group">
                        <span class="ms-option-name fs-14">Enable Logging</span>
                        <label class="ms-switch float-right">
                            <input type="checkbox" checked>
                            <span class="ms-switch-slider round"></span>
                        </label>
                    </div>
                    <div class="ms-form-group">
                        <span class="ms-option-name fs-14">Audit Logs</span>
                        <label class="ms-switch float-right">
                            <input type="checkbox">
                            <span class="ms-switch-slider round"></span>
                        </label>
                    </div>
                    <div class="ms-form-group">
                        <span class="ms-option-name fs-14">Error Logs</span>
                        <label class="ms-switch float-right">
                            <input type="checkbox" checked>
                            <span class="ms-switch-slider round"></span>
                        </label>
                    </div>
                    <h6>Advanced Settings</h6>
                    <div class="ms-form-group">
                        <span class="ms-option-name fs-14">Enable Logging</span>
                        <label class="ms-switch float-right">
                            <input type="checkbox" checked>
                            <span class="ms-switch-slider round"></span>
                        </label>
                    </div>
                    <div class="ms-form-group">
                        <span class="ms-option-name fs-14">Audit Logs</span>
                        <label class="ms-switch float-right">
                            <input type="checkbox">
                            <span class="ms-switch-slider round"></span>
                        </label>
                    </div>
                    <div class="ms-form-group">
                        <span class="ms-option-name fs-14">Error Logs</span>
                        <label class="ms-switch float-right">
                            <input type="checkbox" checked>
                            <span class="ms-switch-slider round"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!-- Main Content -->
    <main class="body-content">
        <!-- Navigation Bar -->
        @include('admin.layout.header')
        <!-- Body Content Wrapper -->
        @yield('main')
    </main>
    <!-- MODALS -->
    <!-- Reminder Modal -->
    <div class="modal fade" id="reminder-modal" tabindex="-1" role="dialog" aria-labelledby="reminder-modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-secondary">
                    <h5 class="modal-title has-icon text-white"> New Reminder</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="ms-form-group">
                            <label>Remind me about</label>
                            <textarea class="form-control" name="reminder"></textarea>
                        </div>
                        <div class="ms-form-group">
                            <span class="ms-option-name fs-14">Repeat Daily</span>
                            <label class="ms-switch float-right">
                                <input type="checkbox">
                                <span class="ms-switch-slider round"></span>
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="ms-form-group">
                                    <input type="text" class="form-control datepicker" name="reminder-date" value="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ms-form-group">
                                    <select class="form-control" name="reminder-time">
                                        <option value="">12:00 pm</option>
                                        <option value="">1:00 pm</option>
                                        <option value="">2:00 pm</option>
                                        <option value="">3:00 pm</option>
                                        <option value="">4:00 pm</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add
                            Reminder</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Notes Modal -->
    <div class="modal fade" id="notes-modal" tabindex="-1" role="dialog" aria-labelledby="notes-modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-secondary">
                    <h5 class="modal-title has-icon text-white" id="NoteModal">New Note</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="ms-form-group">
                            <label>Note Title</label>
                            <input type="text" class="form-control" name="note-title" value="">
                        </div>
                        <div class="ms-form-group">
                            <label>Note Description</label>
                            <textarea class="form-control" name="note-description"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add
                            Note</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog ms-modal-dialog-width">
            <div class="modal-content ms-modal-content-width">
                <div class="modal-header  ms-modal-header-radius-0">
                    <h4 class="modal-title text-white">Make An Appointment</h4>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">x</button>

                </div>
                <div class="modal-body p-0 text-left">
                    <div class="col-xl-12 col-md-12">
                        <div class="ms-panel ms-panel-bshadow-none">
                            <div class="ms-panel-header">
                                <h6>Patient Information</h6>
                            </div>
                            <div class="ms-panel-body">
                                <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom01">Patient Name</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom01"
                                                    placeholder="Enter Name" required>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom02">Date Of Birth</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="validationCustom02"
                                                    required>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom03">Disease</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom03"
                                                    placeholder="Disease" required>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-2">
                                            <label for="validationCustom04">Address</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom04"
                                                    placeholder="Add Address" required>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom05">Phone no.</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom05"
                                                    placeholder="Enter Phone No." required>

                                            </div>

                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom06">Department Name</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom06"
                                                    placeholder="Enter Department Name" required>

                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom07">Appointment With</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom07"
                                                    placeholder="Enter Doctor Name" required>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom08">Appointment Date</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom08"
                                                    placeholder="Enter Appointment Date" required>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
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
                                    <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Add
                                        Appointment</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="prescription" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog ms-modal-dialog-width">
            <div class="modal-content ms-modal-content-width">
                <div class="modal-header  ms-modal-header-radius-0">
                    <h4 class="modal-title text-white">Make a prescription</h4>
                    <button type="button" class="close  text-white" data-dismiss="modal" aria-hidden="true">x</button>

                </div>
                <div class="modal-body p-0 text-left">
                    <div class="col-xl-12 col-md-12">
                        <div class="ms-panel ms-panel-bshadow-none">
                            <div class="ms-panel-header">
                                <h6>Patient Information</h6>
                            </div>
                            <div class="ms-panel-body">
                                <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom09">Patient Name</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom09"
                                                    placeholder="Enter Name" required>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom10">Date Of Birth</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="validationCustom10"
                                                    required>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="validationCustom11">Address</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom11"
                                                    placeholder="Add Address" required>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom12">Phone no.</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom12"
                                                    placeholder="Enter Phone No." required>

                                            </div>

                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom13">Medication</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom13"
                                                    placeholder="Acetaminophen" required>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom14">Period Of medication</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="validationCustom14"
                                                    placeholder="" required>

                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-row">

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom15">Appointment With</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom15"
                                                    placeholder="Enter Doctor Name" required>

                                            </div>
                                        </div>

                                    </div>
                                    <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Save
                                        Prescription</button>
                                    <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Save &
                                        Print</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="report1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog ms-modal-dialog-width">
            <div class="modal-content ms-modal-content-width">
                <div class="modal-header  ms-modal-header-radius-0">
                    <h4 class="modal-title text-white">Generate report</h4>
                    <button type="button" class="close  text-white" data-dismiss="modal" aria-hidden="true">x</button>

                </div>
                <div class="modal-body p-0 text-left">
                    <div class="col-xl-12 col-md-12">
                        <div class="ms-panel ms-panel-bshadow-none">
                            <div class="ms-panel-header">
                                <h6>Patient Information</h6>
                            </div>
                            <div class="ms-panel-body">
                                <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom16">Patient Name</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom16"
                                                    placeholder="Enter Name" required>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom17">Date Of Birth</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="validationCustom17"
                                                    required>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="validationCustom22">Address</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom22"
                                                    placeholder="Add Address" required>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom18">Phone no.</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom18"
                                                    placeholder="Enter Phone No." required>

                                            </div>

                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom19">Report Type</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom19"
                                                    placeholder="Diseases Report" required>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom23">Report Period</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="validationCustom23"
                                                    placeholder="" required>

                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-row">

                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom20">Appointment With</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom20"
                                                    placeholder="Enter Doctor Name" required>

                                            </div>
                                        </div>

                                    </div>
                                    <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Generate
                                        Report</button>
                                    <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Generate &
                                        Print</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <!-- Global Required Scripts Start -->
    <script src="{{ URL::asset('admin/assets/js/jquery-3.3.1.min.js'); }}"></script>
    <script src="{{ URL::asset('admin/assets/js/popper.min.js'); }}"></script>
    <script src="{{ URL::asset('admin/assets/js/bootstrap.min.js'); }}"></script>
    <script src="{{ URL::asset('admin/assets/js/perfect-scrollbar.js'); }}"> </script>
    <script src="{{ URL::asset('admin/assets/js/jquery-ui.min.js'); }}"> </script>

    <!-- Global Required Scripts End -->
    <script src="{{ URL::asset('admin/assets/js/d3.v3.min.js'); }}"> </script>
    <script src="{{ URL::asset('admin/assets/js/topojson.v1.min.js'); }}"> </script>
    <script src="{{ URL::asset('admin/assets/js/datamaps.all.min.js'); }}"> </script>


    <!-- Page Specific Scripts Start -->
    <script src="{{ URL::asset('admin/assets/js/slick.min.js'); }}"> </script>
    <script src="{{ URL::asset('admin/assets/js/moment.js'); }}"> </script>
    <script src="{{ URL::asset('admin/assets/js/jquery.webticker.min.js'); }}"> </script>
    <script src="{{ URL::asset('admin/assets/js/Chart.bundle.min.js'); }}"> </script>
    <script src="{{ URL::asset('admin/assets/js/index-chart.js'); }}"> </script>

    <!-- Page Specific Scripts Finish -->
    <script src="{{ URL::asset('admin/assets/js/calendar.js'); }}"></script>
    <!-- Medilab core JavaScript -->
    <script src="{{ URL::asset('admin/assets/js/framework.js'); }}"></script>
    <!-- Settings -->
    <script src="{{ URL::asset('admin/assets/js/settings.js'); }}"></script>
</body>

</html>
