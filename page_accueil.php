<?php
session_start();

function utilisateur_connecte()
{
	return isset($_SESSION['nom']) && isset($_SESSION['prenom']) && !empty($_SESSION['nom']) && !empty($_SESSION['prenom']);
}

?>

<html  lang="fr-FR">
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type" />
	<link href="form.css" rel="stylesheet" type="text/css" />
	<link rel="icon" href="image/images.jpeg" type="image/x-icon"/>

	<title>Gestion d'évènement sportifs</title>
</head>
<body>

<header>
		<img class="logo" src="image/sentez-vous_sport_2013.gif" alt="logo_site" width="100" heigth="100"/>
		<div class="titre"> NIGGI'SPORT </div>
</header>
<br/>

		<div class="inscr">
<?php
		if(utilisateur_connecte())
		{

	echo "Bienvenue ".$_SESSION['prenom']." ".$_SESSION['nom']." <br/><br/>";
	echo "<form action='deconnexion.php'><input value='Déconnexion' type='submit' ></input> </form>  <br/>
			 <form action='modifier_compte.php'><input value='Modifier son compte' type='submit' ></input></form>" ;
		}
		else {
?>
		<form method="POST" action="connecterpersonne.php">
			CONNEXION: 
			<br/>

			Nom:<br/>
			<input class="nom" type="text" id="nom" name="nom">
			</input>
			<br/>
			Prénom:<br/>
			<input class="prenom" type="text" id="prenom" name="prenom">
			</input>
			<br/>
			Mot de passe: <br/>
		<input class="mdp" type="password" id="mdp" name="mdp"><br/>
		</input>
		<input value="Se connecter" type="submit" ></input>
		</form>
		<br/>
		<br/>

		<a href="inscription.php"> S'INSCRIRE </a>
<?php
			}
?>
		</div>


<div class="intro">
	<p> <h2>Présentation:</h2> <h4>Site de gestions d'évènements sportifs destiné à faciliter l'organisation de tout type de manisfestation sportive.<br/>
		Ce site a pour but de reccueillir des évènements sportifs pour permettre aux utilisateurs de pouvoir s'y préinscrire puis s'inscrire. <br/>Les associations peuvent, quant à elle, proposer des activités auxquelles on pourra s'inscrire.</h4>
<br/>
	</p>

<hr/>
</div>
<hr/>
<br/>
			<div class="liste_activites">
				<img class="imgsport" src="image/sport.PNG" alt="sport" heigth="120"/>
				<br/>
				<a class="act" href="act_proposees.php"><h2>Voir les activités proposées</h2></a>
				
				
				<?php 
				if(utilisateur_connecte())
				{
				$role="organisateur";
				
				if($_SESSION['role']!="")
				{
					if ($_SESSION['role']==$role)
					{
						echo "<a href='ajout_act.php'> Ajouter une activité </a>";
					}					
				}
				}

				?>
			</div>
		
		
</body>

</html>