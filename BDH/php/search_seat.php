<?php
	$room = $_GET['room'];
	$seat = $_GET['seat'];
	//echo $seat;

	$conn = mysqli_connect('localhost', 'root', '', 'bdh');

	$sql = "SELECT * FROM tbl_students WHERE room = '$room' AND seat = '$seat'";
	$stresp = mysqli_query($conn, $sql);

	$name = "";
	$id = "";
	$dept = "";
	$expire = "";
	if (mysqli_num_rows($stresp) > 0) {
		$row = mysqli_fetch_assoc($stresp);
		$name = $row['name'];
		$id = $row['stu_id'];
		$dept = $row['dept'];
		$expire = $row['expire'];
	}

	echo '<p style="font-family: consolas;">Name : '.$name.'</p>';
	echo '<p style="font-family: consolas;">ID : '.$id.'</p>';
	echo '<p style="font-family: consolas;">Dept : '.$dept.'</p>';
	echo '<p style="font-family: consolas;">Available Till : '.$expire.'</p>';
?>