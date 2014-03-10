<html>
<?php

require "connexion.php";

if($_POST['nom']==NULL)
	echo "rentrer votre nom <br/>";


if($_POST['prenom']==NULL)
	echo "rentrer votre prenom <br/>";


if($_POST['mdp']==NULL)
	echo "rentrer votre mot de passe <br/>";


$sql="SELECT mdp FROM personne WHERE nom=$_POST['nom'] && prenom=$_POST['prenom']";

$sqlmdp=mysql_query($sql);

if ($_POST['mdp']=$sqlmdp)
	echo "connexion réussie";
else echo " mauvais mot de passe";




?>
</html>