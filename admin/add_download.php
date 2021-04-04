<?php
	include('admin.php');
	$obj->check_login();
    //$file_name=$file='';
	$file_name=$_POST['file_name'];//print_r($file_name);
	
	$file = $_FILES['file']['name'];
	$obj->download_insert($file_name,$file);
        
 
?>