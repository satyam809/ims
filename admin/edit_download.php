<?php
	include 'admin.php';
	$obj->check_login();
	$id=$_GET['id'];//echo $id;
    $file_name=$_POST['file_name'];//echo $file_name;
	
	$file = $_FILES['file']['name'];//echo $file;die;
	$obj->download_update($id,$file_name,$file);
?>