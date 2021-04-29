<?php

include_once 'SqlBuilder.php';
if(isset($_POST['submit'])){
    $db = new SqlBuilder();
    $password = generatePassword($_POST['password']);
    $values = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'password' => $password
    ];

    $db->insert('user')->values($values)->exec();
}

function generatePassword($password)
{
    return password_hash($password, PASSWORD_DEFAULT);
}

