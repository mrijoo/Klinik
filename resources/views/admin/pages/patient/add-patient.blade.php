@extends('admin.layout.main')

@section('title', 'Add Patient')
@section('main')
<div class="ms-content-wrapper">
   <div class="row">
      <div class="col-md-12">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i>Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Patient</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Patient</li>
               </ol>
            </nav>
      </div>
      <div class="col-xl-12 col-md-12">
            <div class="ms-panel">
               <div class="ms-panel-header ms-panel-custome">
                  <h6>Add Patient</h6><a href="{{ url('admins/patient/patient-list'); }}" class="ms-text-primary">Patient List </a>
               </div>
               <div class="ms-panel-body">
                  <form class="needs-validation" novalidate>
                        <div class="form-row">
                           <div class="col-md-6 mb-3"><label for="validationCustom001">First Name</label>
                              <div class="input-group"><input type="text" class="form-control"
                                       id="validationCustom001" placeholder="Enter First Name" required></div>
                           </div>
                           <div class="col-md-6 mb-3"><label for="validationCustom002">Last name</label>
                              <div class="input-group"><input type="text" class="form-control"
                                       id="validationCustom002" placeholder="Enter Last Name" required></div>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="col-md-6 mb-2"><label for="validationCustom004">Create Id</label>
                              <div class="input-group"><input type="text" class="form-control"
                                       id="validationCustom004" placeholder="Id" required></div>
                           </div>
                           <div class="col-md-6 mb-2"><label for="validationCustom003">Mobile No.</label>
                              <div class="input-group"><input type="text" class="form-control"
                                       id="validationCustom003" placeholder="Mo" required></div>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="col-md-6 mb-3"><label for="validationCustom005">Email</label>
                              <div class="input-group"><input type="email" class="form-control"
                                       id="validationCustom005" placeholder="Add Email Id" required></div>
                           </div>
                           <div class="col-md-6 mb-3"><label>Blood Group</label>
                              <div class="input-group"><select class="form-control" id="validationCustom220" required>
                                       <option value="">A+</option>
                                       <option value="">A-</option>
                                       <option value="">B+</option>
                                       <option value="">B-</option>
                                       <option value="">AB+</option>
                                       <option value="">AB-</option>
                                       <option value="">O+</option>
                                       <option value="">O-</option>
                                    </select></div>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="col-md-6 mb-3"><label>Occupation</label>
                              <div class="input-group"><input type="text" class="form-control"
                                       id="validationCustom180" placeholder="Enter Occupation" required></div>
                           </div>
                           <div class="col-md-6 mb-3"><label>Marital status</label>
                              <div class="input-group"><select class="form-control" id="validationCustom230" required>
                                       <option value="">Married</option>
                                       <option value="">Unmarried</option>
                                    </select></div>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="col-md-6 mb-3"><label>Patient Image</label>
                              <div class="custom-file"><input type="file" class="custom-file-input"
                                       id="validatedCustomFile"><label class="custom-file-label"
                                       for="validatedCustomFile">Choose file...</label></div>
                           </div>
                           <div class="col-md-6 mb-3"><label>Date of Birth</label>
                              <div class="input-group"><input type="text" class="form-control"
                                       id="validationCustom190" placeholder="Date of Birth" required></div>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="col-md-6 mb-2"><label>Add Address</label>
                              <div class="input-group"><textarea class="form-control" id="exampleTextarea"
                                       rows="3"></textarea></div>
                           </div>
                           <div class="col-md-6 mb-2"><label>Patient History</label>
                              <div class="input-group"><textarea class="form-control" id="exampleTextarea1"
                                       rows="3"></textarea></div>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="col-md-6 mb-2"><label>Prefer to</label>
                              <div class="input-group"><input type="text" class="form-control"
                                       id="validationCustom200" placeholder="" required></div>
                           </div>
                           <div class="col-md-6 mb-3"><label>Sex</label>
                              <ul class="ms-list d-flex">
                                    <li class="ms-list-item pl-0"><label class="ms-checkbox-wrap"><input type="radio"
                                                name="radioExample" value=""><i
                                                class="ms-checkbox-check"></i></label><span>Male </span></li>
                                    <li class="ms-list-item"><label class="ms-checkbox-wrap"><input type="radio"
                                                name="radioExample" value="" checked=""><i
                                                class="ms-checkbox-check"></i></label><span>Female </span></li>
                              </ul>
                           </div>
                        </div><button class="btn btn-warning mt-4 d-inline w-20" type="submit">Reset</button><button
                           class="btn btn-primary mt-4 d-inline w-20" type="submit">Create Profile</button>
                  </form>
               </div>
            </div>
      </div>
   </div>
</div>
@endsection