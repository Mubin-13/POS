<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
$id = $_GET['id'];


$dataslide = file_get_contents($datasource . 'brand.json');
$slides = json_decode($dataslide, "ture");



$slide = null;

foreach ($slides as $key => $aslide) {
  if ($aslide['id'] == $id) {
    $slide = $aslide;
    break;
  }
}

?>
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
          <form action="brand_edit_processor.php" method="post" class="col-lg-12 col-sm-6 col-12 row" enctype="multipart/form-data">
            <div class="col-lg-6 col-sm-6 col-12">
              <input name="uuid" type="hidden" class="form-control" value="<?= $slide['uuid'] ?>" />
              <div class="form-group">
                <label>Brand Name</label><br />
                <input name="BrandName" type="text" class="form-control" placeholder="Type Brand Name" value="<?= $slide['BrandName'] ?>" />
              </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-12 ">
              <div class="form-group">
                <label>Brand Code</label><br />
                <input name="BrandCode" type="text" class="form-control" placeholder="Type Brand Code" value="<?= $slide['BrandCode'] ?>" />
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <label>alter</label>
                <input name="alt" class="form-control" placeholder="Type Discription" value="<?= $slide['alt'] ?>"></input>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <label>Description</label>
                <input name="Discription" class="form-control" placeholder="Type Discription" value="<?= $slide['Discription'] ?>"></input>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <label>Source</label>
                <input name="src" type="text" class="form-control" placeholder="Type Strong URl" value="<?= $slide['src'] ?>" />
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
            <input name="id" type="hidden" class="form-control" value="<?= $slide['id'] ?>" />

            <div class="col-lg-12 col-sm-6 col-12">
              <div class="form-group">
                <label class="font-weight-semibold">Product Picture upload:</label>
                <input type="file" name="picture" class="file-input" multiple="multiple" data-fouc />
                <input name="old_picture" type="text" class="form-control" value="<?= $slide['src'] ?>" />

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