<?php

use PHPUnit\Framework\TestCase;

class MailerTest extends TestCase
{

    //a function for the send method to return true
    public function testSendMessageReturnsTrue()
    {
        //testing a static method so we dont need to create an pbject
        //using the asserttrue 
       $this->assertTrue(Mailer::send('damosisamuel@gmail.com' , 'Hello!'));
    }

    public function testInvalidArgumentExceptionIfEmailIsEmpty()
    {
        //lets call the static method but with empty arguments
       //call this before the method call
        $this->expectException(InvalidArgumentException::class);

        Mailer::send('' , '');
    }
}


?>