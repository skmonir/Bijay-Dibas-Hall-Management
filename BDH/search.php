<?php
  include "header.php";
  if (!isset($_SESSION['uname'])) {
	header('location: signin.php');
  }
?>

<script>
	$(document).ready(function() {
		$('#page_title').html('Search | Bijay Dibas Hall');
		$('#menu_search').addClass('active');

		$('#room_src_btn').click(function() {
			$('#id_src_res').addClass('hidden');
			$('#dept_src_res').addClass('hidden');
			$('#room_src_res').removeClass('hidden');

			var room = $('#room_src_inp').val();
			$('#room_src_room_name').html('Room No. ' + room);

			$.get('php/isSeatFree.php', {'room' : room, 'seat' : 'A'}, function(res) {
				if (res != 'free') {
					$('#seat_A_add').addClass('hidden');
					$('#seat_A_rmv').removeClass('hidden');
					$('#seat_A_rmv').attr('data-id', res);
				} else {
					$('#seat_A_rmv').addClass('hidden');
					$('#seat_A_add').removeClass('hidden');
				}
		    });
		    $.get('php/search_seat.php', {'room' : room, 'seat' : 'A'}, function(res) {
		        $("#seat_A").html(res);
		    });

		    $.get('php/isSeatFree.php', {'room' : room, 'seat' : 'B'}, function(res) {
		    	if (res != 'free') {
					$('#seat_B_add').addClass('hidden');
		    		$('#seat_B_rmv').removeClass('hidden');
		    		$('#seat_B_rmv').attr('data-id', res);
		    	} else {
					$('#seat_B_rmv').addClass('hidden');
		    		$('#seat_B_add').removeClass('hidden');
		    	}
		    });
		    $.get('php/search_seat.php', {'room' : room, 'seat' : 'B'}, function(res) {
		        $("#seat_B").html(res);
		    });

		    $.get('php/isSeatFree.php', {'room' : room, 'seat' : 'C'}, function(res) {
		    	if (res != 'free') {
					$('#seat_C_add').addClass('hidden');
		    		$('#seat_C_rmv').removeClass('hidden');
		    		$('#seat_C_rmv').attr('data-id', res);
		    	} else {
					$('#seat_C_rmv').addClass('hidden');
		    		$('#seat_C_add').removeClass('hidden');
		    	}
		    });
		    $.get('php/search_seat.php', {'room' : room, 'seat' : 'C'}, function(res) {
		        $("#seat_C").html(res);
		    });

		    $.get('php/isSeatFree.php', {'room' : room, 'seat' : 'D'}, function(res) {
		    	if (res != 'free') {
					$('#seat_D_add').addClass('hidden');
		    		$('#seat_D_rmv').removeClass('hidden');
		    		$('#seat_D_rmv').attr('data-id', res);
		    	} else {
					$('#seat_D_rmv').addClass('hidden');
		    		$('#seat_D_add').removeClass('hidden');
		    	}
		    });
		    $.get('php/search_seat.php', {'room' : room, 'seat' : 'D'}, function(res) {
		        $("#seat_D").html(res);
		    });

		    $.get('php/isSeatFree.php', {'room' : room, 'seat' : 'E'}, function(res) {
		    	if (res != 'free') {
					$('#seat_E_add').addClass('hidden');
		    		$('#seat_E_rmv').removeClass('hidden');
		    		$('#seat_E_rmv').attr('data-id', res);
		    	} else {
					$('#seat_E_rmv').addClass('hidden');
		    		$('#seat_E_add').removeClass('hidden');
		    	}
		    });
		    $.get('php/search_seat.php', {'room' : room, 'seat' : 'E'}, function(res) {
		        $("#seat_E").html(res);
		    });
			window.location.href = '#room_src_res';
		});

		$('#id_src_btn').click(function() {
			$('#room_src_res').addClass('hidden');
			$('#dept_src_res').addClass('hidden');
			$('#id_src_res').removeClass('hidden');

			var id = $('#id_src_inp').val();

			$.get('php/search_id.php', {'stu_id' : id}, function(res) {
		        $("#id_src_info").html(res);
		    });
		    $.get('php/rent_history.php', {'stu_id' : id}, function(res) {
		        $("#id_src_rent").html(res);
		    });

			$('#id_src_id_name').html('ID : ' + id);
			window.location.href = '#id_src_res';
		});

		$('.btnrmvstu').on('click', function() {
			var stu_id = $(this).data('id');
			$('.btn-ok-rmv').attr('data-id', stu_id);
		});

		$('.btn-ok-rmv').click(function() {
			var stu_id = $(this).data('id');
			$.get('php/remove_id.php', {'stu_id' : stu_id}, function(res) {
		        location.reload();
		    });
		});

		$('#dept_src_btn').click(function() {
			$('#room_src_res').addClass('hidden');
			$('#id_src_res').addClass('hidden');
			$('#dept_src_res').removeClass('hidden');

			var dept = $('#dept_inp').val();
			$('#dept_src_dept_name').html(dept);

			$.get('php/dept_src.php', {'dept' : dept}, function(res) {
		        $("#dept_src_data").html(res);
		    });

			window.location.href = '#dept_src_res';
		});
	});
