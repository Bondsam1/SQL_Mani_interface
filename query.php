<?php 
header('Content-Type:text/html;charset=utf-8');
$servername = "localhost";
$username = "root";
$password = "corei3window7";
$dbname = "jsq";
//创建连接
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
  {
	  die("无法与数据库建立连接：" . mysqli_connect_error());
  }
//打开数据库
$open = mysqli_select_db($conn,"jsq");
if(!$open)
   {
     die("无法打开myDB数据库：" . mysqli_error($conn));
   }
$q=$_GET["query"];
$sql = $q;
$result = mysqli_query($conn, $sql);

if ($conn->query($sql) === TRUE) {
        echo "<h1>新记录插入成功</h1>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
 
    $conn->close();
?>