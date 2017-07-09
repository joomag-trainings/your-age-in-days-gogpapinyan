<?php
    date_default_timezone_set("Europe/Moscow");
    echo "Your time zone is " . date_default_timezone_get().   "<br />";
    $time = time();
    echo "Current date is ". date("D m y H:i:s"). "<br />";
    $yourBirthDate = "20 September 1996 01:00";
    echo "Your birth date is $yourBirthDate <br />";
    $birthDate = strtotime($yourBirthDate);
    $ageInDays = ceil(($time - $birthDate)/60/60/24);
    echo "You're $ageInDays days old";

