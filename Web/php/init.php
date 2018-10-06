<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "ems");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }


spl_autoload_register(function ($class)	
{

	require_once 'php/classes/' . $class . '.php';
}
);

?>