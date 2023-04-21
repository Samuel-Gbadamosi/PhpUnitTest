<?php

use PHPUnit\Framework\TestCase;

//class usrtest
class UserTest extends TestCase{

    //lets create a funct so it return true
    public function testNotifyReturnsTrue()
    {
        $user = new User('damosisauel@gmail.com');
       //we also add an anonymous function
        $user->setMailerCallable(function()
        {
            echo "mocked";

            return true;
        }
        );
        //to see if the value returns true
        $this->assertTrue($user->notify('Hello!'));
    }


    public function testNotifyReturnsFalse(){

        $user2 = new User('franc@mail.com');
        //we also add a mockable fucntion 
        $user2->setMailerCallable(function(){
            echo "not mocked";

            return false;
        });
        $this->assertFalse($user2->notify("goodbye "));

    }
}



?>