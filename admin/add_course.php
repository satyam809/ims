<?php include 'header.php'?>
<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $course_name=$_POST['course_name'];//echo $course_name;
  
  $type=$_POST['type'];//echo $type;
  $feature=$_POST['feature'];
  
  $obj->course_insert($course_name,$type,$feature);
}
?>

         <!-- Content Wrapper. Contains page content -->
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
                  <div class="col-md-8">
                     <div class="form-group">
                        <label>Course title(only for our courses)</label>
                        <input type="text" class="form-control" name="course_name" value="" placeholder="Enter Course Name">
                     </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                        <label>Select Course Type</label>
                        <select class="form-control" name="type" required>
                          <option>Select Course Type</option>
                          <option>Online</option>
                          <option>Offline</option>
                          <option>Our Courses</option>
                        </select>
                      </div>
                     
                  </div>
               </div>
               
               <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                        <label>Course Feature</label>
                     <div class="card card-outline card-info">
                        <div class="card-body pad">
                           <div class="mb-3">
                              <textarea class="textarea" placeholder="Enter Course Description" name="feature" 
                               style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
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
       