<?php
	$stu_id = $_GET['stu_id'];
	$amount = $_GET['amount'];
	$slip_no = $_GET['slip'];
	$pay_from_month = $_GET['pay_from_month'];
	$pay_from_year = $_GET['pay_from_year'];
	$payment_from = $pay_from_month.'-'.$pay_from_year;
	$pay_to_month = $_GET['pay_to_month'];
	$pay_to_year = $_GET['pay_to_year'];
	$payment_to = $pay_to_month.'-'.$pay_to_year;

	if ($stu_id == "") echo 'Please enter the ID of the student.';
	else if ($pay_from_month == "0" or $pay_from_year == "0") echo 'Please enter valid dates.';
	else if ($pay_to_month == "0" or $pay_to_year == "0") echo 'Please enter valid dates.';
	else if ($amount == "") echo 'Please enter the amount.';
	else if ($slip_no == "") echo 'Please enter the slip no.';
	else {
		$conn = mysqli_connect('localhost', 'root', '', 'bdh');

		$sql = "SELECT * FROM tbl_students WHERE stu_id = '$stu_id'";
		$idresp = mysqli_query($conn, $sql);

		if (mysqli_num_rows($idresp) == 0) echo "This ID does not exist in the hall system.";
		else {
			date_default_timezone_set('Asia/Dhaka');
			$entry_date = date('d-M-Y');

			$sql = "INSERT INTO tbl_payments(entry_date, stu_id, payment_from, payment_to, amount, slip_no) VALUES ('$entry_date', '$stu_id', '$payment_from', '$payment_to', '$amount', '$slip_no');";
			mysqli_query($conn, $sql);

			echo "success";
		}
	}
?>