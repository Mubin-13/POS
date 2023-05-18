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
        <table class="table datatable-basic ">
          <thead>
            <tr>
              <th><input type="checkbox" /></th>
              <th>ID</th>
              <th>Brand Image</th>
              <th>Brand Name</th>
              <th>Brand Code</th>
              <th>Discription</th>
              <th>Created by</th>
              <th class="text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
          <?php
          foreach($slides as $key=>$slide) {
            ?>
          <!-- ...........1........... -->
            <tr>
              <td><input type="checkbox" /></td>
              <td><?=++$key?></td>
              <td>
                <div class="d-flex align-items-center">
                  <div class="col-md-2">
                    <a href="<?=$slide['src']?>" data-popup="lightbox">
                      <img src="<?=$slide['src']?>" width="60px" alt="" />
                    </a>
                  </div>
                </div>
              </td>
              
              <td><?=$slide['BrandName']?></td>
              <td><?=$slide['BrandCode']?></td>
              <td><?=$slide['Discription']?></td>
              <td><span class="badge badge-success"><?=$slide['Createdby']?></span></td>
              <td class="text-center">
                <div class="list-icons">
                  <a href="#" class="list-icons-item"><i class="icon-eye"></i></a>
                  <a href="#" class="list-icons-item"><i class="icon-pencil7"></i></a>
                  <a href="#" class="list-icons-item"><i class="icon-trash"></i></a>
                </div>
              </td>
            </tr>
            <?php } ?>

            <!-- ...............0.............. -->
          </tbody>
        </table>
      </div>
      <!-- /content area -->

      <!-- Footer -->
      <div class="navbar navbar-expand-lg navbar-light">
        <div class="text-center d-lg-none w-100">
          <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
            <i class="icon-unfold mr-2"></i>
            Footer
          </button>
        </div>

        <div class="navbar-collapse collapse" id="navbar-footer">
          <span class="navbar-text">
            &copy; 2015 - 2018. <a href="#">Syntex Squad Web App Kit</a> by
            <a href="http://themeforest.net/user/Kopyov" target="_blank">Jituraz</a>
          </span>

          <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item">
              <a href="#" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a>
            </li>
            <li class="nav-item">
              <a href="#" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a>
            </li>
            <li class="nav-item">
              <a href="" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i>
                  Purchase</span></a>
            </li>
          </ul>
        </div>
      </div>
      <!-- /footer -->
    </div>
    <!-- /main content -->
  </div>
  <!-- /page content -->



</body>

</html>