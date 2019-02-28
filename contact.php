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
		<title>Contact</title>
		<meta name="description" content="" />
		<link rel="icon" href="" />
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>       
        <script src="https://use.fontawesome.com/81aa6d224e.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width,initial-scale=1" />
	    <link rel="stylesheet" href="style/contact.css" />
        <link rel="stylesheet" href="style/bootstrap.css" />
        <link rel="stylesheet" href="style/header.css" />
        <link rel="stylesheet" href="style/footer.css" />
	</head>
	<body>
        
		<?php include("header.php"); ?>
        
        <main>
            <div class="wrapperEntete">
        
                <div>
                    <h1>Contact</h1>
                    <form method="post" action="envoiContact.php">
                        <div>
                            <label for="nom">Nom : </label>
                            <input type="text" name ="nom">
                        </div>
                        <div>
                            <label for="prenom">Prénom : </label>
                            <input type="text" name ="prenom">
                        </div>
                        <div>
                            <label for="email">Adresse Email : </label>
                            <input type="mail" name ="email">
                        </div>
                        <div>
                            <label for="objet">Objet du message : </label>
                            <input type="text" name ="objet">
                        </div>
                        <div>
                            <label for="message">Message : </label>
                            <textarea type="text" name ="message"></textarea>
                        </div>
                        <div class="submitDiv">
                            <input id="submit" type="submit" value="Envoyer" name="bouton" >  
                        </div>
                    </form>
                </div>
                <h2>Où nous trouver ?</h2>
                <div id="adresse">
                    <p>Somerset Cider Brandy and Burrow Hill Cider<br>
                    Pass Vale Farm<br>
                    Burrow Hill<br>
                    Kingsbury Episcopi<br>
                    Martock<br>
                    Somerset TA12 6BU</p>
                    <p>Open Monday to Saturday : 9h00 - 17h30</p>
                    <p>Téléphone : +44 (0) 1460 240 782<br>
                    Fax : +44 (0) 1460 249 220<br>
                    Email : apples@ciderbrandy.co.uk</p>
                </div>
                <div id="carte">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2512.14713318105!2d-2.836691384273794!3d50.976470957203446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48726d549409abf9%3A0xa90bc7a419396660!2sSomerset+Cider+Brandy+Co!5e0!3m2!1sfr!2sfr!4v1481383531058" width="100%" height="326" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </main>
        
        <?php include("footer.php"); ?>
        
	</body>
</html>