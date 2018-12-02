<?php
	$room = $_GET['room'];
	$seat = $_GET['seat'];

	$conn = mysqli_connect('localhost', 'root', '', 'bdh');

	$sql = "SELECT * FROM tbl_students WHERE room = '$room' AND seat = '$seat'";
	$stresp = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($stresp);

	if (mysqli_num_rows($stresp) > 0) echo $row['stu_id'];
	else echo 'free';
?>