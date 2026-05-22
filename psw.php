<?php
//collegamento esterno-altro file-per la SEO
// questo file richiede la psw dal file primario
require('index.php');

//uso del do while

do{
    //chiedo la password qui
     $password = readLine("Inserisci la psw: ");
  // ed il controllo se ha la validità;
}while (!result($password));