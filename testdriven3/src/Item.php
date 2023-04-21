<?php

class Item{







protected function getID(){
    return rand();
}

private function getToken(){
    return uniqid();
}


private function getPrefixedToken(string $prefix)
{
    return uniqid($prefix);
}

}


?>