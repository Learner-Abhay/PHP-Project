<?php
$con=mysqli_connect("localhost","root","","gymdata");
if(!$con)
{
    exit("Not connected");
}
if(isset($_REQUEST['btn']))
{
    $q="insert into details set
    name='".$_REQUEST['username']."',
    email='".$_REQUEST['email']."',
    password='".$_REQUEST['password']."',
    confirm='".$_REQUEST['cnfpassword']."',
    phone='".$_REQUEST['phone']."',
    address='".$_REQUEST['address']."'
    ";
    mysqli_query($con,$q);  
    header("Location:login.php");
}
?>
<html>
    <head><title>Register</title>
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
    label{
        color:white;
    }
    .navbar a:hover {
    background-color:turquoise;
    width: 25%;
    border-radius:100px;
    transition: 0.6s;
    }
    p{
        color:white;
    }
    button{

        font-size:20px;
        color:black;
        cursor:pointer;
        width:20%;
        height:5%;
        background-color:transparent;
    
        }
        button:hover{
        cursor:pointer;
        color:black;
        background-color:mediumaquamarine;
        width:20%;
        height:5%;
        border-radius:30%;
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
.a2{
    color:red;
}
.firstline
{
color: white;
font-size: 40px;
font-family: Verdana, Geneva, Tahoma, sans-serif;
align-content: center;
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
border: white;

}

.registerbtn {
align-items: center;
background-color:palevioletred;
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
transition: 0.2s;
}
a
{
color: dodgerblue;
}
.signin 
{ background-color: #f1f1f1; text-align: center}

video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
    }
input[type=text],input[type=password],input[type=number] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
input[type=text]:hover,input[type=password],input[type=number]:hover {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
   
}

</style>
    </head>
<body>
<video autoplay muted loop>
 <source src="./back.mp4.mp4" type="video/mp4">
</video>

<form method="post">
<div class="container">
<h1 class="firstline">Register</h1>
<p >Please fill in this form to create an account.</p>
<hr>
<form action="plan.php">
		<b><label>Name</label></b>
		<input type="text" name="username" required>
		<b><label >Email</label></b>
		<input type="text"  name="email"  required>
        <b><label>Enter Password</label></b>
        <input type="password" name="password"  required>
        <b><label>Confirm password</label></b>
		<input type="password" name="cnfpassword"  required>
		<b><label>Phone no</label></b>
		<input type="number"  name="phone"  required>
		<b><label >Address</label></b>
	    <input type="text"  name="address"  required>
        
	
<p >By creating an account you agree to our <a href="Homepage.php">Terms &
Privacy</a></p>
<button name="btn" type="submit" class="registerbtn" align-items="center">Register</button>
</div>
<div class="container signin">
<p class="a2">Already have an account? <a href="login.php">Sign in</a></p>
</div>
</form>
</body>
</html>