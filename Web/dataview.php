
<?php
require_once 'php/init.php';
$user = new user();
$marks = new marks();
if(!$user->IsLoggedIn() || $user->data()->role!=1)
{
    header("location: index.php");
}
else
{
$uinfo = $user->data();
$prof = new profile('subject_data','subject_id',$uinfo->user_id);
$prof_info  = $prof->data();
$getAll = $marks->allStudents($prof_info->subject_id);
if($getAll)
{
    $allStudents = $marks->results();
    
}


}


?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>



/*---------------------------------------------------------------------------------------*/

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


.mytable{
    margin-left: 20px;
    margin-right: 20px;
    width: 1000px;
    height: auto;
    margin-left: 300px;
    
}

    </style>
</head>

<body>


        <div class="topnav">
                <a class="active" href="prof.php">Home</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>

        </div>



<br>
<br>
<br>





<div class="mytable">
<h1>Students stuying your subject</h1><br>
<table id="customers">
<tr>
    <th>Name</th>
    <th>Roll No</th>
    <th>Div</th>
    <th>Unit Test-1</th>
    <th>Unit Test-2</th>
    <th>Performance</th>
  </tr>
<?php
foreach($allStudents as $obj)
{
print("
  <tr>
    <td>{$obj->name}</td>
    <td>{$obj->roll_no}</td>
    <td>{$obj->division}</td>
    <td>{$obj->ut1_marks}</td>
    <td>{$obj->ut2_marks}</td>
    <td>{$obj->category}</td>
  </tr>
  ");
}
  ?>
</table>
</div>

</body>

</html>