<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}


catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage('Impossible de se connecter à la base de données'));
};

$lastname = $_POST['lastname'];
$name = $_POST['name']; 
$mail = $_POST['mail'];
$message = $_POST['message'];

$req = $bdd->prepare('INSERT INTO livre_dor (lastname, name, mail, message) VALUES(:lastname, :name, :mail, :message)');
$req->execute(array(
    
    'lastname' => $lastname,
    'name' => $name,
    'mail' => $mail,
	'message' => $message,

    ));
?>