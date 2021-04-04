<?php
require_once 'admin.php';
$obj->check_login();
$obj=new Admin();
extract($_POST);

// download fetch
if(isset($_POST['readrecord'])) {
	$obj->download_fetch();
						
}
// download insert
if(isset($_POST['save'])){
	$file_name=$_POST['file_name'];//print_r($file_name);die;
    $file=$_POST['file'];
    $target="download/".basename($file);
    $download_return=$obj->download_insert($file_name,$file);
    if($download_return){
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $target)){
              echo '<script language="javascript">';
              echo 'alert("Images uploaded Sucessfully")';
              echo '</script>';
            }
        }

}


///download delete
if (isset($_POST['deleteid'])) {
	//print_r($_POST['deleteid']);die();
		$userid=$_POST['deleteid'];
		//print_r($userid);die();
		$obj->download_delete($userid);
		
	}
//download get user detail
if (isset($_POST['id']) && isset($_POST['id']) != "") {
			$user_id=$_POST['id'];
			$obj->download_detail($user_id);
			
}		
else
{
	$response['status']=200;
	$response['message']="Invalid Request";
}
///download update
if (isset($_POST['hidden_user_idupd'])) {
	$hidden_user_idupd=$_POST['hidden_user_idupd'];
	$file_nameupd=$_POST['file_name'];
	$fileupd=$_POST['fileupd'];
	
    $obj->download_update($hidden_user_idupd,$file_nameupd,$fileupd);
	
}
?>