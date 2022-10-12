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
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


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
						
					


						
				
			</div>
		</nav>
	</header>
	<!-- End header -->
    
	


 


				
			</div><!-- end row -->
		</div><!-- end container -->
	</div><!-- end section -->

    
   <br>
   <br>
   <br>
   <br>
  
<div class="container" style="height: 450px;width: 80%;background-color: lightgray;border-radius: 10px; " >
    <br>
   <h1 style="text-align: center; font-size: xx-large;font-family: 'Times New Roman', Times, serif;"><b>LOGIN</b></h1>
<form class="container" role="form" method="POST" action="{{URL::to('/signinpost')}}">
    
@csrf

  <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input type="email" name="loginemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div >

  
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="loginpassword" class="form-control" id="exampleInputPassword1" placeholder="Password">
    
  </div>
                             @if(session('error'))
							<div class="alert alert-danger" role="alert">
								<strong>{{session('error')}}</strong>
							</div>
							@endif
                            <br>
  <div class="form-check">
    <button   type="submit" name="btn"  class="btn btn-success">Login</button>
</form>
<br>

<br>
</div>
    <p style="margin-left:30px ;">Not a member? <a href="/register"><b>Register</b></a></p>
 
   <br>
   <br>
   <br>
   
   <br>
   <br>
   <br>
   
   <br>
   <br>
   <br>
   
   <br>
   <br>
   <br>
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