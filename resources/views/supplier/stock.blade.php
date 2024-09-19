@extends('layouts.app')

@section('content')
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="card-styles">
            <div class="card-style-3 mb-30">
                <div class="card-content">
                    <div class="header">
                        <h4>Stocks</h4>
                    </div>
                    <table id="stocksTable" class="display">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Product Type</th>
                                <th>Brand</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('modals.add-details-supplier-stock')
    @include('modals.show-supplier-stock-details')
    <script src="{{ asset('js/supplier-stock.js') }}"></script>
@endsection
