<?php 
session_start(); 
require 'config.php';
class Admin{
    public $con;
    public function __construct()
    {
        $this->con = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME,DB_USER,DB_PASS);
    }
    
    public function admin_login($username,$password){
        $query="select * from user where username='$username' and password='$password'";//print_r($query);die;
          $res=$this->con->query($query);
          //print_r(mysqli_num_rows($res));die;
          if($res->rowCount()>0){
            $_SESSION['login']=$username;
            header("location:index.php");
          }
    }
    public function check_login(){
      //print_r($_SESSION['login']);die;
      if(strlen($_SESSION['login'])==0){
        header('location:login.php');
      }
    }
    public function image_fetch(){
        $sql="select * from image_table";
        $res=$this->con->query($sql);
        return $res;
    }
    public function image_insert($photo){
        $sql="INSERT INTO `image_table`(`images`) VALUES ('$photo')";
        $image_return=$this->con->query($sql);
        return $image_return;
    }
    public function image_delete($id){
        $sql="SELECT * FROM `image_table` WHERE image_id='".$id."'";
      //$result=mysqli_query($conn,$sql);
      //print_r($sql);die;
        $result=$this->con->query($sql);
        $filename=$result->fetch(PDO::FETCH_ASSOC);//print_r($filename);die;
        if(file_exists("images/$filename[images]")){
        $del_file=unlink("images/$filename[images]");
            if($del_file){
              $delete="DELETE FROM `image_table` WHERE image_id='".$id."'";
              $del_image=$this->con->query($delete);
                if($del_image){
                    echo '<script language="javascript">';
                    echo 'alert("Delete Sucessfully");location.href="gallery.php"';
                    echo '</script>';
                }
            }
        }
        //header('location:gallery.php');
        
    }
    // download
    public function download_insert($file_name,$file){
     
     $target_file="download_file/".basename($file);
        $sql="insert into download_table (file_name,file) values ('$file_name','$file')";//print_r($sql);
        if($this->con->query($sql)){
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)){
              echo '<script language="javascript">';
              echo 'alert("uploaded Sucessfully");location.href="downloads.php"';
              echo '</script>';
            }
        }
        
    }
    public function download_fetch(){
        
        $displayquery="SELECT * FROM `download_table`";
        $result=$this->con->query($displayquery);
        //print_r($result->rowCount());die;
        return $result;
        }

    public function download_delete($id){
        $sql="select * from download_table where download_id='$id'";//print_r($sql);die;
        $result=$this->con->query($sql);
        //$result=mysqli_query($conn,$sql);
        $filename=$result->fetch(PDO::FETCH_ASSOC);//echo '<pre>',print_r($filename,1),'</pre>';die;
        if(file_exists("download_file/$filename[file]")){
        //$del_file=unlink("download/$filename[file]");
            if(unlink("download_file/$filename[file]") ){
              $delete="DELETE FROM `download_table` WHERE download_id='".$id."'";
              $del_download=$this->con->query($delete);
                if($del_download){
                    echo '<script language="javascript">';
                    echo 'alert("Delete Sucessfully");location.href="downloads.php"';
                    echo '</script>';
                }
            }
        }
        
    }

    public function download_detail($detail_ids){
        $query="SELECT * FROM download_table where download_id='$detail_ids'";
            $result=$this->con->query($query);//print_r($result);die;
            $row=$result->fetch(PDO::FETCH_ASSOC);
            return $row;
            /*$row=$result->fetch(PDO::FETCH_ASSOC);
            if($result->rowCount()> 0) {
                while(){
                    $response=$row;
                }
            }*/
            
    }

    public function download_update($id,$file_name,$file){
        if(!empty($file)){
        
            $target_file="download_file/".basename($file);//echo $target_file;
            $check="select * from download_table where download_id='$id'";//echo $check;
            $result=$this->con->query($check);//print_r($result);die;
            //$result=mysqli_query($conn,$check);
            $filename=$result->fetch(PDO::FETCH_ASSOC);
            if(file_exists("download_file/$filename[file]")){
               if(unlink("download_file/$filename[file]")){
                  $sql="update download_table set file_name='$file_name',file='$file' where download_id='$id'";//echo $sql;die;
                    if($this->con->query($sql)){
                        if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)){
                              echo '<script language="javascript">';
                              echo 'alert("update Sucessfully")';
                              echo '</script>';
                        }
                    }
                }    
            }
        }    
            elseif ($this->con->query("update download_table set file_name='$file_name' where download_id='$id'")) {
                  
                              echo '<script language="javascript">';
                              echo 'alert("update Sucessfully")';
                              echo '</script>';
                        
              }  
    
    header('location:downloads.php');
    }
    public function contact_fetch(){
        
        $displayquery="SELECT * FROM `contact_table`";
        $result=$this->con->query($displayquery);
        //print_r($result->rowCount());die;
        return $result;
    }
    public function contact_delete_all($id){
        $sql = "DELETE FROM contact_table WHERE id in ($id)";
        if($this->con->query($sql)){
        /*if(mysqli_query($obj->con, $sql)){*/
            echo $id;
        }
    }
    public function contact_export(){
        $sql = "SELECT * FROM `contact_table`";  
        $setRec = $this->con->query($sql);  
        $columnHeader = '';  
        $columnHeader = "id" . "\t" . "first name" . "\t" . "last name" . "\t" ."phone" . "\t" ."email" ."\t" ."date" ."\t";  
        $setData = '';  
          while ($rec = $setRec->fetch(PDO::FETCH_ASSOC)) {  
            $rowData = '';  
            foreach ($rec as $value) {  
                $value = '"' . $value . '"' . "\t";  
                $rowData .= $value;  
            }  
            $setData .= trim($rowData) . "\n";  
        }  
          
        header("Content-type: application/octet-stream");  
        header("Content-Disposition: attachment; filename=contact.xls");  
        header("Pragma: no-cache");  
        header("Expires: 0");  

          echo ucwords($columnHeader) . "\n" . $setData . "\n";
    }
    public function course_insert($course_name,$type,$feature){
     
        $sql="insert into course_table (course_name,type,feature) values ('$course_name','$type','$feature')";//print_r($sql);die;
        if($this->con->query($sql)){
            
              echo '<script language="javascript">';
              echo 'alert("Course Added Successfully")';
              echo '</script>';
            
        }
         
    }
    public function course_fetch(){
        
        $displayquery="SELECT * FROM `course_table`";
        $result=$this->con->query($displayquery);
        //print_r($result->rowCount());die;
        return $result;
    }
    public function course_detail($detail_ids){
        $query="SELECT * FROM course_table where course_id='$detail_ids'";
            $result=$this->con->query($query);//print_r($result);die;
            $row=$result->fetch(PDO::FETCH_ASSOC);
            return $row;
            /*$row=$result->fetch(PDO::FETCH_ASSOC);
            if($result->rowCount()> 0) {
                while(){
                    $response=$row;
                }
            }*/
            
    }

    public function course_update($id,$course_name,$type,$feature){
        $sql="update course_table set course_name='$course_name',type='$type',feature='$feature'where course_id='$id'";
                    if($this->con->query($sql)){
                              echo '<script language="javascript">';
                              echo 'alert("update Sucessfully");location.href="view_course.php"';
                              echo '</script>';
                    }

                    
    }
    public function course_delete($id){
        $sql = "DELETE FROM course_table WHERE course_id='$id'";
        if($this->con->query($sql)){
        echo '<script language="javascript">';
                              echo 'alert("Delete Sucessfully");location.href="view_course.php"';
                              echo '</script>';
        }
    }               
}
$obj=new Admin();

?>