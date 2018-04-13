<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'root', 'root');
}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage(Fatality));
}

$lastname = $_POST['lastname'];
$name = $_POST['name']; 
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$adress = $_POST['adress'];

$req = $bdd->prepare('INSERT INTO contact (lastname, name, mail, phone, adress) VALUES(:lastname, :name, :mail, :phone, :adress)');
$req->execute(array(
    
    'lastname' => $lastname,
	'name' => $name,
	'mail' => $mail,
	'phone' => $phone,
	'adress' => $adress,
	));

alert ('Merci');
?>