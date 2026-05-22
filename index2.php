<?php
require('index.php');

$valida = false;

while ($valida == false){


$password = readline("Inserisci la password: \n");

//struttura di controllo aggiunta alla verifica dei messaggi;
if(result($password)){
    $valida = true;

}else{
    echo "Riprova! \n";
}
}