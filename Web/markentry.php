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
        $marks = new marks();
        $uinfo = $user->data();
        $prof = new profile('subject_data','subject_id',$uinfo->user_id);
        $prof_info  = $prof->data();
        if(input::exists())
        {
            $ifexist = $marks->search(array(
                'subject_id'=>$prof_info->subject_id,
                'roll_no'=>input::get('roll_no')
            ));

            if(!$ifexist)
            {
                $marks->addProd(array(
                    "subject_id"=>$prof_info->subject_id,
                    input::get('exam')=>input::get('marks'),
                    "roll_no"=>input::get('roll_no')
                    //,"remarks"=>input::get('remark')
                ));
            }
            else
            {
                $marks->update(
                array(
                    input::get('exam')=>input::get('marks')
                    //,"remarks"=>input::get('remark')
                ),
                array(
                    "subject_id"=>$prof_info->subject_id,
                    "roll_no"=>input::get('roll_no')
                ));
            }
        }
            
    }

?>

<!DOCTYPE html>
<html>

<head>
    <?php
    echo session::flash('marks'); 
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .card {
                position: relative;
                left: -500px;
                top: 200px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                max-width: 200px;
                height: 100px;
                margin: auto;
                text-align: center;
                font-family: 'Trebuchet MS';
                border: 2px solid;
                background-color: white;
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
        
.button {
    background-color: #3333ff;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
        /* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
        
        @media screen and (max-width: 600px) {
            .topnav a,
            .topnav input[type=text] {
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
            padding-top: 2px;
            padding-bottom: 2px;
            border: 2px solid;
            width: 500px;
            height: 700px;
            margin-left: 450px;
            margin-bottom: 200px;
            margin-top: 80px;
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
            margin-top: -200px;
            padding: 10px 10px 10px 10px;
            background-color: white;
            height: 700px;
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
      .classify{
          border: 2px solid;
          width: 200px;
          height: 75px;
          margin-top: 180px;
          margin-left: 200px;
      }
    
    </style>
</head>

<body>


    <div class="topnav">
        <a class="active" href="prof.php">Home</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        <!--<input type="text" placeholder="Search..">-->
        
    </div>

   <!-- <div class="card">
        <input type="button" class="button" id="classify" value="Classify" onclick="getStudents(<?php echo $prof_info->subject_id ?>)">
    </div>-->
    <div class="classify"> 
    <button type="submit" class="registerbtn" onclick="getStudents(<?php echo $prof_info->subject_id ?>)">Classify</button>
    </div>
    <form action="" method="POST" id="entryform">
        <div class="container">
            <h1>Marks Entry</h1>
            <p>Please Enter Student Data.</p>
            <hr noshade>

            <label for="roll"><b>Student Roll No</b></label>
            <input type="text" placeholder="Enter Roll No" name="roll_no" required>

            <label for="Marks"><b>Enter Marks</b></label>
            <input type="text" placeholder="Enter marks" name="marks" required>

            <label for="Type"><b>Select Exam</b></label>
            <br><br>
            <hr noshade>
            <label><input type="radio" name="exam" value="ut1_marks" checked>Unit Test - 1</label><br><br>
            <label><input type="radio" name="exam" value="ut2_marks"></label>Unit Test - 2<br><br>
            <hr noshade>

            <label for="remark"><b>Remarks</b></label>
            <input type="text" placeholder="Enter Remark" name="remark" >

            <button type="submit" class="registerbtn" >Submit</button>
            
        </div>


    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>

</html>