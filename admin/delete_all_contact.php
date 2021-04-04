<?php 
require 'admin.php';
$obj->check_login();
if(isset($_POST['id'])) {
		$id = trim($_POST['id']);
		$obj->contact_delete_all($id);
		
	}

/*if (isset($_GET['export'])) {
		$obj->vendor_export();
			}*/
?>