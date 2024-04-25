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
		}
	}
                 else{
		echo '<script>alert("Enter Correct Details");</script>';
	}
}
?>