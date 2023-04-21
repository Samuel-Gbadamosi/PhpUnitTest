<?php

abstract class AbstractPerson {

    /**
     * surname
     * @var string
     */

     protected $surname;


     /**
      * Constructor
      * @param string $surname the person's surname
      * @return void
      */

      public function __construct(string $surname)
      {
        $this->surname = $surname;
      }



      /**
       * get the person's title
       * @return string
       */

       abstract protected function getTitle();

       /**
        * get the person's name
        * @return string
        */

        //we gonna test this concrete method
        public function getNameAndTitle()
        {
            return $this->getTitle() . '' . $this->surname;
        }

}


?>