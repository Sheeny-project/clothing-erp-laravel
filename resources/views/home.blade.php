@extends('layouts.app')

@section('content')
    <!-- ========== title-wrapper start ========== -->
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="icon-card mb-30">
            <div class="icon purple">
              <i class="lni lni-cart-full"></i>
            </div>
            <div class="content">
              <h6 class="mb-10">New Orders</h6>
              <h3 class="text-bold mb-10">34567</h3>
              <p class="text-sm text-success">
                <i class="lni lni-arrow-up"></i> +2.00%
                <span class="text-gray">(30 days)</span>
              </p>
            </div>
          </div>
          <!-- End Icon Cart -->
        </div>
        <!-- End Col -->
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="icon-card mb-30">
            <div class="icon success">
              <i class="lni lni-dollar"></i>
            </div>
            <div class="content">
              <h6 class="mb-10">Total Income</h6>
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
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="icon-card mb-30">
            <div class="icon primary">
              <i class="lni lni-credit-cards"></i>
            </div>
            <div class="content">
              <h6 class="mb-10">Total Expense</h6>
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
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <div class="icon-card mb-30">
            <div class="icon orange">
              <i class="lni lni-user"></i>
            </div>
            <div class="content">
              <h6 class="mb-10">New User</h6>
              <h3 class="text-bold mb-10">34567</h3>
              <p class="text-sm text-danger">
                <i class="lni lni-arrow-down"></i> -25.00%
                <span class="text-gray"> Earning</span>
              </p>
            </div>
          </div>
          <!-- End Icon Cart -->
        </div>
        <!-- End Col -->
      </div>
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->

    <div class="card-styles">
        <div class="card-style-3 mb-30">
            <div class="card-content">
                <p>
                    {{ __('You are logged in!') }}
                </p>
            </div>
        </div>
    </div>
@endsection
