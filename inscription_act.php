<html lang="fr-FR">

<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type" />
	<link href="form.css" rel="stylesheet" type="text/css" />
	<link rel="icon" href="image/images.jpeg" type="image/x-icon"/>

	
	<title>Gestion d'évènement sportifs/Activités proposées</title>

</head>


<body>

<header>
		<img class="logo" src="image/sentez-vous_sport_2013.gif" alt="logo_site" width="100" heigth="100"/>
		<div class="titre"> NIGGI'SPORT </div>

</header>


<?php
require_once "connexion.php";
session_start();
function utilisateur_connecte()
{
	return isset($_SESSION['nom']) && isset($_SESSION['prenom']) && !empty($_SESSION['nom']) && !empty($_SESSION['prenom']);
}

if(utilisateur_connecte())
{
	$sql="INSERT INTO participe (id_activite, id_personne, pre_inscrit, paye)
	VALUES ('".$_GET['id']."','".$_SESSION['id']."','1','0')";

	mysql_query($sql);

	mysql_close($CONNEXION);

	echo "<h2 align='center'>
Inscription réussie! <br/>
<a href='page_accueil.php'>Retour à la page d'accueil</a>";
}
else
{
	echo "<h2 align='center'>
Vous n'êtes pas connecté! <br/>
<a href='page_accueil.php'>Retour à la page d'accueil</a>";
}
		
?>

</body>
</html>