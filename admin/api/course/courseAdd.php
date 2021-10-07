<?php
define('path', 'C:/xampp/htdocs/myproject/ims/');
require_once path . 'admin/admin.php';
//$obj->check_login();

$course_name = $_POST['course_name']; //echo $file_name;
$fee = $_POST['fee'];
$duration = $_POST['duration'];
$feature = $_POST['feature'];
$obj->course_insert($course_name, $fee, $duration, $feature);
if ($obj) {
    echo json_encode(array('message' => 'Course added successfully', 'status' => true));
} else {
    echo json_encode(array('message' => 'Something wrong', 'status' => false));
}
