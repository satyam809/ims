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
                  <a href="#addnew" type="button" data-toggle="modal" class="btn btn-default" style="width: max-content;"> Add New</a>
                  
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
                                 <th>File Name</th>
                                 <th>File</th>
                                 <th>Action</th>
                              </thead>
                              <tbody>
                                 <?php
                                    //include('conn.php');
                                    $result=$obj->download_fetch();
                                    //$query=mysqli_query($conn,"select * from `download_table`");
                                    while($row=$result->fetch(PDO::FETCH_ASSOC)){
                                      ?>
                                 <tr>
                                    <td><?php echo $row['file_name']; ?></td>
                                    <td><?php echo $row['file'];?></td>
                                    <td>
                                       <a href="#edit<?php echo $row['download_id']; ?>" data-toggle="modal" class="btn btn-default">Edit</a>
                                       <a href="delete_download.php?id=<?php echo $row['download_id']; ?>" class="btn btn-default" onclick="return confirm('sure to delete !'); ">Delete</a>
                                       <!-- Edit -->
                                       <div class="modal fade" id="edit<?php echo $row['download_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                             <div class="modal-content">
                                                <div class="modal-header" style="border: none;">
                                                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                   
                                                </div>
                                                <div class="modal-body">
                                                   <?php
                                                      $erow=$obj->download_detail($row['download_id']);
                                                      //$edit=mysqli_query($conn,"select * from download_table where download_id='".$row['download_id']."'");
                                                      //$erow=mysqli_fetch_array($edit);
                                                      ?>
                                                   <div class="container-fluid">
                                                      <form method="POST" action="edit_download.php?id=<?php echo $erow['download_id']; ?>" enctype="multipart/form-data">
                                                         <div class="row">
                                                            <div class="col-lg-5">
                                                               <label>File Name:</label>
                                                            </div>
                                                            <div class="col-lg-7">
                                                               <input type="text" name="file_name" class="form-control" value="<?php echo $erow['file_name']; ?>" required>
                                                            </div>
                                                         </div>
                                                         <br>
                                                         <div class="row">
                                                            <div class="col-lg-5">
                                                               <label>Upload File:</label>
                                                            </div>
                                                            <div class="col-lg-7">
                                                               <input type="file"  placeholder="Upload Images" name="file" value="<?php echo $erow['file']; ?>">
                                                            </div>
                                                         </div>
                                                         
                                                   </div>
                                                </div>
                                                <div class="modal-footer" style="border: none;">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-default">Save</button>
                                                </div>
                                                </form>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- /.modal -->
                                    </td>
                                 </tr>
                                 <?php
                                    }
                                    
                                    ?>
                              </tbody>
                              
                           </table>
                           <!-- Add New -->
                           <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                 <div class="modal-content">
                                    <div class="modal-header" style="border: none;">
                                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                       
                                    </div>
                                    <div class="modal-body">
                                       <div class="container-fluid">
                                          <form method="POST" action="add_download.php" enctype="multipart/form-data">
                                             <div class="row">
                                                <div class="col-lg-5">
                                                   <label>File Name:</label>
                                                </div>
                                                <div class="col-lg-7">
                                                   <input type="text" class="form-control" name="file_name" required>
                                                </div>
                                             </div>
                                             <br>
                                             
                                             <div class="row">
                                                <div class="col-lg-5">
                                                   <label >Upload File:</label>
                                                </div>
                                                <div class="col-lg-7">
                                                   <input type="file"  placeholder="Upload File" name="file" required>
                                                   <!-- <input type="text" class="form-control" name="lastname"> -->
                                                </div>
                                             </div>
                                             
                                       </div>
                                    </div>
                                    <div class="modal-footer" style="border: none;">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-default"></span> Save</a>
                                    </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
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
         