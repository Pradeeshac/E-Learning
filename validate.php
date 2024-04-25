<?php
$pass=$_POST['p1'];
$pass2=$_POST['p2'];
$up=preg_match('/^[A-Z]{2}*$/',$pass);
$lwr=preg_match('/^[a-z]{2}*$/',$pass);
$n=preg_match('/^[0-9]{2}*$/',$pass);
if($up||$lwr||$n|| strlen($pass)<8){
echo '- Password should be atleast 8 characters in length<br> - It should include a uppercase, lowercase , numbers and special characters';
}
else{
if($pass!=$pass2)
 {
    echo 'Enter Password correctly';
}
}
?>