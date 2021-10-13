@extends('admin.layout.main')

@section('title', 'Payment Invoice')
@section('main')
<div class="ms-content-wrapper">
   <div class="row">
      <div class="col-md-12">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Payment</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Payment-Invoice</li>
               </ol>
            </nav>
            <div class="ms-panel">
               <div class="ms-panel-header header-mini">
                  <div class="d-flex justify-content-between">
                        <h6>Invoice</h6>
                        <h6>#135178</h6>
                  </div>
               </div>
               <div class="ms-panel-body">
                  <!-- Invoice To -->
                  <div class="row align-items-center">
                        <div class="col-md-6">
                           <div class="invoice-address">
                              <h3>Reciever: </h3>
                              <h5>Hospital Memo</h5>
                              <p>Anny.123@hotmail.com</p>
                              <p class="mb-0">1642 Cambridge Drive, Phoenix, 85029 Arizona</p>
                              <p class="mb-0">Arizona</p>
                              <p>Phoenix</p>
                           </div>
                        </div>
                        <div class="col-md-6 text-md-right">
                           <ul class="invoice-date">
                              <li>Invoice Date : Saturday, Nov 08 2020</li>
                              <li>Due Date : Sunday, Nov 16 2020</li>
                           </ul>
                        </div>
                  </div>
                  <!-- Invoice Table -->
                  <div class="ms-invoice-table table-responsive mt-5">
                        <table class="table table-hover text-right thead-light">
                           <thead>
                              <tr class="text-capitalize">
                                    <th class="text-center w-5">id</th>
                                    <th class="text-left">Item Name</th>
                                    <th>Qty</th>
                                    <th>Unit Cost</th>
                                    <th>total</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-left">Visting Charges</td>
                                    <td>1</td>
                                    <td>$100</td>
                                    <td>$100</td>
                              </tr>
                              <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-left">Medicines</td>
                                    <td>10</td>
                                    <td>$69</td>
                                    <td>$800</td>
                              </tr>
                              <tr>
                                    <td class="text-center">3</td>
                                    <td class="text-left">X-ray Reports</td>
                                    <td>4</td>
                                    <td>$600</td>
                                    <td>$1380</td>
                              </tr>
                              <tr>
                                    <td class="text-center">4</td>
                                    <td class="text-left">MRI</td>
                                    <td>2</td>
                                    <td>$245</td>
                                    <td>$480</td>
                              </tr>
                           </tbody>
                           <tfoot>
                              <tr>
                                    <td colspan="4">Total Cost: </td>
                                    <td>$1500</td>
                              </tr>
                           </tfoot>
                        </table>
                  </div>
                  <div class="invoice-buttons text-right">
                        <a href="#" class="btn btn-primary mr-2">Print Invoice</a>
                        <a href="#" class="btn btn-primary">Send Invoice</a>
                  </div>
               </div>
            </div>
      </div>
   </div>
</div>
@endsection
