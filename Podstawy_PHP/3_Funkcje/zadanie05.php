<?php

function rockScissorsPaper($player1, $player2)
{
    $p = 'paper';
    $r = 'rock';
    $s = 'scissors';
    if ($player1 == $player2) {
        return 'remis';
    }
    if (($player1 == $p && $player2 == $r) ||
        ($player1 == $r && $player2 == $s) ||
        ($player1 == $s && $player2 == $p)
    ) {
        return 'Wygrał gracz 1';
    } elseif (($player2 == $p && $player1 == $r) ||
              ($player2 == $r && $player1 == $s) ||
              ($player2 == $s && $player1 == $p)
    ) {
        return 'Wygrał gracz 2';
    } else {
        return 'bledne informacje';
    }
}

echo rockScissorsPaper('rock', 'rock');