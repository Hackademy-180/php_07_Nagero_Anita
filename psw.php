<?php
//collegamento esterno-altro file-per la SEO
require('index.php');

//uso del do while

do{
    
     $password = readLine("Inserisci la psw: ");
  
}while (!result($password));