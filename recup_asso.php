<?php
 session_start(); 

require_once "connexion.php";

if ($_POST['nom_asso']=="")
{
	echo "<meta http-equiv='Refresh' content='0; URL=ajout_erreur.php') />";
}
else
{
	echo "adresse : ".$_SESSION['mail_pers']."";
	$sql="INSERT INTO association (nom_asso, mdp, mail_asso, nom)
	VALUES
	('".$_POST['nom_asso']."','".$_SESSION['mdp']."','".$_SESSION['mail_pers']."','".$_SESSION['nom']."')" ;

	mysql_query($sql);

	mysql_close($CONNEXION);
	echo "<meta http-equiv='Refresh' content='0; URL=ajout_asso_ok.php') />";
}

?>