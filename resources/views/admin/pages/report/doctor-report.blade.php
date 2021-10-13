@extends('admin.layout.main')

@section('title', 'Doctor Report')
@section('main')
<div class="ms-content-wrapper">
   <div class="row">
      <div class="col-md-12">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Report</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Doctor Report</li>
               </ol>
            </nav>
      </div>
      <div class="col-xl-12 col-md-12">
            <div class="ms-panel ms-panel-fh">
               <div class="ms-panel-header">
                  <h6>Doctor Report</h6>
               </div>
               <div class="ms-panel-body">
                  <div class="table-responsive">
                        <table class="table thead-primary">
                           <thead>
                              <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Assign Date</th>
                                    <th scope="col">Doctor Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Mobile No.</th>
                                    <th scope="col">Update</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                    <th scope="row">1</th>
                                    <td>12 Nov 2015</td>
                                    <td>Adwerd</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>(120)673 849</td>
                                    <td><a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i></a> <a href='#'><i
                                                class='far fa-trash-alt ms-text-danger'></i></a></td>
                              </tr>
                              <tr>
                                    <th scope="row">2</th>
                                    <td>15 Nov 2015</td>
                                    <td>Jacob</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>(176) 673 849</td>
                                    <td><a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i></a> <a href='#'><i
                                                class='far fa-trash-alt ms-text-danger'></i></a></td>
                              </tr>
                              <tr>
                                    <th scope="row">3</th>
                                    <td>02 Nov 2015</td>
                                    <td>Elly</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>(112) 673 849</td>
                                    <td><a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i></a> <a href='#'><i
                                                class='far fa-trash-alt ms-text-danger'></i></a></td>
                              </tr>
                              <tr>
                                    <th scope="row">4</th>
                                    <td>10 Nov 2014</td>
                                    <td>Nick</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>(121) 673 849</td>
                                    <td><a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i></a> <a href='#'><i
                                                class='far fa-trash-alt ms-text-danger'></i></a></td>
                              </tr>
                              <tr>
                                    <th scope="row">5</th>
                                    <td>18 Nov 2014</td>
                                    <td>Richard</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>(111) 673 849</td>
                                    <td><a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i></a> <a href='#'><i
                                                class='far fa-trash-alt ms-text-danger'></i></a></td>
                              </tr>
                              <tr>
                                    <th scope="row">6</th>
                                    <td>22 Nov 2014</td>
                                    <td>Marie</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>(161) 673 849</td>
                                    <td><a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i></a> <a href='#'><i
                                                class='far fa-trash-alt ms-text-danger'></i></a></td>
                              </tr>
                           </tbody>
                        </table>
                  </div>
               </div>
            </div>
      </div>
      <div class="col-xl-7 col-md-12">
            <div class="ms-panel">
               <div class="ms-panel-header">
                  <h6>Hospital Conference</h6>
               </div>
               <div class="ms-panel-body p-0">
                  <div class="table-responsive">
                        <table class="table table-hover thead-primary">
                           <thead>
                              <tr>
                                    <th scope="col">Topic</th>
                                    <th scope="col">Sessions</th>
                                    <th scope="col">Previous Period</th>
                                    <th scope="col">Change</th>
                                    <th scope="col">Growth</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                    <td>Medicine</td>
                                    <td>11</td>
                                    <td>10 Month</td>
                                    <td class="ms-text-success">+17.24%</td>
                                    <td class="ms-trend">
                                       <canvas id="trend-01"></canvas>
                                    </td>
                              </tr>
                              <tr>
                                    <td>VIP Rooms</td>
                                    <td>09</td>
                                    <td>5 Month</td>
                                    <td class="ms-text-danger">-2.33%</td>
                                    <td class="ms-trend">
                                       <canvas id="trend-02"></canvas>
                                    </td>
                              </tr>
                              <tr>
                                    <td>OPD</td>
                                    <td>20</td>
                                    <td>10 Month</td>
                                    <td class="ms-text-success">+1.97%</td>
                                    <td class="ms-trend">
                                       <canvas id="trend-03"></canvas>
                                    </td>
                              </tr>
                              <tr>
                                    <td>Doctor</td>
                                    <td>12</td>
                                    <td>2 Month</td>
                                    <td class="ms-text-success">+7.14%</td>
                                    <td class="ms-trend">
                                       <canvas id="trend-04"></canvas>
                                    </td>
                              </tr>
                              <tr>
                                    <td>General Rooms</td>
                                    <td>13</td>
                                    <td>6 Month</td>
                                    <td class="ms-text-danger">-27.45%</td>
                                    <td class="ms-trend">
                                       <canvas id="trend-05"></canvas>
                                    </td>
                              </tr>
                           </tbody>
                        </table>
                  </div>
               </div>
            </div>
            <div class="ms-panel">
               <div class="ms-panel-header header-mini">
                  <div class="d-flex justify-content-between">
                        <h6>Hospital Management</h6>
                  </div>
               </div>
               <div class="ms-panel-body">
                  <h6>OPD</h6>
                  <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25"
                           aria-valuemin="0" aria-valuemax="100">25%</div>
                  </div>
                  <h6>NEW PATIENT</h6>
                  <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50"
                           aria-valuemin="0" aria-valuemax="100">50%</div>
                  </div>
                  <h6>LABORATORY TEST</h6>
                  <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75"
                           aria-valuemin="0" aria-valuemax="100">75%</div>
                  </div>
                  <h6>TREATMENT</h6>
                  <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100"
                           aria-valuemin="0" aria-valuemax="100">100%</div>
                  </div>
                  <h6>DISCHARGE</h6>
                  <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75"
                           aria-valuemin="0" aria-valuemax="100">75%</div>
                  </div>
               </div>
            </div>
            <div class="ms-panel pb-4">
               <div class="ms-panel-header">
                  <h6>Hospital Department Head information</h6>
               </div>
               <div class="ms-panel-body p-0">
                  <div class="table-responsive">
                        <table class="table table-hover thead-primary">
                           <thead>
                              <tr>
                                    <th scope="col">Department Head Name</th>
                                    <th scope="col">Department Name</th>
                                    <th scope="col">Other Staff</th>
                                    <th scope="col">Impressions</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                    <td>Daniel</td>
                                    <td>Dental</td>
                                    <td>20</td>
                                    <td class="ms-text-success">+17.24%</td>
                              </tr>
                              <tr>
                                    <td>Jenni</td>
                                    <td>Medicine</td>
                                    <td>28</td>
                                    <td class="ms-text-danger">-12.24%</td>
                              </tr>
                              <tr>
                                    <td>Elly</td>
                                    <td>Gynaecology</td>
                                    <td>12</td>
                                    <td class="ms-text-success">+32.04%</td>
                              </tr>
                              <tr>
                                    <td>Jacob</td>
                                    <td>Cardiology</td>
                                    <td>09</td>
                                    <td class="ms-text-danger">-20.75%</td>
                              </tr>
                              <tr>
                                    <td>Richard</td>
                                    <td> V.D.</td>
                                    <td>10</td>
                                    <td class="ms-text-success">+13.38%</td>
                              </tr>
                              <tr>
                                    <td>Nick</td>
                                    <td>Infectious disease</td>
                                    <td>10</td>
                                    <td class="ms-text-success">+13.38%</td>
                              </tr>
                              <tr>
                                    <td>Jennifer</td>
                                    <td> Surgery</td>
                                    <td>10</td>
                                    <td class="ms-text-success">+13.38%</td>
                              </tr>
                              <tr>
                                    <td>Robert</td>
                                    <td>Plastic surgery</td>
                                    <td>10</td>
                                    <td class="ms-text-success">+13.38%</td>
                              </tr>
                              <tr>
                                    <td>William</td>
                                    <td> Orthopaedics</td>
                                    <td>10</td>
                                    <td class="ms-text-success">+13.38%</td>
                              </tr>
                           </tbody>
                        </table>
                  </div>
               </div>
            </div>
      </div>
      <div class="col-xl-5 col-md-12">
            <!-- Sessions by Device -->
            <div class="ms-panel ms-device-sessions">
               <div class="ms-panel-header">
                  <h6>Hospital Analytics Sessions</h6>
               </div>
               <div class="ms-panel-body">
                  <div class="row">
                        <div class="col-xl-4 col-md-4 col-sm-6 col-6 ms-device">
                           <i class="fas fa-briefcase-medical"></i>
                           <h4>Medicine</h4>
                           <p class="ms-text-primary">45.07%</p>
                           <p class="ms-text-primary">201,434</p>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6 col-6 ms-device">
                           <i class="fas fa-syringe"></i>
                           <h4>Surgery</h4>
                           <p class="ms-text-danger">29.05%</p>
                           <p class="ms-text-danger">134,693</p>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6 col-6 ms-device">
                           <i class="fas fa-tooth"></i>
                           <h4>Dentist</h4>
                           <p class="ms-text-warning">18.43%</p>
                           <p class="ms-text-warning">81,525</p>
                        </div>
                  </div>
                  <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 45.07%"
                           aria-valuenow="45.07" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 29.05%"
                           aria-valuenow="29.05" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 25.48%"
                           aria-valuenow="25.48" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
               <div class="ms-panel-footer">
                  <h6>Previous Result</h6>
                  <div class="row">
                        <div class="col-xl-4 col-md-4 col-sm-6 col-6 ms-device">
                           <h4 class="ms-text-primary">Medicine</h4>
                           <p class="ms-text-dark">45.07%</p>
                           <p>201,434</p>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6 col-6 ms-device">
                           <h4 class="ms-text-danger">Surgery</h4>
                           <p class="ms-text-dark">39.00%</p>
                           <p>134,693</p>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-6 col-6 ms-device">
                           <h4 class="ms-text-warning">Dentist</h4>
                           <p class="ms-text-dark">19.45%</p>
                           <p>81,525</p>
                        </div>
                  </div>
               </div>
            </div>
            <!-- Website Performance -->
            <div class="ms-panel">
               <div class="ms-panel-header">
                  <h6>Hospital Analytics Growth</h6>
               </div>
               <div class="ms-panel-body p-0">
                  <ul class="ms-list ms-website-performance clearfix">
                        <li class="ms-list-item">
                           <h4>VIP Rooms (Avg)</h4>
                           <div class="d-flex justify-content-between align-items-end">
                              <div class="website-performance-canvas">
                                    <canvas id="bounce-rate"></canvas>
                              </div>
                              <div class="website-performance-meta">
                                    <p class="ms-text-dark">45.07%</p>
                                    <p class="ms-text-success">+28.44%</p>
                                    <p>VS 66.68% (Prev)</p>
                              </div>
                           </div>
                        </li>
                        <li class="ms-list-item">
                           <h4>General Rooms (Avg)</h4>
                           <div class="d-flex justify-content-between align-items-end">
                              <div class="website-performance-canvas">
                                    <canvas id="page-views"></canvas>
                              </div>
                              <div class="website-performance-meta">
                                    <p class="ms-text-dark">4.30%</p>
                                    <p class="ms-text-danger">-28.44%</p>
                                    <p>VS 1.90% (Prev)</p>
                              </div>
                           </div>
                        </li>
                        <li class="ms-list-item">
                           <h4>Doctors</h4>
                           <div class="d-flex justify-content-between align-items-end">
                              <div class="website-performance-canvas">
                                    <canvas id="new-sessions"></canvas>
                              </div>
                              <div class="website-performance-meta">
                                    <p class="ms-text-dark">5.75%</p>
                                    <p class="ms-text-danger">-2.41%</p>
                                    <p>VS 8.75% (Prev)</p>
                              </div>
                           </div>
                        </li>
                        <li class="ms-list-item">
                           <h4>Nurses (Avg)</h4>
                           <div class="d-flex justify-content-between align-items-end">
                              <div class="website-performance-canvas">
                                    <canvas id="time-site"></canvas>
                              </div>
                              <div class="website-performance-meta">
                                    <p class="ms-text-dark">8m:55s</p>
                                    <p class="ms-text-success">+50.07%</p>
                                    <p>VS 66.88% (Prev)</p>
                              </div>
                           </div>
                        </li>
                        <li class="ms-list-item">
                           <h4>Patient Facilities (Avg)</h4>
                           <div class="d-flex justify-content-between align-items-end">
                              <div class="website-performance-canvas">
                                    <canvas id="site-impressions"></canvas>
                              </div>
                              <div class="website-performance-meta">
                                    <p class="ms-text-dark">17.03%</p>
                                    <p class="ms-text-success">+15.03%</p>
                                    <p>VS 12.09% (Prev)</p>
                              </div>
                           </div>
                        </li>
                  </ul>
               </div>
            </div>
      </div>
   </div>
</div>
@endsection
