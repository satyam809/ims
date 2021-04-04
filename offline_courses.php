<?php include 'header.php';?>
<!-- End Header --> 
<!-- Start Banner -->
<!-- <div class="inner-banner blog">
   <div class="container">
       <div class="row">
           <div class="col-sm-12">
               <div class="content">
                   <h1>Gallery</h1>
                   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
               </div>
           </div>
       </div>
   </div>
   </div> -->
<!-- End Banner --> 
<!-- Start Banner -->
<div class="inner-banner blog" style="min-height:180px;">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <div class="" style="text-align:center;">
               <h1>OFF-LINE PERIODIC ASSESMENT</h1>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End Banner --> 
<!-- Start Campus Tour -->
<section class="campus-tour container" style="padding-top:20px;">
   <div class="container">
      <!-- Start Heading -->
      <?php 
         $res=$obj->offline_course_fetch();
         while($row=$res->fetch(PDO::FETCH_ASSOC)){
         ?>
      <div class="row ">
         <div class="col-sm-12">
            <div class="table-responsive">
               <?php echo $row['feature']; ?>
            </div>
         </div>
      </div>
      <?php } ?>
   </div>
</section>
<!-- End Campus Tour --> 

<!-- Start Footer -->
<?php include 'footer.php';?>