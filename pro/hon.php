<?php
include'tem3/tem.php';
$servername="localhost";
$username="root";
$password="";
$db="dtdb";
$con=mysqli_connect($servername,$username,$password,$db)or die("faild");
$re=mysqli_query($con,"select * from review");

while($row=mysqli_fetch_assoc($re))
{
	echo"<center>";
	echo"<br>";
	echo"<h>name:".$row["name"];
	echo"<br>";
	echo"<h>review:".$row["review"];
	echo"<br>";
	echo"<h>rating:".$row["rating"];

	$rat=$row["rating"];
	
}

$re=mysqli_query($con,"select avg(rating) from review");
foreach($re as $row)
{
	echo "<h1>OVERALL RATING IS:".$row['avg(rating)'];
}


?>
<html>
<body>
<a href="nal.php">ANALYSIS</a>
</body>
</html>