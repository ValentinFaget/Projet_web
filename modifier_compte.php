<html>
<head>
	<title>Modifier les informations de son compte</title>

	<meta content="text/html; charset=UTF-8" http-equiv="content-type" />
	<link href="form.css" rel="stylesheet" type="text/css" />
	<link rel="icon" href="image/images.jpeg" type="image/x-icon"/>

</head>
<body>

	<header>
		<img class="logo" src="image/sentez-vous_sport_2013.gif" alt="logo_site" width="100" heigth="100"/>
		<div class="titre"> NIGGI'SPORT </div>
		<form class="search"> 
		</form>
</header>

	<h4> Entrez les rubriques que vous voulez modifier. (Laissez vides si vous ne voulez pas changer)</h4>

<form method="POST" action="recup_modif_compte.php" style="position: absolute; top: 30 px; left:100px;">
	Nouveau Prénom:<br/> <input class="prenom" type="text" name="prenom" id="prenom"/> <br/><br/>
	Nouveau Nom:<br/> <input class="nom" type="text" name="nom" id="nom"/> <br/><br/>
	Nouveau Mot de passe:<br/> <input class="mdp" type="password" name="mdp" id="mdp"/><br/><br/>
	Nouveau E-mail:<br/> <input class="mail" type="mail" name="mail" id="mail"/><br/><br/>
	<br/><br/>
	

<input type="submit" value="Modifier">

</form>
</body>
</html>