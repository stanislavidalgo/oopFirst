<?php

include_once 'FormBuilder.php';

$form = new FormBuilder('post', 'createuser.php');
$form->input('name', 'text','','Name','','','');
$form->input('email', 'email','','Email','','','');
$form->input('password', 'password','','*********','','','');
$form->input('submit', 'submit','Register','','','','');

echo $form->get();