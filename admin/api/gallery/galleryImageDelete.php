<?php
define('path', 'C:/xampp/htdocs/myproject/ims/');
require_once path . 'admin/admin.php';
$id = $_POST["id"]; //echo $id;die();
$result = $obj->image_delete($id); //echo $result;die();
if ($result === true) {
    echo json_encode(array("message" => "Delete successfully", "status" => true));
} else {
    echo json_encode(array("message" => "Image not deleted", "status" => false));
}
