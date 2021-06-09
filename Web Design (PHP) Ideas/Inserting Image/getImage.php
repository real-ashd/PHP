<?php

  $id = $_GET['id'];
  // do some validation here to ensure id is safe

  $link = mysql_connect("localhost", "root", "");
  mysql_select_db("ashu");
  $sql = "SELECT * FROM output_images WHERE id=$id";
  $result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  mysql_close($link);

  header("Content-type: image");
  echo $row['imageData'];
?>