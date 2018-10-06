<?php
    require_once "../php/init.php";
    $roll = $_POST['roll'];
    $cat = $_POST['cat'];
    $id = $_POST['id'];

$query = "UPDATE `marks_and_attendance` SET `category`= '{$cat}' WHERE `roll_no`= '{$roll}' AND `subject_id`= '{$id}'";
    echo $query;
     if($conn->query($query))
     {
         echo "Sucess";
     } 
     else{
         echo "Fail";
     }
    
    // $query = "SELECT ut1_marks,ut2_marks FROM `marks_and_attendance` WHERE subject_id={$id}";
    // $res = $conn->query($query); 
    // $dbdata = array();

    // //Fetch into associative array
    //  while ( $row = $res->fetch_assoc())  {
    //  $dbdata[]=$row;
    //   }
    //   echo json_encode($dbdata);
    
?>