
<html>

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
		<form class="search"> 
			<input class="search" placeholder="Recherche"  type="text" id="search" name="search"> </input>
		</form>
</header>

	<div class="entete">

	 </div>

<h1> ACTIVITÉS PROPOSÉES </h1>


<table class="act">
	<tr>
		<td> Nom </td>
		<td> Prix </td>
		<td> Lieu </td>
		<td> Nb de place(s) restantes(s) </td>
		<td> Date </td>
		<td> Durée </td>
	</tr> 
<?php
require("connexion.php");
	$MaRequete="SELECT * FROM activite Order By id_activite";
	$MonRs=mysql_query($MaRequete,$CONNEXION);
		while($Tuple=mysql_fetch_array($MonRs))
	{
?>
<tr>
	<td>
<?php
		echo "$Tuple[type] ";
?>
	</td>
	<td>
<?php
		echo "$Tuple[prix] euros"
?>
	</td>
	<td>
<?php
		echo "$Tuple[lieu]"
?>
	</td>
	<td>
<?php
		echo "$Tuple[nb_place_dispo]"
?>
	</td>
	<td>
<?php
		echo "$Tuple[date]"
?>
	</td>
	<td>
<?php
		echo "$Tuple[duree_en_j] jours"
?>
	</td>
</tr>
<?php
	}
?>


</table>








</body>
</html>