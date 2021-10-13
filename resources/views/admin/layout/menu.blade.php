<aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
        {{-- <a class="pl-0 ml-0 text-center" href=""> <img
                src="" alt="logo"> </a> --}}

        <br>
        <a href="#" class="text-center ms-logo-img-link"> <img
                src="https://d1ojs48v3n42tp.cloudfront.net/specialities/9d323b3a-2466-4a51-9d24-96a21b97670b.png?type=mobile" alt="logo"></a>
        <h5 class="text-center text-white mt-2">Dr. Ngesti</h5>
        <h6 class="text-center text-white mb-3">Admin</h6>
    </div>
    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
        <!-- Dashboard -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false"
                aria-controls="dashboard">
                <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
            </a>
            <ul id="dashboard" class="{{ $menu === "dashboard" ? "collapse show" : "collapse" }}" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
                <li> <a href="{{ url('admins') }}" class="{{ $menu === "dashboard" ? "active" : "" }}">Dashboard</a> </li>
                <li> <a href="{{ url('') }}">Medilab</a> </li>
            </ul>
        </li>
        <!-- /Dashboard -->
        <!-- Doctor -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#doctor" aria-expanded="false"
                aria-controls="doctor">
                <span><i class="fas fa-stethoscope"></i>Doctor</span>
            </a>
            <ul id="doctor" class="collapse" aria-labelledby="doctor" data-parent="#side-nav-accordion">
                <li> <a href="{{ url('admins/doctor/add-doctor') }}">Add Doctor</a> </li>
                <li> <a href="{{ url('admins/doctor/doctor-list') }}">Doctor List</a> </li>
            </ul>
        </li>
        <!-- Doctor -->
        <!-- Patient -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#patient" aria-expanded="false"
                aria-controls="patient">
                <span><i class="fas fa-user"></i>Patient</span>
            </a>
            <ul id="patient" class="collapse" aria-labelledby="patient" data-parent="#side-nav-accordion">
                <li> <a href="{{ url('admins/patient/add-patient') }}">Add Patient</a> </li>
                <li> <a href="{{ url('admins/patient/patient-list') }}">Patient List</a> </li>
            </ul>
        </li>
        <!-- /Patient -->
        <!-- Department -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#department" aria-expanded="false"
                aria-controls="department">
                <span><i class="fas fa-sitemap"></i>Department</span>
            </a>
            <ul id="department" class="collapse" aria-labelledby="department" data-parent="#side-nav-accordion">
                <li> <a href="{{ url('admins/department/add-department') }}">Add Department</a> </li>
                <li> <a href="{{ url('admins/department/department-list') }}">Department List</a>
                </li>
            </ul>
        </li>
        <!-- /Department -->
        <!-- Schedule -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#schedule" aria-expanded="false"
                aria-controls="schedule">
                <span><i class="fas fa-list-alt"></i>Doctor Schedule</span>
            </a>
            <ul id="schedule" class="collapse" aria-labelledby="schedule" data-parent="#side-nav-accordion">
                <li> <a href="{{ url('admins/doctor-schedule/add-schedule') }}">Add Schedule</a> </li>
                <li> <a href="{{ url('admins/doctor-schedule/schedule-list') }}">Schedule List</a>
                </li>
            </ul>
        </li>
        <!-- /Schedule -->
        <!-- Appointment -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#appointment" aria-expanded="false"
                aria-controls="appointment">
                <span><i class="far fa-check-square"></i>Appointment</span>
            </a>
            <ul id="appointment" class="collapse" aria-labelledby="appointment" data-parent="#side-nav-accordion">
                <li> <a href="{{ url('admins/appointment/add-appointment') }}">Add Appointment</a>
                </li>
                <li> <a href="{{ url('admins/appointment/appointment-list') }}">Appointment List</a>
                </li>
            </ul>
        </li>
        <!-- /Appointment -->
        <!-- Payment -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#payment" aria-expanded="false"
                aria-controls="payment">
                <span><i class="fas fa-credit-card"></i>Payment</span>
            </a>
            <ul id="payment" class="collapse" aria-labelledby="payment" data-parent="#side-nav-accordion">
                <li> <a href="{{ url('admins/payment/add-payment') }}">Add Payment</a> </li>
                <li> <a href="{{ url('admins/payment/payment-list') }}">Payment List</a> </li>
                <li> <a href="{{ url('admins/payment/payment-invoice') }}">Payment Invoice</a> </li>
            </ul>
        </li>
        <!-- /Payment -->
        <!-- Report -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#report" aria-expanded="false"
                aria-controls="report">
                <span><i class="fas fa-file-alt"></i>Report</span>
            </a>
            <ul id="report" class="collapse" aria-labelledby="report" data-parent="#side-nav-accordion">
                <li> <a href="{{ url('admins/report/patient-report') }}">Patient Wise Report</a> </li>
                <li> <a href="{{ url('admins/report/doctor-report') }}">Doctor Wise Report</a> </li>
                <li> <a href="{{ url('admins/report/total-report') }}">Total Report</a> </li>
            </ul>
        </li>
        <!-- /Report -->
        <!-- Human Resource -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#human-resource" aria-expanded="false"
                aria-controls="human-resource">
                <span><i class="far fa-user-circle"></i>Human Resource</span>
            </a>
            <ul id="human-resource" class="collapse" aria-labelledby="human-resource" data-parent="#side-nav-accordion">
                <li> <a href="{{ url('admins/human-resource/add-employee') }}">Add Employee</a> </li>
                <li> <a href="{{ url('admins/human-resource/employee-list') }}">Employee List</a>
                </li>
                <li> <a href="{{ url('admins/human-resource/add-nurse') }}">Add Nurse</a> </li>
                <li> <a href="{{ url('admins/human-resource/nurse-list') }}">Nurse List</a> </li>
                <li> <a href="{{ url('admins/human-resource/add-pharmacist') }}">Add Pharmacist</a>
                </li>
                <li> <a href="{{ url('admins/human-resource/pharmacist-list') }}">Pharmacist List</a>
                </li>
                <li> <a href="{{ url('admins/human-resource/add-representative') }}">Add
                        Representative</a> </li>
                <li> <a href="{{ url('admins/human-resource/representative-list') }}">Representative
                        List</a> </li>
            </ul>
        </li>
        <!-- /Human Resource -->
        <!-- Bed -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#bed" aria-expanded="false"
                aria-controls="bed">
                <span><i class="fas fa-bed"></i>Bed Manager</span>
            </a>
            <ul id="bed" class="collapse" aria-labelledby="bed" data-parent="#side-nav-accordion">
                <li> <a href="{{ url('admins/bed-manager/add-bed') }}">Add Bed</a> </li>
                <li> <a href="{{ url('admins/bed-manager/bed-list') }}">Bed List</a> </li>
            </ul>
        </li>
        <!-- /Bed-->
        <!-- Notice -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#notice" aria-expanded="false"
                aria-controls="notice">
                <span><i class="far fa-file-alt"></i>Notice</span>
            </a>
            <ul id="notice" class="collapse" aria-labelledby="notice" data-parent="#side-nav-accordion">
                <li> <a href="{{ url('admins/notice/add-notice') }}">Add Notice</a> </li>
                <li> <a href="{{ url('admins/notice/notice-list') }}">Notice List</a> </li>
            </ul>
        </li>
        {{-- <!-- /Notice -->
        <li class="menu-item">
            <a href="{{ url('admins/widgets') }}">
                <span><i class="material-icons fs-16">widgets</i>Widgets</span>
            </a>
        </li>
        <!-- Basic UI Elements -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#basic-elements" aria-expanded="false"
                aria-controls="basic-elements">
                <span><i class="material-icons fs-16">filter_list</i>Basic UI Elements</span>
            </a>
            <ul id="basic-elements" class="collapse" aria-labelledby="basic-elements" data-parent="#side-nav-accordion">
                <li> <a href="{{ url('admins/ui-basic/accordions') }}">Accordions</a> </li>
                <li> <a href="{{ url('admins/ui-basic/alerts') }}">Alerts</a> </li>
                <li> <a href="{{ url('admins/ui-basic/buttons') }}">Buttons</a> </li>
                <li> <a href="{{ url('admins/ui-basic/breadcrumbs') }}">Breadcrumbs</a> </li>
                <li> <a href="{{ url('admins/ui-basic/badges') }}">Badges</a> </li>
                <li> <a href="{{ url('admins/ui-basic/cards') }}">Cards</a> </li>
                <li> <a href="{{ url('admins/ui-basic/progress-bars') }}">Progress Bars</a> </li>
                <li> <a href="{{ url('admins/ui-basic/preloaders') }}">Pre-loaders</a> </li>
                <li> <a href="{{ url('admins/ui-basic/pagination') }}">Pagination</a> </li>
                <li> <a href="{{ url('admins/ui-basic/tabs') }}">Tabs</a> </li>
                <li> <a href="{{ url('admins/ui-basic/typography') }}">Typography</a> </li>
            </ul>
        </li>
        <!-- /Basic UI Elements -->
        <!-- Advanced UI Elements -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#advanced-elements"
                aria-expanded="false" aria-controls="advanced-elements">
                <span><i class="material-icons fs-16">code</i>Advanced UI Elements</span>
            </a>
            <ul id="advanced-elements" class="collapse" aria-labelledby="advanced-elements"
                data-parent="#side-nav-accordion">
                <li> <a href="{{ url('admins/ui-advanced/draggables') }}">Draggables</a> </li>
                <li> <a href="{{ url('admins/ui-advanced/sliders') }}">Sliders</a> </li>
                <li> <a href="{{ url('admins/ui-advanced/modals') }}">Modals</a> </li>
                <li> <a href="{{ url('admins/ui-advanced/rating') }}">Rating</a> </li>
                <li> <a href="{{ url('admins/ui-advanced/tour') }}">Tour</a> </li>
                <li> <a href="{{ url('admins/ui-advanced/cropper') }}">Cropper</a> </li>
                <li> <a href="{{ url('admins/ui-advanced/range-slider') }}">Range Slider</a> </li>
            </ul>
        </li>
        <!-- /Advanced UI Elements -->
        <li class="menu-item">
            <a href="{{ url('admins/animation') }}">
                <span><i class="material-icons fs-16">format_paint</i>Animations</span>
            </a>
        </li>
        <!-- Form Elements -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#form-elements" aria-expanded="false"
                aria-controls="form-elements">
                <span><i class="material-icons fs-16">input</i>Form Elements</span>
            </a>
            <ul id="form-elements" class="collapse" aria-labelledby="form-elements" data-parent="#side-nav-accordion">
                <li> <a href="{{ url('admins/form/form-elements') }}">Form Elements</a> </li>
                <li> <a href="{{ url('admins/form/form-layout') }}">Form Layouts</a> </li>
                <li> <a href="{{ url('admins/form/form-validation') }}">Form Validation</a> </li>
                <li> <a href="{{ url('admins/form/form-wizard') }}">Form Wizard</a> </li>
            </ul>
        </li>
        <!-- /Form Elements -->
        <!-- Charts -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#charts" aria-expanded="false"
                aria-controls="charts">
                <span><i class="material-icons fs-16">equalizer</i>Charts</span>
            </a>
            <ul id="charts" class="collapse" aria-labelledby="charts" data-parent="#side-nav-accordion">
                <li> <a href="{{ url('admins/charts/chartjs') }}">Chart JS</a> </li>
                <li> <a href="{{ url('admins/charts/morris-charts') }}">Morris Chart</a> </li>
            </ul>
        </li>
        <!-- /Charts -->
        <!-- Tables -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#tables" aria-expanded="false"
                aria-controls="tables">
                <span><i class="material-icons fs-16">tune</i>Tables</span>
            </a>
            <ul id="tables" class="collapse" aria-labelledby="tables" data-parent="#side-nav-accordion">
                <li> <a href="{{ url('admins/tables/basic-tables') }}">Basic Tables</a> </li>
                <li> <a href="{{ url('admins/tables/data-tables') }}">Data tables</a> </li>
            </ul>
        </li>
        <!-- /Tables -->
        <!-- Popups -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#popups" aria-expanded="false"
                aria-controls="popups">
                <span><i class="material-icons fs-16">message</i>Popups</span>
            </a>
            <ul id="popups" class="collapse" aria-labelledby="popups" data-parent="#side-nav-accordion">
                <li> <a href="{{ url('admins/popups/sweet-alerts') }}">Sweet Alerts</a> </li>
                <li> <a href="{{ url('admins/popups/toast') }}">Toast</a> </li>
            </ul>
        </li>
        <!-- /Popups -->
        <!-- Icons -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#icons" aria-expanded="false"
                aria-controls="icons">
                <span><i class="material-icons fs-16">border_color</i>Icons</span>
            </a>
            <ul id="icons" class="collapse" aria-labelledby="icons" data-parent="#side-nav-accordion">
                <li> <a href="{{ url('admins/icons/fontawesome') }}">Fontawesome</a> </li>
                <li> <a href="{{ url('admins/icons/flaticons') }}">Flaticons</a> </li>
                <li> <a href="{{ url('admins/icons/materialize') }}">Materialize</a> </li>
            </ul>
        </li>
        <!-- /Icons -->
        <!-- Maps -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#maps" aria-expanded="false"
                aria-controls="maps">
                <span><i class="material-icons fs-16">map</i>Maps</span>
            </a>
            <ul id="maps" class="collapse" aria-labelledby="maps" data-parent="#side-nav-accordion">
                <li> <a href="{{ url('admins/maps/google-maps') }}">Google Maps</a> </li>
                <li> <a href="{{ url('admins/maps/vector-maps') }}">Vector Maps</a> </li>
            </ul>
        </li>
        <!-- /Maps -->
        <!-- admin/pages -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#admin/pages" aria-expanded="false"
                aria-controls="admin/pages">
                <span><i class="material-icons fs-16">insert_drive_file</i>admin/pages</span>
            </a>
            <ul id="admin/pages" class="collapse" aria-labelledby="admin/pages" data-parent="#side-nav-accordion">
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#authentication"
                        aria-expanded="false" aria-controls="authentication">Authentication</a>
                    <ul id="authentication" class="collapse" aria-labelledby="authentication"
                        data-parent="#admin/pages">
                        <li> <a href="{{ url('admins/prebuilt-admin/pages/default-login') }}">Default
                                Login</a> </li>
                        <li> <a href="{{ url('admins/prebuilt-admin/pages/modal-login') }}">Modal
                                Login</a> </li>
                        <li> <a href="{{ url('admins/prebuilt-admin/pages/default-register') }}">Default
                                Registration</a> </li>
                        <li> <a href="{{ url('admins/prebuilt-admin/pages/modal-register') }}">Modal
                                Registration</a> </li>
                        <li> <a href="{{ url('admins/prebuilt-admin/pages/lock-screen') }}">Lock
                                Screen</a> </li>
                    </ul>
                </li>
                <li> <a href="{{ url('admins/prebuilt-admin/pages/coming-soon') }}">Coming Soon</a>
                </li>
                <li> <a href="{{ url('admins/prebuilt-admin/pages/error') }}">Error Page</a> </li>
                <li class="menu-item"> <a href="{{ url('admins/prebuilt-admin/pages/faq') }}"> FAQ
                    </a> </li>
                <li class="menu-item"> <a href="{{ url('admins/prebuilt-admin/pages/portfolio') }}">
                        Portfolio </a> </li>
                <li class="menu-item"> <a
                        href="{{ url('admins/prebuilt-admin/pages/user-profile') }}"> User Profile
                    </a> </li>
                <li class="menu-item"> <a href="{{ url('admins/prebuilt-admin/pages/invoice') }}">
                        Invoice </a> </li>
            </ul>
        </li>
        <!-- /admin/pages -->
        <!-- Bonus admin/pages -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#bonus" aria-expanded="false">
                <span><i class="material-icons fs-16">dashboard</i>Bonus admin/pages </span>
            </a>
            <ul id="bonus" class="collapse" data-parent="#side-nav-accordion">
                <li> <a href="{{ url('admins/dashboard/web-analytics') }}"> Web Analytics </a> </li>
                <li> <a href="{{ url('admins/dashboard/social-media') }}">Social Media Management</a>
                </li>
                <li> <a href="{{ url('admins/dashboard/project-management') }}">Department
                        Management</a> </li>
                <li> <a href="{{ url('admins/dashboard/client-management') }}">Patient Management</a>
                </li>
            </ul>
        </li>
        <!-- /Bonus admin/pages --> --}}
        <!-- Apps -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#apps" aria-expanded="false"
                aria-controls="apps">
                <span><i class="material-icons fs-16">phone_iphone</i>Apps</span>
            </a>
            <ul id="apps" class="collapse" aria-labelledby="apps" data-parent="#side-nav-accordion">
                <li> <a href="{{ url('admins/apps/chat') }}">Chat</a> </li>
                <li> <a href="{{ url('admins/apps/email') }}">Email</a> </li>
                <li> <a href="{{ url('admins/apps/to-do-list') }}">To-do List</a> </li>
            </ul>
        </li>
        <!-- /Apps -->
    </ul>
</aside>
