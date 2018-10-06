

<?php

require_once 'php/init.php';
$user = new user();
$uinfo = $user->data();
$stud = new profile('student_data','roll_no',$uinfo->user_id);
$stud_info = $stud->data();



?>


<html>

<head>
    <title>
    Welcome <?php print($stud_info->name) ?>        
    </title>
</head>

</html>