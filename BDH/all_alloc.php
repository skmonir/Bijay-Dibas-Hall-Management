<?php
  include "header.php";
	if (!isset($_SESSION['uname'])) {
		header('location: signin.php');
	}
?>

<script>
  $(document).ready(function() {
    $('#page_title').html('All Summary | Bijay Dibas Hall');
    $('#menu_summary').addClass('active');
  });
</script>

<div class="row">
	<div class="col-sm-12">
		<div class="col-sm-8 col-sm-push-2">
			<img class="img-responsive" src="img/under_construction.jpg" width="100%" height="100%">
		</div>
	</div>
</div>

<?php include "footer.php"; ?>