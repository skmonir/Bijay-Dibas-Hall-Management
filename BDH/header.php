<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title id="page_title"></title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/datepicker.css" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon"/>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>

    <script src="JS/serverTime.js"></script>
  </head>

  <body onload="startTime()">
    <div class="container" style="margin-top: 20px;">
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <ul class="nav nav-pills">
                <li id="menu_home" role="presentation"><a href="index.php">Home</a></li>
                
                <li id="menu_action" role="presentation" class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Action <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="action_allotment.php">Allotment</a></li>
                    <li class="divider"></li>
                    <li><a href="action_payment.php">Payment</a></li>
                  </ul>
                </li>
                
                <li id="menu_search" role="presentation"><a href="search.php">Search</a></li>
                
                <li id="menu_summary" role="presentation" class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Summary <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="a_alloc.php">A Block Allocation</a></li>
                    <li class="divider"></li>
                    <li><a href="b_alloc.php">B Block Allocation</a></li>
                    <li class="divider"></li>
                    <li><a href="all_alloc.php">All Seat Allocation</a></li>
                  </ul>
                </li>
                
                <li id="menu_notifications" role="presentation"><a href="notifications.php">Notifications(0)</a></li>
                
                <li id="menu_settings" role="presentation" class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    Settings <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="change_pwd.php">Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="php/signout.php">Log out</a></li>
                  </ul>
                </li>
                
                <li id="menu_developers" role="presentation"><a href="developers.php">Developers</a></li>
                <li class="pull-right"><p id="serverTime"></p></li>
              </ul>
            </div>
          </div>
        </div>
      </div>