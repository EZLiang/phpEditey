<!DOCTYPE html>
<html charset="utf-8" lang="en-us">
  <head>
    <title>editor|phpEditey</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  </head>
  <body>
    <form action="save.php" method="POST">
      <input type="text" name="dir" />
      <textarea name="contents"></textarea>
      <input type="hidden" name="username" />
      <input type="submit" />
    </form>
    <script>
    </script>
  </body>
</html>