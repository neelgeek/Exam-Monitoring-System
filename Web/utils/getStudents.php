<?php
    require_once "../php/init.php";
    $id = $_GET['id'];
    $query = "SELECT ut1_marks,ut2_marks,roll_no,subject_id FROM `marks_and_attendance` WHERE subject_id={$id}";
    $res = $conn->query($query); 
    $dbdata = array();

    //Fetch into associative array
     while ( $row = $res->fetch_assoc())  {
     $dbdata[]=$row;
      }
      echo json_encode($dbdata);
    
?>