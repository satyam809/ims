<?php
define('path', 'C:/xampp/htdocs/myproject/ims/');
require_once path . 'admin/admin.php';
//$obj->check_login();
if (isset($_GET['export'])) {
	$obj->contact_export();
}
