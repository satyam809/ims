<?php include 'header.php';?>
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
          <section class="content-header">
            <div class="container-fluid">
              <div class="row">
                <!-- <div class="col-sm-6">
                  <h1>DataTables</h1>
                </div> -->
                <div class="col-md-12 center_btn">
                  <a href="add_course.php" type="button" class="btn btn-default" style="width: max-content;"> Add New Course</a>
                  
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>
            <!-- Main content -->
            
            <section class="content" style="position: relative;bottom:20px;">
               <div class="row">
                  <div class="col-md-12">
                     
                        
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                           <table id="example1" class="table table-hover ">
                              <thead>
                                 <th>Course Title</th>
                                 <th>type</th>
                                 <th>Insert Date</th>
                                 <th>Modify Date</th>
                                 <th>Action</th>
                              </thead>
                              <tbody>
                                 <?php
                                    //include('conn.php');
                                    $result=$obj->course_fetch();
                                    //$query=mysqli_query($conn,"select * from `download_table`");
                                    while($row=$result->fetch(PDO::FETCH_ASSOC)){
                                      ?>
                                 <tr>
                                    <td><?php echo $row['course_name']; ?></td>
                                    <td><?php echo $row['type'];?></td>
                                    <td><?php echo $row['insert_date'];?></td>
                                    <td><?php echo $row['modify_date'];?></td>
                                    <td>
                                       <a href="edit_course.php?id=<?php echo $row['course_id']; ?>" class="btn btn-default">Edit</a>
                                       <a href="delete_course.php?id=<?php echo $row['course_id']?>" class="btn btn-default" onclick="return confirm('sure to delete !'); ">Delete</a>
                                       
                                    </td>
                                 </tr>
                                 <?php
                                    }
                                    
                                    ?>
                              </tbody>
                              
                           </table>
                           
                        </div>
                        <!-- /.card-body -->
                     
                     <!-- /.card -->
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
        <?php include 'footer.php';?>
         