<?php
define('path', 'C:/xampp/htdocs/myproject/ims/');
require_once path . 'admin/admin.php';
//$obj->check_login();
$result = $obj->course_update($_POST['update_id'], $_POST['course_name'], $_POST['fee'], $_POST['duration'], $_POST['feature']);

if ($result == true) {
    echo json_encode(array('message' => 'Updated successfully', 'status' => true));
} else {
    echo json_encode(array('message' => 'Not Updated', 'status' => false));
}
