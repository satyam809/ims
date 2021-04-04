<?php include 'header.php';?>
<?php

      
      if(isset($_POST['submit'])){
          $fname=$_POST['fname'];
          $lname=$_POST['lname'];
          $phone=$_POST['phone'];
          $email=$_POST['email'];
        //echo $fname;echo $lname; echo $phone;echo $email;die(); 
        if(!empty($fname) && !empty($lname) && !empty($phone) && !empty($email)) {
          
            $alert=$obj->contact_insert($fname,$lname,$phone,$email);  
                
           }  
   
           
      
      }
?>
        
        <!-- end Header --> 

        <!-- Start Banner -->
        <!-- <div class="inner-banner contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-lg-9">
                        <div class="content">
                            <h1>Contact Us</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-3"> <a href="apply-online.html" class="apply-online clearfix">
                        <div class="left clearfix"> <span class="icon"><img src="images/apply-online-sm-ico.png" class="img-responsive" alt=""></span> <span class="txt">Apply Online</span> </div>
                        <div class="arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        </a></div>
                </div>
            </div>
        </div> -->
        <!-- End Banner --> 
        <div class="inner-banner contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-lg-9">
                        <div class="content">
                            <h1>Contact Us</h1>
                            <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
                        </div>
                    </div>
                    <!--<div class="col-sm-4 col-lg-3"> <a href="apply-online.html" class="apply-online clearfix">-->
                    <!--    <div class="left clearfix"> <span class="icon"><img src="images/apply-online-sm-ico.png" class="img-responsive" alt=""></span> <span class="txt">Apply Online</span> </div>-->
                    <!--    <div class="arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div>-->
                    <!--    </a></div>-->
                </div>
            </div>
        </div>
        <!-- Start Contact Us -->
        <section class="form-wrapper padding-lg">
            <div class="container">
                
                  <?php if(isset($alert)){?>
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <?php echo $alert;?>
                  </div>
                  <?php }?>
                
                <form action="" method="POST">
                    <div class="row input-row">
                        <div class="col-sm-6">
                            <input name="fname" type="text" pattern="[A-Za-z]{1,20}" placeholder="First Name" title="First name should contain only letter" required>
                            
                        </div>
                        <div class="col-sm-6">
                            <input name="lname" type="text" pattern="[A-Za-z]{1,20}" placeholder="Last Name" title="Last name should contain only letter" required>
                            
                        </div>
                    </div>
                    <div class="row input-row">
                        <div class="col-sm-6">
                            <input name="phone" type="tel" pattern="[6-9]{1}[0-9]{9}" placeholder="Phone Number" title="Enter valid phone number" required>
                            
                        </div>
                        <div class="col-sm-6">
                            <input name="email" type="email" title="Enter valid email" placeholder="Email" required>
                            
                        </div>
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="submit" name="submit" class="btn">Contact <span class="icon-more-icon"></span></button>
                            <div class="msg"></div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- end Contact Us --> 

        <!-- Start Google Map -->
        <section class="google-map">
            <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14597.687328226002!2d91.25608543038913!3d23.839150152729513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3753f43b7cce4fbb%3A0x212f0a7ff5e62755!2sConcept%20ASB%20Classes%20%26%20Animesh%20Sir&#39;s%20Biology%20Classes!5e0!3m2!1sen!2sin!4v1587784044861!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
            <div class="container">
                <div class="contact-detail">
                    <div class="address">
                        <div class="inner">
                            <h3>Concept ASB Classes</h3>
                            <p>Sankar Chowmuhani Ramnagar, Rd Number 4, Agartala, Tripura 799002</p>
                        </div>
                        <div class="inner">
                            <h3>9863052594</h3>
                        </div>
                        <div class="inner"> <a href="mailto:conceptasbclasses@gmail.com">conceptasbclasses@gmail.com</a> </div>
                    </div>
                    <div class="contact-bottom">
                        <ul class="follow-us clearfix">
                            <li><a href="https://www.facebook.com/Dr.AnimeshDey/" target="_blank"><i class="fa fa-facebook" aria-hidden="true" ></i></a></li>
                            <li><a href="https://www.instagram.com/Animesh.dey.7528/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="https://g.page/conceptasbbiology?share" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Google Map --> 

        

        <!-- Start Footer -->
       <?php include 'footer.php'?>
        <!-- End Footer --> 

        