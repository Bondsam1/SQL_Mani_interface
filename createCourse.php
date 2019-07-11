<?php
$con = mysql_connect("localhost","root","corei3window7");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("jsq", $con);

$sql="create table C(CNO varchar(30),CNAME varchar(30),TEACHER varchar(30), PRIMARY KEY(CNO));";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 table created";

mysql_close($con)
?>