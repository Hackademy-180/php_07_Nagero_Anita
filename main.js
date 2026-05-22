<?php
require('index2.php');

$valida = false;

while ($valida == false) {
    $password = readline("Inserisci la password: ");
    
    // Chiamiamo la funzione che controlla e stampa l'errore specifico
    if (validatePassword($password)) {
        $valida = true;
    } else {
        echo "Riprova!\n";
    }
}
