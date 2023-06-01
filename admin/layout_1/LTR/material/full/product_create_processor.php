<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>
<?php


// dd($_FILES);


$filename = $_FILES['picture']['name'];
$filename = uniqid() . "_" . $_FILES['picture']['name'];
$target = $_FILES['picture']['tmp_name'];
$destination = $uploads . $filename;

$src = null;
if (upload($target, $destination)) {
    $src = $filename;
}



// sanitize

// validation

// image processing

// store : as json data to json file

// $src=$_POST['src'];

$product = $_POST['PRODUCT'];
$sku = $_POST['SKU'];
$BrandName = $_POST['BRAND'];
$category = $_POST['CATEGORIES'];
$price = $_POST['PRICE'];
$productUnit = $_POST['PRODUCT_UNIT'];
$stock = $_POST['IN_STOCK'];
$CreatedBy = $_POST['CREATED_BY'];
$CreatedDate = $_POST['CREATED_DATE'];


$slide = [

    "uuid" => uniqid(),
    "src" => $src,
    "PRODUCT" => $product,
    "SKU" => $sku,
    "BRAND" => $BrandName,
    "CATEGORIES" => $category,
    "PRICE" => $price,
    "PRODUCT_UNIT" => $productUnit,
    "IN_STOCK" => $stock,
    "CREATED_BY" => $CreatedBy,
    "CREATED_DATE" => $CreatedDate
];

$currentUniqueId = null;

$dataslide = file_get_contents($datasource . 'product.json');
$product = json_decode($dataslide);

if (count($product) > 0) {
    $ids = [];
    foreach ($product as $aslide) {
        $ids[] = $aslide->id;
    }
    sort($ids);
    $lastIndex = count($ids) - 1;
    $highestId = $ids[$lastIndex];
    $currentUniqueId = $highestId + 1;
} else {
    $currentUniqueId = 1;
}

//finding unique idsdd

$slide['id'] = $currentUniqueId;
// d($slide);
// d($lastIndex);
// d($highestId);
// dd($currentUniqueId);


$product[] = (object)$slide;
$data_slide = json_encode($product);


if (file_exists($datasource . "product.json")) {
    $result = file_put_contents($datasource . "product.json", $data_slide);
} else {
    echo "File not Found";
}
if ($result) {
    redirect("product_list.php");
}
