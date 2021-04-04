
      
      <?php include 'header.php';?>
      <!-- End Header --> 
      <br>
      <div class="container">
         <div style="box-shadow: 5px 5px 5px 5px grey;max-width:75%;padding: 15px;margin:0% 15%;">
               
               <?php 
                  $res=$obj->download_fetch();
                  while($row=$res->fetch(PDO::FETCH_ASSOC)){
                  ?>
                  <div class="row">
                    <div class="col-md-6" style="text-align: -webkit-center;">
                     <h5><?php echo $row['file_name'];?></h5>
                    </div>
                    <div class="col-md-6" style="text-align: -webkit-center;">
                     <a  href="admin/download_file/<?php echo $row['file'];?>" type="button" class="btn btn-default" download><i class="fa fa-download"></i>&nbsp;Download</a>
                    </div>
                  </div>
               <?php } ?>
               
         </div>
         <br>
      </div>
      
      <!-- Start Footer -->
      <?php include 'footer.php';?>
      <!-- End Footer --> 
      