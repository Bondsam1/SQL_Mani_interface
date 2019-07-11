<?php
$con = mysql_connect("localhost","root","corei3window7");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("jsq", $con);

$sql="delete from S where SNO='$_POST[SNO]'";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record deleted";

mysql_close($con)
?>