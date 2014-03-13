<html  lang="fr-FR">
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type" />
	<link href="form.css" rel="stylesheet" type="text/css" />
	<link rel="icon" href="image/images.jpeg" type="image/x-icon"/>

	<title>Gestion d'évènement sportifs</title>
</head>
<body>

<header>
		<img class="logo" src="image/sentez-vous_sport_2013.gif" alt="logo_site" width="100" heigth="80"/>
		<div class="titre"> NIGGI'SPORT - Ajouter une association</div>
 <br/>
</header>

<SPAN style="position: absolute; top: 10 px; left: 800px;width: 103px; height: 61px">
<img class="imgsport" src="image/marathon.jpg" alt="marathon" />
</span>

<br/><br/>

<div style="position: absolute; top: 30 px; left:100px;">
<form method="POST" action="recup_asso.php" >
	Nom de l'association:<br/> <input class="nom_asso" type="text" name="nom_asso" id="nom_asso"/> <br/><br/>
	

<input type="submit" value="Ajouter l'association">
</form>
<form action="page_accueil.php" >
	<input value="Retour à la page d'accueil" type="submit" ></input> 
</form>
</div>

</body>

</html>