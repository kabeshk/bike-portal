<?php
include "tem3/tem.php";

$servername="localhost";
$username="root";
$password="";
$db="dtdb";
$con=mysqli_connect($servername,$username,$password,$db)or die("faild");
$re=mysqli_query($con,"select count(name) from review where rating='5'");
while($row=mysqli_fetch_array($re))
{
	$name=$row['count(name)'];
}
echo"<br/>";
echo"<img src='5.png' width='100'>:" .$name;
$re=mysqli_query($con,"select count(name) from review where rating='4'");
while($row=mysqli_fetch_array($re))
{
	$name=$row['count(name)'];
}
echo"<br/>";
echo"<br/>";
echo"<img src='4.jpg' width='100'>:" .$name;
$re=mysqli_query($con,"select count(name) from review where rating='3'");
while($row=mysqli_fetch_array($re))
{
	$name=$row['count(name)'];
}
echo"<br/>";
echo"<br/>";
echo"<img src='3.png' width='100'>:" .$name;
$re=mysqli_query($con,"select count(name) from review where rating='2'");
while($row=mysqli_fetch_array($re))
{
	$name=$row['count(name)'];
}
echo"<br/>";
echo"<br/>";
echo"<img src='2.jpg' width='100'>:" .$name;
$re=mysqli_query($con,"select count(name) from review where rating='1'");
while($row=mysqli_fetch_array($re))
{
	$name=$row['count(name)'];
}
echo"<br/>";
echo"<br/>";
echo"<img src='11.jpg' width='100' height='30'>:" .$name;

?>
<?php
$servername="localhost";
$username="root";
$password="";
$db="dtdb";
$con=mysqli_connect($servername,$username,$password,$db)or die("faild");

$s=mysqli_query($con,"select count(name) from review where rating ");
while($row=mysqli_fetch_array($s))
{
$name=$row['count(name)'];
}
echo"<h2>based on:".$name;echo"<h2>REVIEWS ";
echo"<a href='form.php'><font color='green'>Book</font><a/> ";
?>
