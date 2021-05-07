<!DOCTYPE html>
<html>
<head>
	<title>court case system</title>
	<link rel="stylesheet" href="assets/css/bootstrap1.min.css">
	<script src="assets/js/jquery-3.4.1.slim.min.js"></script>
	<script src="asseta/js/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>	
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<style type="text/css">
		*{
			margin: 0px;
			padding:0px;

		}
		#title-project {
			background-color: #b34700;
			color: white;
			text-align: center;
			padding: 10px;
			margin-bottom: 0px;
		}
		.main{
			width: 100%;
			height: 100vh;
			background-image: url("assets/images/pic.png");
			background-size: cover;

		}
		.nav-item:hover {
			background-color: #b34700;
		}
		.nav-item {
			padding: 10px 20px;
		}
		.nav-item:first-child {	
			margin-left: 50px;
		}
		.project-nav {
			background-color: #000;
			padding: 0px;
		}
		.navbar-right{
			margin-right: 50px;
			background-color:  #000;
			padding: 0px;
		}
		.footer-main-div{
			width: 100%;
			height: 20%;
			margin: 0px;
			background-color: lightblue;
			padding: 20px 0px;
		}
		.footer-bottom{
			width: 100%;
			background: green;
			padding: 10px;
		}
		.footer-bottom{
			font-family: blue;
			font-size: 20px;
			text-align: center;
        }
	</style>
</head>
<body class="main">
	<header>
		<div class="p-0 m-0">
		 	<h1 id="title-project"><i><strong>Court Case Management System</strong></i></h1>
		</div>
		<nav class="navbar navbar-expand-md navbar-dark project-nav">
		    <a class="navbar-brand" href="#">Carousel</a>
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		      	<span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarCollapse">
		      	<ul class="navbar-nav mr-auto">
		        	<li class="nav-item active">
		          		<a class="nav-link font-weight-bold" href="#"><i class="fa fa-home"></i>&nbsp;Home</a>
		        	</li>
		        	<li class="nav-item">
		          		<a class="nav-link font-weight-bold" href="pages/about.php"><i class="fa fa-user"></i>&nbsp;About Us</a>
		        	</li>

		        	<li class="nav-item">
		          		<a class="nav-link font-weight-bold" href="pages/contact_us.php" aria-disabled="true"><i class="fa fa-phone"></i>&nbsp;Contact Us</a>
		        	</li>
		        	<li class="nav-item">
		          		<a class="nav-link font-weight-bold" href="pages/faq.php"><i class="fa fa-question"></i>&nbsp;FAQ</a>
		        	</li>
                </ul>
                <ul class="navbar-right">
                	<li class="nav-item dropdown">
                		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-sign-in"></i>&nbsp;<strong>Login</strong></a>
                		<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		                    <li><a class="dropdown-item" href="pages/admin_login.php"><i><strong>Admin Login</strong></i></a></li>
		                    <li><a class="dropdown-item" href="pages/lawyer_login.php"><i><strong>Lawyer Login</strong></i></strong></a></li>
		                    <li><a class="dropdown-item" href="pages/client_login.php"><i><strong>Client Login</strong></i></a></li>
		                </ul>    
                	</li>	
                </ul>
		    </div>
		</nav><br><br>
				
					    	<!-- Static Header -->
                    <div class="header-text hidden-xs" style="padding: 100px;">
                        <div class="col-md-12 text-center" style="color:  green;">
                            <h1>
                                <span>WELCOME TO <Strong> JUSTICE BLIND</Strong></span>
                            </h1>
                            <br>
                         </div>
                          <div class="col-md-12 text-center" style="color: pink;">
                            <h2>
                            	<span><i><STRONG> Lawyer's creed mind your manners tell the truth know the law.The lawyer has not reached the height of his vocation who dose't find therein...scope for a peculiar but genuine artistic function.</STRONG></i></span>
                            </h2>
                            <br>
                        </div>
                        
                     </div><!-- /header-text -->
	</header>

	

</body>
<!-- Footer -->
<footer class="footer-main-div">


  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 developed By...:
    <a href="https://facebook.com"><i class="fa fa-facebook"></i> <strong>facebook.com</strong></a>
  </div>
  <!-- Copyright -->
  <div class="footer-bottom">
  	  <p><strong>Design By:</strong><strong>@ Mampi pramanick</strong></p>
  </div>

</footer>
<!-- Footer -->
</html>