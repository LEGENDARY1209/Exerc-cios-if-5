<?php
    // Inicializa o contador como 4
    $contador = 4;

    // Loop que vai até o número 30 com incrementos de 2 em 2
    while ($contador <= 30) {
        // Verifica se o contador chegou em 24 e, se sim, para o loop
        if ($contador == 24) {
            break;
        }

        // Imprime o valor atual do contador
        echo $contador . "<br>";

        // Incrementa o contador de 2 em 2
        $contador += 2;
    }   
?>