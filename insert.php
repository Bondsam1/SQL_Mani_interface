<?php
$con = mysql_connect("localhost","root","corei3window7");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("jsq", $con);

$sql="INSERT INTO S (SNO, SNAME, SAGE, SDEPT)
VALUES
('$_POST[SNO]','$_POST[SNAME]','$_POST[SAGE]','$_POST[SDEPT]')";

$sql1="INSERT INTO SC (SNO, GRADE1, GRADE2, GRADE3)
VALUES
('$_POST[SNO]','$_POST[GRADE1]','$_POST[GRADE2]','$_POST[GRADE3]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

if (!mysql_query($sql1,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>