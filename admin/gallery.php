
<?php include 'header.php';?>
<?php 
   
    if($_SERVER["REQUEST_METHOD"]=="POST"){
   
   //$id=$_POST['id'];
   
    $count= count($_FILES['images']['name']);
    for ($i=0; $i <$count ; $i++) 
    { 
        $photo = $_FILES['images']['name'][$i];
        $target="images/".basename($photo);
        $return_image=$obj->image_insert($photo);
        if($return_image){
            if(move_uploaded_file($_FILES["images"]["tmp_name"][$i], $target)){
              echo '<script language="javascript">';
              echo 'alert("Images uploaded Sucessfully")';
              echo '</script>';
            }
        }
    }
  }
?>
<?php 
   
    if(isset($_GET['ids'])){
      //print_r($_GET['Delete']);die;
        $id=$_GET['ids'];
        $obj->image_delete($id);
        
    }
   ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
            
            <!-- Main content -->
            <section class="content">
               <br>
                  <div class="row" style="text-align: center;">
                     <div class="col-lg-12 col-6">
                        <form action="" method="post" enctype="multipart/form-data">
                           <div class="form-group">
                              <input type="file"  placeholder="Upload Images" name="images[]" multiple>
                              <button type="submit" name="upload" class="btn btn-default">Submit</button>
                           </div>
                           
                        </form>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-12">
                        <div class="card card-primary">
                           
                           <div class="card-body">
                              <div class="row">
                                 <?php 
                                    
                                    $res=$obj->image_fetch();
                                    
                                    //$row=$res->fetch(PDO::FETCH_ASSOC);
                                    while($row=$res->fetch(PDO::FETCH_ASSOC)){
                                    ?> 
                                 <div class="col-sm-2">
                                    <a href="images/<?php echo $row['images'];?>" data-toggle="lightbox" data-gallery="gallery">
                                    <img src="images/<?php echo $row['images'];?>" class="img-fluid mb-2" alt="white sample"/>
                                    </a>
                                    <a href="gallery.php?ids=<?php echo $row['image_id'];?>" type="button" class="btn btn-default" onclick="return confirm('sure to delete !'); ">Delete</a>
                                 </div>
                                 <?php } ?>
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               
               <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
         </div>
  <!-- /.content-wrapper -->

  <?php include 'footer.php';?>
