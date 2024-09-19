@extends('layouts.app')

@section('content')

<!-- ========== title-wrapper start ========== -->
<form id="requestStock">
    <div class="title-wrapper pt-30">
    </div>
<div class="card-styles">
    <div class="card-style-3 mb-30">
        <div class="card-content">
            <div class="title-wrapper pt-30">
                <div class="row align-items-center justify-content-center">
                    <div class="title mb-30 text-center">
                        <h2>{{ __('Request Stock Form') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col col-4">
                    <div class="mb-3">
                        <label for="" class="form-label">Product</label>
                        <select
                            class="form-select"
                            name="product_id"
                            id="supplier-select"
                        >
                            <option selected hidden>Select one</option>
                            @if (!is_null($supplierStock) && (is_array($supplierStock) || is_object($supplierStock)))
                                @foreach($supplierStock as $item)
                                    <option data-supplier="{{ $item->return_stock_id->return_supplier_id->name }}" data-qty="{{ $item->quantity }}"data-price="{{ $item->price }}"value="{{ $item->id }}">{{ $item->return_stock_id->product_name }} / {{ $item->return_stock_id->return_supplier_id->name }}</option>
                                @endforeach
                            @else
                                <option disabled>No data Available</option>
                            @endif
                        </select>
                    </div>

                </div>
                <div class="col col-3">
                    <div class="mb-3">
                        <label for="brand" class="form-label">Supplier</label>
                        <input
                            type="text"
                            class="form-control"
                            name="supplier"
                            id="supplier"
                            readonly
                        />
                    </div>
                </div>
                <div class="col col-3">
                    <div class="mb-3">
                        <label for="brand" class="form-label">Price</label>
                        <input
                            type="number"
                            class="form-control"
                            name="price"
                            id="price"
                            readonly
                        />
                    </div>
                </div>
                <div class="col col-2">
                    <div class="mb-3">
                        <label for="brand" class="form-label">Quantity</label>
                        <input
                            type="text"
                            class="form-control"
                            name="quantity"
                            id="quantity"
                        />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="description" class="form-label">Reason</label>
                        <textarea class="form-control" name="reason" id="reason" rows="3" placeholder="Enter product description"></textarea>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="button" id="submitForm" class="main-btn primary-btn square-btn btn-hover">Submit stock</button>
            </div>
        </div>
    </div>
</div>
</form>
<script src="{{ asset('js/inventory-request.js') }}"></script>
@include('modals.product-type')
@endsection
