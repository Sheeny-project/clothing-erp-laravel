@extends('layouts.app')

@section('content')
<style>
    .profile-image-wrapper {
    position: relative;
    width: 100px; /* Fixed width */
    height: 100px; /* Fixed height */
    margin: 0 auto; /* Center the profile image */
}

#profileImagePlaceholder {
    width: 100%;
    height: 100%;
    object-fit: cover;
    cursor: pointer;
    transition: opacity 0.3s ease;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 0.3s ease;
    font-weight: bold;
}

.profile-image-wrapper:hover .overlay {
    opacity: 1;
}

</style>

<!-- ========== title-wrapper start ========== -->
<div class="title-wrapper pt-30">
    <form id="addStock" enctype="multipart/form-data">
        <div class="card-styles">
            <div class="card-style-3 mb-30">
                <div class="card-content">
                    <div class="mb-15">
                        <h2 class="text-center">{{ __('Add Stock Form') }}</h2>
                    </div>
                    <div class="profile-image-wrapper text-center">
                        <label for="profileImageInput">
                            <img id="profileImagePlaceholder" src="{{ asset('images/upload.png') }}" alt="">
                            <div class="overlay">Upload</div>
                        </label>
                        <input type="file" id="profileImageInput" name="image" accept="image/*" style="display:none">
                    </div>
                    <div class="row mt-4">
                        <div class="col col-6">
                            <div class="mb-3">
                                <label for="productName" class="form-label">Product Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="product_name"
                                    id="product_name"
                                    placeholder="Enter product name"
                                    />
                            </div>
                        </div>
                        <div class="col col-3">
                            <div class="mb-3">
                                <label for="productType" class="form-label">Product Type</label>
                                <div class="input-group">
                                    <button class="btn btn-outline-primary" type="button" id="button-addon1" onclick="ModalProductType()">Add Type</button>
                                    <select class="form-select" name="product_type_id" id="product_type">
                                    <option selected hidden>Select one</option>
                                    @if($productType && count($productType) > 0)
                                    @foreach ($productType as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach
                                    @else
                                    <option disabled>Add product type first!</option>
                                    @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col col-3">
                            <div class="mb-3">
                                <label for="brand" class="form-label">Brand</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="brand"
                                    id="brand"
                                    placeholder="Enter brand name"
                                    />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter product description"></textarea>
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
</div>
<script src="{{ asset('js/supplier-request.js') }}"></script>
@include('modals.product-type')
@endsection
