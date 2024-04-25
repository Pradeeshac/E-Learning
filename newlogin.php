<!DOCTYPE html>
<html>
<head>
<style>
    body{
        background-image: url('bg2.jpg');
        background-size: cover;
        font-family:Georgia, 'Times New Roman', Times, serif;
    }
div {
  width: 50%;
  padding: 10px;
}
form {
  border: 3px solid #f0cde5;
}

input[type=text], input[type=password]
{
    flex-basis: 68%;
    background:transparent;
    border:0;
    outline:0;
    padding:10px 0;
    border-bottom:1px solid rgb(167, 0, 167);
    color: rgb(255, 255, 255);
    font-size:16px;
}

button {
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
   background-color:rgb(87, 180, 184);
  opacity: 0.8;
}
label{
    color:rgb(63, 1, 63);
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
.cancelbtn:hover{
    background-color: coral;
    opacity: 0.8;
}
.imgcontainer
 {
  text-align: center;
  margin-top: 50px;
  height: 150px;
}

img.logo
{
  width: 50%;
  border-radius: 60%;
}

.container 
{
  padding: 16px;
}

span.psw {
  padding-top: 10px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 100px)
 {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 50%;
  }
}
</style>
</head>
<body>
<CENTER>
  <div>
  <h2>𝙻𝙾𝙶𝙸𝙽</h2>

  <form action="/action_page.php" method="post">
    <div class="imgcontainer">
      <img src="avatar1.jpg" alt="Avatar" class="logo">
    </div>
  
    <div>
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <span class="psw">Forgot <a href="#">PASSWORD?</a></span>
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label><br>
      <button type="button" class="cancelbtn">CLEAR</button>
    </div>
   
  </form>
  

</div>
<span class="psw"><center><a href="registration.html">𝐍𝐄𝐖 𝐔𝐒𝐄𝐑?</a></span></center> 
</CENTER>
</body>
</html>
