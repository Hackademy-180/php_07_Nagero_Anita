<?php




function checkLenght($password) {
    return strlen($password) >= 8;
}

function checkNumber($password) {
    for ($i = 0; $i < strlen($password); $i++) {
        if (is_numeric($password[$i])) {
            return true;
        }
    }
    return false;
     // Ritorno false solo dopo aver controllato tutto
}

function checkUpper($password) {
    for ($i = 0; $i < strlen($password); $i++) {
        if (ctype_upper($password[$i])) {
            return true;
        }
    }
    return false;
}

function checkSpecial($password) {
    $specialChars = ['!', '?', '#', '&', '%'];
    for ($i = 0; $i < strlen($password); $i++) {
        if (in_array($password[$i], $specialChars)) {
            return true;
        }
    }
    return false;
}

function validatePassword($password) {
    // Controllo le regole e stampo quale manca
    if (!checkLenght($password)) {
        echo "Errore: La password deve avere almeno 8 caratteri.\n";
        return false;
    }
    if (!checkNumber($password)) {
        echo "Errore: La password deve contenere almeno un numero.\n";
        return false;
    }
    if (!checkUpper($password)) {
        echo "Errore: La password deve contenere almeno una maiuscola.\n";
        return false;
    }
    if (!checkSpecial($password)) {
        echo "Errore: La password deve contenere un carattere speciale (!, ?, #, &, %).\n";
        return false;
    }
    
    echo "Password corretta!\n";
    return true;
}
