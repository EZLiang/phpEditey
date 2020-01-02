<!DOCTYPE html>
<html charset="utf-8" lang="en-us">
  <head>
    <title>login|phpEditey</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  </head>
  <body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
      <input type="text" name="uname" />
      <input type="text" name="pswd" />
      <input type="submit" />
    </form>
    <?php
      include "./assets/open.php";
    ?>
  </body>
</html>