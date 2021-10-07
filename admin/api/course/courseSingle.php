<?php
define('path', 'C:/xampp/htdocs/myproject/ims/');
require_once path . 'admin/admin.php';
//$obj->check_login();
$result = $obj->course_single($_POST['id']);
if ($result != "") {
    echo json_encode($result);
} else {
    echo json_encode(array('message' => 'something wrong', 'status' => false));
}
