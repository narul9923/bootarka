<?php

function cetak_gambar($angka){
    ?>
    <code>
    <?php
    for ($i=0; $i < $angka; $i++) {
        for ($j=0; $j < $angka; $j++) { 
            if($i == 0){
                echo " x ";
            }elseif($i == $angka-1) {
                echo " x ";
            }elseif($j == ($angka-1)/2){
                echo " x ";
            }else{
                echo " = ";
            }
        }
        ?><br/><?php
    }
    ?>
    </code>
    <?php
}

cetak_gambar(5);

?>