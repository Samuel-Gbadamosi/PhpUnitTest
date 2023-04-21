<?php

use function PHPUnit\Framework\containsIdentical;
use function PHPUnit\Framework\throwException;

class Jason {

//public variables
public $name = 'john';
public $surname = 'jarey';
public $email;
public $address;
public $arrayGrace;
public $amount;
public $salary;
public $moviesCollection = [];


public function addFavoriteMovie(string $movies){
    $this->moviesCollection = $movies;

    echo "'movies are' '$movies'";
    return true;

}

public function getAmount(){
    $amount = 350;
    if($amount >= 22){
        $amount +=$amount;
    }else{
        $amount *=$amount;
    }


    // echo "amount:  '$amount'";

     return $amount;
}

public function getSalary(){
   $salary = 400;
   $amount = 450;
    if($salary >= $amount){
        $salary = 3500; 

    }else{
        $salary;
    }
 //echo "salary : '$salary'";
    return $salary;

}


  


    public function getFullName(){
        return trim($this->name .''. $this->surname);
    }

    public function getGrace(){
     $arrayGrace = ['john' , 'jason' , 'ramon'];


        foreach($arrayGrace as $argpo){
            if($argpo == 'john'){
                $argpo.array_push($arrayGrace, implode("jakie ", $arrayGrace));
            }
        }

        return $arrayGrace;

  
    }



}


class Food {

    public $foodName;
    public $foodBrand;
    public $foodAmount;
    public $moviesCollection = [];


    public function __construct(string $foodName , string $foodBrand ,int $foodAmount )
    {
        $this->foodName = $foodName;
        $this->foodBrand = $foodBrand;
        $this->foodAmount = $foodAmount;
    }

 

    public function getFoodAmount(int $foodAmount){

        $food = new Jason;
        //current amount set
        $foodAmount = 350;
        if($foodAmount >= 50 || $foodAmount <= 60){
            //falls in this line if true
          $foodAmount += 20;
        }else if ($foodAmount >= 70 ){
            $foodAmount = 90;
            $this->foodBrand = 'mac donalds';
        }
        echo "foodAmount : '$foodAmount' + '$this->foodBrand'";
        return $this->foodAmount;

    }

}



?>