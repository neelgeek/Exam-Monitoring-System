

<?php

require_once 'php/init.php';
$user = new user();
$uinfo = $user->data();
$student = new student($uinfo->user_id);
$stud_info = $student->data();



?>


<html>

<head>
    <title>
    Welcome <?php $stud_info-> ?>        
    </title>
</head>

</html>