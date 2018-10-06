<?php

    require_once 'php/init.php';
    $user = new user();

    if($user->IsLoggedIn())
    {
        header('location: index.php')
    }
    else
    {
        if(input::exists())
        {
            print("Input Exists");
            $user->login(input::get('id'),input::get('psw'));

        }

    }
?>

<!DOCTYPE html>
<html>
<!-- Comment -->

<head>
    <title>Exam Monitoring</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            background-color: black;
        }
        
        * {
            box-sizing: border-box;
            margin-right: auto;
            /*5px*/
            margin-left: auto;
            /*5px*/
            padding-top: 2px;
            /*2px*/
            padding-bottom: 2px;
            /*2px*/
        }
        /* Add padding to containers */
        
        .container {
            width: 550px;
            height: 550px;
            padding: 30px 30px 70px 30px;
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
            height: 50px;
        }
        /*--------------------Nav-bar-start--------------------------------------------------------- */
        /*--------------------Nav-bar-end--------------------------------------------------------- */
    </style>
</head>

<body>



    <form action="" method="POST">
        <div class="container">
            <h1>Sign in</h1>
            <br>
            <br>
            <p>Please enter your login id and password.</p>
            <hr noshade>

            <label for="user"><b>User id</b></label>
            <input type="text" placeholder="Enter Username" name="id" required>
            <br>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <br>

            <hr noshade>

            <button type="submit" class="registerbtn">Sign in</button>
        </div>

        <div class="container signin">
            <p>Don't have an account? <a href="#">Register</a>.</p>
        </div>
    </form>

</body>

</html>