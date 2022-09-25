<?php
class Animal
{
    private  string $family;
    private  string $food;

     public function __construct(string $food,string $family)
      {
        
     }

public function set_family(string $family){


$this->family=$family;



}


public function get_family(){

return $this->family;


}

public function set_food(string $family){


    $this->family=$family;
    
    
    
    }
    
    
    public function get_food(){
    
    
    return $this->food;
    
    }
    



















    
}
