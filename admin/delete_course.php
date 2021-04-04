<?php 
require 'admin.php';
$obj->check_login();
if(isset($_GET['id'])) {
		$id = $_GET['id'];
		$obj->course_delete($id);
		
	}

/*if (isset($_GET['export'])) {
		$obj->vendor_export();
			}*/
?>