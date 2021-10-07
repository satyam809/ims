<?php
define('path', 'C:/xampp/htdocs/myproject/ims/');
require_once path . 'admin/admin.php';
//$obj->check_login();


$file_name = $_POST['file_name']; //echo $file_name;

$file = $_FILES['file']['name']; //echo $file;die;
$obj->download_insert($file_name, $file);
if ($obj) {
    echo json_encode(array('message' => 'Added successfully', 'status' => true));
} else {
    echo json_encode(array('message' => 'Something wrong', 'status' => false));
}
