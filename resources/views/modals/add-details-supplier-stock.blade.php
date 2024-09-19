<form id="addProductDetails">
    <div class="follow-up-modal">
        <div class="modal fade" id="add-details" tabindex="-1" aria-hidden="true">
           <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content card-style">
                 <div class="modal-body">
                    <div class="content mv-30">
                       <h2 class="mb-15 py-2 text-center">Add details</h2>
                        <div class="col">
                            <div class="mb-3">
                                <input
                                    type="number"
                                    class="form-control"
                                    name="id"
                                    id="id"
                                    aria-describedby="helpId"
                                    placeholder="100"
                                    hidden
                                />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Size</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="size"
                                    id="size"
                                    aria-describedby="helpId"
                                    placeholder="Small/Medium/Large"
                                />
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="form-label">Variant</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="variant"
                                    id="variant"
                                    aria-describedby="helpId"
                                    placeholder="Colors,style, etc.."
                                />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="" class="form-label">Quantity</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="quantity"
                                        id="quantity"
                                        aria-describedby="helpId"
                                        placeholder="100"
                                    />
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="" class="form-label">Price</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="price"
                                        id="price"
                                        aria-describedby="helpId"
                                        placeholder="100"
                                    />
                                </div>
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
    </form>
