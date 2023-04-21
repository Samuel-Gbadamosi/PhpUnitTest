<?php

/**
 * User
 * An example user class
 */
class User 
{

    /**
     * email address
     * @var string
     */
    public $email;
    protected $mailer_callable;

    /**
     * constructor
     * @param string  $email the user's email
     * 
     */
    public function __construct(string $email)
    {
        $this->email = $email;
    }
//setting the mailer function we a get
    public function setMailerCallable(callable $mailer_callable){
        $this->mailer_callable = $mailer_callable;
    }

    public function notify(string $message)
    {
       //we dont need this line $mailer = new Mailer;
        //return $this->mailer->send($this->email , $message);
    //we can add many arguments as well
       return  call_user_func($this->mailer_callable, $this->email ,$message);
    }



    /** 
    *send the user a message
    * @param string $message The message
    * @return boolean
    */

  
}





?>