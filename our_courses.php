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
<!-- Start Campus Tour -->
<section class="campus-tour" style="padding-top:20px;">
   <div class="container">
      <!-- Start Heading -->
      
      <div class="row">
        <?php 
         $res=$obj->our_course_fetch();
         while($row=$res->fetch(PDO::FETCH_ASSOC)){
         ?>
         <div class="col-sm-3 heading-group " >
            <div class="imp-note" style="height: auto;background: #f9f9f9;border: 1px solid #dedfe0;text-align:center;">
               <h1 style="font-size:15px;"><?php echo $row['course_name']; ?></h1>
               <p style="font-size: 16px;color: #2c4754;">What you'll learn</p>
               <p style="font-size: 16px;color: #2c4754;"><?php echo $row['duration'];?> | <?php echo $row['fee'];?></button></p>
               <?php echo $row['feature']; ?>
           </div>
         </div>
         
         <!-- <div class="col-sm-5 heading-group imp-note">
            <h1 style="font-size:20px;">FOUNDATION COURSE FOR UG-NEET (STD XI /FOR 24 MONTHS)</h1>
            <p>Course Feature</p>
            <ul class="privacy-listing">
               <li>Intensive classroom teaching</li>
               <li>Resourceful & precise subject modules</li>
               <li>Daily practice problems</li>
               <li>Regular Periodic Assessment Tests</li>
               <li>App-based online Assessment Tests with FREE TABLET.</li>
            </ul>
         </div> -->
         <?php }?>
      </div>
     
   </div>
</section>
<!-- End Campus Tour --> 
<!-- Start Campus Tour -->

<!-- End Campus Tour --> 
<!-- Start Campus Tour -->

<!-- End Campus Tour --> 
<!-- Start Footer -->
<?php include 'footer.php';?>
<!-- End Footer -->