<?php

class Dinosaur {

    public string $name;
    public string $gene;
    public int $length;
    public string $enclosure;


    public function __construct(string $name , string $gene = 'unknown' , int $length = 0 , string $enclosure)
    {
        $this->name = $name;
        $this->gene = $gene;
        $this->length = $length;
        $this->enclosure = $enclosure;


    }

//pub func getName
    public function getName() : string {
        return $this->name;
    }
//pub func getGene
    public function getGene() : string {
        return $this->gene;
    }
//pub func getLength
    public function getLength() : int {
        return $this->length;
    }
//pub func getEnclosure
    public function getEnclosure() : string {
        return $this->enclosure;
    }

    public function getDescription() : string {
       

        if($this->length >= 10){
            return 'Large';
        }
    }





}



?>