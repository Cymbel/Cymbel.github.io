<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="style/cookie.css">
		<title>Somerset Cider Brandy</title>
		<meta name="description" content="" />
		<link rel="icon" href="" />
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>       
        <script src="https://use.fontawesome.com/81aa6d224e.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width,initial-scale=1" />
	    <link rel="stylesheet" href="style/Index2.css" />
        <link rel="stylesheet" href="style/bootstrap.css" />
        <link rel="stylesheet" href="style/header.css" />
        <link rel="stylesheet" href="style/footer.css" />
	</head>
    <body>
        <main>
            <div class="wrapperEntete1">
                <a href="index.php"><img src="images/header/logo.png" alt="Fronton"></a>
                <p>Bienvenue sur notre site<br>
                Pour accéder au site somerset-cider-brandy.fr, vous devez être en âge de consommer de l'alcool dans votre pays de résidence. S'il n'existe pas de législation relative à ce sujet dans votre pays, vous devez être âgé de 18 ans pour accéder au site.</p>
            </div>         
        <?php
            // Y a-t-il déjà un cookie ?
            if (!isset($_COOKIE['autorise'])) {
                // il n'y avait pas de cookie
                // si c'est la première fois qu'il vient sur cette page, 
                // il faut lui poser la question de l'age
                // Nous savons si c'est la première fois en regardant si il 
                // nous transmet une valeur "reponse" de formulaire
                if (!isset($_GET['reponse'])) {
                    // si il n'y a pas de 'reponse', c'est qu'il
                    // faut lui poser la question en affichant
                    // un formulaire
                    echo "<div class='wrapperEntete2'>";
                    print("<form name='verif' action='cookie.php'>");
                    echo "<div class='submitDiv'>"; 
                    print("<input id='submit1' type='submit' name='reponse' value='Je certifie avoir moins de 18 ans'>");
                    print("<input id='submit2' type='submit' name='reponse' value='Je certifie avoir plus de 18 ans'>");       
                    print('</form>');
                    echo "</div>";
                    echo "</div>";
                } else {
                    // Si il y a une réponse, il faut lui ennvoyer le cookie
                    // correspondant
                    // puis lui afficher la page
                    if ($_GET['reponse'] == 'Je certifie avoir plus de 18 ans') {
                        setcookie("autorise","oui",time() + 365*24*3600);
                        pageAutorise();
                    } else {
                        setcookie("autorise","non",time() + 365*24*3600);
                        pageRefusee();
                    }
                }
            } else {
                // Le client nous a transmis un cookie
                // suivant sa valeur on choisi la page à afficher
                if ($_COOKIE['autorise'] == "oui") {
                    pageAutorise();
                } else {
                    pageRefusee();
                }
            }
        
            function pageAutorise() {
                header ('location: index.php');
            }
        
            function pageRefusee() {
                print("Désolé, l'accès à ces produits est limité");
            }
        ?>
            <div class="wrapperEntete3">
                <p>L’abus d’alcool est dangereux pour la santé, à consommer avec modération<br>
                    www.responsibledrinking.eu.</p>
                <p><a>Mentions Légales</a> │ <a>CGV</a></p>
            </div>
        </main>
    </body>
</html>