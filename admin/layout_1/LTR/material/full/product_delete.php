<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
// dd($_POST);
$id= $_POST['id'];


$dataslide = file_get_contents($datasource . 'product.json');
$product = json_decode($dataslide, "ture");




$slide= null;

foreach ($product as $key => $aslide) {
  if($aslide['id'] == $id){
      $slide = $aslide;
      break;
  }
}

unset($product[$key]);
$product= array_values($product);
$data_slide = json_encode($product);


if(file_exists($datasource."product.json")){
    $result = file_put_contents($datasource."product.json",$data_slide);
    if($result){ // edge case is not handled. if it writes nothing. length = 0
      redirect("product_list.php");
}
}else{
    echo "File not Found";
}

d($slide);  
dd($product);

?>