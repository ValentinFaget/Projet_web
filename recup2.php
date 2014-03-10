<?php
require_once "connexion.php";

// Check connection
/*if (mysql_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysql_connect_error();
  }*/


if ($_POST['nom']=="" || $_POST['prenom']=="" || $_POST['mdp']=="" || $_POST['mail']=="" )
{



	//header("Location: inscription_erreur.php");
 echo "<meta http-equiv='Refresh' content='0; URL= inscription_erreur.php' />";

}
else
{
	$sql="INSERT INTO personne (nom, prenom, mdp, mail_pers, date_naissance, sexe, role, id_asso)
	VALUES
	('".$_POST['nom']."','".$_POST['prenom']."','".$_POST['mdp']."','".$_POST['mail']."','".$_POST['date_naissance']."','".$_POST['sexe']."','".$_POST['role']."','1')";

	mysql_query($sql);
	
	
	//header('Location: inscription_ok.php');
	echo "<meta http-equiv='Refresh' content='0; URL= inscription_ok.php' />";

	mysql_close($CONNEXION);


}

?>