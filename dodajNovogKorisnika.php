<?php
require_once('connect.php');
require_once('check.php');

$username = strval($_GET['username']);
$password = strval($_GET['password']);
$email = strval($_GET['email']);
$ime = strval($_GET['ime']);
$prezime = strval($_GET['prezime']);
if($ime AND $prezime AND $username AND $password AND $email != NULL)
{
	$stmt = $conn->prepare('INSERT INTO korisnici(username, password, email, ime, prezime) VALUES(:username, :password, :email, :ime, :prezime)');
	$stmt->bindParam(':username', $username);
	$stmt->bindParam(':password', $password);
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':ime', $ime);
	$stmt->bindParam(':prezime', $prezime);
	$stmt->execute();
}
else{
	echo "Connection failed: ";
}
header('Location: index.php');
?>