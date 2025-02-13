<?php
    $con=mysqli_connect("localhost","root","","gymdata");
    if(!$con) 
    {
    exit("Database Not Connected....!");
    }
    if(isset($_REQUEST['id']))
{
    $q="delete from details where id=".$_REQUEST['id']."";
    $res=mysqli_query($con,$q);
    header("Location: display.php");
}
?>
<html>
<head>
<title>vtcbcsr</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-
awesome/6.3.0/css/all.min.css">

<link rel="stylesheet" href="login.css">
</head>
<body>
<div class="banner">
<h1 class="heading">!Nterior</h1>
<div class="navbar">
<ol>
<a href="Homepage.php">Home</a>
<a href="Ourproject.php">Our Projects</a>
<a href="viewdata.php">View Data</a>
<a href="display.php">User data</a>
</ol>
</div>
</div>
<html>