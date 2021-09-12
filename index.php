<?php include 'header.php';?>

<!-- Start Banner Carousel -->
<div class="banner-outer">
  <div class="banner-slider">
    <div class="slide1">
      <div class="container">
        <div class="content animated fadeInRight">
          <div class="fl-right">
            <h1 class="animated fadeInRight" style="color: #2c97ea">
              Learn full stack web developemnt
              
            </h1>
            <!-- <p class="animated fadeInRight" style="color:#990000!important; font-weight:700!important;">Radpid Revision And Testing Starting from 5th March 2020</p> -->
            <a href="about.php" class="btn animated fadeInRight" target="_blank"
              >Know More <span class="icon-more-icon"></span
            ></a>
          </div>
        </div>
      </div>
    </div>
    <div class="slide2">
      <div class="container">
        <div class="content">
          <h1 class="animated fadeInUp">Learn mobile application development</h1>
          <!-- <p class="animated fadeInUp">FOR CLASS XII STUDENT START FROM MARCH 20</p> -->
          <a href="about.html" class="btn animated fadeInUp"
            >Know More <span class="icon-more-icon"></span
          ></a>
          <a
            href="gallery.php"
            class="btn white animated fadeInUp hidden-xs"
            target="_blank"
            >Take a Tour <span class="icon-more-icon"></span
          ></a>
        </div>
      </div>
    </div>
    
  </div>
</div>
<!-- End Banner Carousel -->

<!-- Start About Section -->
<section class="about">
  <div class="container">
    <ul class="row our-links">
      <li class="col-sm-4 apply-online clearfix" style="height: 184px">
        <div class="icon">
          <img
            src="images/apply-online-ico.png"
            class="img-responsive"
            alt=""
          />
        </div>
        <div class="detail">
          <h3>OUR COURSES</h3>
          <p>Lorem Ipsum is simply dummy text of the printing...</p>
          <a href="apply-online.html" class="more"
            ><i class="fa fa-angle-right" aria-hidden="true"></i
          ></a>
        </div>
      </li>
      <li class="col-sm-4 prospects clearfix" style="height: 184px">
        <div class="icon">
          <img src="images/prospects-ico.png" class="img-responsive" alt="" />
        </div>
        <div class="detail">
          <h3><span>ON-LINE PERIODIC </span>ASSESMENT</h3>
          <p>Lorem Ipsum is simply dummy text of the printing...</p>
          <a href="#" class="more"
            ><i class="fa fa-angle-right" aria-hidden="true"></i
          ></a>
        </div>
      </li>
      <li class="col-sm-4 certification clearfix" style="height: 184px">
        <div class="icon">
          <img
            src="images/certification-ico.png"
            class="img-responsive"
            alt=""
          />
        </div>
        <div class="detail">
          <h3><span>OFF-LINE PERIODIC </span> ASSESMENT</h3>
          <p>Lorem Ipsum is simply dummy text of the printing...</p>
          <a href="#" class="more"
            ><i class="fa fa-angle-right" aria-hidden="true"></i
          ></a>
        </div>
      </li>
    </ul>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-7 col-sm-push-5 left-block">
        <span class="sm-head">Premier job oriented institutes</span>
        <h2>Tech Classes</h2>
        <p>
        Tech Classes is one of the premier institutes
          for getting in the area of web and mobile application development in west delhi. The institute has been
          streaming ahead on the success track and has distinguished itself by
          setting up a new standard in the world of competitive education. The
          faculty is dedicated to enhancing the credibility and integrity of the
          field of coaching by advancing coaching research, education and
          practice. This entices a unique skill set designed to maximize the
          performance of the students in diverse arenas.
        </p>
        <div class="know-more-wrapper">
          <a href="about.html" class="know-more"
            >Know More <span class="icon-more-icon"></span
          ></a>
        </div>
      </div>
      <div class="col-sm-5 col-sm-pull-7">
        <div class="video-block">
          <div id="thumbnail_container">
            <img
              src="images/img1.jpg"
              id="thumbnail"
              class="img-responsive"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End About Section -->



