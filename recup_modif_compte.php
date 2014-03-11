<?php
require_once "connexion.php";

if ($_POST['nom']!="")
{
$sql="UPDATE personne
SET  nom = '"$_POST['nom']"'
WHERE nom= "
	mysql_query($sql);
}



if ($_POST['prenom']!="")
{
$sql="UPDATE personne
SET  nom = '"$_POST['prenom']"'
WHERE nom= "
	mysql_query($sql);
}



if ($_POST['mdp']!="")
{
	$sql="UPDATE personne
SET  nom = '"$_POST['mdp']"'
WHERE nom= "
	mysql_query($sql);
}



if( $_POST['mail']!="")
{
	$sql="UPDATE personne
SET  nom = '"$_POST['mail']"'
WHERE nom= "
	mysql_query($sql);
}

	mysql_close($CONNEXION);

?>