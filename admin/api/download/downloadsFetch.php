<?php
define('path', 'C:/xampp/htdocs/myproject/ims/');
require_once path . 'admin/admin.php';
//$obj->check_login();
$result = $obj->download_fetch();
//echo "<pre>";
//print_r($result->fetchAll(PDO::FETCH_ASSOC));
$output = $result->fetchAll(PDO::FETCH_ASSOC);
if ($output != "") {
    echo json_encode($output);
} else {
    echo json_encode(array('message' => 'No images', 'status' => false));
}
