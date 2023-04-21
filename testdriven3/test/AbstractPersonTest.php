<?php

use PHPUnit\Framework\TestCase;

class AbstractPersonTest extends TestCase
{

    public function testNameAndTitleIsReturned()
    {
        //we go for the child class
        $doctor = new Doctor('Green');
        //the concrete class contatenated with the value we expecting
        $this->assertEquals('Dr.Green', $doctor->getNameAndTitle());
    }

public function testNameAndTitleIncludesValueFromGetTitle()
{

    //creating abstract mock class
    $mock = $this->getMockBuilder(AbstractPerson::class)
    //passing in the value we want to get in the constructor in an array
    ->setConstructorArgs(['Green'])   
    //when we pass in an obj through the constr , concrete obj are not mocked but abstract methods yeah
    //getname and title wont be mocked but the getTitle will be       
    ->getMockForAbstractClass();

    //get title will bve mocked
    //so we set mock on title method so when we call it it will use this value
    $mock->method('getTitle')
    //it will use this return valòue
         ->willReturn('Dr.');
//this method used the expected value
        $this->assertEquals('Dr.Green' , $mock->getNameAndTitle());
}

}

?>