<!-- SEO->Separetion Of Concerns- sapero le responsabilità. -->
<!-- //file delle funzioni -->
<?php

// $password = readLine("Inserisci la password: " );

// LUNGHEZZA PSW 1)

function checkLenght($psw){
   if(strlen($psw) >= 8){

return true;       
}
 return false;  
} 

//$lenght = checkLenght($password);

//2) Parte NUMERI

function checkNumber($psw){

for($i=0; $i < strlen($psw); $i++){
    if(is_numeric($psw[$i])){

       return true; 
       

}       

}
return false;
}

 //$number = checkNumber($password);


 //3) PARTE PER: Maiuscole
 function checkUpper($psw){

for($i=0; $i < strlen($psw); $i++){ 
   if(ctype_upper($psw[$i])){
  return true;     

 } 

 }
 return false;
 } 

//4) X: array da caratteri speciali 

function checkSpecial($psw){
$specialChars = [ '!' , '?' , '#' , '&' , '%'];

for($i=0; $i < strlen($psw); $i++){
   if(in_array($psw[$i] , $specialChars)){
  return true;

 }
 }
 return false;

 }

// $upper = checkUpper($password);


//FUNZIONE PER RICHIEDERE LA VERIFICA -stampa cosa non stai rispettando;
function result($string){
    if (!checkLenght($string)) {
        echo "La password non è valida: deve contenere almeno 8 caratteri.\n";
        return false;
    }

    if (!checkNumber($string)) {
        echo "La password non è valida: deve contenere almeno un numero.\n";
        return false;
    }

    if (!checkUpper($string)) {
        echo "La password non è valida: deve contenere almeno una lettera maiuscola.\n";
        return false;
    }

    if (!checkSpecial($string)) {
        echo "La password non è valida: deve contenere almeno un carattere speciale tra !, ?, #, &, %.\n";
        return false;
    }

    echo "La password è valida.\n";
    return true;
}


// $lenght = false;
// $number = false;
// $upper = false; 
// $special= false;


// result($password);
// result($lenght , $number ,$upper);

//  $spacial = checkSpecial($password);
//  var_dump($special);