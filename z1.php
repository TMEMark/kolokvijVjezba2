<?php
#While petljom ispisati sve brojeve između 200 i 800 
#čiji je zbroj prve dvije znamenke veći od 10.
    $a = 201;
    while ($a > 200 && $a < 800) {
        $b=$a++;
        $broj1 = substr($b, 0, 1);
        $broj2 = substr($b, 1, 1);
        $zbroj = $broj1 + $broj2;
        if($zbroj > 10){
            echo  $b . "<br>";
        }
    }
?>