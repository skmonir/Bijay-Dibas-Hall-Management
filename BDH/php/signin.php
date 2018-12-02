<?php
	$pwd = $_GET['pwd'];

	$conn = mysqli_connect('localhost', 'root', '', 'bdh');

	$sql = "SELECT * FROM tbl_admins WHERE pwd = '$pwd'";
	$resp = mysqli_query($conn, $sql);

	if ($pwd == "") echo "Password field can not be empty!";
	else if (mysqli_num_rows($resp) > 0) {
		session_start();
		$_SESSION['uname'] = 'BDHadmin';
		echo "success";
	} else echo "Password does not match!";
?>