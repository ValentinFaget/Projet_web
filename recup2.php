<?php
require_once "connexion.php";

// Check connection
/*if (mysql_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysql_connect_error();
  }*/

if ($_POST['nom']=="" || $_POST['prenom']=="" || $_POST['mdp']=="" || $_POST['mail']=="" )
{


$sql="INSERT INTO personne (nom, prenom, mdp, mail_pers, date_naissance, sexe)
VALUES
('".$_POST['nom']."','".$_POST['prenom']."','".$_POST['mdp']."','".$_POST['mail']."','".$_POST['date_naissance']."','".$_POST['sexe']."')";

mysql_query($sql);


echo $sql;
mysql_query($sql);


mysql_close($CONNEXION);
=======
	header('Location: inscription_erreur.php');

}
else
{
	$sql="INSERT INTO personne (nom, prenom, mdp, mail_pers, date_naissance, sexe, role)
	VALUES
	('".$_POST['nom']."','".$_POST['prenom']."','".$_POST['mdp']."','".$_POST['mail']."','".$_POST['date_naissance']."','".$_POST['sexe']."','".$_POST['role']."')";
<<<<<<< HEAD
	header('Location: inscription_ok.php');
	
	


	
	mysql_query($sql);
	
	mysql_close($CONNEXION);
=======
	
	mysql_query($sql);
>>>>>>> 0e0834177ec3ceebd955d029e563a2e89d4d848d


	mysql_close($CONNEXION);
	header('Location: inscription_ok.php');
>>>>>>> 30d448e5ad9d1db55359a79fb4813b9f6174f0ec
}

?>