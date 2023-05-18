<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
$strNavData = file_get_contents($datasource . 'navitem.json');
$arrNavData = json_decode($strNavData, "ture");

?>

<!-- Main sidebar -->
<div class="sidebar sidebar-light sidebar-main sidebar-expand-md">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <?php //include_once($partials."profile.php"); 
        ?>


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">
                        <i class="icon-stats-bars2"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <?php

                foreach ($arrNavData as $navData) {
                ?>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link">
                            <i class="<?= $navData['icon'] ?>"></i>
                            <span><?= $navData['title'] ?></span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="doctor category">
                            <?php foreach ($navData['sub']['title'] as $subName => $subLink) {
                            ?>
                                <li class="nav-item">
                                    <a href="<?= $subLink ?>" class="nav-link"><?= $subName ?></a>
                                </li>
                            <?php
                            } ?>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->