<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Recipes</title>
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
	// Prevent dropdown menu from closing when click inside the form
	$(document).on("click", ".navbar-right .dropdown-menu", function(e){
		e.stopPropagation();
	});
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
</head> 
<body>
<!-- Include Header Nav bar -->
<?php include 'Source/navbar.php'; ?>

<!--Silder Part-->
<div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <img src="slide1.jpg" alt="First Slide">
            </div>
            <div class="item">
                <img src="slide2.jpg" alt="Second Slide">
            </div>
            <div class="item">
                <img src="slide3.png" alt="Third Slide">
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
<!-- End of Silder Part -->

<!-- Subscribe -->

<!-- Subscribe end -->

<!-- Modal Contact us -->
<div id="contactUs" class="modal fade">
	<div class="modal-dialog modal-lg contact-modal">
		<div class="modal-content">
            <form action="" method="post" id="fr1">
                <div class="modal-header">				
                    <h4 class="modal-title">Send Us a Message</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputName" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputEmail" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" id="inputMessage" placeholder="Message" required></textarea>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="modal-footer">
 <input type="button" class="btn btn-link" data-dismiss="modal" value="Cancel">
                    	<input type="submit" class="btn btn-primary" id="bt1" value="Send">
                    </div>
            </form>
		</div>
	</div>
</div>
<script>
  $(document).ready(function() {
    $('#bt1').click(function() {
        $('#fr1').attr('action',
                       'mailto:preethikurdunje@gmail.com?subject=' +
                       $('#inputName').val() + '&body=' + $('#inputMessage').val());
        $('#fr1').submit();
    });
});
</script>
<!-- End contact us-->

<!-- Onhover slider-->
<section class="container" style="margin-top: -155px;">
      <div class="bg-white box-shadow py-5 px-4 px-sm-5">
        <div class="row" style="box-shadow: 0px 0px 20px black;">
          <div class="col-md-6 pb-4 mb-3">
            <h5><span class="d-inline-block bg-info text-white px-2 py-1"></span><b><a href="categoryNorth.php" style="color:black;">North Indian</a></b></h5>
            <p class="text-muted pb-3">North Indian cuisine is  a part of Indian cuisine, from the region of Northern  India which includes the  Pakistani provinces: Punjab, AJK and Indian states and union territories: Jammu and Kashmir, Punjab, Chandigarh, Haryana, Himachal  Pradesh, Rajasthan, Uttarakhand, Delhi  and Uttar Pradesh .This is also a major cuisine in the Northern-Eastern regions like western Bihar, as  well  as central regions like  Madhya  Pradesh.North Indian cuisine has strong Central Asian influences as compared to its southern counterpart.</p>
            <hr>
          </div>
          <div class="col-md-6 pb-4 mb-3">
            <h5><span class="d-inline-block bg-warning text-white px-2 py-1"></span><a href="categorySouth.php" style="color:black;"><b> South Indian</b></a> </h5>
            <p class="text-muted pb-3">South Indian cuisine includes the cuisines of the five southern states of India—Andhra Pradesh, Karnataka, Kerala, Tamil Nadu and Telangana—and the union territories of Lakshadweep , Pondicherry , and the Andaman and Nicobar Islands.The similarities among the five state's  cuisines  include the presence of rice as a staple food, the use of lentils  and spices, dried red chilies and fresh green chilies, coconut, and native fruits and vegetables including tamarind, plantain, snake  gourd, garlic, and  ginger.The four cuisines have much in common and differ primarily in the spiciness of the food.</p>
            <hr>
          </div>
          <div class="col-md-6 pb-4 mb-3">
            <h5><span class="d-inline-block bg-accent text-white px-3 py-1"></span><b><a href="categoryHealthy.php" style="color:black;">Healthy Food</b></a></h5>
            <p class="text-muted pb-3">Health food is a marketing term to suggest human health effects beyond a normal healthy diet required for human nutrition. Foods marketed as health foods may be part of one or more categories, such as natural foods, organic foods, whole foods, vegetarian foods or dietary supplements.</p>
          </div>
          <div class="col-md-6 pb-4 mb-3">
            <h5><span class="d-inline-block bg-success text-white px-2 py-1"></span><b><a href="categoryEasy.php" style="color:black;">Easy recipes</b></a></h5>
            <p class="text-muted pb-3">A recipe is a set of instructions that describes how to prepare or make something, especially a culinary dish. It is also used in medicine or in information technology.Easy recipes is the category where begginers can find  recipes that are easier to prepare.</p>
          </div>
      </div>
    </section>
<!-- End of Onhover slider-->

