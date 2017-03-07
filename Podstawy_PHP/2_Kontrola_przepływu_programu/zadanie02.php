<?php

function seminary ($godzina){
    switch ($godzina){
        case 8:
            echo $godzina++.' - wykłady<br>';
        case 9:
            echo $godzina++.' - wykłady<br>';
        case 10:
            echo $godzina++.' - wykłady<br>';
        case 11:
            echo $godzina++.' - wykłady<br>';
        case 12:
            echo $godzina++.' - dyskusje<br>';
        case 13:
            echo $godzina++.' - dyskusje<br>';
        case 14:
            echo $godzina++.' - obiad<br>';
        case 15:
            echo $godzina++.' - prelekcje<br>';
        case 16:
            echo $godzina++.' - prelekcje<br>';
        case 17:
            echo $godzina++.' - prelekcje<br>';
        case 18:
            echo $godzina++.' - prelekcje<br>';
        case 19:
            echo $godzina++.' - kolacja<br>';
            break;
        default:
            echo 'sen';

    }
}

seminary(7);