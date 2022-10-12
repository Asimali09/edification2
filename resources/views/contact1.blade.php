

<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Edification</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
	<link rel="shortcut icon" type="image/x-icon"href="/images/university-academy-school-and-course-logo-design-template-2F9CH4W-removebg-preview.png" />
  
  <link rel="apple-touch-icon"  href="{{ url('/images/apple-touch-icon.png') }}" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.min.css') }}" />
  <!-- Site CSS -->
  <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
  <!-- ALL VERSION CSS -->
  <link rel="stylesheet" type="text/css" href="{{ url('/css/versions.css') }}" />
  <!-- Responsive CSS -->
  <link rel="stylesheet" type="text/css" href="{{ url('/css/responsive.css') }}" />
  
	<link rel="stylesheet" type="text/css" href="{{ url('/css/responsive.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ url('/css/flaticon.css') }}" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="{{ url('/css/custom.css') }}" />

  <!-- Modernizer for Portfolio -->
  <link rel="stylesheet" type="text/js" href="{{ url('/js/modernizer.js') }}" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 

	
	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Customer Login</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				
			
				<ul class="nav nav-tabs">
			
			</ul>
			

			
			
				
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login" >
						<form role="form" method="POST" action="login.php" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email1" placeholder="Email" name="email"  aria-describedby="helpId" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="exampleInputPassword1" placeholder="Password" name="upass"  aria-describedby="helpId" type="password">
								</div>
							</div>
							
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" name="btn" class="btn btn-light btn-radius btn-brd grd1">
										Submit
									</button>
									<a class="for-pwd" href="javascript:;">Forgot your password?</a>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form role="form" action="register.php" method="Post" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Name" name="name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-10">
									<input class="form-control" id="email" name="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="mobile" name="mobile"  placeholder="Mobile" type="phone">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" name="password" placeholder="Password" type="password">
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="submit" name="reg" class="btn btn-light btn-radius btn-brd grd1">
										Submit
									</button>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Cancel</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

	<!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	

    <!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">
					<img style="height:90px;width: 150px;padding: auto; border-radius: 10px;" src="images/university-academy-school-and-course-logo-design-template-2F9CH4W-removebg-preview.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item color"><a class="nav-link" href="index">Home</a></li>
						<li class="nav-item color"><a class="nav-link" href="about">About Us</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">CITIES </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item color" href="course-grid-2">KARACHI </a>
								<a class="dropdown-item color" href="course-grid-3">MULTAN </a>
								<a class="dropdown-item" href="course-grid-4">FAISLABAD</a>
								<a class="dropdown-item" href="course-grid-5">LAHORE</a>
								<a class="dropdown-item" href="course-grid-6">RAWALPINDI</a>
								<a class="dropdown-item" href="course-grid-7">ISLAMABAD</a>
								<a class="dropdown-item" href="course-grid-8">PESHAWAR</a>
								
							</div>
						</li>
						
					


						<li class="nav-item"><a class="nav-link" href="contact1">Contact</a></li>
					</ul>
				
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	
	
    <div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Need Help? Sure we are Online!</h3>
                <p class="lead"></p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="" action="{{URL::TO('/insert')}}" name="contactform" method="post">
						@csrf
                            <div class="row row-fluid">
                                <div  class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text"  name="first_name" id="first_name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="number" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                                </div>
                                <div class="text-center pd">
                                    <button type="submit" name="Send" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end col -->
				 
				<iframe style="margin-left:700px ;margin-top: -465px"  src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d57901.43893333585!2d66.95791212864816!3d24.90344096426712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1suniversity!5e0!3m2!1sen!2s!4v1658400935526!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				
				</div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	

</div><!-- end row -->
</div><!-- end container -->
</div><!-- end section -->





    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About Edification</h3>
                        </div>
                        <p>Edification is a platform where you can find all the universities of pakistan in a single platform with all the information related to it. </p>   
						<div class="footer-right">
							<ul class="footer-links-soi">
								<li><a href="https://www.facebook.com/login/" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a></li>
								<li><a href="https://twitter.com/login" target="_blank"><i class="fa fa-twitter"></i></a></li>
								
							</ul><!-- end links -->
						</div>						
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
							<li><a href="contact1.php">Contact</a></li>
					
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a target="_blank" href="https://accounts.google.com/ServiceLogin/identifier?service=mail&passive=1209600&osid=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F%3Ftab%3Drm%26ogbl&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F%3Ftab%3Drm%26ogbl&emr=1&ifkv=AQN2RmXUJ0fzZkg4_ZC4wrsJQoLgFPXOapu_fIEQFiE3FKUNX0BB0bhC0dgUg3Q2Qpqzg6x-YVck&flowName=GlifWebSignIn&flowEntry=ServiceLogin">GMAIL</a></li> 
                            <li><a target="_blank" href="https://www.youtube.com/">YOUTUBE</a></li>
                       
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">Created in &copy; 2022 <a href="file:///D:/edification/umairali/index.php">By Edification</a> Team : <a href="">A&U</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>
</html>



