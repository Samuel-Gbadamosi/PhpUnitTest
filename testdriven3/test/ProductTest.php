<?php

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{

    public function testIdIsAnInteger()
    {

        //create new obj prod
        $product = new Product;
        //we use the reflection class by creating a new obj 
        $reflector = new ReflectionClass(Product::class);

        //we then call the get property method on the obj we are passing 
        $property = $reflector->getProperty('product_id');
       //we also set it so it will be accessible
       $property->setAccessible(true);
       //pass in the value
       $value = $property->getValue($product); 
       //then we can pass in the value to access the property directly
       $this->assertIsInt($value);
    }
}



?>