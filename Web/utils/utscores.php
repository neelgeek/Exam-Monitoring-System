<?php
require_once "../php/init.php";
$roll = $_SESSION['user'];

$sql = "SELECT DISTINCT `subject_name`, `ut1_marks`, `ut2_marks` 
FROM `marks_and_attendance`, `subject_data` WHERE `roll_no`='{$roll}'
 AND marks_and_attendance.subject_id=subject_data.subject_id";
 $res = $conn->query($sql); 
 $dbdata = array();

 while ( $row = $res->fetch_assoc())  {
    $dbdata[]=$row;
     }
     echo json_encode($dbdata);

?>