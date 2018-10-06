<?php
require_once 'php/init.php';
$user = new user();
if(!$user->IsLoggedIn() || $user->data()->role!=1)
{
    header("location: index.php");
}
else
{
$uinfo = $user->data();
$prof = new profile('subject_data','subject_id',$uinfo->user_id);
$prof_info  = $prof->data();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Welcome <?php print($prof_info->prof_name) ?></title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>

 body{
     font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
     background-color: #222222 ;
 }
 
.topnav {
    overflow: hidden;
    background-color: #e9e9e9;
}

.topnav a {
    float: left;
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}


.topnav a:hover {
    background-color: #ddd;
    color: black;
}


.topnav a.active {
    background-color: #2196F3;
    color: white;
}


.topnav input[type=text] {
    float: right;
    padding: 6px;
    border: none;
    margin-top: 8px;
    margin-right: 16px;
    font-size: 17px;
}

@media screen and (max-width: 600px) {
    .topnav a, .topnav input[type=text] {
        float: none;
        display: block;
        text-align: left;
        width: 100%;
        margin: 0;
        padding: 14px;
    }
    .topnav input[type=text] {
        border: 1px solid #ccc;
    }
}

.card {
  position: relative;
  left: -500px;
  top: 60px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  height: 500px;
  margin: auto;
  text-align: center;
  font-family: 'Trebuchet MS';
  border: 2px solid;
  background-color: white;
}

.card1{
    position: relative;
    top: -440px;
    max-width: 500px;
    height: 500px;
    margin: auto;
    text-align: center;
    border: 2px solid;
    
}

.title {
  color: grey;
  font-size: 18px;
}

.card button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card1 button{
    border: 1px solid;
    display: inline-block;
    margin-top: 80px;
    padding: 8px;
    color: #2196F3;
    text-align: center;
    cursor: pointer;
    width: 300px;
    height: 60px;
}


a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}



</style>  

</head>
<body>

        <div class="topnav">
                <a class="active" href="prof.php">Home</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
                <!--<input type="text" placeholder="Search..">-->
                <a href="logout.php">Logout</a>
        </div>
            

<div class="card">
  <img src="images/user21.png" alt="John" style="width:100%">
  <h1><?php print($prof_info->prof_name) ?></h1>
  <p class="title"><?php print($prof_info->designation) ?></p>
  <p>RAIT,Nerul</p>
  <div style="margin: 24px 0;">
     
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button>SDRN: <?php print($prof_info->subject_id) ?></button></p>
</div>

<div class="card1">
         
        <a href="markentry.php"><button type="button">Enter Marks</button></a>
        <a href="dataview.php"><button type="button">View Data</button></a>
        <a href="profvisual.php"><button type="button">Visualize Data</button></a>
      </div>



</body>
</html>   