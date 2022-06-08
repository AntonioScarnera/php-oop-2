<?php 
class Products{
   public $name;
   public $brand;
   public $price;
   
   
   function __construct($_name, $_brand, $_price){
       $this->name = $_name;
       $this->brand = $_brand;
       $this->price = $_price;
   }
}
?>