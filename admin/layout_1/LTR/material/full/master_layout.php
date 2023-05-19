<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<!DOCTYPE html>
<html lang="en">

<?php include_once($partials.'head.php') ?>

<body>
  <!-- Main navbar -->
  <?php include_once($partials.'mainnav.php') ?>
  <!-- /main navbar -->

  <!-- Page content -->
  <div class="page-content">
    <!-- Main sidebar -->
    <?php include_once($partials.'mainsidebar.php') ?>
    <!-- /main sidebar -->

    <!-- Main content -->
    <div class="content-wrapper">
      <!-- Page header -->
      <?php include_once($partials.'header.php') ?>
      <!-- /page header -->

      <!-- Content area -->
     
      <!-- /content area -->

      <!-- Footer -->
      <?php include_once($partials.'footer.php') ?>
      <!-- /footer -->
    </div>
    <!-- /main content -->
  </div>
  <!-- /page content -->

 

</body>

</html>