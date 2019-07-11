<?php
$con = mysql_connect("localhost","root","corei3window7");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("jsq", $con);

$sql="update C set CNAME='$_POST[CNAME]', TEACHER='$_POST[TEACHER]' where CNO='$_POST[CNO]'";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record altered";

mysql_close($con)
?>