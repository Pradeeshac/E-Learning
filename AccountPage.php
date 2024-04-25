<?php
session_start();
$b=$_SESSION['a'];
	$host="127.0.0.1";
	$user="root";
	$password="";
	$db='e-learning';
	$conn=new mysqli($host,$user,$password,$db);
	$sql="select email,courses from student where uname='$b'";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{ 
		while($row=$result->fetch_assoc()){
		      $ma=$row['email'];
		      $courses=$row['courses'];
		}
	}			
?>
<!DOCTYPE html>
<html>
	<head>
		<title>My Account</title>
		<link rel="stylesheet" type="text/css" href="home1.css">
		<link rel="stylesheet" type="text/css" href="LoginPage.css">
		<link rel="stylesheet" type="text/css" href="AccountPAge.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>		
		<div class="nav-bar">
			<a href="home.php" class="logo">
				<img src="logo.png" class="logo1" />
				
			</a><img src="head.png" />
			<ul style="margin-top: 3%;">					
				<li><a href="home.php">Home</a></li>
				<li>
					<a href="coursepage.php">Courses</a>
				</li>
				<li><a href="AccountPage.php">Account</a></li>
				<li><a href="AboutUsPage.html">About Us</a></li>
				<li><form action="enroll.php"><button onclick="enroll.php" class="btn-blue">Enroll Courses</button></form></li>
				<li><a href="#">|</a></li>
				<li><form action="home.php"><button onclick="home.php" class="btn-blue">Logout</button></form></li>
				<li><a href="AccountPage.php" class="signup"><?php echo $b ?></a></li>
			</ul>			
		</div>
		
		<div class="page-container">
			
			<br>
			<br>
			<br>
			<form action="homelog.php">
				<div class="container">
				
					<table>
						<tr>
							<td>
								<div class="profile-card1">
									<div class="profile-card-content1">
										<h2><b><?php echo "Welcome ".$b ?></b></h4> 
										<button class="btn-blue">Student</button> 
								  </div>
								</div>							
							</td>
							<td>
								<div class="profile-card2">
									<div class="profile-card-content2">
										<h3 class="form-title" style="text-align:center">Profile Info</h3>
										<p>User Name</p>
										<input class="form-control" type="text" value="<?php echo $b ?>" name="firstName">
										<p>Email Id</p>
										<input class="form-control" type="email" value="<?php echo $ma ?>" name="lastName">
										<p>Enrolled Courses</p>
										<?php echo "<h2>$courses </h2>" ?>									
									</div>
								</div>	
							</td>
						</tr>
					</table>
					<br>
					<br>

					<button class="btn-blue" style="float:right">Unenroll courses</button>
					<button class="btn-blue" style="float:right">SAVE</button>
					
				</div>
			</form>
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