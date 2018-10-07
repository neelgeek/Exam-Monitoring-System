<?php
    require_once "../php/init.php";
    $id = $_SESSION['user'];
    $query = "SELECT marks_and_attendance.category, count(marks_and_attendance.category) as category_count FROM `marks_and_attendance` where marks_and_attendance.subject_id={$id}"
    . " GROUP by marks_and_attendance.category";
   
    $res = $conn->query($query); 
    $dbdata = array();

    //Fetch into associative array
     while ( $row = $res->fetch_assoc())  {
     $dbdata[]=$row;
      }
      echo json_encode($dbdata);
    
?>