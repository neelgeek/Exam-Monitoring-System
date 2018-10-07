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
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsive Side Menu</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="js/utils.js"></script>


    <style>
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
        
        body {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            background-color: white;
        }
        /* Add padding to containers */
        
        a {
            color: dodgerblue;
        }
        /* Set a grey background color and center the text of the "sign in" section */
        
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }
        /*-----------------FOOTER---------------------------------------------------------------*/
        
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 60px;
            background-color: blue;
            color: white;
            text-align: center;
        }
        
        .footer p {
            margin-top: 25px;
            top: 60px;
        }
        /*------------------------------------------------------------------------------*/
        
        .container1 {
            height: 20%;
            width: 20%;
            float: right;
            left: 250px;
        }
        
        .container2 {
            height: 50%;
            width: 50%;
            float: left;    
            margin-bottom: 150px;
          
            
        }
        
        

        .plsshift {
            margin-left: 250px;
        }
        /*-----------------------------------------------------------------------------------------------------------------------------*/
    </style>
</head>

<body>


    <div class="topnav">
        <a class="active" href="prof.php">Home</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        <!--<input type="text" placeholder="Search.."-->
     
    </div>

    <h2 align="center">Student Performance Data Visualization</h2>


    <div class="plsshift">
        <div style="width: 75%">

            <canvas id="canvas"></canvas>

        </div>

        <script>
            var barChartData = {

                labels: ['Div A', 'Div B'],

                datasets: [{

                    label: 'Unit Test 1',

                    backgroundColor: window.chartColors.red,

                    data: [

                        17, 12
                    ]

                }, {

                    label: 'Unit Test 2',

                    backgroundColor: window.chartColors.blue,

                    data: [

                        30, 25

                    ]

                }]



            };

            window.onload = function() {

                var ctx = document.getElementById('canvas').getContext('2d');

                window.myBar = new Chart(ctx, {

                    type: 'bar',

                    data: barChartData,

                    options: {

                        title: {

                            display: true,

                            text: ''

                        },

                        tooltips: {

                            mode: 'index',

                            intersect: false

                        },

                        responsive: true,

                        scales: {

                            xAxes: [{

                                stacked: true,

                            }],

                            yAxes: [{
                                stacked: true,
                                max: 60

                            }]

                        }

                    }

                });

            };



         
        </script>

        <br><br>
        <br><br>
        <br><br>



        <div class="container2 piediv">
            <canvas  id="myChart1"></canvas>
        </div>

        <script>
            
        </script>






        <br><br>
        <br><br><br><br>

        <div class="footer">
            <p>Exam Monitoring</p>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="js/visualprof.js"></script>
</body>

</html>