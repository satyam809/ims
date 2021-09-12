<?php
require_once '../admin.php';
$count = count($_FILES['images']['name']);
for ($i = 0; $i < $count; $i++) {
    $photo = $_FILES['images']['name'][$i];
    $target = "../images/" . basename($photo);
    move_uploaded_file($_FILES["images"]["tmp_name"][$i], $target);
}
$result=$obj->image_insert($_FILES['images']['name'],$count);
if($result){
    echo json_encode(array("message" => "Images are uploaded successfully", "status" => true));
}else{
    echo json_encode(array("message" => "Images not uploaded", "status" => false));
}
?>