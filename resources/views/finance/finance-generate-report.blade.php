@extends('layouts.app')

@section('content')
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="title">
            <h2>Requests</h2>
        </div>
        <div class="breadcrumb-wrapper d-flex justify-content-start pt-15">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    {{ $header }}
                </li>
                <li class="breadcrumb-item active">
                    {{ $title }}
                </li>
                </ol>
            </nav>
        </div>
        <div class="card-styles pt-15">
            <div class="card-style-3 mb-30">
                <div class="card-content">
                    <div class="header">
                        <h4>Request Monitoring</h4>
                    </div>
                    <table id="stocksTable" class="display">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Quantity</th>
                                <th>Price</th>
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
