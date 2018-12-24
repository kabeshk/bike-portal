<?php


class BikeEntity {
    public $id;
    public $name;
    public $cc;
    public $price;
    public $milage;
    public $image;
    public $review;
    
    function __construct($id, $name, $cc, $price, $mileage, $image, $review) {
        $this->id = $id;
        $this->name = $name;
        $this->cc = $cc;
        $this->price = $price;
        $this->milage = $mileage;
        $this->image = $image;
        $this->review =$review;
       
       
    }

    
}
?>