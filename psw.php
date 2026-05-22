<?php
//collegamento esterno-altro file-per la SEO




// con php.psw avvia la lettura:


require('index.php');

//uso del do while

do{
    //chiedo la password qui
     $password = readLine("Inserisci la psw: ");
  // ed il controllo se ha la validità;
}while (!result($password));