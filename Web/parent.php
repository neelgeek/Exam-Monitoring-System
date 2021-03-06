<?php
require_once 'php/init.php';
$user = new user();

if(!$user->IsLoggedIn() || $user->data()->role!=2)
{
    header("location: index.php");
}
else
{
$uinfo = $user->data();
$parent = new profile('student_data','p_id',$uinfo->user_id);
$par_info  = $parent->data();

$marks = new marks();

$marks->getUTscoreParents($uinfo->user_id);
$utdata = $marks->results(); 

}

//var_dump($par_info);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Responsive Side Menu</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>

 body{
     font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
     background-color: #2c2ea3;
 }
 
.topnav {
    overflow: hidden;
    background-color: #e9e9e9;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Style the "active" element to highlight the current page */
.topnav a.active {
    background-color: #2196F3;
    color: white;
}

/* Style the search box inside the navigation bar */
.topnav input[type=text] {
    float: right;
    padding: 6px;
    border: none;
    margin-top: 8px;
    margin-right: 16px;
    font-size: 17px;
}

/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
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
  position:relative;
  left: -500px;
  top: 35px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  height: 250px;
  margin: auto;
  text-align: center;
  font-family: 'Trebuchet MS';
  border: 2px solid;
  background-color:white;

}

.card1{
    
    margin-top: -340px;
    max-width: 700px;
    height: 300px;
    margin-left: 450px;
    text-align: center;
    border: 2px solid;
    
}

.card2 {
  position:relative;
  left: -500px;
  top: 150px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  height: 120px;
  margin: auto;
  text-align: center;
  font-family: 'Trebuchet MS';
  border: 2px solid;
  background-color:white;

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







#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
    width: 3px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: rgb(38, 54, 197);
    color: white;
}


/*---------------------------------------------------------------------------------------*/
.topnav {
    overflow: hidden;
    background-color: #e9e9e9;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Style the "active" element to highlight the current page */
.topnav a.active {
    background-color: #2196F3;
    color: white;
}

/* Style the search box inside the navigation bar */
.topnav input[type=text] {
    float: right;
    padding: 6px;
    border: none;
    margin-top: 8px;
    margin-right: 16px;
    font-size: 17px;
}

/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
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
    .divpos{
        position: fixed;
        width: 100%;
    }
}

                
        .container {
            margin-right: 5px;
            margin-left: 5px;
            padding-top: 2px;
            padding-bottom: 2px;
            border: 2px solid;
            width: 500px;
            height: 650px;
            margin-left: 550px;
            margin-bottom: 200px;
        }
        
        body {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            background-color: white;
            
            
        }
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;

        }
        /* Add padding to containers */
        
        .container {
            padding: 10px 10px 10px 10px;
            background-color: white;
        }
        /* Full-width input fields */
        
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: solid;
            background: #f1f1f1;
        }
        
        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }
        /* Overwrite default styles of hr */
        
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }
        /* Set a style for the submit button */
        
        .registerbtn {
            background-color: #6e23ec;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
            font-size: larger;
        }
        
        .registerbtn:hover {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            opacity: 1;
        }
        /* Add a blue text color to links */
        
        a {
            color: dodgerblue;
        }
        /* Set a grey background color and center the text of the "sign in" section */
        
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }

        .container2{  
        
        height:70%;
        width:50%;
        float: left;
        margin-top: 50px;
      }


        .container1{  
        
        height:70%;
        width:50%;
        float: right;
        margin-top: 50px;
      }

.mytable{
    margin-left: 20px;
    margin-right: 200px;
    width: 70%;
    height: auto;
   margin-bottom: 2000px;
    margin-left: 120px;
    width: 50%;
    float: right;
    
    
    
}

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 40px;
   background-color: rgb(87, 87, 99);
   color: white;
   text-align: center;
  
}

.footer p{
    margin-top: 14px;
    top : 60px;
}



</style>  


</head>
<body>
<div class="divpos">
        <div class="topnav">
                <a class="active" href="parent.php">Home</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
                <!--<input type="text" placeholder="Search..">-->
                <a href="logout.php">logout</a>
        </div>
            

<div class="card">
  
  <h3>Welcome</h3>
  <h1><?php echo $par_info->p_name ?></h1>
  
  <p>D.Y Patil University</p>
  <div style="margin: 24px 0;">
     
   
 </div>
 <p><button>User-ID: <?php echo $par_info->p_id  ?></button></p>
</div>

<div class="card2">
  
        <h3>Your scheduled meetings are:</h3>
        <h5><i>Currently there are no meetings scheduled.</i></h5>
        
       
       
      </div>

<div class="card1">
         



            
        <div class="container2">
                <canvas id="myChart1"></canvas>
              </div>
            
            


<div class="container1">
        <canvas id="myChart2"></canvas>
      </div>
    
        
      </div>
      <div class="mytable">
        
            <h3></h3><br>
            <table id="customers" border='2px'>
              <tr border='2px'>
                <th>Subject</th>
                <th>Unit Test-1</th>
                <th>Unit Test-2</th>
              </tr>
              <?php
              foreach ($utdata as $obj) {
              print("
              <tr >
                <td>{$obj->subject_name}</td>
                <td>{$obj->ut1_marks}</td>
                <td>{$obj->ut2_marks}</td>
                
              </tr>
              ");
              }
              ?>
            </table>
            </div>
           
            

            
          
    
    
    



</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="footer">
        <p>Exam Monitoring</p>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="js/visualParent.js"></script>
</body>
</html>   