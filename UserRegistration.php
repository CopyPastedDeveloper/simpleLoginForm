<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<!-- Favicon icon -->
	<link rel="icon" href="img/constNelJhoVert.jpg" type="image/x-icon">
	<!-- bootstrap -->
	<link href="./bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet">
	<!--  css style -->
	<style type="text/css">
		.form-control{
			background-color: transparent !important;
			color: blue	!important;
			font-weight: bolder !important;
			font-size: 15px !important;

		}
	</style>
</head>
<body style="background-color: rgb(0, 0, 0);">
<!-- 	[ sign up form start ] -->
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
 				 	
 				<form action="ValidateRegistration.php" method="POST">
 				 	<h4 class="mb-4"style="color: white;font-family: verdana;"><strong>Sign up</strong></h4>
 				 	<div class="form-group mb-4">
						<label class="floating-label" style="color: white;font-family: verdana;">Name</label>
						<input type="text" class="form-control text-center" name="name" required="">
					</div> 
					<div class="form-group mb-4">
						<label class="floating-label" style="color: white;font-family: verdana;">Email Address</label>
						<input type="text" class="form-control text-center" name="email_add" required="">
					</div>
					<div class="form-group mb-4">
						<label class="floating-label" for="Password"style="color: white;font-family: verdana;">Password</label>
						<input type="password" class="form-control text-center" name="password" required="">
					</div><br/>
					
					<button type="submit" class="btn btn-success btn-block mb-4" name="signup" style="font-family: verdana;"><strong>Sign up</strong></button>
					<p class="mb-2"style="color: white;">Already have an account ? <a href="loginForm.php" class="f-w-400" style="font-family: verdana;s">Signin</a></p>
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
  </center>
<!--   [ end sign up ] -->
 <!-- [footer start] -->
 <div class="footer text-center">
	   <p style="color:rgb(0, 0, 255); margin-top: 50px;">Copyright &copy;<span>Jhonel Vertudazo</span> All Rights Reserved 2020</p>
 </div>
 <!-- [footer end] -->
</body>
</html>
