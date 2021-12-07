<?php
    include "z3.php";
    foreach ($studenti as $keyStudenti => $valueStudenti) {
        echo $valueStudenti["ime"] . $valueStudenti["prezime"] . 
        $valueStudenti["godRod"] . $valueStudenti["studiji"]["studij1"] .
        $valueStudenti["studiji"]["studij2"] . "<br/>"; 
    }
?>