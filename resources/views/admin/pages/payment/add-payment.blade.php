@extends('admin.layout.main')

@section('title', 'Add Payment')
@section('main')
<div class="ms-content-wrapper">
   <div class="row">
      <div class="col-md-12">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Payment</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add payment</li>
               </ol>
            </nav>
      </div>
      <div class="col-xl-12 col-md-12">
            <div class="ms-panel">
               <div class="ms-panel-header ms-panel-custome">
                  <h6>Add Payment</h6>
                  <a href="{{ url('admins/payment/payment-list'); }}" class="ms-text-primary">Payment List</a>
               </div>
               <div class="ms-panel-body">
                  <form class="needs-validation" novalidate>
                        <div class="form-row">
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom001">Patient Name</label>
                              <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom001"
                                       placeholder="Enter Patient Name" required>

                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom002">Account Name</label>
                              <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom002"
                                       placeholder="Enter Account Name" required>

                              </div>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="col-md-6 mb-2">
                              <label for="validationCustom004">Payment Date</label>
                              <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom004"
                                       placeholder="Date of Payment" required>

                              </div>
                           </div>
                           <div class="col-md-6 mb-2">
                              <label for="validationCustom005">Total Amount</label>
                              <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom005"
                                       placeholder="Enter Total Amount" required>

                              </div>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom220">Payment Mode</label>
                              <div class="input-group">
                                    <select class="form-control" id="validationCustom220" required>
                                       <option value="">Debit Card</option>
                                       <option value="">Credit Card</option>
                                    </select>

                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom230">Payment Status</label>
                              <div class="input-group">
                                    <select class="form-control" id="validationCustom230" required>
                                       <option value="">Complete</option>
                                       <option value="">Pending</option>
                                    </select>

                              </div>
                           </div>
                        </div>
                        <div class="form-row">
                           <div class="col-md-12 mb-2">
                              <label>Description</label>
                              <div class="input-group">
                                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>

                              </div>
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
