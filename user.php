<?php  
require 'config.php';
class User{
    public $con;
    public function __construct()
    {
        $this->con = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME,DB_USER,DB_PASS);
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
                    echo 'alert("Delete Sucessfully")';
                    echo '</script>';
                }
            }
        }
        
    }
    // download
    public function download_insert($file_name,$file){
     $target="download/".basename($file);
        $sql="insert into download_table (file_name, file) values ('$file_name', '$file')";//print_r($sql);
        if($this->con->query($sql)){
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $target)){
              echo '<script language="javascript">';
              echo 'alert("uploaded Sucessfully")';
              echo '</script>';
            }
        }
        header('location:upload.php'); 
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
        if(file_exists("download/$filename[file]")){
        $del_file=unlink("download/$filename[file]");
            if($del_file){
              $delete="DELETE FROM `download_table` WHERE download_id='".$id."'";
              $del_download=$this->con->query($delete);
                if($del_download){
                    echo '<script language="javascript">';
                    echo 'alert("Delete Sucessfully")';
                    echo '</script>';
                }
            }
        }
        header('location:upload.php');
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
        $target="download/".basename($file);
        $check="select * from download_table where download_id='$id'";
        $result=$this->con->query($check);
            //$result=mysqli_query($conn,$check);
            $filename=$result->fetch(PDO::FETCH_ASSOC);
            if(file_exists("download/$filename[file]")){
               if(unlink("download/$filename[file]")){
                  $sql="update download_table set file_name='$file_name', file='$file' where download_id='$id'";
                    if($this->con->query($sql)){
                        if(move_uploaded_file($_FILES["file"]["tmp_name"], $target)){
                              echo '<script language="javascript">';
                              echo 'alert("update Sucessfully")';
                              echo '</script>';
                        }
                    }
                }    
            }   
    
    header('location:upload.php');
    }
    public function contact_insert($fname,$lname,$phone,$email){
        $sql = "insert into 
                contact_table(fname,lname,phone,email)
                values('$fname','$lname','$phone','$email')";//print_r($sql);die;
                //echo '<pre>',print_r($result,1),'</pre>';
                if($this->con->query($sql)) {
                    /*$ToEmail = 'conceptasbclasses@gmail.com'; 
                    $EmailSubject = 'Site contact form'; 
                    $mailheader = "From: ".$email."\r\n"; 
                    $mailheader .= "Reply-To: ".$email."\r\n"; 
                    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
                    $MESSAGE_BODY = "Name: ".$fname." ".$lname.""; 
                    $MESSAGE_BODY .= "Phone: ".$phone.""; 
                    $MESSAGE_BODY .= "Email: ".$_email.""; */
                    
                    /*if(mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure")){*/
                    $alert="Message Sent Successfully";
                    return $alert;
                    //}
                }
                //header('location:contact.php');
    }
    /*public function contact_insert($fname,$lname,$phone,$email){
        $to = "satyamshivam570@gmail.com"; 
            $from = $email;
            $name = $name;
            $contactno = $phone;
            
            $message = $fname."whose Contact No:".$contactno."whose Email-id:".$email. "\n\n" ."";


            $headers = "From:" . $from;
            $headers2 = "From:" . $to;
            mail($to,$subject,$message,$headers);
            return true;
                
    }*/
    
    public function our_course_fetch(){
        $sql="select * from course_table where type='Our Courses'";
        $res=$this->con->query($sql);//print_r($res);die();
        return $res;
    }
    public function offline_course_fetch(){
        $sql="select * from course_table where type='Offline'";
        $res=$this->con->query($sql);
        return $res;
    }
    public function online_course_fetch(){
        $sql="select * from course_table where type='Online'";
        $res=$this->con->query($sql);
        return $res;
    }
            
}
$obj=new User();
?>