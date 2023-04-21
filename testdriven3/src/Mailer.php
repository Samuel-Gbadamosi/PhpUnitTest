<?php

class Mailer 
{
 /**
  * send a message
  *@param string $email receipient email address
  *@param string $message  content of the message
  *
  *@throws InvalidArgumentException  if $email is empty
  *@return boolean
  */
  public function send(string $email , string $message)
  {
    //if email is e,mpty an ivalid exception is thrown
    if(empty($email)){
        throw new InvalidArgumentException;
    }

   // echo "Send '$message' to $email";

    return true;
  }


}



?>