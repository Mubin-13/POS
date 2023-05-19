<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
$dataslide = file_get_contents($datasource . 'brand.json');
$slides = json_decode($dataslide, "ture");
// d($slides);

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
      <?php include_once($partials . 'brand_page_header.php') ?>

      <!-- /page header -->

      <!-- Content area -->
      <div class="card">
        <!-- Content Header -->
        <?php include_once($partials . 'Brand_content_header.php') ?>
        <!-- Content Header -->
        <div class="card card-body ">
          <div class="text-left ">



            <a href="brand_list.php" type="button" class="btn bg-teal btn-ladda btn-ladda-progress" data-style="expand-left" data-spinner-size="20">List View</a>
            <a href="grid.php" type="button" class="btn bg-teal btn-ladda btn-ladda-progress" data-style="expand-left" data-spinner-size="20">Grid View</a>
          </div>

          <div class="content">

            <!-- Image grid -->
            <div class="mb-3">
              <h6 class="mb-0 font-weight-semibold">
                Create | Trash | Download XL | Download PDF | Print View
              </h6>
              <span class="text-muted d-block">

              </span>
            </div>

            <div class="row">
             
            <?php include_once($partials . 'grid_view_content.php') ?>

            </div>

            <!-- /image grid -->



          </div>
        </div>
      </div>
    </div>
    <!-- /footer -->
  </div>
  <!-- /main content -->
  </div>
  <!-- /page content -->



</body>

</html>