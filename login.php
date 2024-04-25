<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <header>Login Form</header>
    <form action="login.php" method="post">
      <div class="field email">
        <div class="input-area">
          <input type="email" placeholder="Email Address" name="m" required>
          <i class="icon fas fa-envelope"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Email can't be blank</div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" placeholder="Password" name="p" required>
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Password can't be blank</div>
      </div>
      <div class="pass-txt"><a href="#">Forgot password?</a></div>
      <input type="submit" value="Login">
    </form>
    <div class="sign-txt">Not yet member? <a href="reg.php">Signup now</a></div>
  </div>

 

</body>
</html>
<?php
if(isset($_POST['m'])){
$mail=$_REQUEST['m'];
}
else{
$mail='';
}
if(isset($_POST['p'])){
$pass=$_REQUEST['p'];
}
else{
$pass='';
}
$host="127.0.0.1";
	$user="root";
	$password="";
	$db='e-learning';
	$conn=new mysqli($host,$user,$password,$db);
   	$sql='select uname from login where email="$mail" and password="$pass"';
	$result=$conn->query($sql);
	if($result->num_rows==1)
	{ 
		while($row=$result->fetch_assoc()){
     		echo  "Welcome " + $row['uname'];
		}
	}
                 else{
		echo '<script>alert("Enter Correct Details");</script>';
	}
?>