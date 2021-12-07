<?php
    $godina = date("Y", strtotime("2019"));
    $prvi_dan = date("d-m-y (D)", strtotime("01 January 2019"));
    echo $prvi_dan;
    $prva_srijeda = date("d-m-y (D)", strtotime("02 January 2019"));
    echo $prva_srijeda;
    for($i=0; $i<365; $i+=7){
        
        echo $prva_srijeda;
    }
?>

