<?php include 'header.php';?>
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <!-- <div class="col-sm-6">
                  <h1>DataTables</h1>
                </div> -->
                <div class="col-sm-12 center_btn" >
                  <a type="button" id="delete_records" class="btn btn-default">Delete</a>
                  <a href="export.php?export=contact" type="button" class="btn btn-default">Export</a>
                  
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>
            <!-- Main content -->
            <section class="content" style="position: relative;bottom:24px;">
               <div class="row">
                  <div class="col-12">
                     
                        
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                           <table id="example1" class="table table-hover">
                              <thead>
                                 <th><input type="checkbox" id="select_all"></th>
                                 <th>First Name</th>
                                 <th>Last Name</th>
                                 <th>Phone</th>
                                 <th>Email</th>
                                 <th>Date</th>
                              </thead>
                              <tbody>
                                 <?php
                                    //include('conn.php');
                                    $result=$obj->contact_fetch();
                                    //$query=mysqli_query($conn,"select * from `download_table`");
                                    while($row=$result->fetch(PDO::FETCH_ASSOC)){
                                      ?>
                                 <tr  id="<?php echo $row['id']; ?>">
                                    <td><input type="checkbox" class="con_checkbox" data-con-id="<?php echo $row['id']; ?>"></td>
                                    <td><?php echo $row['fname']; ?></td>
                                    <td><?php echo $row['lname'];?></td>
                                    <td><?php echo $row['phone'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td><?php echo $row['date'];?></td>
                                    
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
         <!-- Control Sidebar -->
         
      
      <script>
         $(document).ready(function() {
            /* delete selected records*/
            $('#delete_records').on('click', function(e) {
                var contact = [];
                $(".con_checkbox:checked").each(function() {
                    contact.push($(this).data('con-id'));
                });
                if(contact.length <=0) {
                    alert("Please select records."); 
                } 
                else { 
                    WRN_PROFILE_DELETE = "Are you sure you want to delete "+(contact.length>1?"these":"this")+" row?";
                    var checked = confirm(WRN_PROFILE_DELETE);
                    if(checked == true) {
                        var selected_values = contact.join(",");//alert(selected_values);
                        $.ajax({
                            type: "POST",
                            url: "delete_all_contact.php",
                            cache:false,
                            data: 'id='+selected_values,
                            success: function(response) {
                                /* remove deleted vendor rows*/
                                var ids = response.split(",");
                                for (var i=0; i < ids.length; i++ ) {   
                                    $("#"+ids[i]).remove(); 
                                }   
                            } 
                        });
                    } 
                } 
            });
         });    
         $(document).on('click', '#select_all', function() {
            $(".con_checkbox").prop("checked", this.checked);
            $("#select_count").html($("input.con_checkbox:checked").length+" Selected");
         });
         $(document).on('click', '.con_checkbox', function() {
            if ($('.con_checkbox:checked').length == $('.con_checkbox').length) {
            $('#select_all').prop('checked', true);
            } else {
            $('#select_all').prop('checked', false);
            }
            $("#select_count").html($("input.con_checkbox:checked").length+" Selected");
         });
      </script>
   