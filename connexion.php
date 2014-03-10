

<?php


$SERVEUR="localhost";
$LOGIN="root";
$MDP="root";
$MABASE="projet_web";

$CONNEXION=mysql_connect($SERVEUR,$LOGIN,$MDP);

mysql_select_db($MABASE);

/*$sql="SELECT * from personne";

$resultats = mysql_query($sql);

while ($ligne = mysql_fetch_assoc($resultats))
{
	$nom = $ligne['nom'];
	echo "votre nom : ".$nom."";
} */


?>

