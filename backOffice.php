<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Back Office</title>
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>       
	    <link rel="stylesheet" href="style/backOffice.css" />
	</head>
	<body>                 
        <div>
            <?php
            if (isset($_SESSION['admin']) AND($_SESSION['admin'] == true)) {
                
                echo "<p><a href='codePHP/ajouterProduitBO.php'>Ajouter un produit</a></p>";
                echo "<p><a href='codePHP/modifier_supprimerProduitBO.php'>Modifier/Supprimer un produit</a></p>";
                echo "<p><a href='codePHP/visualiserContact.php'>Visualiser les messages du formulaire de contact</a></p>";
                echo "<p><a href='index.php'>Retour au site</a></p>";
                    
            } else {
                echo "<p>Vous devez avoir les privilèges d'un administrateur pour accéder à cette page.</p>";
                echo "<p><a href='index.php'>Retour au site</a></p>";
            }
            
                
            ?>
        </div>        
	</body>
</html>