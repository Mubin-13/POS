<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>
<?php

// d($_POST);


// sanitize

// validation

// image processing

// store : as json data to json file
$uuid = $_POST['uuid'];
$id = $_POST['id'];
$src=$_POST['src'];
$BrandName=$_POST['BrandName'];
$alt=$_POST['alt'];
$BrandCode=$_POST['BrandCode'];
$Discription=$_POST['Discription'];
$Createdby=$_POST['Createdby'];


$slide =[
            
            "uuid"=>uniqid(),
            "src"=>$src,
            "BrandName"=>$BrandName,
            "alt"=>$alt,
            "BrandCode"=>$BrandCode,
            "Discription"=>$Discription,
            "Createdby"=> $Createdby,
            "id"=>$id,
        ];


$dataslide = file_get_contents($datasource . 'brand.json');
$slides = json_decode($dataslide);

foreach ($slides as $key => $aslide) {
    if($aslide->id == $id){
        break;
    }
  }

// d($slides);
// dd($slide);


$slides[$key] = (object)$slide;
// dd($slides);

$data_slide = json_encode($slides);


if(file_exists($datasource."brand.json")){
    $result = file_put_contents($datasource."brand.json",$data_slide);
}else{
    echo "File not Found";
}
if($result){
    redirect("brand_list.php");
}
