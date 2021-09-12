<?php
	include '../admin.php';
	//$obj->check_login();
	$id=$_POST['download_id'];//echo $id;die;
    $file_name=$_POST['file_name'];//echo $file_name;
	
	$file = $_FILES['file']['name'];//echo $file;die;
	$obj->download_update($id,$file_name,$file);
    if($obj){
        echo json_encode(array('message'=>'Updated successfully','status'=>true));
    }else{
        echo json_encode(array('message'=>'Not Updated','status'=>false));
    }
?>