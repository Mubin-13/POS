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
            <div class="mb-3">
              <ul class="list-inline list-inline-condensed mt-3 mb-0">
                  <li class="list-inline-item"><a href="Brand_Create.php" class="btn btn-outline bg-success btn-icon text-success border-success border-2 rounded-round">
                      <i class="icon-plus3"></i></a>
                  </li>
              
                <li class="list-inline-item"><a href="#" class="btn btn-outline bg-danger btn-icon text-danger border-danger border-2 rounded-round">
                    <i class="icon-bin"></i></a>
                </li>
                <li class="list-inline-item"><a href="#" class="btn btn-outline bg-info-800 btn-icon text-info-800 border-info-800 border-2 rounded-round">
                    <i class="icon-file-spreadsheet"></i></a>
                </li>
                <li class="list-inline-item"><a href="#" class="btn btn-outline bg-indigo-800 btn-icon text-indigo-800 border-indigo-800 border-2 rounded-round">
                    <i class="icon-file-pdf"></i></a>
                </li>
                <li class="list-inline-item"><a href="#" class="btn btn-outline bg-primary-800 btn-icon text-primary-800 border-purple-800 border-2 rounded-round">
                    <i class="icon-printer"></i></a>
                </li>
              </ul>
            </div>
          </div>

          <div class="content">

            <!-- Image grid -->


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