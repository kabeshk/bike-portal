<?php
$servername="localhost";
$username="root";
$password="";
$db="dtdb";
$con=mysqli_connect($servername,$username,$password,$db)or die("faild");
mysqli_select_db($con,$db);
$result = mysqli_query($con,"SELECT * FROM review) or die(mysqli_error());
        
       while($row = mysqli_fetch_assoc($result))
        {
            $id=$row[1];
            $name= $row[2];
            $review = $row[3];
            $rating = $row[4];
			
			
			
			echo".$name";
		}
 

?>