<!-- Start Our Importance Section -->
<style>
    .card {
        position: relative;
    
        height: 170px;
        background: url("https://image.freepik.com/free-vector/colorful-gradient-liquid-shapes-background_23-2148250143.jpg"),
            #ffffff;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        border-radius: 25px;
        margin: 10px;
        transition: 0.25s ease-in;
    }
    
    .card .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 100%;
        height: 170px;
        background: linear-gradient(
            120.55deg,
            rgba(39, 39, 39, 0.38) 0%,
            rgba(39, 39, 39, 0.2394) 100%
        );
        border-radius: 25px;
    }
    
    .card .content {
        position: absolute;
        bottom: 45px;
        left: 95px;
    }
    
    .card .content h4 {
        font-family: Ubuntu;
        font-style: normal;
        font-weight: bold;
        font-size: 18px;
        color: #f2f2f2;
        margin-bottom: 10px;
        margin-top: 0;
    }
    
    .card .content h6 {
        font-family: Ubuntu;
        font-style: normal;
        font-weight: 500;
        font-size: 14px;
        color: #f2f2f2;
        margin-bottom: 10px;
        margin-top: 0;
    }
    
    .card .fav {
        position: absolute;
        top: 25px;
        right: 25px;
        cursor: pointer;
    }
    
    .card .fav i {
        color: white;
    }
    
    .card:hover {
        transform: scale(1.05);
    }
    
    .card:hover {
        background-position: top;
    }
    
    </style>
<section class="our-cources padding-lg">
    <h2 style="text-align: center;">Our Courses</h2>
    <div class="container">
        
        <div class="row justify-content-center">
            <?php 
            $res=$obj->our_course_fetch();
            while($row=$res->fetch(PDO::FETCH_ASSOC)){
            ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="overlay"></div>
                    <div class="content">
                        <h4><?php echo $row['course_name']; ?></h4>
                        <h6><?php echo $row['duration']; ?> | <?php echo $row['fee']; ?></h6>
                    </div>
                    
                </div>
            </div>
            <?php }?>
            
        </div>
    </div>
</section>
<!-- End Our Importance Section -->
<!-- Start Why Choose Section -->
<section class="why-choose padding-lg">
  <div class="container">
    <h2><span>The Numbers Say it All</span>Why Choose Us</h2>
    <ul class="our-strength">
      <li>
        <div class="icon"><span class="icon-certification-icon"> </span></div>
        <span class="counter">36</span>
        <div class="title">Certified Courses</div>
      </li>
      <li>
        <div class="icon"><span class="icon-student-icon"></span></div>
        <span class="counter">258,658</span>
        <div class="title">Students Enrolled</div>
      </li>
      <li>
        <div class="icon"><span class="icon-book-icon"></span></div>
        <div class="couter-outer">
          <span class="counter">95</span><span>%</span>
        </div>
        <div class="title">Passing to Universities</div>
      </li>
      <li>
        <div class="icon"><span class="icon-parents-icon"></span></div>
        <div class="couter-outer">
          <span class="counter">100</span><span>%</span>
        </div>
        <div class="title">Satisfied Parents</div>
      </li>
    </ul>
  </div>
</section>
<!-- End Why Choose Section -->
<!-- Start Campus Tour Section -->
<section class="campus-tour padding-lg">
  <div class="container">
    <h2>
      <span>Our campus have a lot to offer for our students</span>TAKE A CAMPUS
      TOUR
    </h2>
  </div>
  <ul class="gallery clearfix" id="galleryImages">
    
  </ul>
</section>
<!-- End Campus Tour Section -->
<!-- Start Footer -->
<?php include 'footer.php';?>
<script type="text/javascript">
  // fetch gallery
  function loadGalleryImages() {
    $.ajax({
      url: "admin/ajax/galleryImagesFetch.php",
      dataType: "json",
      success: function (data) {
        console.log(data);
        if (data.status == false) {
          $("#galleryImages").append("<b>" + data.message + "</b>");
        } else {
          var i = 1;
          $.each(data, function (key, value) {
            $("#galleryImages").append(`<li>
                <div class="overlay">
                    <a class="galleryItem" href="admin/images/${value.images}"><span class="icon-enlarge-icon"></span></a>
                    </div>
                    <figure><img src="admin/images/${value.images}" class="img-responsive" alt=""/>
                    </figure>
                </li>`);
            });
          i++;
        }
      },
    });
  }
  loadGalleryImages();
</script>