</script>


<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-4">
						<div class="panel panel-info">
							<div class="panel-heading">
					          <h3 class="panel-title td-center">Search By Room No.</h3>
					        </div>
							<div class="panel-body">
								<form class="form-group">
	                              <input class="form-control" id="room_src_inp" type="text" placeholder="Enter Room No.">
	                              <br>
	                              <button class="btn btn-primary form-control" id="room_src_btn">Search</button>
	                              <br> <br>
	                              <div class="hidden alert alert-danger" role="alert"></div>
	                            </form>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="panel panel-info">
							<div class="panel-heading">
					          <h3 class="panel-title td-center">Search By Student ID</h3>
					        </div>
							<div class="panel-body">
								<form class="form-group">
	                              <input class="form-control" id="id_src_inp" type="text" placeholder="Enter Student ID">
	                              <br>
	                              <button class="btn btn-primary form-control" id="id_src_btn">Search</button>
	                              <br> <br>
	                              <div class="hidden alert alert-danger" role="alert"></div>
	                            </form>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="panel panel-info">
							<div class="panel-heading">
					          <h3 class="panel-title td-center">Search By Department</h3>
					        </div>
							<div class="panel-body">
								<form class="form-group">
	                              <select class="form-control" id="dept_inp">
								    <option>Select Department</option>
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
	                              <br>
	                              <button class="btn btn-primary form-control" id="dept_src_btn">Search</button>
	                              <br> <br>
	                              <div class="hidden alert alert-danger" role="alert"></div>
	                            </form>
							</div>
						</div>
					</div>
				</div>

				<hr>

				<!-- Result for Room No. -->
				<div class="row hidden" id="room_src_res">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-4 col-sm-push-4">
								<div class="panel panel-success">
									<div class="panel-heading">
							          <h3 class="panel-title td-center"><strong id="room_src_room_name"></strong></h3>
							        </div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="panel panel-info">
									<div class="panel-heading">
										<div class="row">
											<div class="col-sm-6">
												<span class="panel-title badge">Seat Label : A</span>
											</div>
											<div class="col-sm-6 col-sm-push-3">
												<button id="seat_A_rmv" data-id="" class="hidden btn btn-danger btn-xs btnrmvstu" data-toggle="modal" data-target="#PopUpRemoveStudent">Remove</button>
												<a id="seat_A_add" href="action_allotment.php" target="_blank" role="button" class="hidden btn btn-xs btn-success">Add</a>
											</div>
										</div>
							        </div>
							        <div id="seat_A" class="panel-body">
							            <!-- <p style="font-family: consolas;">Seat Status : <span class="label label-success">Available</span></p> -->
								    </div>
								</div>
							</div>
							<div class="col-sm-4 col-sm-push-4">
								<div class="panel panel-info">
									<div class="panel-heading">
										<div class="row">
											<div class="col-sm-6">
												<span class="panel-title badge">Seat Label : B</span>
											</div>
											<div id="seat_B_action" class="col-sm-6 col-sm-push-3">
												<button id="seat_B_rmv" data-id="" class="hidden btn btn-danger btn-xs btnrmvstu" data-toggle="modal" data-target="#PopUpRemoveStudent">Remove</button>
												<a id="seat_B_add" href="action_allotment.php" target="_blank" role="button" class="hidden btn btn-xs btn-success">Add</a>
											</div>
										</div>
							        </div>
									<div id="seat_B" class="panel-body"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="panel panel-info">
									<div class="panel-heading">
										<div class="row">
											<div class="col-sm-6">
												<span class="panel-title badge">Seat Label : C</span>
											</div>
											<div id="seat_C_action" class="col-sm-6 col-sm-push-3">
												<button id="seat_C_rmv" data-id="" class="hidden btn btn-danger btn-xs btnrmvstu" data-toggle="modal" data-target="#PopUpRemoveStudent">Remove</button>
												<a id="seat_C_add" href="action_allotment.php" target="_blank" role="button" class="hidden btn btn-xs btn-success">Add</a>
											</div>
										</div>
							        </div>
									<div id="seat_C" class="panel-body"></div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="panel panel-info">
									<div class="panel-heading">
										<div class="row">
											<div class="col-sm-6">
												<span class="panel-title badge">Seat Label : E</span>
											</div>
											<div id="seat_E_action" class="col-sm-6 col-sm-push-3">
												<button id="seat_E_rmv" data-id="" class="hidden btn btn-danger btn-xs btnrmvstu" data-toggle="modal" data-target="#PopUpRemoveStudent">Remove</button>
												<a id="seat_E_add" href="action_allotment.php" target="_blank" role="button" class="hidden btn btn-xs btn-success">Add</a>
											</div>
										</div>
							        </div>
									<div id="seat_E" class="panel-body"></div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="panel panel-info">
									<div class="panel-heading">
										<div class="row">
											<div class="col-sm-6">
												<span class="panel-title badge">Seat Label : D</span>
											</div>
											<div id="seat_D_action" class="col-sm-6 col-sm-push-3">
												<button id="seat_D_rmv" data-id="" class="hidden btn btn-danger btn-xs btnrmvstu" data-toggle="modal" data-target="#PopUpRemoveStudent">Remove</button>
												<a id="seat_D_add" href="action_allotment.php" target="_blank" role="button" class="hidden btn btn-xs btn-success">Add</a>
											</div>
										</div>
							        </div>
									<div id="seat_D" class="panel-body"></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Result for Student ID -->
				<div class="row hidden" id="id_src_res">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-4">
								<div class="panel panel-info">
									<div class="panel-heading">
										<div class="row">
											<div class="col-sm-6">
												<span class="panel-title badge" id="id_src_id_name"></span>
											</div>
											<div class="col-sm-6 col-sm-push-3">
												<button class="btn btn-xs btn-danger">Edit Data</button>
											</div>
										</div>
							        </div>
									<div id="id_src_info" class="panel-body"></div>
								</div>
							</div>
							<div class="col-sm-8">
								<div class="panel panel-info">
									<div class="panel-heading">
										<div class="row">
											<div class="col-sm-6">
												<span class="panel-title badge">Rent History</span>
											</div>
										</div>
							        </div>
							        <div class="table-responsive">
							        	<table class="table table-info table-bordered table-striped">
							        		<thead>
												<tr>
													<th class="col-sm-1 td-center">#</th>
													<th class="col-sm-3 td-center">Date of Entry</th>
													<th class="col-sm-2 td-center">From</th>
													<th class="col-sm-2 td-center">To</th>
													<th class="col-sm-2 td-center">Rent [BDT]</th>
													<th class="col-sm-2 td-center">Slip No.</th>
												</tr>
											</thead>
											<tbody id="id_src_rent"></tbody>
							        	</table>
							        </div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Result for Dept. -->
				<div class="row hidden" id="dept_src_res">
					<div class="col-sm-12">
						<div class="panel panel-info">
							<div class="panel-heading">
								<div class="row">
									<div class="col-sm-6">
										<span class="panel-title badge" id="dept_src_dept_name">Department</span>
									</div>
								</div>
					        </div>
							<div class="table-responsive">
					        	<table class="table table-info table-bordered table-striped">
					        		<thead>
										<tr>
											<th class="col-sm-1 td-center">#</th>
											<th class="col-sm-3 td-center">Name</th>
											<th class="col-sm-5 td-center">Department</th>
											<th class="col-sm-2 td-center">ID</th>
											<th class="col-sm-1 td-center">Room</th>
										</tr>
									</thead>
									<tbody id="dept_src_data"></tbody>
					        	</table>
					        </div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="PopUpRemoveStudent">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            	<button type="button" class="close btn btn-danger" data-dismiss="modal">&nbsp;&times;&nbsp;</button>
                <p class="modal-heading"><strong>Remove the student</strong></p>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to remove the student from this seat?</p>
                <br> <br>
                <div class="stu_rmv_msg hidden alert alert-danger" role="alert"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button data-id="" type="button" class="btn btn-danger btn-ok-rmv">Remove</button>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>