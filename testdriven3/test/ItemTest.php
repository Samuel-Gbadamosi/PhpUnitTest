<?php

use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase {

 //testing using reflexction class
    public function testTokenIsaString()
    {
        //instatiate a class item
        $item = new Item;
        //reflection class get item clas
        $reflector = new ReflectionClass(Item::class);
        
        $method = $reflector->getMethod('getToken');
        //makes this method accessible
        $method->setAccessible(true);
        //it will invoke and return value
         $result = $method->invoke($item);

        $this->assertIsString($result);

    }

    public function testPrefixedTokenStartsWithPrefix(){
        $item = new Item;

        $reflector = new ReflectionClass(Item::class);

        $method = $reflector->getMethod('getPrefixedToken');
       //make it accessible
        $method->setAccessible(true);

        //passing the invoke argumnets and the class item weith the string we passing
        //it will be pprefix from the argument we using from item
        $result = $method->invokeArgs($item , ['example']);
        $this->assertStringStartsWith('example' , $result);
    }

}









?>