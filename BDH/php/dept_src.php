<?php
	$dept = $_GET['dept'];

	$conn = mysqli_connect('localhost', 'root', '', 'bdh');

	$sql = "SELECT * FROM tbl_students WHERE dept = '$dept'";
	$stresp = mysqli_query($conn, $sql);

	if (mysqli_num_rows($stresp) > 0) {
		$i = 1;
		while ($row = mysqli_fetch_assoc($stresp)) {
			echo '<tr>';
			echo '<td class="td-center">'.$i.'</td>';
			echo '<td class="td-center">'.$row['name'].'</td>';
			echo '<td class="td-center">'.$row['dept'].'</td>';
			echo '<td class="td-center">'.$row['stu_id'].'</td>';
			echo '<td class="td-center">'.$row['room'].'-'.$row['seat'].'</td>';
			echo '</tr>';
			$i++;
		}
	}
?>