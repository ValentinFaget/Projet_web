<html lang="fr-FR">
<head>
	<title>Déconnexion</title>

	<meta content="text/html; charset=UTF-8" http-equiv="content-type" />
	<link href="form.css" rel="stylesheet" type="text/css" />
	<link rel="icon" href="image/images.jpeg" type="image/x-icon"/>

</head>
<body>

<header>
		<img class="logo" src="image/sentez-vous_sport_2013.gif" alt="logo_site" width="100" heigth="100"/>
		<div class="titre"> NIGGI'SPORT </div>

</header>
<?php
session_start();
session_destroy();
?>

<h4 style='text-align:center'>Déconnexion réussie </h4><br/>
<h4 style='text-align:center'>Vous allez être redirigé(e) vers la page d'accueil </h4>
<meta http-equiv='Refresh' content='2; URL= page_accueil.php' />
</body>
</html>