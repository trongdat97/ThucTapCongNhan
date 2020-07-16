<?php 
namespace html;
abstract class parentClass{
   
    abstract protected function fixName($name);
}

class childrenClass extends parentClass {

    public function fixName($name,$p=".",$s="Dear"){
        if($name == "minh"){
            $fix = "mrs";
        }
        elseif($name == "dat"){
            $fix = "mr";
        }else {$fix ="";
        }
        return "{$s} {$fix}{$p} {$name}";
    }

}
$p1 = new childrenClass;
echo $p1->fixName("dat");
echo"<br>";

echo $p1->fixname("minh");



?>