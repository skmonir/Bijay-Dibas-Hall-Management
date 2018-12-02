<?php
  include "header.php";
	if (!isset($_SESSION['uname'])) {
		header('location: signin.php');
	}
?>

<script>
  $(document).ready(function() {
    $('#page_title').html('Home | Bijay Dibas Hall');
    $('#menu_home').addClass('active');
  });
</script>

<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-6">
			<img class="img-responsive" src="img/logo.png" width="100%" height="100%">
		</div>
		<div class="col-sm-6">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4 class="panel-title">Honorable Provost</h4>
				</div>
		        <div class="panel-body">
		          <div class="col-sm-6">
		            <img class="img-responsive img-thumbnail" src="img/provost.jpg" width="100%" height="100%">
		          </div>
		          <div class="col-sm-6">
		            <h4 style="font-family: consolas;"><strong>Md. Zubaidur Rahman</strong></h4>
		            <p style="font-family: consolas;">Assistant Professor,</p>
		            <p style="font-family: consolas;">Department of Economics</p>
		            <p style="font-family: consolas;">BSMRSTU</p>
		          </div>
		        </div>
		    </div>
		</div>
	</div>
</div>

<?php include "footer.php"; ?>