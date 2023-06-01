<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>
<!DOCTYPE html>
<html lang="en">

<?php include_once($partials . 'head.php') ?>

<body>
  <!-- Main navbar -->
  <?php include_once($partials . 'mainnav.php') ?>
  <!-- /main navbar -->

  <!-- Page content -->
  <div class="page-content">
    <!-- Main sidebar -->
    <?php include_once($partials . 'mainsidebar.php') ?>
    <!-- /main sidebar -->

    <!-- Main content -->
    <div class="content-wrapper">
      <!-- Page header -->
      <?php include_once($partials . 'header.php') ?>
      <!-- /page header -->

      <!-- Content area -->
      <div class="card card-body">
        <div class="row">
          <form action="product_create_processor.php" method="post" class="col-lg-12 col-sm-6 col-12 row" enctype="multipart/form-data">
            <div class="col-lg-6 col-sm-6 col-12">
              <div class="form-group">
                <label>Product Name</label><br />
                <input name="PRODUCT" type="text" class="form-control" placeholder="Type Product Name" />
              </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-12 ">
              <div class="form-group">
                <label>Brand Name</label><br />
                <!-- <input name="BRAND" type="text" class="form-control" placeholder="Type Brand Code" /> -->
                <select name="BRAND" class="form-control form-control-select2" data-placeholder="Choose Brand">
                  <option>Adidas</option>
                  <option>Puma</option>
                  <option>Coca Cola</option>
                  <option>Pepsi</option>
                  <option>Samsung</option>
                </select>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <label>SKU</label>
                <input name="SKU" class="form-control" placeholder="Type Discription"></input>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <label>Category</label>
                <select name="CATEGORIES" class="form-control form-control-select2" data-placeholder="Choose Category">
                  <option>Shoes</option>
                  <option>Drinks</option>
                  <option>Friuts</option>
                  <option>Electronics</option>
                  <option>Smart Phone</option>
                </select>
              </div>
              <div class="form-group">
                <label>Price</label>
                <input name="PRICE" class="form-control" placeholder="Type Price"></input>
              </div>
              <div class="form-group">
                <label>Product Unit</label>
                <input name="PRODUCT_UNIT" class="form-control" placeholder="Type Discription"></input>
              </div>
              <div class="form-group">
                <label>In Stock</label>
                <input name="IN_STOCK" class="form-control" placeholder="Type Discription"></input>
              </div>

            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <label>Source</label>
                <input name="src" type="text" class="form-control" placeholder="Type Strong URl" />
              </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-12">
              <div class="form-group">
                <label>Created Date</label><br />
                <input name="CREATED_DATE" type="text" class="form-control" placeholder="Type Created Date" />
              </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-12 ">
              <div class="form-group">
                <label>Created by</label><br />
                <!-- <input name="BRAND" type="text" class="form-control" placeholder="Type Brand Code" /> -->
                <select name="CREATED_BY" class="form-control form-control-select2" data-placeholder="Choose Created By">
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
                <input type="file" name="picture" class="file-input" multiple="multiple" data-fouc />
              </div>
            </div>
            <div class="d-flex justify-content-start align-item-center">
              <button type="submit" class="btn btn-outline bg-danger btn-icon text-danger border-danger border-2 rounded-round"> Cancel <i class="icon-cross2"></i> </button>
              <button type="submit" class=" btn btn-outline bg-success ml-3 btn-icon text-success border-success border-2 rounded-round">Submit <i class="icon-arrow-up-right32"></i> </button>
            </div>
          </form>
        </div>
      </div>



      <!-- /content area -->

      <!-- Footer -->
      <?php include_once($partials . 'footer.php') ?>
      <!-- /footer -->
    </div>
    <!-- /main content -->
  </div>
  <!-- /page content -->

</body>

</html>