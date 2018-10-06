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
            margin-bottom: 150px
        }
        
        .plsshift {
            margin-left: 250px;
        }
        /*-----------------------------------------------------------------------------------------------------------------------------*/
    </style>
</head>

<body>


    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        <!--<input type="text" placeholder="Search.."-->
        <a href="logout.php">logout</a>
    </div>

    <h2 align="center">Data Visualization</h2>


    <div class="plsshift">
        <div style="width: 75%">

            <canvas id="canvas"></canvas>

        </div>

        <button id="randomizeData" align="center">Randomize Data</button>

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



            document.getElementById('randomizeData').addEventListener('click', function() {

                barChartData.datasets.forEach(function(dataset) {

                    dataset.data = dataset.data.map(function() {

                        return randomScalingFactor();

                    });

                });

                window.myBar.update();

            });
        </script>

        <br><br>
        <br><br>
        <br><br>



        <div class="container2">
            <canvas id="myChart1"></canvas>
        </div>

        <script>
            let myChart1 = document.getElementById('myChart1').getContext('2d');

            // Global Options
            Chart.defaults.global.defaultFontFamily = 'Trebuchet MS';
            Chart.defaults.global.defaultFontSize = 18;
            Chart.defaults.global.defaultFontColor = '#777';

            let massPopChart1 = new Chart(myChart1, {
                type: 'pie', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
                data: {
                    labels: ['Boston', 'Worcester', 'Springfield', 'Lowell', 'Cambridge', 'New Bedford'],
                    datasets: [{
                        label: 'Population',
                        data: [
                            617594,
                            181045,
                            153060,
                            106519,
                            105162,
                            95072
                        ],
                        //backgroundColor:'green',
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)',
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(153, 102, 255, 0.6)',
                            'rgba(255, 159, 64, 0.6)',
                            'rgba(255, 99, 132, 0.6)'
                        ],
                        borderWidth: 1,
                        borderColor: '#777',
                        hoverBorderWidth: 3,
                        hoverBorderColor: '#000'
                    }]
                },
                options: {
                    title: {
                        display: false,
                        text: 'Largest Cities In Massachusetts',
                        fontSize: 25

                    },
                    legend: {
                        display: true,
                        position: 'left',
                        labels: {
                            fontColor: '#000'
                        }
                    },
                    layout: {
                        padding: {
                            left: 50,
                            right: 0,
                            bottom: 0,
                            top: 0
                        }
                    },
                    tooltips: {
                        enabled: true
                    }
                }
            });
        </script>






        <br><br>
        <br><br><br><br>

        <div class="footer">
            <p>Exam Monitoring</p>
        </div>

    </div>

</body>

</html>