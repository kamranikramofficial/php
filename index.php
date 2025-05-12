<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Discuss Project</title>
    <?php include('./client/commonfiles.php') ?>
  </head>
  <body>

  <?php 
  session_start();
  include('./client/header.php') ?>
<?php
if (
    isset($_GET['signup']) && 
    (!isset($_SESSION['user']['username']) || !$_SESSION['user']['username'])
) {
    include('./client/signup.php');
} else if (
    isset($_GET['login']) && 
    (!isset($_SESSION['user']['username']) || !$_SESSION['user']['username'])
) {
    include('./client/login.php');
} else {
    // Show default content or dashboard
}
?>


  </body>
</html>