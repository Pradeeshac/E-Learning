<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration Page</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
	<link href="newstyle2.css" rel="stylesheet">
</head>
<body>
	<div class="contact-form">
		<h1>Enroll Courses</h1>
		<form action="enroll.php" method="post" enctype="multipart/form-data">
			<div style="width:200px;border-radius:6px;margin:0px auto">
<p>Please check both the boxes for selected courses</p>  
<table border="none">  
   <tr>  
      <td colspan="3">Select Courses:</td>  
   </tr>  
   <tr>  
      <td>PHP</td>  
      <td><input type="checkbox" name="techno[]" value="PHP"></td>  
      <td><input type="checkbox" name="course[]" value="c012"></td>
   </tr>  
   <tr>  
      <td>.Net</td>  
      <td><input type="checkbox" name="techno[]" value=".Net"></td>
      <td><input type="checkbox" name="course[]" value="c205"></td>  
   </tr>  
   <tr>  
      <td>Java</td>  
      <td><input type="checkbox" name="techno[]" value="Java"></td>  
      <td><input type="checkbox" name="course[]" value="c001"></td>   
  </tr>  
   <tr>  
      <td>Javascript</td>  
      <td><input type="checkbox" name="techno[]" value="javascript"></td>  
        <td><input type="checkbox" name="course[]" value="c123"></td>
   </tr>  
   <tr>  
      <td colspan="3" align="center"><input type="submit" value="submit" name="sub"></td>  
   </tr>  
</table>  
</div>  
</form>  
<?php  
if(isset($_POST['sub']))  
{  
session_start();
$n=$_SESSION['a'];
$ma=$_SESSION['ma'];
$host="127.0.0.1";
	$user="root";
	$password="";
	$db='e-learning';
	$con=new mysqli($host,$user,$password,$db);
$checkbox1=$_POST['techno'];  
$cb2=$_POST['course'];
$c2="";
$chk="";  
$_SESSION['courses[]']=$cb2;
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }
foreach($cb2 as $chk1)  
   {  
      $c2 .= $chk1.",";  
   }   
$cco="-";
$in_ch=mysqli_query($con,"update student set courses='$chk', cid='$c2' where uname='$n' ");  
if($in_ch==1)  
   {  
      echo'<script>alert("Inserted Successfully")</script>';  
   }  
else  
   {  
      echo'<script>alert("Failed To Insert")</script>';  
   }  
}  
?>  
	</div>
</body>
</html>
