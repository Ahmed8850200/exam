<?php
require "Animal.php";
class Lion extends Animal{
    public string $owner;
    public function __construct(string $food,string $family)
    {

   }

public function set_owner(string $owner)
{
    
  $this->owner=$owner;





}

 public function get_owner()
{
    
 return  $this->owner;





}














    
}
