<html>
	<head> 
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php
		 	


		 	if ($_POST['nom']=="" or $_POST['prenom']=="" or $_POST['mdp']=="" or $_POST['mail']=="")
		 		{echo "connard";}

		 	else
		 		{print 'Nom : '        .$_POST['nom'] ; 
		 	print 'Prénom : '        .$_POST['prenom'] ;
		 	print 'Email : '  .$_POST['mail'];
		 	print 'Mdp : '	.$_POST['mdp'];}
		 	



	







		?>
	</body>

</html>