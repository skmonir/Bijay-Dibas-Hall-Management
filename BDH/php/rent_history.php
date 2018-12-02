<?php
	$stu_id = $_GET['stu_id'];

	$conn = mysqli_connect('localhost', 'root', '', 'bdh');

	$sql = "SELECT * FROM tbl_payments WHERE stu_id = '$stu_id'";
	$stresp = mysqli_query($conn, $sql);

	if (mysqli_num_rows($stresp) > 0) {
		$i = 1;
		while ($row = mysqli_fetch_assoc($stresp)) {
			echo '<tr>';
			echo '<td class="td-center">'.$i.'</td>';
			echo '<td class="td-center">'.$row['entry_date'].'</td>';
			echo '<td class="td-center">'.$row['payment_from'].'</td>';
			echo '<td class="td-center">'.$row['payment_to'].'</td>';
			echo '<td class="td-center">'.$row['amount'].'</td>';
			echo '<td class="td-center">'.$row['slip_no'].'</td>';
			echo '</tr>';
			$i++;
		}
	}
?>