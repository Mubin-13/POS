<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
// dd($_POST);
$id= $_POST['id'];


$dataslide = file_get_contents($datasource . 'brand.json');
$slides = json_decode($dataslide, "ture");



$slide= null;

foreach ($slides as $key => $aslide) {
  if($aslide['id'] == $id){
      $slide = $aslide;
      break;
  }
}
unset($slides[$key]);
$slides= array_values($slides);
$data_slide = json_encode($slides);


if(file_exists($datasource."brand.json")){
    $result = file_put_contents($datasource."brand.json",$data_slide);
    if($result){ // edge case is not handled. if it writes nothing. length = 0
      redirect("brand_list.php");
}
}else{
    echo "File not Found";
}

d($slide);  
dd($slides);

?>