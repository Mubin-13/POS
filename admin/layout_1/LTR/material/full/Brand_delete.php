<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
$id= $_GET['id'];


$dataslide = file_get_contents($datasource . 'brand.json');
$slides = json_decode($dataslide, "ture");



$slide= null;

foreach ($slides as $key => $aslide) {
  if($aslide['id'] == $id){
      $slide = $aslide;
      break;
  }
}



d($slide);  
dd($slides);