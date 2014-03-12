<html lang="fr-FR">
<head>
	<title>Connexion</title>

	<meta content="text/html; charset=UTF-8" http-equiv="content-type" />
	<link href="form.css" rel="stylesheet" type="text/css" />
	<link rel="icon" href="image/images.jpeg" type="image/x-icon"/>

</head>
<body>

<header>
		<img class="logo" src="image/sentez-vous_sport_2013.gif" alt="logo_site" width="100" heigth="100"/>
		<div class="titre"> NIGGI'SPORT </div>
		<form class="search"> 
			<input class="search" placeholder="Recherche"  type="text" id="search" name="search"> </input>
		</form>
</header>
<?php
session_start();

require "connexion.php";

if($_POST['nom']==NULL || $_POST['prenom']==NULL || $_POST['mdp']==NULL)
{
	echo "<meta http-equiv='Refresh' content='2; URL= page_accueil.php' />";

if($_POST['nom']==NULL)
	echo "<h4 style='text-align:center'>rentrer votre nom </h4><br/>";


if($_POST['prenom']==NULL)
	echo "<h4 style='text-align:center'>rentrer votre prenom </h4><br/>";


if($_POST['mdp']==NULL)
	echo "<h4 style='text-align:center'>rentrer votre mot de passe </h4><br/>";
}


else {
$sql="SELECT mdp FROM personne WHERE nom='".$_POST['nom']."' && prenom='".$_POST['prenom']."' ";

$sqlmdp=mysql_query($sql);
$res = mysql_fetch_assoc($sqlmdp);
$mdp = $res['mdp'];

if ($_POST['mdp']==$mdp)
	{
	echo "<h4 style='text-align:center'>Connexion réussie </h4>";

$sql="SELECT id_pers FROM personne WHERE nom='".$_POST['nom']."' && prenom='".$_POST['prenom']."' ";

$sqlmdp=mysql_query($sql);
$res = mysql_fetch_assoc($sqlmdp);
$id = $res['id_pers'];

$sql="SELECT role FROM personne WHERE nom='".$_POST['nom']."' && prenom='".$_POST['prenom']."' ";

$sqlmdp=mysql_query($sql);
$res = mysql_fetch_assoc($sqlmdp);
$role = $res['role'];

	$_SESSION['id']=$id;
	$_SESSION['role']=$role;
	$_SESSION['nom']=$_POST['nom'];
	$_SESSION['prenom']=$_POST['prenom'];
	$_SESSION['mdp']=$_POST['mdp'];
	}
else { 
	echo "<h4 style='text-align:center'> Mauvais mot de passe </h4><br/>";
	 }

echo "<h4 style='text-align:center'>Vous allez être redirigé(e) vers la page d'accueil </h4>";
echo "<meta http-equiv='Refresh' content='2; URL= page_accueil.php' />";
	}
?>

</body>
</html>