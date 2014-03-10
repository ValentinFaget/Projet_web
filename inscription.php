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
		<div class="titre"> NIGGI'SPORT - Inscription</div>
 <br/>
</header>

<SPAN style="position: absolute; top: 10 px; left: 800px;width: 103px; height: 61px">
<img class="imgsport" src="image/marathon.jpg" alt="marathon" />
</span>

<br/><br/>

<form method="POST" action="recup2.php" style="position: absolute; top: 30 px; left:100px;">
	Prénom:<br/> <input class="prenom" type="text" name="prenom" id="prenom"/> <br/><br/>
	Nom:<br/> <input class="nom" type="text" name="nom" id="nom"/> <br/><br/>
	Mot de passe:<br/> <input class="mdp" type="password" name="mdp" id="mdp"/><br/><br/>
	E-mail:<br/> <input class="mail" type="mail" name="mail" id="mail"/><br/><br/>
	Date de naissance:<br/> <input class="date_naissance" type="date" name="date_naissance" id="date_naissance" /><br/><br/>
	Sexe:<br/><br/> <input class="sexe" type="radio" name="sexe" id="sexe" value="homme"/> Homme
	<input class="sexe" type="radio" name="sexe" id="sexe" value="femme"/> Femme <br/>
	<br/><br/>S'inscrire en tant que:<br/><br/> <input class="role" type="radio" name="role" id="role" value="participant"/> Participant
	<input class="role" type="radio" name="role" id="role" value="organisateur"/> Organisateur <br/><br/><br/>
<?php
require("connexion.php");
echo "Selectionner l'association dont vous faites partie :<br/>" ;
echo "(Aucunes_associations si vous ne faites partie d'aucunes associations)<br/>" ;
	$MaRequete="SELECT * FROM association Order By id_asso";
	$MonRs=mysql_query($MaRequete,$CONNEXION);
	echo "<SELECT NAME='idasso'>";
	echo "<OPTION SELECTED>  --  Choisir une association  --  </OPTION>";
	while($Tuple=mysql_fetch_array($MonRs))
	{
		echo "<OPTION value='$Tuple[id_asso]'>$Tuple[nom_asso]</OPTION>";
	}
		echo "</SELECT><BR/><BR/>";
		mysql_close($CONNEXION);

?>
	<br/><br/>
	

<input type="submit" value="S'inscrire">
</form>

</body>

</html>