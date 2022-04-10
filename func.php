<?php

//возвращает массив всех пользователей и хэшей их паролей
function getUsersList(){
    return [
        'admin' => '$2y$10$0bhR8KeFhg0TxuES9jTY5.ufvctFTCeztSyRnXrwJxC763L2cWslq', // admin123
        'ulya' => '$2y$10$zPuL1Fs8mJWRfS8ni/N/OehsEQdqPG3jekLw/79qa9mNqB6KAfXVO', //ulya123
        'andrei' => '$2y$10$oCNfTkfxFPvLvZIWfDUNLOPdbemzX2ZIf3BOFj7pliCBvQNRTIAp2', //andr234
    ];
}

// возвращает либо имя вошедшего на сайт пользователя, либо null
function getCurrentUser(){
    return $_SESSION['login'] ?? null;
}

// возвращает true тогда, когда существует пользователь с указанным логином и введенный им пароль прошел проверку
function checkPassword($login, $password){
    return (getCurrentUser($login) && password_verify($password, getUsersList()[$login]));
 }
 
