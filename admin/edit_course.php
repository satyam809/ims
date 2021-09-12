<?php include 'header.php';?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $id=$_GET['id'];
  $course_name=$_POST['course_name'];//echo $course_name;
  
  $fee=$_POST['fee'];//echo $fee;die;
  $duration=$_POST['duration'];
  $feature=$_POST['feature'];
  
  $obj->course_update($id,$course_name,$fee,$duration,$feature);
}
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $row=$obj->course_detail($id);
}

?>
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <a href="add_course.php" type="button" class="btn btn-default">Add Course</a>
                     </div>
                  </div>
               </div>
               <!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
              <form action="" method="post" enctype="multipart/form-data">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>Course title</label>
                        <input type="text" class="form-control" name="course_name" value="<?php echo $row['course_name'];?>" placeholder="Enter Course Name">
                     </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                        <label>Course Fee</label>
                        <input type="text" class="form-control" name="fee" value="<?php echo $row['fee'];?>" placeholder="Enter Course Fee">
                        <!-- <select class="form-control" name="type">
                          <option>Select Course Type</option>
                          <option <?php //if($row['type']=="Online") echo 'selected="selected"'; ?>>Online</option>
                          <option <?php //if($row['type']=="Offline") echo 'selected="selected"'; ?> >Offline</option>
                          <option <?php //if($row['type']=="Our Courses") echo 'selected="selected"'; ?> >Our Courses</option>
                        </select> -->
                      </div>
                     
                  </div>
                  <div class="col-md-3">
                     <div class="form-group">
                        <label>Course duration</label>
                        <input type="text" class="form-control" name="duration" value="<?php echo $row['duration'];?>" placeholder="Enter Course Duration">
                     </div>
                  </div>
               </div>
               
               <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                        <label>Course Details</label>
                     <div class="card card-outline card-info">
                        <div class="card-body pad">
                           <div class="mb-3">
                              <textarea class="textarea" placeholder="Enter Course Description" name="feature" 
                                 style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $row['feature'];?></textarea>
                           </div>
                        </div>
                     </div>
                   </div>
                  </div>
                  <!-- /.col-->
               </div>
               
               <button type="submit" class="btn btn-default">Save</button>
             </form>
               <!-- ./row -->
            </section>
            <!-- /.content -->
         </div><br>
         <!-- /.content-wrapper -->
         <?php include 'footer.php'?>
         
   </body>
</html>