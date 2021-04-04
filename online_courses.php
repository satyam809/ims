<!-- Start Header -->
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
               <h1>ON-LINE PERIODIC ASSESMENT</h1>
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
      
      <div class="row ">
        <?php 
         $res=$obj->online_course_fetch();
         while($row=$res->fetch(PDO::FETCH_ASSOC)){
         ?>
         <div class="col-sm-6">
            <div class="table-responsive">
               <?php echo $row['feature']; ?>
            </div>
         </div>
         <?php } ?>
      </div>
      
   </div>
</section>
<!-- End Campus Tour --> 
<!-- Start Campus Tour -->
<section class="campus-tour" style="padding-top:40px;background: #f9f9f9;">
   <div class="container">
      <!-- Start Heading -->
      <div class="row ">
         <div class="col-sm-12 head-block">
            <h3>Personalized Learning Tool:</h3>
         </div>
         <div class="col-sm-12">
            <ol class="ord-listing">
               <li><b>REMEDIAL TESTS</b> for personalized inputs based on weak areas.</li>
               <li><b>STUDY PLANNER</b> organizes the entire syllabus into topic-wise modules.</li>
               <li><b>TEST GENERATOR</b> will equip students to generate own tests with any topic/ area/ section/ sub-section/ number of question/ time etc.</li>
               <li><b>CHALLENGE ZONE</b> gives platform to learn & compete in real-time.</li>
            </ol>
         </div>
      </div>
   </div>
</section>
<!-- End Campus Tour --> 
<!-- Start Footer -->
<?php include 'footer.php';?>
<!-- End Footer -->