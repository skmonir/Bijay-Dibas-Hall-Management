<?php
  include "header.php";
  if (!isset($_SESSION['uname'])) {
		header('location: signin.php');
	}
?>

<script>
	$(document).ready(function() {
		$('#page_title').html('Allotment | Bijay Dibas Hall');
		$('#menu_action').addClass('active');

		$('#alt_sub').click(function() {
			var name = $('#name').val();
			var id = $('#stu_id').val();
			var dept = $('#dept').val();
			var room = $('#room').val();
			var seat = $('#seat').val();
			var expr_dt = $('#expr_dt').val();
			var expr_yr = $('#expr_yr').val();
			var expr = expr_dt + '-' + expr_yr;

			$.get('php/allotment.php', {
				'name' : name, 'id' : id, 'dept' : dept, 'room' : room,
				'seat' : seat, 'expr_dt' : expr_dt, 'expr_yr' : expr_yr, 'expr' : expr

			}, function(res) {
	            if (res == 'success') {
	            	$('.alert-success').removeClass('hidden');
	            	$('.alert-danger').addClass('hidden');
	            	$('.alert-success').html('Information of ID ' + id + ' is stored successfully.');
	            } else {
	            	$('.alert-danger').removeClass('hidden');
	            	$('.alert-success').addClass('hidden');
	            	$('.alert-danger').html(res);
	            }
	        });
		});
	});
</script>


<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-sm-8 col-sm-push-2">
			      <div class="col-sm-8 col-sm-push-2">
			        <div class="panel panel-info">
			        	<div class="panel-heading">
			        		<h3 class="panel-title">Allotment</h3>
			        	</div>
			          <div class="panel-body">
			            <div class="form-group">
			            	<div class="row">
			            		<div class="col-sm-12">
			            			<div class="alert alert-success hidden" style="text-align: center;"></div>
			            			<div class="alert alert-danger hidden" style="text-align: center;"></div>
			            		</div>
			            	</div>
			            	<div class="row">
								<div class="col-sm-3">
									<label>Name</label>
								</div>
								<div class="col-sm-9">
									<input id="name" class="form-control" type="text" placeholder="Enter the name of the student">
								</div>
							</div>
							<br>
			            	<div class="row">
								<div class="col-sm-3">
									<label>ID</label>
								</div>
								<div class="col-sm-9">
									<input id="stu_id" class="form-control" type="text" placeholder="Enter the student ID">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-3">
									<label>Department</label>
								</div>
								<div class="col-sm-9">
									<select class="form-control" id="dept">
									    <option value="0">Select Department</option>
									    <?php
									    	if ($file = fopen("dept.txt", "r")) {
											    while(!feof($file)) {
											        $line = fgets($file);
											        echo '<option value="'.$line.'">'.$line.'</option>';
											    }
											    fclose($file);
											}
									    ?>
									</select>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-3">
									<label>Room No</label>
								</div>
								<div class="col-sm-9">
									<input id="room" class="form-control" type="text" placeholder="Enter the choosen room no.">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-3">
									<label>Seat No</label>
								</div>
								<div class="col-sm-9">
									<select class="form-control" id="seat">
									    <option value="0">Select Seat No</option>
									    <option value="A">A</option>
									    <option value="B">B</option>
									    <option value="C">C</option>
									    <option value="D">D</option>
									    <option value="E">E</option>
									</select>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-3">
									<label>Expire Date</label>
								</div>
								<div class="col-sm-5">
									<select class="form-control" id="expr_dt">
									    <option value="0">Select Month</option>
									    <?php
									    	$month = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
									    	for ($i = 0; $i < 12; $i++) {
									    		echo '<option value="'.$month[$i].'">'.$month[$i].'</option>';
									    	}
									    ?>
									</select>
								</div>
								<div class="col-sm-4">
									<select class="form-control" id="expr_yr">
									    <option value="0">Select Year</option>
									    <?php
											for ($i = 2025; $i >= 2010; $i--) {
												echo '<option value="'.$i.'">'.$i.'</option>';
											}
										?>
									 </select>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-4 col-sm-push-4">
									<button class="btn btn-success form-control" id="alt_sub">Submit</button>
								</div>
							</div>
			            </div>
			          </div>
			        </div>
			      </div>
			    </div>
			</div>
		</div>
	</div>
</div>

<?php include "footer.php"; ?>