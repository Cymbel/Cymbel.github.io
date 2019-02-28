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
		<link type="text/css" rel="stylesheet" href="style/notre-entreprise.css">
		<title>Notre entrprise</title>
		<meta name="description" content="" />
		<link rel="icon" href="" />
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="style/bootstrap.css" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width,initial-scale=1" />
	    <link rel="stylesheet" href="style/Index2.css" />
        <link rel="stylesheet" href="style/header.css" />
        <script src="https://use.fontawesome.com/81aa6d224e.js"></script>
        <link rel="stylesheet" href="style/footer.css" />
	</head>
	<body>
		
        <?php include("header.php"); ?>
        
        <main>
            <h1>Notre entreprise</h1>
            <div class="imageEtTexte">
                    <div class="image" style="background-image:url(images/notreEntreprise/aProposDe.jpg)"><a href=""><img alt="Ferme" src="images/ferme/ferme.jpg"></a></div>
                <div class="texte">
                    <h2>A propos de Somerset Cider Brandy</h2>
                    <p class="paragraphe">Pays du cidre, l'Angleterre a trois régions connues pour les meilleures conditions du sol et du climat permettant à cultiver des pommes à cidre qui font partie du terroir. Ces régions se trouvent dans le comté du Somerset, situé dans le sud-ouest du pays.</p> 
                    <p>La première de ces régions est localisée à la ferme <a href="ferme.php">Burrow Hill</a> et dans le village Kingsbury et les deux autres se retrouvent pas loin de Wedmore et Baltonsborough.</p>
                </div>
            </div>
            <div  class="imageEtTexte">
                <div>
                    <div class="image" style="background-image:url(images/notreEntreprise/nosPommes.jpg)"><a href=""><img alt="Ferme" src="images/ferme/ferme.jpg"></a></div>
                </div>
                <div class="texte">
                    <h2>Nos pommes et leurs origines</h2>
                    <p class="paragraphe">La pomme reste le symbole fondateur de Somerset Cider Brandy. Il est important pour nous de vous faire connaître les origines des pommes utilisées dans la fabrication de nos <a href="eaux-de-vie.php">eaux-de-vie</a> ainsi que de notre <a href="">Somerset</a>.    
                    <p>Ces pommes sont des pommes à cidre et constituent le point de départ dans le processus de fabrication. 
                    Principalement cultivées dans nos propres vergers, nos pommes sont réputées pour les arômes uniques et le goût frais, ainsi que pour leur qualité supérieure.</p>
                    <p>Plus de 40 variétés anciennes de pommes à cidre comme le Somerset 20 ans, le Somerset Alchimie 15 ans et le Naufrage Single Cask sont cultivées au sein de notre ferme et nous en sommes fières. </p>
                </div>
            </div>
            <div  class="imageEtTexte">
                <div>
                    <div class="image" style="background-image:url(images/notreEntreprise/savoirFaire.jpg)"><a href=""><img alt="Ferme" src="images/ferme/ferme.jpg"></a></div>
                </div>
                <div class="texte">
                    <h2>Notre savoir-faire</h2>
                    <p class="paragraphe">Derrière le nom de notre marque, Somerset Cider Brandy, se cache le talent et le savoir-faire de nos maîtres artisans dont l’expérience dans le domaine compte plus de 50 ans.</p>
                    <p>Chez <a href="ferme.php">Burrow Hill</a>, l’art de mélanger plusieurs variétés de fruits est une étape clé dans le processus de <a href="distillerie.php">fabrication et distillation</a> du cidre.</p>  
                    <p>Dans le procédé de fermentation et de fabrication du cidre, des méthodes traditionnelles sont utilisées. En conséquence, le jus est fermenté en automne sans être transformé d'abord en concentré.</p>
                </div>
            </div>
            <div  class="imageEtTexte">
                <div>
                    <div class="image" style="background-image:url(images/notreEntreprise/notrePolitique.jpg)"><a href=""><img alt="Ferme" src="images/ferme/ferme.jpg"></a></div>
                </div>
                <div class="texte">
                    <h2>Notre politique  </h2>
                    <p class="paragraphe">Fournir du cidre naturel tout en respectant l'environnement représente la politique de l'entreprise.</p> 
                    <p>En ce sens, nous essayons de réduire le plus possible l'usage des produits chimiques. Ainsi, les sprays et l'azote artificiel sont utilisés en une quantité minimale voire pas du tout afin d'assurer des produits plus naturels et dont la qualité reste élevée.</p> 
                    <p>Nous tenons à préciser que nos pommes sont plus petites, mais plus savoureuses en comparaison avec celles cultivées dans des vergers fabricant du cidre en quantités industrielles.</p>
                </div>
            </div>
           
        </main>
        
        <?php include("footer.php"); ?>
        
	</body>
</html>