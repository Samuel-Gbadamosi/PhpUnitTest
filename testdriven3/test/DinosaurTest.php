<?php

use PHPUnit\Framework\TestCase;

class DinosaurTest extends TestCase{

    public function testifItworks() : void {

        self::assertSame(90 , 10 + 80);
    }


        
    
    public function testCanGetAndSetData() : void{

    $dino = new Dinosaur( $name = 'bulldog' , $gene = 'unknown' ,  $length = 23, $enclosure ='therapistdino');

    self::assertEquals('bulldog' , $dino->getName());
    self::assertSame('unknown' , $dino->getGene());
    self::assertSame(23 , $dino->getLength());
    self::assertSame('therapistdino' , $dino->getEnclosure());

    //check if length is greater than 23
    self::assertGreaterThan(22 ,$dino->getLength() , 'dino is supposed to be greater');
    

    }


    public function testDinosaurOver10MetresOrGreaterIsLarge() : void {
      //  $dino = new Dinosaur;
        $dino = new Dinosaur( $name = 'bulldog' , $gene = 'unknown' ,  $length = 23, $enclosure ='therapistdino');

        $dino->name = 'bulldog';
        $dino->length = 12;

    
        self::assertSame('Large' , $dino->getDescription(), 'This is a large metre');
    }


}


?>