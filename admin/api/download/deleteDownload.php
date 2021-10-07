<?php
define('path', 'C:/xampp/htdocs/myproject/ims/');
require_once path . 'admin/admin.php';
//$obj->check_login();

$id = $_POST['id']; //echo $file_name;
$result = $obj->download_delete($id);
//echo $result;die();
if ($result) {
    echo json_encode(array("message" => "Deleted successfully", "status" => true));
} else {
    echo json_encode(array("message" => "something wrong", "status" => false));
}
