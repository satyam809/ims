<?php
define('path', 'C:/xampp/htdocs/myproject/ims/');
require_once path . 'admin/admin.php';
//$obj->check_login();

$id = trim($_POST['id']);
if ($obj->contact_delete_all($id)) {
	echo json_encode(array('message' => 'Records deleted successfully', 'status' => true));
} else {
	echo json_encode(array('message' => 'Something wrong', 'status' => false));
}
