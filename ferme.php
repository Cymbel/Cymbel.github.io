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
		<link type="text/css" rel="stylesheet" href="style/ferme.css">
		<title>Ferme Burrow Hill</title>
		<meta name="description" content="" />
		<link rel="icon" href="" />
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="style/bootstrap.css" />
        <script src="https://use.fontawesome.com/81aa6d224e.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width,initial-scale=1" />
	    <link rel="stylesheet" href="style/Index2.css" />
        <link rel="stylesheet" href="style/header.css" />
        <link rel="stylesheet" href="style/footer.css" />
	</head>
	<body>
		
		<?php include("header.php"); ?>

        <main>
            <div class="entete">
                <h1>Ferme Burrow Hill</h1>
                <p>Nous vous invitons à visiter notre ferme au printemps, la saison du renouveau et de la douceur. 
                Vous pouvez faire une promenade et vous laisser vous envouter par la douce senteur florale qui envahit nos vergers et notre ferme.</p> 
                <p>Notre ferme est située dans le sud du Somerset, au milieu de 160 hectares de vergers de pommes à cidre au pied de Burrow Hill. La colline Burrow Hill est connue localement pour son sycomore qui surplombe la campagne du Somerset. 
                La ferme de Burrow Hill presse du cidre depuis 150 ans et le distille en eau de vie de pomme depuis 1989. </p>
            </div>
            <div class="horaire">
                <h2>Horaires d'ouverture</h2>
                <p class="horaireP">Lundi-Samedi : de 9h à 17h30</p>
                <p>Dimanche : fermé</p>
            </div>
            <div class="imageHoraire">
                <a href=""><img alt="Ferme" src="images/ferme/horaire.jpg"></a>
            </div>
            <div class="deuxCol">
                <div class="image" style="background-image:url(images/ferme/cidrerie.jpg)"><a href=""><img alt="Ferme" src="images/ferme/ferme.jpg"></a></div>
                <div class="deuxPar">
                    <h2>Notre Cidrerie</h2>
                    <p>La cidrerie vous attend pour vous faire découvrir notre cidre fermier et le Somerset Cider Brandy entre des fûts en chêne, des barils et des pressoirs. </p>
                    <p>Le personnel vous accompagnera tout au long de votre visite et vous présentera nos équipements qui comptent une expérience de 150 ans dans la fabrication du cidre.</p>
                </div>
            </div>
            <div class="deuxCol">
                <div class="deuxPar">
                    <h2>La Colline Burrow Hill</h2>
                    <p>Nous vous invitons également à grimper tout en haut de notre colline et à admirer la vue incroyable de Somerset Levels. Vous pouvez même voir Glastonbury Tor au loin quand il fait beau.</p>
                </div>
                    <div class="image" style="background-image:url(images/ferme/colline.jpg)"><a href=""><img alt="Ferme" src="images/ferme/ferme.jpg"></a></div>
            </div>
            <div class="deuxCol">
                    <div class="image" style="background-image:url(images/ferme/verger.jpg)"><a href=""><img alt="Ferme" src="images/ferme/ferme.jpg"></a></div>
                <div  class="deuxPar">
                    <h2>Les Vergers</h2>
                    <p>Tous nos cidres et le Somerset Cider Brandy sont basés sur les pommes venant de nos propres vergers. Vous pouvez suivre notre parcours pour découvrir nos différentes variétés de pommes ainsi que d’autres caractéristiques intéressantes. La balade dure à peu près 30 minutes, veuillez noter que vous pourriez avoir besoin de bottes.</p>
                </div>
            </div>
            <div class="deuxCol">
                <div class="deuxPar">
                    <h2>La Distillerie </h2>
                    <p>Nous vous invitons à découvrir les alambics de cuivre protégés par des vitres blindées avec 68 serrures et sceaux (sous ordre du service des Douanes et des Accises) dans la distillerie.</p>
                </div>
                    <div class="image" style="background-image:url(images/ferme/distillerie.jpg)"><a href=""><img alt="Ferme" src="images/ferme/ferme.jpg"></a></div>
            </div>
            
            <!-- Carroussel -->
            <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselFade" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselFade" data-slide-to="1"></li>
                    <li data-target="#carouselFade" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">  
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item"> 
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item"> 
                        <div class="carousel-caption">
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carouselFade" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carouselFade" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
            <script src="js/index.js"></script>
            <!-- /Carroussel -->
        </main>
        
        <?php include("footer.php"); ?>
        
	</body>
</html>