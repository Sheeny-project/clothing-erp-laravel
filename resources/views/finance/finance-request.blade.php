@extends('layouts.app')

@section('content')
    <!-- ========== title-wrapper start ========== -->
<div class="title-wrapper pt-30">
    <div class="card-styles pt-15">
        <div class="card-style-3 mb-30">
            <div class="card-content">
                <div class="header">
                    <h4>Request Monitoring</h4>
                </div>
                <table id="requestTable" class="display">
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
@include('modals.finance-dtls-modal')
<script src="{{ asset('js/finance-request.js') }}"></script>
@endsection
