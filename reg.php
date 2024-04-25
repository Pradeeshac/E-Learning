<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Page</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
	<link href="newstyle.css" rel="stylesheet">
</head>
<body>
	<div class="contact-form">
		<img alt="" class="avatar" src="avatar.jpg">
		<h1>REGISTER</h1>
		<form action="homelog.php" method="post">
			<p>Name</p><input name="n" placeholder="Enter your name" type="text" required>
			<p>Email</p><input name="m" placeholder="Enter Email" type="email" required>
			<p>Select your Designation</p>
			<select name="des" id="des" required>
			<option value="student" >Student</option>
			<option value="mentor" >Mentor</option>
			</select>
			<p>Password</p><input placeholder="Enter Password" type="password" name="t1" required> 
			<p>Confirm Password</p><input placeholder="Enter Password again" type="password" name="t2" required> 
			<p><input type="checkbox">Remember Me</p>
			<input type="submit" value="Sign in" name="sub">
		</form>
	</div>
</body>
</html>
/*<?php
session_start();

$name=$_REQUEST['n'];
$mail=$_REQUEST['m'];
$pass=$_REQUEST['t1'];
$pass2=$_REQUEST['t2'];
$des=$_REQUEST['des'];
 $_SESSION['n']=$name;
 $_SESSION['ma']=$mail;
echo $pass;
$up=preg_match('/^[A-Z]*$/',$pass);
$lwr=preg_match('/^[a-z]*$/',$pass);
$num=preg_match('/^[0-9]*$/',$pass);
if($up||$lwr||$num|| strlen($pass)<8){
echo '<script>alert("- Password should be atleast 8 characters in length \n-It should include a uppercase, lowercase , numbers and special characters");</script>';
}
else{
	if($pass!=$pass2)
 	{
    		echo 'Enter Password correctly';
	}
	else{
	$host="127.0.0.1";
	$user="root";
	$password="";
	$db='e-learning';
	$conn=new mysqli($host,$user,$password,$db);
	$sql="insert into login values('$name','$mail','$pass','$des')";
	if ($conn->query($sql) === TRUE) {
     		echo  "<script>alert('Registered Successfully');</script>";
	}
	if($des=="student")
	{
	  $sql="insert into student(uname,email) values('$name','$mail')";
	  if($conn->query($sql)===TRUE)
	  {
	          echo  "<script>alert('Inserted Successfully');</script>";
	  }
	}
	}
}
?>
*/