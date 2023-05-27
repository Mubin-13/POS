

</div>
<div class="modal-body">
    <div class="card card-body">
        <div class="row">
            <form action="brand_create_processor.php" method="get" class="col-lg-12 col-sm-6 col-12 row">
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Brand Name</label><br />
                        <input name="BrandName" type="text" class="form-control" placeholder="Type Brand Name" />
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-12 ">
                    <div class="form-group">
                        <label>Brand Code</label><br />
                        <input name="BrandCode" type="text" class="form-control" placeholder="Type Brand Code" />
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>alter</label>
                        <textarea name="alt" class="form-control" placeholder="Type Discription"></textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="Discription" class="form-control" placeholder="Type Discription"></textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Source</label>
                        <input name="src" type="text" class="form-control" placeholder="Type Strong URl" />
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Created by</label>
                        <!-- <input name="Createdby" type="text" class="form-control" placeholder="Type Strong URl" /> -->
                        <select name="Createdby" class="form-control form-control-select2" data-placeholder="Choose Persentage">
                            <option>Admin</option>
                            <option>Manager</option>
                            <option>Ass.Manager</option>
                            <option>Executive</option>
                            <option>Accessories</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-6 col-12">
                    <div class="form-group">
                        <label class="font-weight-semibold">Product Picture upload:</label>
                        <input type="file" class="file-input" multiple="multiple" data-fouc />
                    </div>
                </div>
                <div class="d-flex justify-content-start align-item-center">
                    <button type="submit" class="btn btn-outline bg-danger btn-icon text-danger border-danger border-2 rounded-round"> Cancel <i class="icon-cross2"></i> </button>
                    <button type="submit" class=" btn btn-outline bg-success ml-3 btn-icon text-success border-success border-2 rounded-round">Submit <i class="icon-arrow-up-right32"></i> </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button class="btn btn-primary" data-dismiss="modal">
        close
    </button>
</div>

