<?php

 require ("Entities/BikeEntity.php");
class BikeModel {
   
    function GetBikeTypes()
    {
        require 'Credentials.php';
        
        $con=mysqli_connect($host, $user, $passwd,$database) or die(mysqli_error());
        mysqli_select_db($con,$database);
        $result = mysqli_query($con,"SELECT DISTINCT price FROM bike") or die(mysql_error());
        $price = array();
        
        while($row = mysqli_fetch_array($result))
        {
            array_push($price,$row[0]);
        }
        
        mysqli_close($con);
        return $price;        
    
    }
    function GetBikeByType($price)
    {
        require 'Credentials.php';
        
        $con=mysqli_connect($host,$user,$passwd,$database) or die(mysqli_error());
        mysqli_select_db($con,$database);
        $result = mysqli_query($con,"SELECT * FROM bike WHERE price LIKE '$price'") or die(mysqli_error());
        $bikeArray = array();
        
       while($row = mysqli_fetch_array($result))
        {
            $name = $row["1"];
            $cc = $row["2"];
            $price = $row["3"];
            $mileage = $row["4"];
            $image = $row["5"];
            $review = $row["6"];
            
            
            $bike = new BikeEntity(-1,$name, $cc, $price, $mileage, $image,$review);
            array_push($bikeArray, $bike); 
        }
        
        mysqli_close($con);
        return $bikeArray;
    }
}
?>