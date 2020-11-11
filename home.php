<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<!-- Favicon icon -->
	<link rel="icon" href="img/constNelJhoVert.jpg" type="image/x-icon">
	<!-- bootstrap -->
	<link href="./bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">

	.text h2{
		font-size: 80px;
		font-family: 'Times New Roman', Times, serif;
		text-shadow: 2px 2px yellow;
		color: blue;
		font-weight: bold;
		animation: textanimation 1s ease-in-out;
	}
	@keyframes textanimation{
		0%{
			letter-spacing: 20px;
		}
		100%{
			letter-spacing: 1px;
		}
	}
	.text p{
		font-size: 15px;
		color: white;
		font-family:Verdana, Geneva, Tahoma, sans-serif;
		font-weight: bold;
		animation: Paranimation 1s ease-in-out;
	}
	@keyframes Paranimation{
		0%{
			transform: scale(0);
		}
		100%{
			letter-spacing: 1px;
		}
	}

	#span{
			text-shadow: 2px 2px 5px yellow;
		}
	</style>
	
</head>
<header>
	 <a href="loginForm.php"><span  class="">Back to Login</span></a><br>
</header>
<body style="background-color: rgb(0, 0, 0);">
	<!-- [ welcome form start] -->
<center>
	<div class="auth-wrapper" >
	 <div class="auth-content">
	  <div class="align-items-center" >
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 mt-4">
	 	 <div class="card col-md-9 mb-4" style="background-color: rgb(0, 0, 0);">
			<div class="row text-center mb-4">
		      <div class="col-md-12 align-items-center">
				<div class="card-body">
				  <div class=" mb-4">
					<center>
	 				 <div class="form-group mb-4">
						  <div class="text">
								 <h2>Welcome !!</h2>
								 <p>Have fun and Enjoy</p>
					</div>
					</center>

 				 	<!-- <span id="span" class="mb-4"style="color: white; font-family:serif;font-size: 80px;"><strong>Welcome !!</strong></span>
 				 	<p class="mb-4"><span style="color: white;font-family:verdana;font-size:15px;">Have fun and Enjoy</span></p> -->

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
<!--   [ welcome form end ] -->
<!-- [footer start] -->
 <div class="footer text-center">
	   <p style="color:rgb(0, 0, 255); margin-top:315px;">Copyright &copy;<span>Jhonel Vertudazo</span> All Rights Reserved 2020</p>
 </div>
<!--  [footer end] -->
</body>
</html>
