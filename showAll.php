<?php

$con = mysql_connect("localhost","root","corei3window7");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("jsq", $con);

$result1 = mysql_query("SELECT * FROM S");

$result2 = mysql_query("SELECT * FROM SC");

$result3 = mysql_query("SELECT * FROM C");

echo '
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<title>我的数据库实验</title>
<head>
<style>
#header {
    background-color:black;
    color:white;
    text-align:center;
    padding:5px;
}
#nav {
    line-height:30px;
    background-color:#eeeeee;
    height:300px;
    width:100px;
    float:left;
    padding:5px;	      
}
#section {
    width:350px;
    float:left;
    padding:10px;	 	 
}
#footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
   padding:5px;	 	 
}
#3tag {
	margin-left: 100px;
}
</style>
</head>

<body>

<div id="header">
<h1>我的数据库实验</h1>
</div>

<div id="nav">
<a href="a.html">学生信息系统</a><br>
<a href="manipulate.html">表的操作</a><br>
<a href="SQL.html">SQL语句</a><br>
<strong>查看所有</strong><br>
</div>

<div id="section">
<h2>查看所有</h2>';

echo "<table border='1'>
<tr>
<th>SNO</th>
<th>SNAME</th>
<th>SAGE</th>
<th>SDEPT</th>
</tr>";

while($row = mysql_fetch_array($result1))
  {
  echo "<tr>";
  echo "<td>" . $row['SNO'] . "</td>";
  echo "<td>" . $row['SNAME'] . "</td>";
  echo "<td>" . $row['SAGE'] . "</td>";
  echo "<td>" . $row['SDEPT'] . "</td>";
  echo "</tr>";
  }
echo "</table><br><br>";

echo "<table border='1'>
<tr>
<th>SNO</th>
<th>CNO</th>
<th>GRADE1</th>
<th>GRADE2</th>
<th>GRADE3</th>
</tr>";

while($row = mysql_fetch_array($result2))
  {
  echo "<tr>";
  echo "<td>" . $row['SNO'] . "</td>";
  echo "<td>" . $row['CNO'] . "</td>";
  echo "<td>" . $row['GRADE1'] . "</td>";
  echo "<td>" . $row['GRADE2'] . "</td>";
  echo "<td>" . $row['GRADE3'] . "</td>";
  echo "</tr>";
  }
echo "</table><br><br>";

echo "<table border='1'>
<tr>
<th>CNO</th>
<th>CNAME</th>
<th>TEACHER</th>
</tr>";

while($row = mysql_fetch_array($result3))
  {
  echo "<tr>";
  echo "<td>" . $row['CNO'] . "</td>";
  echo "<td>" . $row['CNAME'] . "</td>";
  echo "<td>" . $row['TEACHER'] . "</td>";
  echo "</tr>";
  }
echo "</table><br><br>";




echo '
</div>

<div id="footer">
Copyright @ me
</div>

</body>
</html>';

?>