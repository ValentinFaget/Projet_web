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
		<div class="titre"> NIGGI'SPORT - Ajout d'activité</div>
 <br/>
</header>

<SPAN style="position: absolute; top: 10 px; left: 800px;width: 103px; height: 61px">
<img class="imgsport" src="image/marathon.jpg" alt="marathon" />
</span>

<br/><br/>

<div style="position: absolute; top: 30 px; left:100px;">
<form method="POST" action="recup_act.php" >
	Nom:<br/> <input class="nom" type="text" name="type" id="nom"/> <br/><br/>
	Date de début:<br/> <input class="date" type="date" name="date" id="date"/> <br/><br/>
	Lieu:<br/> <input class="lieu" type="textarea" name="lieu" id="lieu"/><br/><br/>
	Durée (en jours):<br/> <input class="duree" type="number" name="duree_en_j" id="duree"/><br/><br/>
	Prix:<br/> <input class="prix" type="prix" name="prix" id="prix" /><br/><br/>
	Nombre de places:<br/> <input class="nombre_place" type="number" name="nb_place_dispo" id="nombre_place" /><br/><br/>
	Description:<br/> <input class="description" type="textarea" name="description" id="description" /><br/>

<?php
require("connexion.php");
echo "Selectionner l'association dont vous faites partie :<br/>" ;
echo "(Aucunes_associations si vous ne faites partie d'aucunes associations)<br/>" ;
	$MaRequete="SELECT * FROM association Order By id_asso";
	$MonRs=mysql_query($MaRequete,$CONNEXION);
	echo "<SELECT NAME='id_asso'>";
	$asso_defaut=mysql_fetch_array($MonRs);
	echo "<OPTION SELECTED value=".$asso_defaut['id_asso']."> ".$asso_defaut['nom_asso']." </OPTION>";
	while($Tuple=mysql_fetch_array($MonRs))
	{
		echo "<OPTION value='$Tuple[id_asso]'>$Tuple[nom_asso]</OPTION>";
	}
		echo "</SELECT><BR/><BR/>";
		mysql_close($CONNEXION);

?>
	<br/><br/>
	

<input type="submit" value="Ajouter">
</form>
<form action="page_accueil.php" >
	<input value="Retour à la page d'accueil" type="submit" ></input> 
</form>
</div>

</body>

</html>