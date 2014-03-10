<html>
<?php

require "connexion.php";

if($_POST['nom']==NULL || $_POST['prenom']==NULL || $_POST['mdp']==NULL)
{
if($_POST['nom']==NULL)
	echo "rentrer votre nom <br/>";


if($_POST['prenom']==NULL)
	echo "rentrer votre prenom <br/>";


if($_POST['mdp']==NULL)
	echo "rentrer votre mot de passe <br/>";
}


else {
$sql="SELECT mdp FROM personne WHERE nom='".$_POST['nom']."' && prenom='".$_POST['prenom']."' ";

$sqlmdp=mysql_query($sql);
$res = mysql_fetch_assoc($sqlmdp);
$mdp = $res['mdp'];

if ($_POST['mdp']==$mdp)
	{echo "connexion réussie";
	echo "<meta http-equiv='Refresh' content='2; URL= page_accueil_participant.php' />";
	}
else echo " mauvais mot de passe";


}



?>
</html>