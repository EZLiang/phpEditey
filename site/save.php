<!DOCTYPE html>
<html charset="utf-8" lang="en-us">
  <head>
    <title>saving...|phpEditey</title>
  </head>
  <?php
    include "./assets/open.php";
    $content = $_POST["contents"];
    $loc = $_POST["dir"];
    $usr = $_POST["username"];
    
    $override = false;

    $result = query("SELECT * FROM files");
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        if (($row["uname"] == $usr) && ($row["fname"] == $loc)) {
          $override = true;
        }
      }
    }
  ?>
</html>