<?php
$con = mysql_connect("localhost","root","corei3window7");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("jsq", $con);

$sql="drop table C";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 table dropped";

mysql_close($con)
?>