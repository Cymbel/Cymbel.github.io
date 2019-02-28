<?php
    session_start ();
?>
        
<?php
    // Y a-t-il déjà un cookie ?
    if (!isset($_COOKIE['autorise'])) {
    header ('location: cookie.php');
    } else {
    // Le client nous a transmis un cookie
    // suivant sa valeur on choisi la page à afficher
        if ($_COOKIE['autorise'] == "non") {
        print("Désolé, l'accès à ces produits est limité");
        }
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="style/index.css">
		<title>Somerset Cider Brandy</title>
		<meta name="description" content="" />
		<link rel="icon" href="" />
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>       
        <script src="https://use.fontawesome.com/81aa6d224e.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width,initial-scale=1" />
	    <link rel="stylesheet" href="style/connexion.css" />
        <link rel="stylesheet" href="style/bootstrap.css" />
        <link rel="stylesheet" href="style/header.css" />
        <link rel="stylesheet" href="style/footer.css" />
	</head>
	<body>
        
		<?php include("header.php"); ?>
        
        <main>
            <div class="wrapperEntete">
        
                <div>
                    <h1>Connectez-vous</h1>
                    <form method="post" action="TP2_Moodle_monCompte.php">
                        <div>
                            <label for="mail">Email : </label>
                            <input type="mail" name ="email">
                        </div>
                        <div>
                            <label for="pass">Mot de Passe : </label>
                            <input type="password" name ="pass">
                        </div>
                        <div class="submitDiv">
                            <input id="submit" type="submit" value="Se connecter" name="bouton" >  
                        </div>
                    </form>
                </div>

                <div>
                    <h1>Créer un compte</h1>
                    <form method="post" action="creationCompte.php">
                        <div>
                            <label for="nom">Nom : </label>
                            <input type="text" name ="nom">
                        </div>
                        <div>
                            <label for="nom">Prénom : </label>
                            <input type="text" name ="prenom">
                        </div>
                        <div>
                            <label for="mail">*Email : </label>
                            <input type="mail" name ="email">
                        </div>
                        <div>
                            <label for="pass">*Mot de Passe : </label>
                            <input type="password" name ="pass">
                        </div>
                        <div>
                            <label for="passCheck">*Confirmez le Mot de Passe : </label>
                            <input type="password" name ="passCheck">
                        </div>
                        <p>Les champs marqués d'un * sont obligatoires, veuillez les remplir s'il vous plait.</p>
                        <div class="submitDiv">
                            <input id="submit" type="submit" value="Créer un compte" name="bouton" >  
                        </div>
                    </form>

                </div>
        
            </div>
        </main>
        
        <?php include("footer.php"); ?>
        
	</body>
</html>