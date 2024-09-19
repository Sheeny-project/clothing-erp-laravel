<div class="follow-up-modal">
<div class="modal fade" id="show-details" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content card-style">
            <div class="modal-body">
            <div class="content mv-30">
                <h2 class="mb-15 py-2 text-center">Request details</h2>
                {{-- <img src="{{ asset('storage/image/',$image) }}" alt="" srcset=""> --}}
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="" class="form-label">Product</label>
                            <input
                                type="text"
                                class="form-control"
                                name=""
                                id="name"
                                aria-describedby="helpId"
                                placeholder=""
                                readonly
                            />
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="" class="form-label">Quantity</label>
                            <input
                                type="text"
                                class="form-control"
                                name=""
                                id="quantity"
                                aria-describedby="helpId"
                                placeholder=""
                                readonly
                            />
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="" class="form-label">Supplier</label>
                        <input
                            type="text"
                            class="form-control"
                            name=""
                            id="supplier"
                            aria-describedby="helpId"
                            placeholder=""
                            readonly
                        />
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="" class="form-label">Price</label>
                        <input
                            type="text"
                            class="form-control"
                            name=""
                            id="price"
                            aria-describedby="helpId"
                            placeholder=""
                            readonly
                        />
                    </div>
                </div>
            </div>

            <div class="action d-flex flex-wrap justify-content-center mt-15">
                <button type="submit" id="submitForm" class="main-btn btn-sm primary-btn square-btn btn-hover m-1">
                    Submit
                </a>
                <button type="button" data-bs-dismiss="modal" class="main-btn btn-sm danger-btn-outline square-btn btn-hover m-1">
                    Cancel
                </button>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
