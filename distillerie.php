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
		<link type="text/css" rel="stylesheet" href="style/distillerie.css">
		<title>Distillerie</title>
		<meta name="description" content="" />
		<link rel="icon" href="" />
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="style/bootstrap.css" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width,initial-scale=1" />
	    <link rel="stylesheet" href="style/Index2.css" />
        <script src="https://use.fontawesome.com/81aa6d224e.js"></script>
        <link rel="stylesheet" href="style/header.css" />
        <link rel="stylesheet" href="style/footer.css" />
	</head>
	<body>
		
        <?php include("header.php"); ?>
        
        <main>
            <h1>Distillerie</h1>
            <div class="imageEtTexte">
                    <div class="image" style="background-image:url(images/distillerie/tradition.jpg)"><a href=""><img alt="Ferme" src="images/ferme/ferme.jpg"></a></div>
                <div class="texte">
                    <h2>Traditions </h2>
                    <p class="paragraphe">Les dernières archives sur la distillation d'eau de vie de cidre en Angleterre remontent à 1678.</p>
                    <p class="paragraphe">Chez <a href="notre-entreprise.php">Somerset Cider Brandy</a> nous avons renoué avec la tradition en 1987 lorsque nous avons obtenu la première licence de distillation commerciale de toute l'histoire de l'Angleterre. 
                    Joséphine et Fifi sont nos deux alambics à colonne en cuivre, et sont visibles derrière un mur épais de verre, protégé par sceau et une serrure des douanes..</p>
                    <p class="paragraphe">Comme notre cousin français le Calvados, nous avons un nom protégé (Indication Géographique Protégée) qui sera pour toujours reliée au Somerset.</p>
                    <p class="paragraphe">Depuis l'attribution <a target="_blank" href="http://www.inao.gouv.fr/Les-signes-officiels-de-la-qualite-et-de-l-origine-SIQO/Indication-geographique-protegee">IGP</a> (Indication Géographique protégée) en 2010, l'appellation "Somerset Cider Brandy" a été rétablie en tant que terme légal. L'Union nous a donné une appellation contrôlée.</p>
                </div>
            </div>
            <div  class="imageEtTexte">
                <div>
                    <div class="image" style="background-image:url(images/distillerie/maturation.jpg)"><a href=""><img alt="Ferme" src="images/ferme/ferme.jpg"></a></div>
                </div>
                <div class="texte">
                    <h2>Maturation</h2>
                    <p class="paragraphe">L'<a href="eaux-de-vie.php">eau de vie</a> de pomme vieillit ensuite dans des fûts de chêne, à l'intérieur de notre entrepôt de stockage. </p>
                    <p class="paragraphe">Les tonneaux sont soigneusement sélectionnés pour leur qualité et les arômes qu'ils diffusent tout en donnant à l'eau de vie sa magnifique couleur dorée.</p>
                    <p class="paragraphe">À mesure que l'<a href="eaux-de-vie.php">eau de vie</a> vieillit, elle s'adoucit et devient plus riche, et revêt les arômes complexes du bois. Nous vous invitons à découvrir nos eaux-de-vie.</p>
                    <p class="paragraphe">L'art de la <a href="distillerie.php">distillation</a> est dans le mélange, pas seulement des pommes mais dans la sélection des tonneaux utilisés pour faire mûrir l'eau de vie de cidre. Chez <a href="ferme.php">Burrow Hill</a>, nous prenons particulièrement soin de nos tonneaux et prenons soin de notre eau de vie au fil des ans. .</p>
                    <p class="paragraphe">Somerset Cider Brandy estime que l'eau de vie de pommes Somerset est à son apogée après avoir vieillie pendant 20 ans et c'est donc en ce moment-là que nous mettons fin à sa maturation.</p>
                </div>
            </div>
           
        </main>
        
        <?php include("footer.php"); ?>
        
	</body>
</html>