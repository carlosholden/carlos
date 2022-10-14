<?php
    $grade= "60";

    if ( $grade >= 60) {
        echo "Your grade is First Division";
    }

    elseif ( $grade > 44) {
        echo "Your grade is Second Division";
    }

    elseif ( $grade > 32) {
        echo "Your grade is Third Division";
    }

    else {
        echo "You Failed";
    }

?>