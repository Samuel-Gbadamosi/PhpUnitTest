<?php

use PhpParser\Node\Stmt\Else_;
use PHPUnit\Framework\TestCase;

class JasonTest extends TestCase{



    public function testgetFullName(){

        $user = new Jason;

        $user->name = 'john';
        $user->surname = 'wick';
        $user->email = 'johnwick@mail.com';
        $user->address = true;

       //first test worked 
        $this->assertEquals('john', $user->name);
        $this->assertEquals('wick' , $user->surname);
        $this->assertEmpty(false, $user->address);


    }                                                                                                                                                                                      


  //FUNCTION FOR TESTAMOUNT
    public function testgetAmount(){

        $user2 = new Jason;

        

        $this->assertEquals(700, $user2->getAmount());
    }
//FUNCTION TEST SALARY
    public function testgetSalary(){
        $salary = new Jason;


        $this->assertEquals(400, $salary->getSalary());
    }

    //TESTFOODAMOUNT
    public function testgetFoodAmount(){
        $food = new Food('bruger' , 'biglietteria' ,80 , 'fr');
       //to test values passed in
        self::assertNotTrue(80, $food->getFoodAmount(24));
        self::assertSame('biglietteria' ,$food->foodBrand);
        self::assertIsString('bruger' , $food->foodName);
    }

    //get movies test
    public function testgetMovies(){

        $food = new Food('bruger' , 'biglietteria' ,90 , 'fr');
        self::assertEquals(false ,$this->testgetFoodAmount());

      

    }

    public function testgetMovieCollection(){
        $food = new Jason('test' , 'testfoodecho' , 25);

        $this::assertTrue($food->addFavoriteMovie('jason'));


    }

}

?>