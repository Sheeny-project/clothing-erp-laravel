@extends('layouts.app')

@section('content')
<div class="row py-3">
    <div class="col-xl-4 col-lg-4 col-sm-6">
       <div class="icon-card mb-30">
          <div class="icon purple">
             <i class="lni lni-users"></i>
          </div>
          <div class="content">
             <h6 class="mb-10">Employee</h6>
             <h3 class="text-bold mb-10">34567</h3>
             <p class="text-sm text-success">
                <i class="lni lni-users"></i> +2.00%
                <span class="text-gray">(30 days)</span>
             </p>
          </div>
       </div>
       <!-- End Icon Cart -->
    </div>
    <!-- End Col -->
    <div class="col-xl-4 col-lg-4 col-sm-6">
       <div class="icon-card mb-30">
          <div class="icon success">
             <i class="lni lni-check-box"></i>
          </div>
          <div class="content">
             <h6 class="mb-10">Online applicants</h6>
             <h3 class="text-bold mb-10">$74,567</h3>
             <p class="text-sm text-success">
                <i class="lni lni-arrow-up"></i> +5.45%
                <span class="text-gray">Increased</span>
             </p>
          </div>
       </div>
       <!-- End Icon Cart -->
    </div>
    <!-- End Col -->
    <div class="col-xl-4 col-lg-4 col-sm-6">
       <div class="icon-card mb-30">
          <div class="icon primary">
             <i class="lni lni-coin"></i>
          </div>
          <div class="content">
             <h6 class="mb-10">Loans</h6>
             <h3 class="text-bold mb-10">$24,567</h3>
             <p class="text-sm text-danger">
                <i class="lni lni-arrow-down"></i> -2.00%
                <span class="text-gray">Expense</span>
             </p>
          </div>
       </div>
       <!-- End Icon Cart -->
    </div>
    <!-- End Col -->
 </div>
 <div class="row">
    <div class="col-lg-8">
        <div class="card-style mb-30">
           <div class="title d-flex justify-content-between align-items-center">
              <div class="left">
                 <h6 class="text-medium mb-30">Newly hired</h6>
              </div>
           </div>
           <div class="table">
              <div
                 class="table-responsive"
              >
                 <table id="pending-order-tbl"
                 >
                    <thead>
                       <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Product</th>
                          <th scope="col">Image</th>
                          <th scope="col">Quantity</th>
                          <th scope="col">Status</th>
                       </tr>
                    </thead>
                    <tbody>
                    </tbody>
                 </table>
              </div>

           </div>
        </div>
     </div>
     <div class="col-lg-4">
        <div class="card-style mb-30">
           <div class="title d-flex justify-content-between align-items-center">
              <div class="left">
                 <h6 class="text-medium mb-30">Loans</h6>
              </div>
           </div>
           <div class="table">
              <div
                 class="table-responsive display"
              >
                 <table id="low-stock-tbl"
                 >
                    <thead>
                       <tr>
                          <th scope="col">Column 1</th>
                          <th scope="col">Column 2</th>
                          <th scope="col">Column 3</th>
                       </tr>
                    </thead>
                    <tbody>
                    </tbody>
                 </table>
              </div>

           </div>
        </div>
        <div class="card-style clients-table-card mb-30">
            <div class="title d-flex justify-content-between align-items-center">
              <h6 class="mb-10">Online applicants</h6>
            </div>
            <div class="table-wrapper table-responsive">
              <table class="table">
                <tbody id="approved_stocks">
                  <!-- end table row -->

                  <!-- end table row -->
                </tbody>
              </table>
              <!-- end table -->
            </div>
          </div>
     </div>
 </div>
 <script src="{{ asset('js/inventory.js') }}"></script>
@endsection
