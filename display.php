<?php
            $con=mysqli_connect("localhost","root","","gymdata");
            if(!$con)
            {
                exit("Database Not Connected....!");
            }
            $q="select * from details";
            $res=mysqli_query($con,$q);
            $q2="select * from plan";
            $res2=mysqli_query($con,$q2);
        ?>
<html>
    <head><title>display</title>
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
        table {
            margin-top: 5%;
            margin-bottom: 15%;
            background-color:rgba(0, 0, 0, 0.200); 
            padding: 20px;
            position: relative;
        }
        table th  {
            text-decoration:none;
            background-color:black;
            color:yellow;

        }

        .regi-head {
            margin-left: 40%;
            margin-right: 45%;
            font-size: xx-large;
            font-weight: 900;
            color:chartreuse;
            background: red;
        }


        .plan-head {
            margin-left: 40%;
            margin-right: 48%;
            font-size: xx-large;
            font-weight: 900;
            color:chartreuse;
            background: red;
        }
        .a1
        {
            text-decoration:none;
            background-color:black;
            color:red;  
        }
        table td {
            text-decoration:none;
            background-color:black;
            color:white;
        }
        .search{
            padding:20px;
            align-items: center;
            margin-left: 40%;
         }
         .search input[type=text]
         {
            padding:14px;
            width:20%;
            border-radius: 25px;
         }
         .search label{
           
            margin-top:20px;
         }

         .search_2 {
            padding:20px;
            align-items: center;
            margin-left: 40%;
         }
         .search_2 input[type=text]
         {
            padding:14px;
            width:20%;
            border-radius: 25px;
         }
         .search_2 label{
           
            margin-top:20px;
         }
        </style>
    <link rel="stylesheet" href="login.css">
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
<div class="search">
<label>
   <br> <br></label><input type="text" id="myinput" placeholder="Search" class="search-int" onkeyup="search()">

</div>
<p class="regi-head">Register Details</p>
    <table border="1" align="center" id="mytable">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Confirm password</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>                                                                                    
            <?php while($row=mysqli_fetch_assoc($res))
            {
            ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['confirm']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><a class="a1"href="viewdata.php?id=<?php echo $row['id']?>">EDIT</a></td>
                <td><a class="a1"href="delete.php?id=<?php echo $row['id']?>" onclick="confirm('Do You Want Delete This Record?')">delete</a></td>
            </tr>
            <?php } ?>
        </table>
        <div class="search_2">
<label>
   <!-- <br> <br></label><input type="text" id="myinput2" placeholder="Search" class="search-int" onkeyup="search()"> -->

</div>

<p class="plan-head">Plan Details</p>
    <table border="1" align="center" id="mytable2">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Plan</th>
                <th>memeberShip Plan</th>

            </tr>                                                                                    
            <?php while($row=mysqli_fetch_assoc($res2))
            {
            ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['plan']; ?></td>
                <td><?php echo $row['memberplan']; ?></td>
                <!-- <td><a class="a1"href="viewdata.php?id=<?php echo $row['id']?>">EDIT</a></td>
                <td><a class="a1"href="delete.php?id=<?php echo $row['id']?>" onclick="confirm('Do You Want Delete This Record?')">delete</a></td> -->
            </tr>
            <?php } ?>
        </table>
        <footer id="footer">
<a href="ourprojects.html"><span id="bts">Next</span></a>
<div id="main-footer">
<h2 id="f1">GETFIT<font style="color: aqua;"></font></h2>
<h4 id="f2">Visit Our Website to make your DREAM House</h4><br><br>
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
<script >
        const search=()=>{
            let filter=document.getElementById('myinput').value.toUpperCase();

            let mytable=document.getElementById('mytable');

            let tr= mytable.getElementsByTagName('tr');

            for(var i=0;i<tr.length;i++){
                let td=tr[i].getElementsByTagName('td')[0];
                
                
                if(td){
                    let textvalue=td.textContent || td.innerHTML;
                    if(textvalue.toUpperCase().indexOf(filter)>-1){
                        tr[i].style.display="";
                    }
                    else{
                        tr[i].style.display="none";
                    }
                }
            }
        }
    </script>
<script >
        const search_2=()=>{
            let filter=document.getElementById('myinput2').value.toUpperCase();

            let mytable=document.getElementById('mytable2');

            let tr= mytable.getElementsByTagName('tr');

            for(var i=0;i<tr.length;i++){
                let td=tr[i].getElementsByTagName('td')[0];
                
                
                if(td){
                    let textvalue=td.textContent || td.innerHTML;
                    if(textvalue.toUpperCase().indexOf(filter)>-1){
                        tr[i].style.display="";
                    }
                    else{
                        tr[i].style.display="none";
                    }
                }
            }
        }
    </script>
</body>
</html>
        