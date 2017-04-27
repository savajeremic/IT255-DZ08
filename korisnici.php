<?php

$title = "Korisnici AFR";
include('header.php');
if(!$is_admin){
	header('Location: index.php');
	exit(0);
}
$stmt = $conn->query('SELECT * FROM korisnici');
$stmt->execute();
$all = '<div class="korTimLiDiv">';
while($korisnici = $stmt->fetch()){
	$all .= '<a href="korisnik.php?idkorisnika='.$korisnici['id'].'"><div><div class="firstV">'.$korisnici['ime'].'</div>';
	$all .= '<div class="firstV">'.$korisnici['prezime'].'</div>';
	$all .= '<div class="firstV">'.$korisnici['username'].'</div></div></a>';
	$all .= $is_admin ? '<form action="deleteKorisnik.php?idkorisnika='.$korisnici['id'].'" method="POST"><input type="submit" value="Delete" class="deleteButton"/></form>'  : '';
}
$all .= '</div>';
?>

<?php if($is_admin){?>
<form action="dodajNovogKorisnika.php" method="GET" class="formStyle">
	<input type="text" name="ime" placeholder="Unesite ime"/>
	<input type="text" name="prezime" placeholder="Unesite prezime"/>
	<input type="text" name="username" placeholder="Unesite username"/>
	<input type="password" name="password" placeholder="Unesite sifru"/>
	<input type="submit" value="Posalji"/>
</form>
<?php } ?>

<?php
echo $all;
?>