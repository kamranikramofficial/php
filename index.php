<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->

    <title>Discuss Project</title>
    <?php include('./client/commonfiles.php') ?>
  </head>
  <body>
  <?php include('./client/header.php') ?>
<?php
if (isset($_GET['signup'])) {
    include('./client/signup.php');
} else if (isset($_GET['login'])) {
    include('./client/login.php');
} else {
    // Default behavior (optional)
}
?>

  </body>
</html>