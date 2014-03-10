<?php

$sql="SELECT mdp FROM personne WHERE nom=$_POST['nom'] && prenom=$_POST['prenom']";

$sqlmdp=mysql_query($sql);

if ($_POST['mdp']=$sqlmdp)
	echo "connexion réussie";
else echo " mauvais mot de passe";

?>
