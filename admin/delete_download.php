<?php
	include('admin.php');
	$obj->check_login();
	if(isset($_GET['id'])){//print_r($id);die;
		$id=$_GET['id'];
    $obj->download_delete($id);
	}
 
?>