<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php include_once($frontpartials . 'head.php') ?>

<body>
  <div id="global-loader">
    <div class="whirly-loader"></div>
  </div>
  <div class="main-wrappers">
    <?php include_once($frontpartials . 'header.php'); ?>
    <div class="page-wrapper ms-0">
      <div class="content">
        <div class="row">
          <div class="col-lg-8 col-sm-12 tabs_wrapper">
            <?php include_once($frontpartials . 'pageheader.php'); ?>
            <?php include_once($frontpartials . 'tab_contents.php'); ?>

          </div>
          <div class="col-lg-4 col-sm-12">
            <?php include_once($frontpartials . 'orderlist.php'); ?>
            <div class="card card-order">
              <?php include_once($frontpartials . 'card.php'); ?>
              <div class="split-card"></div>
              <?php include_once($frontpartials . 'cartitem.php'); ?>

              <div class="split-card"></div>
              <?php include_once($frontpartials . 'splitcard.php'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>









  <?php include_once($frontpartials . 'transationsmodal.php'); ?>







  <script src="assets/js/jquery-3.6.0.min.js"></script>

  <script src="assets/js/feather.min.js"></script>

  <script src="assets/js/jquery.slimscroll.min.js"></script>

  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/jquery.dataTables.min.js"></script>
  <script src="assets/js/dataTables.bootstrap4.min.js"></script>

  <script src="assets/plugins/select2/js/select2.min.js"></script>

  <script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>

  <script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
  <script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

  <script src="assets/js/script.js"></script>
</body>

</html>