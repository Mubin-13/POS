<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<div class="sidebar sidebar-light sidebar-main sidebar-expand-md">
      <!-- Sidebar mobile toggler -->
      <?php include_once($partials.'slidemobile.php') ?>
      <!-- /sidebar mobile toggler -->

      <!-- Sidebar content -->
      <div class="sidebar-content">
        <!-- User menu -->
        <?php include_once($partials.'usermenuinf.php') ?>
        <!-- /user menu -->

        <!-- Main navigation -->
        <?php include_once($partials.'sidebar.php') ?>
        <!-- /main navigation -->
      </div>
      <!-- /sidebar content -->
    </div>