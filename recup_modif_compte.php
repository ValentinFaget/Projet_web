<?php
require_once "connexion.php";
session_start();

if ($_POST['nom']!="")
{
$sql="UPDATE personne
SET  nom = '".$_POST['nom']."'
WHERE id_pers = '".$_SESSION['id']."'";
	mysql_query($sql);

	$_SESSION['nom']=$_POST['nom'];
}



if ($_POST['prenom']!="")
{
$sql="UPDATE personne
SET  prenom = '".$_POST['prenom']."'
WHERE id_pers = '".$_SESSION['id']."' ";
	mysql_query($sql);

	$_SESSION['prenom']=$_POST['prenom'];
}



if ($_POST['mdp']!="")
{
	$sql="UPDATE personne
SET  mdp = '".$_POST['mdp']."'
WHERE id_pers = '".$_SESSION['id']."' ";
	mysql_query($sql);

	$_SESSION['mdp']=$_POST['mdp'];
}



if( $_POST['mail']!="")
{
	$sql="UPDATE personne
SET  mail_pers = '".$_POST['mail']."'
WHERE id_pers = '".$_SESSION['id']."' ";
	mysql_query($sql);
}

	mysql_close($CONNEXION);

echo "<meta http-equiv='Refresh' content='0; URL= modifier_compte.php' />";

?>