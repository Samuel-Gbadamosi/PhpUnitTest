<?php 

class Product {

/**
 
 * Unique identifier
 * @var integer
 */

    protected $product_id;

//its set to a random integer value when an obj is created
    public function __construct()
    {
        $this->product_id = rand();
        
    }


}



?>