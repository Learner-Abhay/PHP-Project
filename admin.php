<?php
$con=mysqli_connect("localhost","root","","gymdata");
if(!$con)
{
    exit("Database Not Connected.....");
}
if(isset($_REQUEST['login']))
{
    $q="select * from admin where username like '".$_REQUEST['email']."' AND password like '".$_REQUEST['password']."'";
    $result=mysqli_query($con,$q);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            $q="select username from adnin where username='".$_REQUEST['email']."'";
            $result=mysqli_query($con,$q);
            $row=mysqli_fetch_object($result);
           header("Location:display.php");
        }
    }
    else
    {
        echo"email and password are not Match!";
    }
}
?>  



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
        }

        .error-message {
            color: red;
            margin-top: 10px;
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
    <div class="container">
        <h2>Admin Login</h2>
        <form id="loginForm" method="post" action="display.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Login" >
        </form>

        <div class="error-message" id="error-message"></div>
    </div>

    <!-- <script>
        document.getElementById("loginForm").onsubmit = function(event) {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var errorMessage = document.getElementById("error-message");

            // Simple validation, you can add more complex validation logic here
            if (username === "" || password === "") {
                errorMessage.textContent = "Username and password are required.";
                event.preventDefault(); // Prevent the form from submitting
            } else if (username !== "Admin" || password !== "123") {
                errorMessage.textContent = "Invalid username or password.";
                event.preventDefault(); // Prevent the form from submitting
            } else {
                errorMessage.textContent = ""; // Clear error message
            }
        };
    </script>  -->
</body> 

</html>
