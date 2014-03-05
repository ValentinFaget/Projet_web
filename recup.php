<html>
	<head> 
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php
		 	if ($_POST['nom']=="") 
		 		{echo "Le nom n'est pas valide";}
		 	if ($_POST['prenom']=="")
		 		{echo "Le prénom n'est pas valide";}
		 	if ($_POST['mdp']=="")
		 		{echo "Le mot de passe n'est pas valide";}
		 	if ($_POST['mail']=="")
		 		{echo "L'adresse mail n'est pas valide";}

		 	else
		 		{print 'Nom : '        .$_POST['nom'] ; 
		 	print 'Prénom : '        .$_POST['prenom'] ;
		 	print 'Email : '  .$_POST['mail'];
		 	print 'Mdp : '	.$_POST['mdp'];}
		 	



	







		?>
	</body>

</html>