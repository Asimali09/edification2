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
	<link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <!-- Site Icons -->
	<!-- <link rel="shortcut icon" type="image/x-icon" href="{{ url('/images/favicon.icon') }}" /> -->
  
	<link rel="apple-touch-icon"  href="{{url('/images/apple-touch-icon.png') }}" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.min.css') }}" />
    <!-- Site CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/versions.css') }}" />
    <!-- Responsive CSS -->
	<link rel="stylesheet" type="text/css" href="{{ url('/css/responsive.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ url('/css/flaticon.css') }}" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('/css/custom.css') }}" />

    <!-- Modernizer for Portfolio -->
	<link rel="stylesheet" type="text/js" href="{{ url('/js/modernizer.js') }}" />
	


    <!-- [if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif] -->
<style>
.color{
color:black;
}
</style>
</head>
<body class="host_version"> 

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Login/Register</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				
			

			
			
				
				
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
						
					


						
					</ul>
					@if(session('username')!="")
					<ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log orange" href="/logout" data-toggle="modal" data-target="#login"><span>Logout{{session('username')}}</span></a></li>
                    </ul>

					@else
					<ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log orange" href="/login"  data-target="#login"><span>Login</span></a></li>
						___
						<li><a class="hover-btn-new log orange" href="/register1" d data-target="#login"><span>Register</span></a></li>
                    </ul>
					@endif
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
    
	
	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('images/banner.png');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										<h2 style="text-align: center;"><strong>Universities </strong>of Pakistan</h2>
										<p style="text-align: center;" class="lead">A high-level educational institution in which students <br>study for degrees and academic research is done</p>
											<a href="contact1.php" class="hover-btn-new"><span>Contact Us</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="about.php" class="hover-btn-new"><span>Read More</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/banner09.png');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight" style="margin-left:40px ;">Every <strong>University in Pakistan</strong></h2>
										<p class="lead" data-animation="animated fadeInLeft"style="margin-left:43px ;">Right place to get all the info about Universities in Pakistan </p>
											<a href="contact1.php" class="hover-btn-new"><span>Contact Us</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="about.php" class="hover-btn-new"><span>Read More</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('images/slider-03.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2  data-animation="animated zoomInRight"><strong>  From where </strong> you may Graduate</h2>
										<p class="lead" data-animation="animated fadeInLeft">Choose the best University for your bright Future</p>
											<a href="contact1.php" class="hover-btn-new"><span>Contact Us</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="about.php" class="hover-btn-new"><span>Read More</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<hr>
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3><strong> EDIFICATION</strong></h3>
                    <p class="lead">Edification is a platform where you can find all the universities of pakistan in a single platform with all the information related to it. </p>
                </div>
            </div><!-- end title -->
        
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>2022 Universites in Pakistan</h4>
                        <h2>Welcome to Edification World</h2>
                        <p>Pakistan is experiencing an increase in their educational pursuits. The number of universities and degree awarding institutions keep on improving. </p>

                        <p> There are about 8,000 foreign students here, 23 public universities, and 16 private universities. More than 28% of the populations are in the university right now. Upon graduation, you don’t need a work permit to work here, but the problems is that companies and ministries mainly reserve jobs for well-placed citizens, citizens from well-to-do families, thereby making it difficult for people from poor backgrounds to get work. This is why some graduates prefer searching for jobs outside the country.</p>

                        <a href="#" class="hover-btn-new orange"><span>Learn More</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
			
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/skills.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/map.webp" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>LOOKING FOR A <strong>HIGHER UNIVERSITY?</strong></h2>
                        <p>Are you looking for the right university for your higher education?Are you an international student looking for admission in world's best universities?</p>
                        <h3><strong>Do You Know?</strong></h3>
                        <p>Top 3 Universities of Pakistan are from Islamabad.<br>#1 National University of Sciences & Technology, Islamabad<br>#2 Quaid-i-Azam University, Islamabad<br>#3 Pakistan Institute of Engineering and Sciences, Islamabad</p>

                        <a href="#" class="hover-btn-new orange"><span>Learn More</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->


	<div class="section cl">
		<div class="container">
			<div class="row text-left stat-wrap">
				

				
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->

    

   

   

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