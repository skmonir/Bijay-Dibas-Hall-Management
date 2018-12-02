<?php
	$stu_id = $_GET['stu_id'];

	$conn = mysqli_connect('localhost', 'root', '', 'bdh');

	$sql = "SELECT * FROM tbl_students WHERE stu_id = '$stu_id'";
	$stresp = mysqli_query($conn, $sql);

	if (mysqli_num_rows($stresp) > 0) {
		$row = mysqli_fetch_assoc($stresp);
		
		echo '<p style="font-family: consolas;">Room No. : '.$row['room'].'</p>';
		echo '<p style="font-family: consolas;">Seat No. : '.$row['seat'].'</p>';
		echo '<p style="font-family: consolas;">Name : '.$row['name'].'</p>';
		echo '<p style="font-family: consolas;">Dept : '.$row['dept'].'</p>';
		echo '<p style="font-family: consolas;">Available Till : '.$row['expire'].'</p>';
	}
?>