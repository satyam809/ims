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

        <!-- Start Campus Tour -->
        <section class="campus-tour padding-lg container"> 

            <!-- gallery filter -->
            
            <!-- end filter -->

            <ul class="gallery clearfix isotopeContainer">
                <?php 
                    $res=$obj->image_fetch();
                    
                    while($row=$res->fetch(PDO::FETCH_ASSOC)){
                    ?> 
                <li class="isotopeSelector contest">
                    <div class="overlay">
                        
                        <a class="galleryItem" href="admin/images/<?php echo $row['images'];?>"><span class="icon-enlarge-icon"></span></a>  
                    </div>
                    <figure><img src="admin/images/<?php echo $row['images'];?>" class="img-responsive" alt=""></figure>
                </li>
                <?php } ?>
            </ul>
            <div class="text-center">
                <ul class="pagination blue">
                    <li> <a href="#" aria-label="Previous"> <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i> Back</span> </a> </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li> <a href="#" aria-label="Next"> <span aria-hidden="true">Next <i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> </li>
                </ul>
            </div>
        </section>
        <!-- End Campus Tour --> 

        <!-- Start Footer -->
        <?php include 'footer.php';?>
        <!-- End Footer --> 
