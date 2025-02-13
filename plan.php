<?php
$con=mysqli_connect("localhost","root","","gymdata");
if(!$con)
{
    exit("Not connected");
}

if(isset($_REQUEST['btn1']))
{
    $q="insert into plan set
    name='".$_REQUEST['name']."',
    email='".$_REQUEST['email']."',
    phone='".$_REQUEST['phone']."',
    gender='".$_REQUEST['gender']."',
    plan='".$_REQUEST['plan']."',
    memberplan='".$_REQUEST['mbtn']."'
    ";
    mysqli_query($con,$q);  
    // header("Location:Ourproject.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Plan Selector</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.heading
{
  color: yellow;
  margin-left: 40%;
padding:10px; display:flex;
}



.container {
    max-width: 1050px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    margin-top: 50px;
}

form {
    display: flex;
    flex-direction: column;
}
label{
    margin-bottom: 10px;
}
input,
select {
    margin-bottom: 10px;
    cursor: pointer;
    padding: 10px 20px;
    background-color: transparent;
    border: solid-white;
    border-radius: 5px;
    font-size: 16px;
}
input[type="text"],input[type="email"] ,input[type="tel"] ,input[type="radio"] {
    cursor: pointer;
    padding: 10px 20px;
    background-color: transparent;
    color: black;
    border: solid-white;
    border-radius: 5px;
    font-size: 16px;
}
input[type="submit"] {
    cursor: pointer;
    padding: 10px 20px;
    background-color: #4caf50;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

.con-head {
    margin-left: 40%;
    color: red;
}

.plan {
    text-align: center;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 300px;
    background-color: #fff;
}

.plan ul {
    list-style: none;
    padding: 0;
}

.plan ul li {
    margin: 10px 0;
}

.plan h2 {
    margin-bottom: 20px;
    color: red;
}

b {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
    transition: background-color 0.3s ease;
}

b:hover {
    background-color: #0056b3;
}
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
</div>
    <div class="container">
        <h2 class="con-head">Select Your Gym Plan</h2>
        <form method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" name="email" required><br><br>

            <label for="phone">Phone Number:</label>
            <input type="tel"name="phone" required><br><br>

            <label for="phone">Gender:
            <input type="radio" name="gender" value="Male" required>Male
            <input type="radio" name="gender" value="Female" required>Female<br><br></label>

            <label for="plan">Select Your Plan:</label>
            <select id="plan" name="plan" required>
                <option value="basic">Beginner Workout Plan</option>
                <option value="premium">Intermediate Workout Plan</option>
                <option value="ultimate">Advanced Workout Plan</option>
                <option value="ultimate">Yoga Workout Plan</option>
            </select><br><br>
<table>
    <tr>
        <td>
            <div class="plan">
            <h2 class="plan-head">Basic Plan</h2>
            <p>Our basic plan offers essential features to get you started:</p>
            <ul>
                <li>Access to cardio and strength training</li>
                <li>Basic nutrition guidance</li>
                <li>Access to group fitness classes</li>
            </ul>
            <p>Price: $30/month</p>
            <input type="radio" name="mbtn" value="Basic Plan" ><b>Basic Plan</b>
        </div>
        </td>
        <td>
        <div class="plan">
            <h2 class="plan-head">Premium Plan</h2>
            <p>Upgrade to our premium plan for enhanced features:</p>
            <ul>
                <li>Access to all gym facilities 24/7</li>
                <li>Personalized fitness assessment</li>
                <li>One-on-one personal training sessions</li>
                <li>Access to premium group fitness classes</li>
            </ul>
            <p>Price: $50/month</p>
            <input type="radio" name="mbtn" value="Premium Plan" ><b>Premium Plan</b>
        </div>
        </td>
        <td>
        <div class="plan">
            <h2 class="plan-head">Ultimate Plan</h2>
            <p>Our ultimate plan offers the best gym experience with exclusive benefits:</p>
            <ul>
                <li>Unlimited access to all facilities and services</li>
                <li>Customized meal plans</li>
                <li>Priority scheduling for personal training</li>
                <li>Free access to workshops and events</li>
            </ul>
            <p>Price: $80/month</p>
            <input type="radio"  name="mbtn" value="Ultimate Plan" ><b>Ultimate Plan</b>
        </div>
        </td>
    </tr>
</table>
            <input type="submit" value="Submit" name="btn1">
        </form>
    </div>
</body>
</html>
