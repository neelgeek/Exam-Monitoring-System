<?php
require_once "../php/init.php";
$roll = $_SESSION['user'];

$sql = "SELECT subject_data.subject_name,marks_and_attendance.ut1_marks,marks_and_attendance.ut2_marks 
			FROM student_data,marks_and_attendance,subject_data WHERE p_id={$roll} 
			AND student_data.roll_no=marks_and_attendance.roll_no 
			AND subject_data.subject_id=marks_and_attendance.subject_id";
 $res = $conn->query($sql); 
 $dbdata = array();

 while ( $row = $res->fetch_assoc())  {
    $dbdata[]=$row;
     }
     echo json_encode($dbdata);

?>