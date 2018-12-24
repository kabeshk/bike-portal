<?php
include'tem3/tem.php';
echo "WELCOME TO HONDA BIKES";
$servername="localhost";
$username="root";
$password="";
$db="bikedb";
$con=mysqli_connect($servername,$username,$password,$db)or die("faild");
$re=mysqli_query($con,"select * from honda");
while($row=mysqli_fetch_assoc($re))
{
	$name=$row["name"];
	$cc=$row["cc"];
	$milage=$row["milage"];
	$price=$row["price"];
	$image=$row["image"];
	

echo "<table>";
                echo " <tr>";
                echo  "<th rowspan='6' / ><img src='$image' width = '150px'/>";
                 echo "<th width = '75px'/ >Name: </th>";
                   echo  "<td/>".$row["name"];
                      echo "<a href='form.php'><font color='green'>Book</font><a/>"; 
					  echo"<a href='hon.php'><font color='green'>REVIEW</font><a/> ";
echo "</form>";
echo "</td>";
echo "</tr>";
                 
                 
                echo  "<tr>";
                   echo   "<th>Cc: </th>";
                   echo   "<td/>".$row["cc"];
                echo  "</tr>";
                 
                echo "<tr>";
                  echo    "<th>Price: </th>";
                  echo    "<td/>".$row["price"];
                echo  "</tr>";
                 
                echo "<tr>";
                    echo  "<th>Mileage: </th>";
                    echo  "<td/>".$row["milage"];
                echo  "</tr>";
                echo " <tr>" ;
                               echo  "</tr>"; 
                 
               
                
           echo " </table>" ;

}

?>