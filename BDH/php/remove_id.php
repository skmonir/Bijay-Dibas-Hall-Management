<?php
	$stu_id = $_GET['stu_id'];

	$conn = mysqli_connect('localhost', 'root', '', 'bdh');

	$sql = "DELETE FROM tbl_students WHERE stu_id = '$stu_id'";
	mysqli_query($conn, $sql);
	echo 'success';
	// else echo 'Database connection failed!';
?>