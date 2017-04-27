<?php

$title = "Korisnik AFR";
include('header.php');

$id = $_GET['idkorisnika'];

$stmt = $conn->prepare('SELECT * FROM korisnici WHERE id = :id');
$stmt->bindParam(":id", $id);
$stmt->execute();
$all = '<div class="korTimLiDiv">';
while($korisnik = $stmt->fetch()){
	$all .= '<a><div><div class="firstV">'.$korisnik['ime'].'</div>';
	$all .= '<div class="firstV">'.$korisnik['prezime'].'</div>';
	$all .= '<div class="firstV">'.$korisnik['username'].'</div>';
	$all .= '<div class="firstV">'.$korisnik['password'].'</div></div></a>';
	$all .= '<form action="deleteKorisnik.php?idkorisnika='.$korisnik['id'].'" method="POST"><input type="submit" value="Delete" class="deleteButton"/></form>';
}
$all .= '</div>';
?>

<?php
echo $all;
?>