<?php
  include "header.php";
  if (!isset($_SESSION['uname'])) {
		header('location: signin.php');
	}
?>

<script>
	$(document).ready(function() {
		$('#page_title').html('Payment | Bijay Dibas Hall');
		$('#menu_action').addClass('active');

		$('#pay_sub').click(function() {
			var stu_id = $('#stu_id').val();
			var amount = $('#amount').val();
			var slip = $('#slip').val();
			var pay_from_month = $('#pay_from_month').val();
			var pay_from_year = $('#pay_from_year').val();
			var pay_to_month = $('#pay_to_month').val();
			var pay_to_year = $('#pay_to_year').val();

			$.get('php/payment.php', {
				'stu_id' : stu_id, 'amount' : amount, 'slip' : slip,
				'pay_from_month' : pay_from_month, 'pay_from_year' : pay_from_year,
				'pay_to_month' : pay_to_month, 'pay_to_year' : pay_to_year

			}, function(res) {
	            if (res == 'success') {
	            	$('.alert-success').removeClass('hidden');
	            	$('.alert-danger').addClass('hidden');
	            	$('.alert-success').html('Payment for ID ' + stu_id + ' is successfully.');
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
			        	<h3 class="panel-title">Payment</h3>
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
									<label>Student ID</label>
								</div>
								<div class="col-sm-9">
									<input id="stu_id" class="form-control" type="text" placeholder="Student ID">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-3">
									<label>From</label>
								</div>
								<div class="col-sm-5">
									<select class="form-control" id="pay_from_month">
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
									<select class="form-control" id="pay_from_year">
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
								<div class="col-sm-3">
									<label>To</label>
								</div>
								<div class="col-sm-5">
									<select class="form-control" id="pay_to_month">
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
									<select class="form-control" id="pay_to_year">
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
								<div class="col-sm-3">
									<label>Amount</label>
								</div>
								<div class="col-sm-9">
									<input id="amount" class="form-control" type="text" placeholder="Enter the amount in BDT">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-3">
									<label>Slip No</label>
								</div>
								<div class="col-sm-9">
									<input id="slip" class="form-control" type="text" placeholder="Enter the slip no.">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-4 col-sm-push-4">
									<button id="pay_sub" class="btn btn-success form-control">Submit</button>
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