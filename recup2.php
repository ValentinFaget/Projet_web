<?php
require_once "connexion.php";

if ($_POST['nom']=="" || $_POST['prenom']=="" || $_POST['mdp']=="" || $_POST['mail']=="" )
{
	header('Location: inscription_erreur.php');
}
else
{
	$sql="INSERT INTO personne (nom, prenom, mdp, mail_pers, date_naissance, sexe, role, id_asso)
	VALUES
	('".$_POST['nom']."','".$_POST['prenom']."','".$_POST['mdp']."','".$_POST['mail']."','".$_POST['date_naissance']."','".$_POST['sexe']."','".$_POST['role']."','".$_POST['idasso']."')";

	mysql_query($sql);

	mysql_close($CONNEXION);
	header('Location: inscription_ok.php');
}

?>