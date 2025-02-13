<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-
awesome/6.3.0/css/all.min.css">
    <title>Workout Plans</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .heading
{
  color: yellow;
  margin-left: 40%;
padding:10px; display:flex;
font-family: 'Times New Roman', Times, serif;
}
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .workout-plan {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .workout-plan h2 {
            color: blue;
        }

        .workout-plan ul {
            list-style: none;
            padding: 0;
        }
        .workout-plan img{ 
    float: right; /* Float the image to the left */
    margin-top: 40px;
    margin-right: 10px; /* Add some space between image and list */
    height: 200px;
    width: 300px;
}

        .workout-plan ul li {
            margin-bottom: 10px;
        }
        /* CSS for Basic Button */
.button {
    display: inline-block;
    padding: 10px 20px; /* Adjust padding as needed */
    font-size: 16px; /* Adjust font size as needed */
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    color: #ffffff; /* Text color */
    background-color: #007bff; /* Button background color */
    border: none; /* Remove border */
    border-radius: 5px; /* Optional: Add rounded corners */
    cursor: pointer;
    transition: background-color 0.3s ease; /* Smooth transition for background color */
}

.button:hover {
    background-color: #0056b3; /* Button background color on hover */
}

.button:active {
    background-color: #004080; /* Button background color on click */
}
        #footer 
        {
        background-color: #212b38;
        margin-top: 284px;
        padding: 3%;
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
        <div class="workout-plan">
        <img src="beginner.jpg"/>
            <h2>Beginner Workout Plan</h2>
            <ul>
                <li>Warm-up: 5 minutes of light cardio</li>
                <li>Bodyweight Squats: 3 sets of 10 reps</li>
                <li>Push-ups: 3 sets of 10 reps</li>
                <li>Dumbbell Rows: 3 sets of 10 reps per arm</li>
                <li>Plank: 3 sets of 30 seconds hold</li>
                <li>Cool down: 5 minutes of stretching</li>
                </ul>
            
        </div>

        <div class="workout-plan">
        <img src="intermidiate.jpg"/>
            <h2>Intermediate Workout Plan</h2>
            <ul>
                <li>Warm-up: 10 minutes of light cardio</li>
                <li>Barbell Squats: 4 sets of 8 reps</li>
                <li>Bench Press: 4 sets of 8 reps</li>
                <li>Deadlifts: 4 sets of 8 reps</li>
                <li>Pull-ups: 3 sets of 6 reps</li>
                <li>Plank: 3 sets of 1 minute hold</li>
                <li>Cool down: 10 minutes of stretching</li>
            </ul>
          
        </div>

        <div class="workout-plan">
        <img src="advance.jpg"/>
            <h2>Advanced Workout Plan</h2>
            <ul>
                <li>Warm-up: 15 minutes of light cardio</li>
                <li>Barbell Squats: 5 sets of 5 reps</li>
                <li>Bench Press: 5 sets of 5 reps</li>
                <li>Deadlifts: 5 sets of 5 reps</li>
                <li>Overhead Press: 5 sets of 5 reps</li>
                <li>Pull-ups: 4 sets of 6 reps</li>
                <li>Plank: 4 sets of 1.5 minutes hold</li>
                <li>Cool down: 15 minutes of stretching</li>
            </ul>
            <ul>
    </div>
    <div class="workout-plan">
    <img src="yoga.jpg"/>
    <h2>Yoga Workout Plan</h2>
            <ul>
            <h3>Mountain Pose (Tadasana)</h3>
           <p>
                Duration: 1 minute<br>
                Benefits: Improves posture, strengthens thighs and ankles, increases awareness.
            </p>
            <h3>Downward Dog Pose (Adho Mukha Svanasana)</h3>
            <p>
                Duration: 2 minutes<br>
                Benefits: Stretches shoulders, hamstrings, calves, and strengthens arms and legs.
            </p>
            <h3>Child's Pose (Balasana)</h3>
            <p>
                Duration: 1.5 minutes<br>
                Benefits: Stretches hips, thighs, and ankles. Calms the mind and helps relieve stress.
            </p>
            <h3>Warrior Pose (Virabhadrasana)</h3>
            <p>
                Duration: 1.5 minutes on each side<br>
                Benefits: Strengthens legs, arms, and back. Improves balance and concentration.
            </p>
    </ul>
        </div>
        <div class="workout-plan">
        
        <div class="workout-plan">
                <button type="submit" class="button" name="plan" onclick="document.location='plan.php'">Select Your Plan</button> 
        </div>
    </div>
    <footer id="footer">
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
</body>
</html>
