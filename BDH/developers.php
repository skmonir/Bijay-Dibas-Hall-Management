<?php
  include "header.php";
  if (!isset($_SESSION['uname'])) {
	header('location: signin.php');
  }
?>

<script>
	$(document).ready(function() {
		$('#page_title').html('Developers | Bijay Dibas Hall');
		$('#menu_developers').addClass('active');
	});
</script>

<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 col-sm-push-3">
								<div class="panel panel-default">
							        <div class="panel-body">
							          <div class="col-sm-6">
							            <img class="img-responsive img-thumbnail" src="img/monir.jpg" width="100%" height="60%">
							          </div>
							          <div class="col-sm-6">
							            <h4 style="font-family: consolas;"><a href="https://www.facebook.com/skmnrcse" target="_blank"><strong>Sheikh Monir</strong></a></h4>
							            <p style="font-family: consolas;">Coordinator, Designer and Developer</p>
							            <p style="font-family: consolas;">Department of CSE</p>
		            					<p style="font-family: consolas;">BSMRSTU</p>
							            <p style="font-family: consolas;">01837-060431</p>
							          </div>
							        </div>
							    </div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="panel panel-default">
							        <div class="panel-body">
							          <div class="col-sm-6">
							            <img class="img-responsive img-thumbnail" src="img/prodip.jpg" width="100%" height="100%">
							          </div>
							          <div class="col-sm-6">
							            <h4 style="font-family: consolas;">Prodip Dutta</h4>
							            <p style="font-family: consolas;">Data Collector</p>
							            <p style="font-family: consolas;">Dept. of CSE</p>
							          </div>
							        </div>
							    </div>
							</div>
							<div class="col-sm-4 col-sm-push-4">
								<div class="panel panel-default">
							        <div class="panel-body">
							          <div class="col-sm-6">
							            <img class="img-responsive img-thumbnail" src="img/jisan.jpg" width="100%" height="100%">
							          </div>
							          <div class="col-sm-6">
							            <h4 style="font-family: consolas;">Jisan Sheikh</h4>
							            <p style="font-family: consolas;">Data Collector</p>
							            <p style="font-family: consolas;">Dept. of CSE</p>
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