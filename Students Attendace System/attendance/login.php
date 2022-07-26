<?php
	require_once 'admin/connect.php';
	$student = $_POST['student'];
    date_default_timezone_set('Africa/Accra');
	$time = date("H:i");
	$date = date("Y-m-d");
	$q_student = $conn->query("SELECT * FROM `student` WHERE `student_no` = '$student'") or die(mysqli_error());
	$f_student = $q_student->fetch_array();
	$student_name = $f_student['firstname']." ".$f_student['lastname'];
	$conn->query("INSERT INTO `time` VALUES('', '$student', '$student_name', '$time', '$date')") or die(mysqli_error());
	echo "<h3 class = 'text-muted'>".$student_name." <label class = 'text-info'>at  ".date("h:i a", strtotime($time))."</label></h3>";