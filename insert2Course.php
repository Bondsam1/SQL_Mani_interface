<?php
$con = mysql_connect("localhost","root","corei3window7");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("jsq", $con);

$sql="INSERT INTO C (CNO, CNAME, TEACHER)
VALUES
('$_POST[CNO]','$_POST[CNAME]','$_POST[TEACHER]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>