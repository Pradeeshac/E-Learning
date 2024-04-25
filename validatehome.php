<?php
$mail=$_REQUEST['m'];
$pass=$_REQUEST['p'];
global $a;
session_start();
$host="127.0.0.1";
	$user="root";
	$password="";
	$db='e-learning';
	$conn=new mysqli($host,$user,$password,$db);
   	$sql="select uname from login where email='$mail' and password='$pass'";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{ 
		while($row=$result->fetch_assoc()){
     		      $a=$row['uname'];
		      $_SESSION['a']=$a;
		      $_SESSION['n']=$a;
		      $_SESSION['ma']=$mail;
		}
	}
                 else{
		echo '<script>alert("Enter Correct Details");</script>';
	}
	$sql="select * from student where email='$mail' ";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{ 
		while($row=$result->fetch_assoc()){
     		      $n=$row['uname'];
		$ma=$row['email'];
		$c=$row['courses'];
	
		      $_SESSION['n']=$n;
		      $_SESSION['ma']=$ma;
		      $_SESSION['c']=$c;
		} 
	}
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Online Learning - Learn anything that you want</title>
		<link rel="stylesheet" type="text/css" href="home1.css">
		<link rel="stylesheet" type="text/css" href="LoginPage.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
		body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=email], input[type=password] {
    flex-basis: 68%;
    background:transparent;
    border:0;
    outline:0;
    padding:10px 0;
    border-bottom:1px solid rgb(167, 0, 167);
    color: rgb(0, 0, 0);
    font-size:16px;
    width:70%;
}

/* Set a style for all buttons */
button {
	margin-left: 15px;
	float:right;
	color: white!important;
	background-color: rgb(0,135,201)!important;
  color: white;
  padding: 11px 25px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.btn{
  background-color:cadetblue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-style: groove;
}
button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 150%; /* Full width */
  height: 100%; /* Full height */
    overflow: auto;
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;

}

/* Modal Content/Box */
.modal-content {
  background-color:rgb(255,250,255,0.9);
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
  height:80%;
  font-family:Georgia, 'Times New Roman', Times, serif;
}
label{
    color:rgb(63, 1, 63);
}
.modal{
  width: 100%;
  padding: 10px;
}
form {
  border: 3px solid #f0cde5;
}
/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
.logo1{
height:100px;
width:150px;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
		</style>
	</head>
	<body>
		
		<div class="nav-bar">
			<a href="HomePage.html" class="logo">
				<img src="logo.png" class="logo1" />
			</a><img src="head.png" />
			<ul class="col-md-6" style="margin-top: 3%;">					
				<li><a href="home.php" class="active">Home</a></li>
				<li>
					<a href="coursepage.php">Courses</a>
				</li>
				<li><a href="AccountPage.php">Account</a></li>
				<li><a href="AboutUsPage.html">About Us</a></li>
				<li><a href="#">|</a></li>
				<li><form action="home.php"><button onclick="home.php">Logout</button></form></li>
				<li><a href="AccountPage.php" class="signup"><?php echo $a ?></a></li>
			</ul>			
		</div>
		
		<div class="page-container">
			<br><br>
			<br>
			<div class="container">
				<div>
					<img src="theme.jpg" class="themeImage"/>
				</div>
				<br>
				<!-- content -->
				<div style="margin-bottom: 30px;">
					<h3>Popular Courses</h3>
					<br>
					<table>
						<tr>
							
							<td>
								<div class="card">
								  <img src="python.jpg" class="course-image">
								  <div class="card-content">
									<h4><b>Reema Thareja</b></h4> 
									<p>Complete the Python Bootcamp: Go from zero to hero in Python 3</p> 
									<h4 style="float: right;">$ 12.99</h4>
								  </div>
								</div>
							</td>
							<td>
								<div class="card">
								  <img src="html.jpg" class="course-image">
								  <div class="card-content">
									<h4><b>Jonas Schmedtmann</b></h4> 
									<p>Build Real World Websites with HTML5 and get learn various types of tags</p> 
								
								  </div>
								</div>
							</td>
							<td>
								<div class="card">
								  <img src="css.jpg" class="course-image">
								  <div class="card-content">
									<h4><b>Jonas Schmedtmann</b></h4> 
									<p>Advanced CSS and Sass: Flexbox, Grid, Animations and More!</p> 
									
								  </div>
								</div>
							</td>
						    	<td><a href="coursepage.php"><div class="arrow_icon">
								<span class="sp"><i class="arrow right"></i></span>
								</div></a></td>
						</tr>
					</table>
					<br>
					<h3>Newly Uploaded</h3>
					<br>
					<table>
						<tr>
							<td>
								<div class="card">
								  <img src="nodejs.jpg" class="course-image">
								  <div class="card-content">
									<h4><b>Anthony Alicea</b></h4> 
									<p>Learn and Understand wheread who NodeJS is used on sever side</p> 
								  </div>
								</div>
							</td>
							<td>
								<div class="card">
								  <img src="html.jpg" class="course-image">
								  <div class="card-content">
									<h4><b>Jonas Schmedtmann</b></h4> 
									<p>Build Real World Websites with HTML5 and get learn various types of tags</p> 
									
								  </div>
								</div>
							</td>
		
							<td>
								<div class="card">
								  <img src="python.jpg" class="course-image">
								  <div class="card-content">
									<h4><b>Jose Portilla</b></h4> 
									<p>Complete the Python Bootcamp: Go from zero to hero in Python 3</p> 
									
								  </div>
								</div>
							</td><td><a href="coursepage.php"><div class="arrow_icon">
								<span class="sp"><i class="arrow right"></i></span>
								</div></a></td>
						
						</tr>
					</table>
		
					
				</div>
			</div>			
		</div>
		<br><br>
		<div class="footer">
			<div class="footer-col1">
				<h3>Support:</h3>
				<a href="#phone"><i class="fa fa-phone"></i>&nbsp;&nbsp;+1-647 609 2674</a>
				<a href="#email"><i class="fa fa-envelope"></i>&nbsp;&nbsp;elearning@domain.com</a>				
			</div>				
			<div class="footer-col2">
				<h3>Useful Links:</h3>
				<a href="home.php">Home</a>
				<a href="MyCoursePage.html">My Course</a>
				<a href="AccountPage.php">Account</a>
				<a href="AboutUsPage.html">About us</a>
			</div>				
			<div class="footer-col3">
				<h3>Follow us:</h3>
				<a href="https://www.facebook.com/"><i class="fa fa-facebook-f" style="color: rgb(0,135,201);"></i>&nbsp;&nbsp;Facebook</a>
				<a href="https://twitter.com/?lang=en"><i class="fa fa-twitter" style="color: rgb(0,135,201);"></i>&nbsp;Twitter</a>
			</div>				
		</div>
	</body>
</html>
