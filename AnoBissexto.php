<?php

$ano = 2025;

if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
    echo "O ano é bissexto";
}
    else {
    echo "O ano não é bissexto"; 
}
