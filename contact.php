<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Beats By Dr Murray - Contact</title>
<!--
Classic Template
http://www.templatemo.com/tm-488-classic
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>
    <body>
    <div class= "main-container">
	<div class ="container-fluid">
		<div align=right>
		<?php 
            if(empty($_SESSION['accType']))
            {
                echo '<input type = "button" value = "Login" onclick="window.location=\'login.php\'"/>';
            }
            else
            {
            
            }
             ?> 
		</div>

		<div id="id01" class="modal">

  			<form class="modal-content animate" action="/action_page.php">
			<div class="avatarcontainer">
				<span onclick="document.getElementById('id01').style.display='none'"class="close" title="Close Modal">&times;</span>
      				<img src="img/login-avatar.png" alt="Avatar" class="avatar">
    			</div>

    			<div class="container">
     	 			<label for="uname"><b>Username</b></label>
      				<input type="text" placeholder="Enter Username" name="uname" required>

      				<label for="psw"><b>Password</b></label>
      				<input type="password" placeholder="Enter Password" name="psw" required>

      				<button type="submit">Login</button>
    			</div>

   			<div class="container" style="background-color:#f1f1f1">
      				<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      				<span class="psw">Forgot <a href="#">password?</a></span>
    			</div>
  		</form>
		</div>
		<div id="id02" class="modal">
  			<form class="modal-content animate">
			<div class="avatarcontainer">
				<span onclick="document.getElementById('id02').style.display='none'"class="close" title="Close Modal">&times;</span>
    			</div>
			
			<div class="container">
				<b>Placeholder</b>
			</div>
   			<div class="container" style="background-color:#f1f1f1">
      				<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    			</div>
  			</form>
		</div>
	</div>
        <div class="header">
            <div class="container-fluid">
                <div class="header-inner">
		    <img src="img/Logo.svg" class="logo-image">
                    
                    <!-- navbar -->
                    <nav class="navbar main-nav">

                        <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#Navbar">
                            &#9776;
                        </button>
                        
                        <div class="collapse navbar-toggleable-sm" id="Navbar">
                            <ul class="nav navbar-nav">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="product.php" class="nav-link">Products</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="about.php" class="nav-link">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="repair.php" class="nav-link">Repair</a>
                                </li>
				                    <li class="nav-item active">
                                    <a href="contact.php" class="nav-link">Contact</a>
                                </li>
                                <li class="nav-item">
                                <?php
            
                                if(empty($_SESSION['accType']))
                                {
                                    
                                }
                                else if($_SESSION['accType'] == "employee")
                                {
                                    echo '<a href="employee.php" class="nav-link">Employee</a>';
                                }
                                else if($_SESSION['accType'] == "manager")
                                {
                                    echo '<a href="manager.php" class="nav-link">Manager</a>';
                                }
                                
                                ?>
                                </li>
                            </ul>                        
                        </div>
                        
                    </nav>  

                </div>                                  
            </div>            
        </div>
        <div class="contact-img-container">
            
           
        </div>

        <section class="section">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                                  <div class="blog-post">
                            <ul class="nav navbar-nav">
                            <h2 class="gold-text">Contact Us</h2>
                                <li>enquiries@murraybeats.com</li>
                                <li>For general enquiries call: 0138 243 2967</li>
                                <li>For specific branch information see below</li>
                                <br>
                            <h3 class="gold-text">Our Locations</h3>
                                                        
                                <li><u>Dundee Branch (Headquarters)</u></li>
                                <li>8 Address Street</li>
                                <li>Dundee, DD1 4DE</li>
                                <li>0138 243 2967</li>
                                <br>
                                <li><u>Glasgow Branch</u></li>
                                <li>9 Muzzlow Street</li>
                                <li>Glasgow, G1 5EB</li>
                                <li>0141 534 2974</li>
                                <br>
                                <li><u>Edinburgh Branch</u></li>
                                <li>9 Radbar Street</li>
                                <li>Edinburgh, EH4 9EN</li>
                                <li>0131 575 1496</li>
                                <br>
                                <li><u>Aberdeen Branch</u></li>
                                <li>9 Bingo Street</li>
                                <li>Aberdeen, AB4 5EB</li>
                                <li>0122 454 2494</li>
                                <br>
                            <h3 class="gold-text">Social Media</h3>
                                <li>Twitter: @MurrayBeats</li>
                                <li>Facebook: MurrayBeats</li>
                                <li>Instagram @MurrayBeats</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="footer-content-box">
                            <h3 class="title footer-content-box-title">Social</h3>
                            <ul class="nav">
                                <li>Twitter: @MurrayBeats</li>
                                <li>Facebook: MurrayBeats</li>
                                <li>Instagram @MurrayBeats</li>
                            </ul>   
                        </div>
                        
                                                
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="footer-content-box footer-links-container">
                            <h3 class="title footer-content-box-title">Shipping and Returns</h3>
                             <ul class="nav">
                                <li>Return Packages to:</li>
                                <li>8 Address Street, Dundee</li>
                                <li>DD1 43E</li>
                            </ul> 
                            
                            
                        </div>
                        
                    </div>

                    <!-- Add the extra clearfix for only the required viewport 
                        http://stackoverflow.com/questions/24590222/bootstrap-3-grid-with-different-height-in-each-item-is-it-solvable-using-only
                    -->
                    <div class="clearfix hidden-lg-up"></div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="footer-content-box">
                            <h3 class="title footer-content-box-title">Leave a Review</h3>
                            <ul class="nav">
                                <li>TrustPilot: TrustPilot.com/BBM</li>
                            </ul> 
                            <!--<a href="#" class="btn btn-gray text-uppercase">Read More</a>-->
                        </div>
                        
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="footer-content-box">
                        
                            <h3 class="title footer-content-box-title">Support</h3>
                            <ul class="nav">
                                <li>support@MurrayBeats.com</li>
                            </ul> 
                            
                            <!--<a href="#" class="btn btn-gray text-uppercase"></a>-->

                        </div>
                        
                    </div>


                </div>
            <div class="row">
                    <div class="col-xs-12 copyright-col">
                        <p class="copyright-text">Copyright 2019 Beats by Dr Murray</p>
                    </div>
            </div>
            </div>
            
            
        </footer>

        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
        <script src="js/bootstrap.min.js"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
</div>   
</body>
</html>
