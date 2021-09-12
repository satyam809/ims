<?php
require_once '../admin.php';
//$obj->check_login();
$result = $obj->download_single($_POST['id']);
if ($result != "") {
    echo json_encode($result);
}else{
    echo json_encode(array('message'=>'something wrong','status'=>false));
}
