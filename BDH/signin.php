<?php
  include 'header.php';

  if (isset($_SESSION['uname'])) {
    header('location: index.php');
  }
?>

<script>
  $(document).ready(function() {
    $('#page_title').html('Sign In | Bijay Dibas Hall');

    $('#signin').click(function() {
      var pwd = $('#pwd').val();

      $.get('php/signin.php', {'pwd' : pwd}, function(res) {
          if (res == 'success') {
            window.location.href = 'index.php';
          } else {
            $('.alert-danger').removeClass('hidden');
            $('.alert-danger').html(res);
          }
      });
    });
  });
</script>

<div class="container">
  <div class="row">
    <div class="col-sm-6 col-sm-push-3">
      <div class="col-sm-8 col-sm-push-2">
        <div class="panel panel-default">
          <div class="panel-body">
            <h3 class="panel-heading">Sign In</h3>
            <div class="form-group">
              <hr>
              <input class="form-control" type="text" name="uname" value="BDHadmin" readonly>
              <br>
              <input class="form-control" type="password" id="pwd" placeholder="Password">
              <br>
              <button class="btn btn-primary form-control" id="signin">Sign In</button>
              <br>
            </div>
            <div class="alert alert-danger hidden" style="text-align: center;"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
<?php
  include 'footer.php';
?>