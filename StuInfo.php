<?php 


//创建连接
$servername = "localhost";  
$username = "root";  
$password = "corei3window7";  
$dbname = "jsq";  

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
  {
	  die("无法与数据库建立连接：" . mysqli_connect_error());
  }
$q=$_GET["StuNo"];
$sql = "SELECT SNO,SNAME,SAGE,SDEPT FROM S WHERE SNO ='$q'";
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) 
{
    // 输出数据
	$row = mysqli_fetch_assoc($result); 
	mysqli_free_result($result);//释放结果内存
       $SNO=$row["SNO"];
	   $SNAME=$row["SNAME"];
	   $SAGE=$row["SAGE"];
	   $SDEPT=$row["SDEPT"];
	   echo"<p>学生信息</p>
	        <p><b>学号</b><b style=\"float:right;\">$SNO</b></p>
	        <p><b>学生姓名</b><b style=\"float:right;\">$SNAME</b></p>
			<p><b>学生年龄</b><b style=\"float:right;\">$SAGE</b></p>
			<p><b>院系</b><b style=\"float:right;\">$SDEPT</b></p>";
	   
}
 else
 {
    echo "<p>学生信息</p>
	        <p><b>学号</b><b style=\"float:right;\">无</b></p>
	        <p><b>学生姓名</b><b style=\"float:right;\">无</b></p>
			<p><b>学生年龄</b><b style=\"float:right;\">无</b></p>
			<p><b>院系</b><b style=\"float:right;\">无</b></p>";
}
 
mysqli_close($conn);
?>