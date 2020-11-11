<!DOCTYPE html>
<html lang="en">

<head>

	<title>Login Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<!-- Favicon icon -->
	<link rel="icon" href="img/constNelJhoVert.jpg" type="image/x-icon">

		<!-- bootstrap -->
	<link href="./bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet">
	      <!-- css style -->
	<style type="text/css">
		.form-control{
			background-color: transparent !important;
			color: blue	!important;
			font-weight: bolder !important;
			font-size: 15px !important


		}
	</style>
</head>

<!-- [ signin ] start -->
<body style="background-color: rgb(0, 0, 0);">	
 <center>
  <div class="auth-wrapper" >
   <div class="auth-content">
	  <div class="align-items-center" >
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 mt-4">
     	 <div class="card col-md-9 border-white mb-4" style="background-color: rgb(0, 0, 0);">
			<div class="row text-center mb-4">
		      <div class="col-md-12 align-items-center">
				<div class="card-body">
				  <div class=" mb-4">
     				 <div class="form-group mb-4">

     				 	<form action="Validatelogin.php" method="POST">
     				 	<h4 class="mb-4"style="color: white; font-family: verdana;"><strong>Login</strong></h4>
						<div class="form-group mb-4">
							<label class="floating-label"style="color: white;font-family: verdana;">Email Address</label>
							<input type="text" class="form-control text-center" name="email_add" required="">
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" style="color: white; font-family: verdana;">Password</label>
							<input type="password" class="form-control text-center" name="password" required="">
						</div>
						<div class="custom-control custom-checkbox text-left mb-4 mt-2">
							<input type="checkbox" class="custom-control-input" id="customCheck1">
							<label class="custom-control-label" for="customCheck1"style="color: white;background-color: "><i>Save password ?</i></label>
						</div>
						<button class="btn btn-block btn-success mb-4" type="submit" name="login" style="font-family: verdana;"><strong>Log in</strong></a></button>
						
						<p class="mb-0 "style="color: white;">Don’t have an account? <a href="UserRegistration.php" class="f-w-400" style="font-family: verdana;">Signup</a></p>
					</form>
				     </div>
		     	   </div>
				 </div>
			   </div>
			 </div>
  		    </div>
  	      </div>
        </div>
       </div>
     </div>
    </center>
 	<!--   [ signin end ]-->
 	<!--  [footer section start ]-->
  <div class="footer text-center">
	      <p style="color:rgb(0, 0, 255); margin-top: 120px;">Copyright &copy;<span>Jhonel Vertudazo</span> All Rights Reserved 2020</p>
	</div>
	<!--[ footer end ]-->
</body>
</html>
