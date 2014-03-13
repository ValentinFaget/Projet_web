
<?php
require_once "connexion.php";

if ($_POST['type']=="" || $_POST['date']=="" || $_POST['lieu']=="" || $_POST['duree_en_j']==""|| $_POST['prix']==""|| $_POST['nb_place_dispo']==""|| $_POST['description']=="" )
{
	echo "<meta http-equiv='Refresh' content='0; URL=ajout_erreur.php') />";
}
else
{
	$sql="INSERT INTO activite (type, date, lieu, duree_en_j, prix, nb_place_dispo, description, id_asso)
	VALUES
	('".$_POST['type']."','".$_POST['date']."','".$_POST['lieu']."','".$_POST['duree_en_j']."','".$_POST['prix']."','".$_POST['nb_place_dispo']."','".$_POST['description']."')";

	mysql_query($sql);

	mysql_close($CONNEXION);
	echo "<meta http-equiv='Refresh' content='0; URL=ajout_ok.php') />";
}

?>