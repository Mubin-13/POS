<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>
<?php

// d($_POST);
// dd($_FILES);
$src= null;
$new_src=null;
$old_src=null;
$old_src= $_POST['old_picture'];


if(array_key_exists('picture',$_FILES) && !empty($_FILES['picture']['name'])){
$filename = $_FILES['picture']['name'];
$filename = uniqid()."_". $_FILES['picture']['name'];
$target = $_FILES['picture']['tmp_name'];
$destination = $uploads.$filename;

if(upload($target,$destination)){
    $new_src=$filename;
}

if(file_exists($uploads.$old_src)){
    unlink($uploads.$old_src);
}else{
    echo("file not Exists");
}
}

// sanitize

// validation

// image processing

// store : as json data to json file
$uuid = $_POST['uuid'];
$id = $_POST['id'];
$old_src=$_POST['old_picture'];
$src= $new_src ?? $old_src;
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
    $message = "Data is updated successfully";
    set_session('message',$message);
    // re direct("brand_list.php?message=".$message);
    redirect("brand_list.php");
}
