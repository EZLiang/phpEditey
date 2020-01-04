<!DOCTYPE html>
<html charset="utf-8" lang="en-us">
  <head>
    <title>login|phpEditey</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="assets/cookies.js"></script>
    <script src="assets/redirect.js"></script>
  </head>
  <body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
      <input type="text" name="uname" />
      <input type="text" name="pswd" />
      <input type="submit" />
    </form>
    <?php
      include "./assets/open.php";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usr = $_POST["uname"];
        $pswd = $_POST["pswd"];

        $result = query("SELECT * FROM users");

        $new = true;

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            if ($row["uname"] == $usr) {
              $new = false;

              if ($row["pswd"] == $pswd) {
                echo "<h1>Welcome ".htmlspecialchars($usr)."</h1><br /><a href=\"index.php\">Return home</a>";
              } else {

              }
            }
          }
        }
      }
    ?>
    <script>
      if (getCookie("phpediteyusername") != "") {
        redirect("index.php");
      }
    </script>
  </body>
</html>