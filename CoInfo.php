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
$sql = "SELECT GRADE1,GRADE2,GRADE3 FROM SC WHERE SNO ='$q'";
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) 
{
    // 输出数据
	$row = mysqli_fetch_assoc($result); 
	mysqli_free_result($result);//释放结果内存
	   $GRADE1=$row["GRADE1"];
	   $GRADE2=$row["GRADE2"];
       $GRADE3=$row["GRADE3"];
       $Sum=$GRADE1+$GRADE2+$GRADE3;
       $Avg=$Sum/3;
	   echo"<p>成绩查询</p>
	        <p><b>数据库与云处理</b><b style=\"float:right;\">$GRADE1</b></p>
	        <p><b>概率论与数理统计</b><b style=\"float:right;\">$GRADE2</b></p>
			<p><b>计算机原理与应用</b><b style=\"float:right;\">$GRADE3</b></p>
			<p><b>平均分</b><b style=\"float:right;\">$Avg</b></p>";
	   
}
 else
 {
    echo "<p>成绩查询</p>
	        <p><b>数据库与云处理</b><b style=\"float:right;\">无</b></p>
	        <p><b>概率论与数理统计</b><b style=\"float:right;\">无</b></p>
			<p><b>计算机原理与应用</b><b style=\"float:right;\">无</b></p>
			<p><b>平均分</b><b style=\"float:right;\">无</b></p>";
}
 
mysqli_close($conn);
?>