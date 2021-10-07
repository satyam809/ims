<?php

define('path', 'C:/xampp/htdocs/myproject/ims/');
require_once path . 'admin/admin.php';
if ($obj->contact_insert($_POST['fname'], $_POST['lname'], $_POST['phone'], $_POST['email'])) {
    echo json_encode(array("message" => "hello " . $_POST['fname'] . "," . " we will contact you soon", "status" => true));
} else {
    echo json_encode(array("message" => "Something wrong", "status" => false));
}
