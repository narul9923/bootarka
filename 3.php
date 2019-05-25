<?php

function count_vowels($teks){

    preg_match_all('/[aeiou]/i', $teks, $matches);
    return count($matches[0]);

}

print_r(count_vowels('programmer'));

?>