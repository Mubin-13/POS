<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>
<?php


// sanitize

// validation

// image processing

// store : as json data to json file
$id="11";
$uuid="fasdf";
$src=$_GET['src'];
$BrandName=$_GET['BrandName'];
$alt=$_GET['alt'];
$BrandCode=$_GET['BrandCode'];
$Discription=$_GET['Discription'];
$Createdby=$_GET['Createdby'];


$slide =[
            "id"=>$id,
            "uuid"=>$uuid,
            "src"=>$src,
            "BrandName"=>$BrandName,
            "alt"=>$alt,
            "BrandCode"=>$BrandCode,
            "Discription"=>$Discription,
            "Createdby"=> $Createdby
        ];


$dataslide = file_get_contents($datasource . 'brand.json');
$slides = json_decode($dataslide, "ture");


$slides[] = (object)$slide;
$data_slide = json_encode($slides);


if(file_exists($datasource."brand.json")){
    $result = file_put_contents($datasource."brand.json",$data_slide);
}else{
    echo "File not Found";
}

dd($slides);
