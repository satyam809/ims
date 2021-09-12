<?php include 'header.php'; ?>
<!--Content Wrapper.Contains page content -->
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
                  <tbody id="downloads_fetch">

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
                                       <label>Upload File:</label>
                                    </div>
                                    <div class="col-lg-7">
                                       <input type="file" placeholder="Upload File" name="file" required>
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
               <!-- Edit Model -->
               <div class="modal fade" id="editModal" role="dialog">
                  <div class="modal-dialog">
                     <!-- Modal content-->
                     <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>

                        </div><br>
                        <div id="edit_download_message_box" style="text-align: center;display: none;">
                           <p id="edit_download_message_show"></p>
                        </div>
                        <form id="updateDownload">

                           <div class="modal-body">
                              <div class="row">
                                 <div class="col-lg-5">
                                    <label>File Name:</label>
                                 </div>
                                 <div class="col-lg-7">
                                    <input type="text" id="ufilename" name="file_name" class="form-control" required>
                                 </div>
                              </div>


                              <input type="hidden" id="udownload_id" name="download_id" class="form-control">


                              <br>
                              <div class="row">
                                 <div class="col-lg-5">
                                    <label>Upload File:</label>
                                 </div>
                                 <div class="col-lg-7">
                                    <input type="file" placeholder="Upload Images" id="ufile" name="file">

                                 </div>
                              </div>
                           </div>
                           <div class="modal-footer">
                              <input type="submit" class="btn btn-default" value="Save">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                           </div>
                        </form>
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
<script>
   // fetch downloads
   function loadDownloads() {
      $.ajax({
         url: 'ajax/downloadsFetch.php',
         dataType: 'json',
         success: function(data) {
            //console.log(data);
            if (data.status == false) {
               $("downloads_fetch").append("<b>" + data.message + "</b>");
            } else {
               var i = 1;
               $.each(data, function(key, value) {
                  $("#downloads_fetch").append(`
                           <tr>
                              <td>${value.file_name}</td>
                              <td>${value.file}</td>
                              <td><a href="" data-toggle="modal" data-eid="${value.download_id}" data-target="#editModal" id='btn_edit' class="btn btn-default">Edit</a>
                              
                              <a href="" class="btn btn-default" onclick="return confirm('sure to delete !'); ">Delete</a></td>
                           </tr>`);
               });
               i++;
            }
         }
      });
   }
   // fetch single
   $(document).on("click", "#btn_edit", function() {
      var empid = $(this).data("eid");

      $.ajax({
         url: "ajax/downloadSingle.php",
         type: "POST",
         data: {
            id: empid
         },
         dataType: "json",
         success: function(data) {
            //console.log(data);
            $("#ufilename").val(data.file_name);
            $("#udownload_id").val(data.download_id);
            $("#ufile").val(data.file);

         }
      });
   });
   // update download
   $('#updateDownload').on('submit', function(e) {
      e.preventDefault();

      alert($('#updateDownload').serialize());
      // console.log($('#updateDownload').serialize());
      //$('#response').html($('#updateDownload').serialize());
      $.ajax({
         url: "ajax/downloadUpdate.php",
         method: "POST",
         dataType: "JSON",
         data: new FormData(this),
         contentType: false,
         //cache:false,  
         processData: false,
         success: function(data) {
            console.log(data);
            //console.log(data.status);
            if (data.status == true) {
               $("#edit_download_message_box").show();
               $("#edit_download_message_show").html(data.message);
               $('#downloads_fetch').html('');
               loadDownloads();
            } else if (data.status == false) {
               console.log(data.message);
            }
         }
      });

   });
   loadDownloads();
</script>
<?php include 'footer.php'; ?>