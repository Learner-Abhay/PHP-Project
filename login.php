<?php
$con=mysqli_connect("localhost","root","","gymdata");
if(!$con)
{
    exit("Database Not Connected.....");
}
if(isset($_REQUEST['login']))
{
    $q="select * from details where email like '".$_REQUEST['email']."' AND password like '".$_REQUEST['password']."'";
    $result=mysqli_query($con,$q);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            $q="select  email from details where email='".$_REQUEST['email']."'";
            $result=mysqli_query($con,$q);
            $row=mysqli_fetch_object($result);
           header("Location:Ourproject.php");
        }
    }
    else
    {
        echo"email and password are not Match!";
    }
}
?>
<html>
    <head>
        <title>Login page</title>
        <link rel="stylesheet" href="login.css">
        <style>
            .heading
{
padding:10px; display:flex;
}
/* body
{
background-image: url("a1.jpg");
background-repeat: no-repeat;
background-size: cover;
background-position: center;

} */
.navbar 
{
    width: 80%;
    overflow: none;
    justify-content: space-evenly;
    }
    .navbar a {
    justify-content:space-between;
    padding: 30px;
    color:white;
    text-decoration: none;
    font-size: 20px;
    width: 10%;
    }
    .content
    {
    padding: 40px;
    align-items: center;
   margin:20%;
   margin-top: 5%;
    }
    .navbar a:hover {
    background-color:turquoise;
    width: 25%;
    border-radius:100px;
    transition: 0.6s;
    }
    label,p{
        color:white;
    }
    button{

        font-size:20px;
        color:black;
        width:20%;
        height:5%;
        background-color:green;
    
        }
        button:hover{
        cursor:pointer;
        color:black;
        background-color:mediumaquamarine;
        width:20%;
        height:5%;
        border-radius:30%;
        }
        video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
    }
        #footer
        {
        background-color: #212b38;
        margin-top: 284px;
        color: white;
        margin-bottom: -10px;
        margin-left: -8px;
        margin-right: -8px;
        }
        #main-footer
        {
        margin-top: 10px;
        }
        #licence
        {
        margin-left: 400px;
        color: red;
        }
        #f1
        {
        margin-top: 10px;
        margin-left: 15px;
        }
        #f2
        {
        
    
        
        margin-left:20px;
        }
        #f3
        {
        margin-left: 20px;
        }
        #f4
        {
        margin-left: 30px;
        }
        #sm
        {
        text-decoration: none;
        color: white;
        }
    
     * {box-sizing: border-box}
.firstline
{
color: white;
font-size: 40px;
font-family: Verdana, Geneva, Tahoma, sans-serif;
align-content: center;
}
.a2{
    color:red;
}
p
{
font-size: 20px;

font-family: Georgia, 'Times New Roman', Times, serif;
}
.container
{
padding: 16px;
}
input[type=text], input[type=password] {
width: 100%;
padding: 15px;
margin: 5px 0 22px 0;
display: inline-block;
border: solid-white;
background:transparent;
}
input[type=text]:hover, input[type=password]:hover {
width: 100%;
padding: 15px;
margin: 5px 0 22px 0;
display: inline-block;
border: solid-white;
background:white;
}
input[type=text]:focus, input[type=password]:focus {
background-color: #ddd;
outline: none;
}
input[type=text]:hover, input[type=password]:hover {
background-color: #ddd;
outline: none;
}
.registerbtn {
align-items: center;
background-color:green;
color: white;
padding: 16px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
height:10%;
}
.registerbtn:hover {
background-color:chocolate;
border-radius: 50px;
width: 100%;
height:10%;
}
a
{
color: dodgerblue;
}
.signin {
background-color: #f1f1f1;
text-align: center;
}
        </style>
</head>
<body>
<video autoplay muted loop>
 <source src="./back.mp4.mp4" type="video/mp4">
</video>
<form method="post" >
<div class="container">
<h1 class="firstline">Login</h1>
<p>FIll this form to access your account</p>
<hr>
<label><b>Email</b></label>
<input type="text" placeholder="Enter Email" name="email" id="email" >
<label><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="password" id="psw" >
<button type="submit" name="login" class="registerbtn" align-items="center">LOGIN in your
ACCOUNT</button>
<div class="container signin">
<p class="a2">Already have an account? <a href="register.php">Sign in</a></p>
</div>
</form>
</body>
</div>