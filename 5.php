<?php

function ganti_kata($teks, $a, $b){
    $teks_ = str_split($teks);
    $a_ = str_split($a);
    $b_ = str_split($b);
    
    $count = count($teks_);
    foreach ($teks_ as $key) {
        if($key == $a){
            echo $b;
        }else{
            
            echo $key;
        }
        // echo $key;
    }
    // var_dump($count);
}

ganti_kata('purwakarta','a','o');

?>