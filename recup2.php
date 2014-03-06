<?php
require_once "connexion.php";

// Check connection
/*if (mysql_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysql_connect_error();
  }*/
if ($nom=="" || $prenom=="" || $mdp=="" || $mail_pers=="" || $date_naissance=="")
{

	header('Location: inscription_erreur.php');

}
else
{
	$sql="INSERT INTO personne (nom, prenom, mdp, mail_pers, date_naissance, sexe, role)
	VALUES
	('".$_POST['nom']."','".$_POST['prenom']."','".$_POST['mdp']."','".$_POST['mail']."','".$_POST['date_naissance']."','".$_POST['sexe']."','".$_POST['role']."')";
	header('Location: inscription_ok.php');
	/*<<<<<<< HEAD
	mysql_query($sql);

	=======
	echo $sql;
	mysql_query($sql);
	>>>>>>> c8849360fb826c3bf4ede3eda206f113969e01b0
	mysql_close($CONNEXION);*/
}

?>