<!-- Gallary-->
<div class="container" id="gallary">
	<div class="row">
		<div class="site-heading text-center">
				<h3>Gallary</h3>
				<p>You eat with your eyes first....Continue watching gallary... </p>
				<button type="button" class="btn btn-primary" style="border-radius: 50px;"><a href="gallary.html" style="color: white">See More</a></button>
				<hr>
		</div>
	</div>	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-6 shine_me">
    	    <img src="gall1.jpg" class="img-responsive"/>
            <i class="shine_effect"></i>
		</div>
        <div class="colm-d-4 col-sm-4 col-xs-6 shine_me">
            <img src="gall2.jpg" class="img-responsive"/>
            <i class="shine_effect"></i>
		</div>
        <div class="col-md-4 col-sm-4 col-xs-6 shine_me">
            <img src="gall3.jpg" class="img-responsive"/>
            <i class="shine_effect"></i>
		</div>
        <div class="col-md-4 col-sm-4 col-xs-6 shine_me">
            <img src="gall4.jpg" class="img-responsive"/>
            <i class="shine_effect"></i>
		</div>
        <div class="col-md-4 col-sm-4 col-xs-6 shine_me">
            <img src="gall5.jpg" class="img-responsive"/>
            <i class="shine_effect"></i>
		</div>
        <div class="col-md-4 col-sm-4 col-xs-6 shine_me">
            <img src="gall6.jpg" class="img-responsive"/>
            <i class="shine_effect"></i>
		</div>
	</div>
</div>
<!-- Gallary End-->

<!--Our Team-->
<section class="team" id="team">
  <div class="container">
  		<div class="row">
			<div class="site-heading text-center">
					<h3>Our Team</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt <br> ut labore et dolore magna aliqua. Ut enim ad minim </p><hr>
			</div>
		</div>
    <div class="row">
      <div class="">
        <div class="col-lg-12">
          <div class="row pt-md">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="me.png" class="img-responsive" height="700">
                <ul class="text-center">
                  <a href="http://www.facebook.com"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="https://twitter.com/login?lang=en"><li><i class="fa fa-twitter"></i></li></a>
                  <a href="https://www.linkedin.com/uas/login?trk=nav_header_signin"><li><i class="fa fa-linkedin"></i></li></a>
                </ul>
              </div>
              <h1>Preethi Shetty</h1>
              <h2>Web Developer</h2>
              <p>Ambedkar institute of technology Bangalore.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="latha.jpg" class="img-responsive">
                <ul class="text-center">
                  <a href="http://www.facebook.com"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="https://twitter.com/login?lang=en"><li><i class="fa fa-twitter"></i></li></a>
                  <a href="https://www.linkedin.com/uas/login?trk=nav_header_signin"><li><i class="fa fa-linkedin"></i></li></a>
                </ul>
              </div>
              <h1>lathashree s</h1>
              <h2>Fullstack Developer</h2>
              <p>Ambedkar institute of technology Bangalore.</p>
            </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Our Team end-->

<!-- footer -->
    <div class="footer" style="width:100%">
        <div class="container">
            <hr class="footer-line">
            <div class="row ">
                <!-- footer-about -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                    <div class="footer-widget ">
                        <div class="footer-title">Company</div>
                        <ul class="list-unstyled">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Legal & Privacy</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-about -->
                <!-- footer-links -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                    <div class="footer-widget ">
                        <div class="footer-title">Quick Links</div>
                        <ul class="list-unstyled">
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-links -->
                <!-- footer-links -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                    <div class="footer-widget ">
                        <div class="footer-title">Social</div>
                        <ul class="list-unstyled">
                            <li><a href="https://twitter.com/login?lang=en">Twitter</a></li>
                            <li><a href="https://accounts.google.com">Google +</a></li>
                            <li><a href="https://www.linkedin.com/uas/login?trk=nav_header_signin">Linked In</a></li>
                            <li><a href="http://www.facebook.com">Facebook</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-links -->
                <!-- footer-links -->
               
                <!-- /.footer-links -->
                <!-- tiny-footer -->
            </div>
            <div class="row ">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center ">
                    <div class="tiny-footer">
                        <p>Copyright © All Rights Reserved 2020 | Template Design & Development by <a href="https://easetemplate.com/downloads/bitcoin-cryptocurrency-website-template-amazing-design " target="_blank" class="copyrightlink">EaseTemplate</a></p>
                    </div>
                </div>
                <!-- /. tiny-footer -->
            </div>
        </div>
    </div>
    <!-- /.footer -->
</body>
</html>                                                                                    