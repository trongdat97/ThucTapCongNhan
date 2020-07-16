<?php
 abstract class car{
     public $name;
     public function __construct($name){
        $this->name =$name;
     }
     abstract public function messenger(): string ;

    
 }

 class audi extends car{
     public function messenger():string{
         return "hello $this->name ";
     }
 }
 class mec extends car{
     public function messenger():string{
         return "hello $this->name";
     }
 }
 class vinfast extends car{
     public function messenger():string{
         return "hello $this->name";
     }
 }

 $z1 = new audi("xe1");
 echo $z1->messenger();


?>
