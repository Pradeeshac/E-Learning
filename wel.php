<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <style>
            *{
                margin: 0;
                padding: 0;
                font-family: 'poppins',sans-serif;
                box-sizing: border-box;
                
            }
            .hero{
                height: 100%;
                width: 100%;
                margin: 10px;
                margin-top: 30%;
            }
            .formbox{
                width: 380px;
                height: 480px;
                position: relative;
                margin: 6% auto;
                background: rgb(204,255,255);
                padding: 5px;
                overflow: hidden;
            }
            .buttonbox{
                width: 220px;
                margin: 35px auto;
                position: relative;
                box-shadow: 0 0 20px 9px #ff61241f;
                border-radius: 30px;
            }
            .toggle{
                padding: 10px 30px;
                cursor: pointer;
                background: transparent;
                border: 0;
                outline:none;
                position: relative;
            }
            #btn{
                top: 0;
                left: 0;
                position: absolute;
                width: 110px;
                height: 100%;
                background: linear-gradient(to right,#ff105f,#ffad96);
                border-radius: 30px;
                transition: .5s;
            }
            .social{
                margin: 30px auto;
                text-align: center;
            }
            .social img{
                width: 30px;
                margin: 0 12px;
                box-shadow: 0 0 20px 0 #7f7f7f3d;
                cursor: pointer;
                border-radius: 50%;
            }
            .inputgroup{
                top: 180px;
                position: absolute;
                width: 280px;
                transition: .5s;   
            }
            .infield{
                width: 100%;
                padding:10px 0;
                margin:5px 0;
                border-left: 0;
                border-top: 0;
                border-right:0;
                border-bottom: 1px solid #999;
                outline: none;
                background: transparent;
            }
            .submitbtn{
               width: 85%;
               padding:10px 30px;
               cursor: pointer;
               display: block;
               margin: auto;
               background: linear-gradient(to right,#ff105f,#ffad96);
               border: 0;
               outline: none;
               border-radius: 30px;
            }
            .cbox{
                margin:30px 10px 30px 0;
            }
            span{
                color: #777;
                font-size: 12px;
                bottom:68px;
                position: absolute;
            }
            #login
            {
               left: 50px; 
            }
             #signup
            {
               left: 450px; 
            }
            .close img{
                width: 5%;
                height: 5%;
                margin-right: 0px;
                margin-left: 350px;
            }    
            .container
            {
                width:100%; 
                min-height: 100vh;
                background-image:linear-gradient(rgba(9,0,77,0.65),rgba(9,0,77,0.65)),url('Screenshot (111).png');
                background-size: cover;
                background-position: center;
                padding: 10px 8%;
               
                    
            }
            nav{
                width:100%;
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 10px 0;
            }
            .logo{
                width:180px;
                cursor:pointer;
            }
            
            nav ul{
                list-style: none;
                width:100%;
                text-align:right;
                padding-right: 60px;
            }
            
            nav ul li{
                display: inline-block;
                margin: 10px 20px;
            }
            
            nav ul li a{
                color: #ffff;
                text-decoration: none;
            }
            
            .btn{
                display: flex;
                align-items: center;
                padding:10px 20px;
                border:0;
                outline:0;
                border-radius: 7px;
                background:#f5168d;
                color: #ffff;
                cursor:pointer;
                margin-left: 5px;
            }
            .content{
                margin-top:45px;
                color: #ffff;
                max-width: 620px;
            }
            .content h1{
                font-size:70px;
                font-weight: 600;
                line-height: 85px;
                margin-bottom: 25px;
            }
            .content form{
             display: flex;
             align-items: center;
             background: #ffff;
            border-radius: 5px;
            padding:10px;
            margin-top:30px;
            }
            .content form input{
                border:0;
                outline: 0;
                width: 100%;
                font-size: 16px;
                padding-left: 10px;
            }
            .container form .btn{
                font-size: 15px;
                padding:10px 30px;
            }
            .box1{
            border:2px solid rgb(13, 19, 19);
            width: 300px;
            height:300px;
            margin: 30px;
            transition: 0.4s;
            background:linear-gradient(50deg,rgb(0, 255, 153),rgb(192, 255, 219),#25eb7b,rgb(192, 255, 238),rgb(62, 249, 233));
        }
        .box1 img{
            width: 50%;
            height: 50%;
            margin: 30px 40px 30px 40px;
        }
        .small h3{
            text-align: center;
        }
        .box1:hover{
            box-sizing: border-box;
            width: 350px;
            height: 350px;
            text-shadow: 2px 2px 5px rgb(90, 14, 14);
            box-shadow: 0 1px 10px rgba(103, 7, 26, 0.676) inset,0 1px 10px rgb(112, 10, 31) inset,0 1px 10px rgb(95, 8, 26) inset,0 1px 10px rgb(92, 8, 25) inset;
        }
        #course{
            background-color:#000033;
        }
        body{
                background-color: #ffccff;
                font-size: 14px;
            }
            .containers{
                width:80%;
                margin:50px auto;
            }
            h1 p{
                 color: #fff;
            }
            .cb{
                background: #fff;
                display: flex;
            }
            .cl{
                flex-basis: 60%;
                padding:40px 60px;
            }
            .cr{
                flex-basis: 40%;
                padding:40px;
                background: #1c00b5;
                color: #fff;
            }
            h1{
                margin-bottom: 10px;
            }
            .containers p{
                  margin-bottom: 40px;
            }
            .inputrow{
                display: flex;
                justify-content: space-between;
                margin-bottom: 20px;
            }
            .inputgrp .inputrow{
                flex-basis: 45%;
            }
            input{
                width: 100%;
                border:none;
                border-bottom: 1px solid black;
                outline:none;
                padding-bottom: 5px;
            }
            textarea{
                width:100%;
                border:1px solid #cc;
                outline: none;
                padding: 10px;
                box-sizing: border-box;
            }
            .containers label{
                margin-bottom: 6px;
                display: block;
                color: #1c00b5;
            }
            .containers button{
               background:  #1c00b5;
               width: 100px;
               border: none;
               outline: none;
               color: #fff;
               height: 35px;
               border-radius: 30px;
                   margin-top: 20px;
            }
            tr td:first-child{
                padding-right: 20px;
            }
            tr td{
                padding-top:  20px;
            }
            .cr h3{
                margin-bottom: 30px;
            }
            .whole{
                width: 33%;
                height: 100%;
                margin-left: 60%;
                position: absolute;
                display: none;
            }
        </style>
</head>
    <body>
        <div class="whole" id="whole1">
            <div class="hero">
            <div class="formbox">
                <div class="close">
                    <a href="welcome.html"><img src="close.png" alt="k"></a>
            </div>
                <div class="buttonbox">
                    <div id="btn"></div>
                    <button type="button" class="toggle" onclick="login()">Log in</button>
                      <button type="button" class="toggle" onclick="signup()">sign up</button>
                </div>
                <div class="social">
                <img src="fb.png">
                 <img src="tw.png">
                  <img src="google.png">
                </div>
                <form id="login" class="inputgroup">
                    <input type="text" class="infield" placeholder="User ID" required>
                     <input type="text" class="infield" placeholder="Enter password" required>
                     <input type="checkbox" class="cbox"><span> Remember password</span>
                     <button type="button" class="submitbtn">Log in </button>
                </form>
                <form id="signup" class="inputgroup">
                    <input type="text" class="infield" placeholder="User ID" required>
                     <input type="email" class="infield" placeholder="Email Id" required>
                      <input type="text" class="infield" placeholder="Enter password" required>
                     <input type="checkbox" class="cbox"><span> I agree to the terms & condition</span>
                     <button type="submit" class="submitbtn">Sign in </button>
                </form>
            </div>
        </div>
        <script>
            var x =document.getElementById("login");
            var y =document.getElementById("signup");
            var z =document.getElementById("btn");
            
            function signup(){
                x.style.left="-400px";
                 y.style.left="50px";
                  z.style.left="110px";
              }
               function login(){
                x.style.left="50px";
                 y.style.left="450px";
                  z.style.left="0px";
                 
            }
            
            
        </script>
        </div>
        <div class="container" >
            <nav>
                <img src='future learning.png' class="logo">
                <ul>
                    <li><a href='#'>home</a></li>
                    <li><a href='#'>about us  </a></li>
                    <li><a href='#contact'>contact us</a></li>
                    <li><a href="#course">course</a></li>
                </ul>
                <button class="btn" onclick="myfunction()">Login</button>
                <button class="btn" onclick="myfunction()">signup</button>
                <script>
                    function myfunction(){
                        var x=document.getElementById("whole1");
                        x.style.display="block";
                    }
                </script>
            </nav>
            <div class="content">
                <h1>Learn without limits </h1>
                <p>Start, switch, or advance your career with more than 3 courses,
                    Professional Certificates, and degrees from world-class universities and companies.</p>
                <form>
                    <input type="text" placeholder="course name">
                    <button  type="button" class="btn">submit</button>
                </form>

            </div>
        </div>
    <div id="course">
    <h1 style="color: white">Web Technology</h1>
    <table>
        <tr>
            <td>
                <div class="box1" onclick="btn1('HTML5.html')">
                    <center><img src="html1.png" alt="html"></center>
                    <div class="small">
                        <h3>HTML</h3>
                    </div>
                </div>
            </td>
            <td>
                <div class="box1" onclick="btn1('css.html')">
                    <center><img src="css.png" alt="html"></center>
                    <div class="small">
                        <h3>CSS</h3>
                    </div>
                </div>
            </td>
            <td>
                <div class="box1" onclick="btn1('php.html')">
                    <center><img src="php.png" alt="html"></center>
                    <div class="small">
                        <h3>PHP</h3>
                    </div>
                </div>
            </td>

        </tr>
    </table>
    <h1 style="color: white">Programming Language</h1>
    <table>
        <tr>
            <td>
                <div class="box1" onclick="btn1('c.html')">
                    <center><img src="c.png" alt="html"></center>
                    <div class="small">
                        <h3>C</h3>
                    </div>
                </div>
            </td>
            <td>
                <div class="box1" onclick="btn1('c++.html')">
                    <center><img src="c++.png" alt="html"></center>
                    <div class="small">
                        <h3>C++</h3>
                    </div>
                </div>
            </td>
            <td>
                <div class="box1" onclick="btn1('java.html')">
                    <center><img src="java.png" alt="html"></center>
                    <div class="small">
                        <h3>JAVA</h3>
                    </div>
                </div>
            </td>
        </tr>
    </table>
    </div>
        <div class="containers" id="contact">
         <h1>connect with us</h1>
                <p>We would love to respond to your queries and help you succeed. Feel 
                 free to get in touch with us.</p>
                <div class="cb">
                    <div class="cl">
                        <h3>send your request</h3> 
                        <form>
                            <div class="inputrow">
                                <div class="inputgrp">
                                    <label>Name</label>
                                    <input type="text" placeholder="aaa">
                                </div>
                                </div>
                                <div class="inputrow">
                                <div class="inputgrp">
                                    <label>phone</label>
                                    <input type="text" placeholder="+91 3445">
                                </div>
                            </div>
                             <div class="inputrow">
                                <div class="inputgrp">
                                    <label>email</label>
                                    <input type="email" placeholder="aaa@gmail.com">
                                </div>
                             </div>
                                <div class="inputrow">
                                <div class="inputgrp">
                                    <label>subject</label>
                                    <input type="text" placeholder="">
                                </div>
                            </div>          
                                 <label> message</label>
                                 <textarea rows="5" placeholder="your message"></textarea>
                                 
                                 <button type="submit">send</button>
                        </form>
                        
                     </div> 
                    <div class="cr">
                        <h3>reach us</h3>     
                        <table>
                            <tr>
                                <td>email</td>
                                <td>futurelearning@gmail.com</td>
                            </tr>
                             <tr>
                                <td>Phone</td>
                                <td>+1 3454 3541 3445</td>
                            </tr>
                              <tr>
                                <td>Address</td>
                                <td>212,ground floor, 7th cross street
                                     same layout, karamangala bangalure 580001</td>
                            </tr>
                            
                        </table>
                            </div>
                
        </div>
      </div>
       
    </body>
    <script >
    function btn1(filename){
        window.location=filename;
    };
    </script>
</html>