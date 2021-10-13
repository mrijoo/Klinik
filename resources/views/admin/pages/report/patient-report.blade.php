@extends('admin.layout.main')

@section('title', 'Patient Report')
@section('main')
<div class="ms-content-wrapper">
   <div class="row">
      <div class="col-md-12">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Report</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Patient Report</li>
               </ol>
            </nav>
      </div>
      <div class="col-xl-12 col-md-12">
            <div class="ms-panel ms-panel-fh">
               <div class="ms-panel-header">
                  <h6>Patient Report</h6>
               </div>
               <div class="ms-panel-body">
                  <div class="table-responsive">
                        <table class="table thead-primary">
                           <thead>
                              <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Admit Date</th>
                                    <th scope="col">Patient Name</th>
                                    <th scope="col">description</th>
                                    <th scope="col">Mobile No.</th>
                                    <th scope="col">Update</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                    <th scope="row">1</th>
                                    <td>12 Nov 2020</td>
                                    <td>Adwerd</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>(120)673 849</td>
                                    <td><a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i></a> <a href='#'><i
                                                class='far fa-trash-alt ms-text-danger'></i></a></td>
                              </tr>
                              <tr>
                                    <th scope="row">2</th>
                                    <td>15 Nov 2020</td>
                                    <td>Jacob</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>(176) 673 849</td>
                                    <td><a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i></a> <a href='#'><i
                                                class='far fa-trash-alt ms-text-danger'></i></a></td>
                              </tr>
                              <tr>
                                    <th scope="row">3</th>
                                    <td>02 Nov 2020</td>
                                    <td>Elly</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>(112) 673 849</td>
                                    <td><a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i></a> <a href='#'><i
                                                class='far fa-trash-alt ms-text-danger'></i></a></td>
                              </tr>
                              <tr>
                                    <th scope="row">4</th>
                                    <td>10 Nov 2020</td>
                                    <td>Nick</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>(121) 673 849</td>
                                    <td><a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i></a> <a href='#'><i
                                                class='far fa-trash-alt ms-text-danger'></i></a></td>
                              </tr>
                              <tr>
                                    <th scope="row">5</th>
                                    <td>18 Nov 2020</td>
                                    <td>Richard</td>
                                    <td>Lorem Ipsum is simply dummy text of the printing</td>
                                    <td>(111) 673 849</td>
                                    <td><a href='#'><i class='fas fa-pencil-alt ms-text-primary'></i></a> <a href='#'><i
                                                class='far fa-trash-alt ms-text-danger'></i></a></td>
                              </tr>
                              <tr>
                                    <th scope="row">6</th>
                                    <td>22 Nov 2020</td>
                                    <td>Peter</td>
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
   </div>
</div>
@endsection
