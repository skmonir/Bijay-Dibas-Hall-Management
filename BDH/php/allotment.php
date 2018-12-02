<?php
	$name = $_GET['name'];
	$id = $_GET['id'];
	$dept = $_GET['dept'];
	$room = $_GET['room'];
	$seat = $_GET['seat'];
	$expr_dt = $_GET['expr_dt'];
	$expr_yr = $_GET['expr_yr'];
	$expr = $_GET['expr'];

	if ($name == "") echo 'Please enter the name of the student.';
	else if ($id == "") echo 'Please enter the ID of the student.';
	else if ($dept == "0") echo 'Please select the deparment.';
	else if ($room == "") echo 'Please choose a room no.';
	else if ($seat == "0") echo 'Please choose a seat no.';
	else if ($expr_dt == "0" or $expr_yr == "0") echo 'Please set the expire date of this seat.';
	else {
		$conn = mysqli_connect('localhost', 'root', '', 'bdh');

		$sql = "SELECT * FROM tbl_students WHERE stu_id = '$id'";
		$idresp = mysqli_query($conn, $sql);

		$sql = "SELECT * FROM tbl_students WHERE room = '$room' AND seat = '$seat'";
		$stresp = mysqli_query($conn, $sql);


		if (mysqli_num_rows($idresp) > 0) echo "This ID already exists.";
		else if (mysqli_num_rows($stresp) > 0) echo "This seat is already occupied.";
		else {
			date_default_timezone_set('Asia/Dhaka');
			$entry_date = date('d-M-Y');

			$sql = "INSERT INTO tbl_students(entry_date, name, stu_id, dept, room, seat, expire) VALUES ('$entry_date', '$name', '$id', '$dept', '$room', '$seat', '$expr');";
			mysqli_query($conn, $sql);

			echo "success";
		}
	}
?>