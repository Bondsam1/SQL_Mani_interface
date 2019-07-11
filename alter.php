<?php
$con = mysql_connect("localhost","root","corei3window7");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("jsq", $con);

$sql="update S set SNAME='$_POST[SNAME]', SAGE='$_POST[SAGE]', SDEPT='$_POST[SDEPT]' where SNO='$_POST[SNO]'";

$sql1="update SC set GRADE1='$_POST[GRADE1]', GRADE2='$_POST[GRADE2]', GRADE3='$_POST[GRADE3]' where SNO='$_POST[SNO]'";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record altered";

if (!mysql_query($sql1,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record altered";

mysql_close($con)
?>