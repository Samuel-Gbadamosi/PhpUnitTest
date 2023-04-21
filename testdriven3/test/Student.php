<?php


//student class as subclass that extends person

use PHPUnit\Framework\TestCase;

class Student extends TestCase {

    private $grade;

    public function __construct($name , $age , $grade , $surname)
    {
        parent::__construct($name, $age , $surname);
        $this->grade = $grade;
        $this->surname = $surname;
        
    }

    //getGrade fucntion 
    public function getGrade(){
        return $grade = $this->grade;
   
    }

    //public function surname
    public function getSurname()
    {
        return $surname = $this->surname;
     
    }



}

?>