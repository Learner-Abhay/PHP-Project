<?php
$con=mysqli_connect("localhost","root","","gymdata");
if(!$con) 
{
exit("Database Not Connected....!");
}
$q="select * from details where id='".$_REQUEST['id']."'";
$res=mysqli_query($con,$q);
$row=mysqli_fetch_assoc($res);
// if(isset($_REQUEST['id']))
// {
//     $q="select * from details where id='".$_REQUEST['id']."'";
//     $res=mysqli_query($con,$q);
//     $row=mysqli_fetch_assoc($res);
// }
if(isset($_REQUEST['view']))   
{
    $q="update details set
    name='".$_REQUEST['username']."',
    email='".$_REQUEST['email']."',                                                                                                       
    password='".$_REQUEST['password']."',
    confirm='".$_REQUEST['cnfpassword']."',
    phone='".$_REQUEST['phone']."',
    address='".$_REQUEST['address']."'
    where id='".$_REQUEST['id']."'
    ";
    mysqli_query($con,$q);  
    header("Location:display.php");
}
?>
<html>
<head>
<title>vtcbcsr</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-
awesome/6.3.0/css/all.min.css">


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
    background-color:orange;
    width: 25%;
    border-radius:100px;
    transition: 0.6s;
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
    button{

        font-size:20px;
        color:black;
        cursor:pointer;
        width:100%;
        height:5%;
        background-color:transparent;
        margin-left:40%;
        }
        button:hover{
        cursor:pointer;
        color:black;
        background-color:chocolate;
        width:100%;
        height:5%;
        transition:0.2s; border-radius:30%;
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
</style>
</head>
<body>
<video autoplay muted loop>
 <source src="./back.mp4.mp4" type="video/mp4">
</video>
<div class="banner">
<h1 class="heading">FITNESS THIRST</h1>
<div class="navbar">
<ol>
<a href="Homepage.php">Home</a>
<a href="Ourproject.php">Our blog</a>
<a href="workoutplan.php">Regime</a>
<a href="plan.php">Membership</a>
<a href="admin.php">LOG in for Admin</a>

</ol>
</div>
<table align="center" >
    <form method="POST">
<tr>
                <td>Name</td>
                <td><input type="text" name="username" value="<?php echo $row['name']; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" id="" value="<?php echo $row['email']; ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" id="" value="<?php echo $row['password']; ?>"></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="text" name="cnfpassword" id="" value="<?php echo $row['confirm']; ?>"></td>
            </tr>
            <tr>
            <td>Phone</td>
                <td><input type="text" name="phone" id="" value="<?php echo $row['phone']; ?>"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address" id="" value="<?php echo $row['address']; ?>"></td>
            </tr>
            <tr>
           <td>    
        <button type="submit" name="view">Update</button> 
    </td>    
    </tr>
        
</form>
</table>

<footer id="footer">
<a href="Ourproject.php"><span id="bts">Next</span></a>
<div id="main-footer">
<h2 id="f1">GETFIT ORG<font style="color: aqua;"></font></h2>
<h4 id="f2">Visit Our Website to make your DREAM physique</h4><br><br>
<h3 id="f3">Visit Our Social Media Handles</h3>
<ul id="f4">
<i class="fa-brands fa-square-facebook">Facebook</i>
<i class="fa-brands fa-instagram">Instagram</i>
<i class="fa-brands fa-linkedin">Linkedin</i>
<i class="fa-brands fa-reddit">Reddit</i>
</ul>
<p id="licence">Copyright &copy;2023 GETFIT.Madeby<span>Sharma
Abhay</span></p><br>
</div>
</footer>
</html>