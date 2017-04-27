<?php
session_start();
if(!isset($_SESSION['username'])){
	header('Location: index.php');
	exit(0);
}
require_once('connect.php');
$stmt = $conn->prepare('SELECT * FROM korisnici WHERE username=:username');

$stmt->bindParam(":username", $_SESSION['username']);

$stmt->execute();
?>