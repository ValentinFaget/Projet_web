<?php
require_once "connexion.php";

// Check connection
/*if (mysql_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysql_connect_error();
  }*/

$sql="INSERT INTO personne (nom, prenom, mdp, mail_pers, date_naissance, sexe)
VALUES
('".$_POST['nom']."','".$_POST['prenom']."','".$_POST['mdp']."','".$_POST['mail']."','".$_POST['date_naissance']."','".$_POST['sexe']."')";
echo $sql;
if (!mysql_query($CONNEXION,$sql))
  {
  die('Error: ' . mysql_error($CONNEXION));
  }
echo "1 record added";

mysql_close($CONNEXION);
?>