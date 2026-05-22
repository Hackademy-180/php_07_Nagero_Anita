Selfwork PHP 7
Ripetere l’esercizio del controllo password visto a lezione (da soli o rivedendo il video)
Implementare un metodo
 che faccia reinserire
  la password 
  qualora anche 
  una delle regole non fosse 
  rispettate 
  e che, invece, lo interrompa
  
  in caso di password accettata visualizzare in console quale regola non è stata rispettata.

Pusha il codice su GitHub con il nome php_07_nome_cognome.

per questo esecizio serve fare ripasso della laezione dove il maestro usa strlen($password) questo perchè bisogna istaiare un controllo della lunghezza password, se la password ha regole di per se, allora deve avere 8 caratteri di minima, con questa funzione, ottieni lunghezzaper verificarla  la condizioni alla verifica codificata tramite i lmezzo del IF e  per stampare, il risulto del debug, usare var_dump o echo; con una diramazione nel else, notificheremo che, la password in alternativa è tropo corta, verifico almeno un numero, itero dunque sui singoli caratteri, con un ciclo for regolo una struttura che scorra da un indice = a 0 a una lunghezza psw data;
la funzione, is_numeric determina se il carATTERE è UN NUMERO!!!

CICLO FOR: MEGLIO DI UN FOREACH( POICHE' IN QUESTO CASO DI TRATTA DI STRINGHE E QUESTE NON SONO ITERABILI, COME ARRAY O COLLEZIONI, CON UN INDICE ACCEDO ALLA POSIZIONE SPECIFICA DI STRINGA;
SE A FINE ITERAZIONE, NON HO TROVATO NUMERO ATTIVERO' NELL'ELESE; LA MANCAZA DI CRITERIO IN ALTERNITIVA,
strlen e is_numeric(uso di documentazione anche per il ciclo for e foreach(diverso per il php da js))
uso un breACH NEL MIO CICLO FOR CON IF ELSE 

<?php
$password = readLine("Inserisci la password: " );


//lunghezza
if(strlen($password) >= 8){
    echo"La password e abbastanza linga \n";

}else{
    echo"La password non e abbastanza lunga \n";
}


//numeri

for ($i=0; $i < strlen($password); $i++){
    echo $password[$i], "\n";
    //Aggiunta di breck
    break;

}else{
    echo "La password non contiene numeri \n";
}

//Maiuscole

for ($i=0; $i < strlen($password); $i++){

if(ctype_upper($password)[$i]){

    echo "La password contiene una maiuscola \n";

 
    //Aggiunta di breck
    break;

}else{
    echo "La password contiene una maiuscola \n";
}
}
