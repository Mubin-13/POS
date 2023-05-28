<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>
<?php


// dd($_FILES);


$filename = $_FILES['picture']['name'];
$filename = uniqid()."_". $_FILES['picture']['name'];
$target = $_FILES['picture']['tmp_name'];
$destination = $uploads.$filename;

$src= null;
if(upload($target,$destination)){
    $src=$filename;
}



// sanitize

// validation

// image processing

// store : as json data to json file

// $src=$_POST['src'];

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
            "Createdby"=> $Createdby
        ];

$currentUniqueId =null;

$dataslide = file_get_contents($datasource . 'brand.json');
$slides = json_decode($dataslide);

if(count($slides)>0){
        $ids = [];
    foreach($slides as $aslide){
        $ids[]=$aslide->id;
}
        sort($ids);
        $lastIndex = count($ids)-1;
        $highestId = $ids [$lastIndex];
        $currentUniqueId=$highestId+1;
}else{
    $currentUniqueId=1;
}

//finding unique idsdd

$slide['id']= $currentUniqueId;
// d($slide);
// d($lastIndex);
// d($highestId);
// dd($currentUniqueId);


$slides[] = (object)$slide;
$data_slide = json_encode($slides);


if(file_exists($datasource."brand.json")){
    $result = file_put_contents($datasource."brand.json",$data_slide);
}else{
    echo "File not Found";
}
if($result){
    redirect("brand_list.php");
}
