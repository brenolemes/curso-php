<?php


// Exibir na tela os números ímpares de 0 à 100
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo "$i" . PHP_EOL;
    }
}
