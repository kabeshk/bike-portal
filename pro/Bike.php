<?php

require 'Controller/BikeController.php';
$bikeController = new BikeController();

if(isset($_POST['price']))
{
    $bikeTables = $bikeController->CreateBikeTables($_POST['price']);
}
 else 
     {
   $bikeTables = $bikeController->CreateBikeTables('%'); 
}
$title = 'Bikes overview';
$content = $bikeController->CreateBikeDropdownList(). $bikeTables;

include'Template.php';
?>