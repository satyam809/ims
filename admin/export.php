<?php 
require_once 'admin.php';
$obj->check_login();
if (isset($_GET['export'])) {
		$obj->contact_export();
			}
?>