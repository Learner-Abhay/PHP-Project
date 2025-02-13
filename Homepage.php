<html>
<head>
<title>HOME Page</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-
awesome/6.3.0/css/all.min.css">

<link rel="stylesheet" href="login.css">
</head>
<style>
    .heading
{
    color: yellow;
    margin-left: 40%;
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
    .con-heading {
        color: red;
    }
    .content 
    {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            align-items: center;
            width: 500PX;
    margin:10%;
    margin-left:30%;
            border-radius: 5px;
    
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
    .banner{
        color:White;
    }
    p{
        color:white;
        background-color: rgb(0,0,0,0.400);
    width: 250px;
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
</style>
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
<div class="content">
<h1 class="con-heading">GET FIT today or die eating!!!!</h1>
<p>This website is developed by Getfit.co.in and to get <br>
resgister click on SIGN UP button.</p>
<button type="submit"
onclick="document.location='register.php'"><span></span>Register</button>
<button type="submit"
onclick="document.location='login.php'"><span></span>Login</button>
<h4> Follow us on our social media handles</h4>
<div class="icons">
<i class="fa-brands fa-square-facebook"></i>
<i class="fa-brands fa-instagram"></i>
<i class="fa-brands fa-linkedin"></i>
<i class="fa-brands fa-reddit"></i>
</div>
</div>
</div>
<footer id="footer">
<a href="#"><span id="bts">Next</span></a>
<div id="main-footer">
<h2 id="f1">GEFIT ORG.<font style="color: aqua;"></font></h2>
<h4 id="f2">GET to workout and be better version of yourself</h4><br><br>
<h3 id="f3">Visit Our Social Media Handles</h3>
<ul id="f4">
<i class="fa-brands fa-square-facebook">Facebook</i>
<i class="fa-brands fa-instagram">Instagram</i>
<i class="fa-brands fa-linkedin">Linkedin</i>
<i class="fa-brands fa-reddit">Reddit</i>
</ul>
<p id="licence">Copyright &copy;2023 GETFIT.Madeby<span>Sharma Abhay,Dikhit ,Shivraj
</span></p><br>
</div>
</footer>
</body>
</html>