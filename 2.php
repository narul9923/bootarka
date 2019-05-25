<?php

    function betweenDays($date_start, $date_end){
        $strDate_start = strtotime($date_start);
        $strDate_end = strtotime($date_end);
        while($date_start <= $date_end){
            ?>'<?php echo $date_start ?>', <?php
            $date_start++;
        }
    }

    betweenDays('2019-11-01', '2019-11-05');

?>