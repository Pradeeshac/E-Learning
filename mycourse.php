<!DOCTYPE html>
<html>
	<head>
		<title>My courses</title>
		<link rel="stylesheet" type="text/css" href="home.css">
		<link rel="stylesheet" type="text/css" href="Mycourse.css">
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
			<a href="home.php" class="logo">
				<img src="logo.png" class="logo1"/>
			</a><img src="head.png" />
			<ul style="margin-top: 3%;">					
				<li><a href="home.php">Home</a></li>
				<li>
					<a href="mycourse.php">My Course</a>
				</li>
				<li><a href="AccountPage.html">Account</a></li>
				<li><a href="AboutUsPage.html">About Us</a></li>
				<li><a href="">|</a></li>
				<li class="login"><button id="ln" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" >Login</button></li>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="mycourse.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="avatar.jpg" alt="Avatar" class="avatar">
    </div>
    <div class="container">
      <label for="mail"><b>Email Id</b></label>
      <input type="email" placeholder="Enter Mail Id" name="m" required><br><br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="p" required><br><br>
        
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
      <button type="submit" class="btn" name="s" onclick()="hideLogin()">Login</button>
    
<center><span class="psw"><center><a href="registration.html">𝐍𝐄𝐖 𝐔𝐒𝐄𝐑?</a></span></center> 
</center>
</div>
</div>
<?php
if(isset($_POST["s"])){
$mail=$_REQUEST['m'];
$pass=$_REQUEST['p'];
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
     		 echo "<script>
                                         $('document').ready(function(){
		          $('#ln').click(function(){
                                             document.getElementById('ln').innerHtml= 'logout';
                                             document.getElementById('re').innerHtml=a;
		       }); });</script>";

		}
	}
                 else{
		echo '<script>alert("Enter Correct Details");</script>';
	}
}
?>
		 <li><a href="reg.php" class="signup"  id="re">Sign Up</a></li>
			</ul>			
		</div>
		
		<div class="page-container">
			
			<br>
			<br>
			<div class="container">
				<table>
					<tr>
						<td>
							<div class="video-card">
								<h2 class="video-card-content">ch1: Introduction</h2>
								<video width="700" controls>
									<source src="../Image/introduction.mp4" type="video/mp4">
									Your browser does not support HTML5 video.
								</video>
							</div>
						</td>
						<td>
							<div class="list-card" style="overflow-y: auto;">
								<h2 style="text-align: center;width: 450px;">Course List</h2>

								<button id="accordion" class="accordion">C#</button>
								<div class="panel">
									<a href="#C#_lec1">Introduction</a>
									<a href="#C#_lec2">Chapter 1</a>
									<a href="#C#_lec3">Chapter 2</a>
									<a href="#C#_lec4">Chapter 3</a>
									<a href="#C#_lec5">Chapter 4</a>
									<a href="#C#_quiz">Quiz</a>
								</div>

								<button class="accordion">java</button>
								<div class="panel">
									<a href="#Java_lec1">Introduction</a>
									<a href="#Java_lec2">Chapter 1</a>
									<a href="#Java_lec3">Chapter 2</a>
									<a href="#Java_lec4">Chapter 3</a>
									<a href="#Java_lec5">Chapter 4</a>
									<a href="#Java_quiz">Quiz</a>
								</div>

								<button class="accordion">Nodejs</button>
								<div class="panel">
									<a href="#Nodejs_lec1">Introduction</a>
									<a href="#Nodejs_lec2">Chapter 1</a>
									<a href="#Nodejs_lec3">Chapter 2</a>
									<a href="#Nodejs_lec4">Chapter 3</a>
									<a href="#Nodejs_lec5">Chapter 4</a>
									<a href="#Nodejs_quiz">Quiz</a>
								</div>
								
							</div>
						</td>
					</tr>
				</table>				
				
			</div>
			<br>
			<br>
			<br>
		</div>
		
		<div class="footer">
			<div class="footer-col1">
				<h3>Support:</h3>
				<a href="#phone"><i class="fa fa-phone"></i>&nbsp;&nbsp;+1-647 609 2674</a>
				<a href="#email"><i class="fa fa-envelope"></i>&nbsp;&nbsp;elearning@domain.com</a>				
			</div>				
			<div class="footer-col2">
				<h3>Useful Links:</h3>
				<a href="home.php">Home</a>
				<a href="mycourse.php">My Course</a>
				<a href="AccountPage.html">Account</a>
				<a href="AboutUsPage.html">About us</a>
			</div>				
			<div class="footer-col3">
				<h3>Follow us:</h3>
				<a href="https://www.facebook.com/"><i class="fa fa-facebook-f" style="color: rgb(0,135,201);"></i>&nbsp;&nbsp;Facebook</a>
				<a href="https://twitter.com/?lang=en"><i class="fa fa-twitter" style="color: rgb(0,135,201);"></i>&nbsp;Twitter</a>
			</div>				
		</div>
		<script>
			var acc = document.getElementsByClassName("accordion");
			var i;
			for (i = 0; i < acc.length; i++) {			
				acc[i].addEventListener("click", function() {
					this.classList.toggle("active");	
					var panel = this.nextElementSibling;
					if (panel.style.display === "block") {
						panel.style.display = "none";
					} else {
						panel.style.display = "block";
					}
				});
			}
		</script>
	</body>
</html>
<?php
if(isset($_POST["s"])){
$mail=$_REQUEST['m'];
$pass=$_REQUEST['p'];
echo $mail .$pass;
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
     		echo  $row["uname"];

		}
	}
                 else{
		echo '<script>alert("Enter Correct Details");</script>';
	}
}
?>