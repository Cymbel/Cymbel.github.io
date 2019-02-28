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
		<title>Eaux-de-vie</title>
		<meta name="description" content="" />
		<link rel="icon" href="" />
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>       
        <script src="https://use.fontawesome.com/81aa6d224e.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width,initial-scale=1" />
	    <link rel="stylesheet" href="style/eaux-de-vie.css" />
        <link rel="stylesheet" href="style/bootstrap.css" />
        <link rel="stylesheet" href="style/header.css" />
        <link rel="stylesheet" href="style/footer.css" />
	</head>
	<body>
        
		<?php include("header.php"); ?>
        <?php include("connect.php"); ?>
        
        <main>
            <div class="wrapperEntete">
                <h1>Eaux-de-vie</h1>
                <p id="texteDescription">La distillation de pommes en Angleterre fut archivée pour la dernière fois en 1678, et a repris vie grâce à l'entreprise Somerset Cider Brandy Company en 1987. Nous avons obtenu la première licence de distillation commerciale de l'histoire du Royaume-Uni, et en octobre 2010 après une bataille légale prolongée à Bruxelles, nous avons obtenu une IGP (Indication Géographique Protégée) - "Appellation contrôlée ».</p>
                <p id="texteDescription">Nous maturons nos eaux-de-vie 3 ans, 5 ans, 10 ans, un single cask, 15 ans (appelé alchimie) et 20 ans dans de petits tonneaux de chêne, dans notre entrepôt de Burrow Hill. Les fûts sont choisis en fonction des qualités et saveurs qu'ils offriront tout en donnant à l'eau-de-vie sa robe doré qui s'adoucit et s'enrichit avec l'âge. L'art de la distillation se trouve non seulement dans le mélange des types de pommes utilisées dans la fabrication du cidre, mais également des tonneaux et des qualités qu'ils donnent à l'alcool, un savoir passé de génération en génération. Nous estimons que l'eau de vie de est à son apogée après avoir vieillit pendant 20ans, c'est donc à ce moment que nous mettons fin à sa maturation.</p>
            </div>
            <?php
                $query = "SELECT * FROM produit where idcategorie='1';";
				/*echo("requète: ".$query."<br><br>");*/
            
				$res = mysqli_query($link,$query);
            
                /*echo "Les produits correspondants:<br>";*/
                
                $nbProduitsLigne = 0;
            
                while ($produit = mysqli_fetch_array($res)) {
                    if ($nbProduitsLigne == 0) {
                        print("<div class='wrapperEntete'>");
                    }
                    $nbProduitsLigne++;
                    
                    echo "<div class='produit'>";
                    echo "<a href=ficheProduit.php?id=$produit[PhotoProduit]><img src='images/produits/".$produit["PhotoProduit"]."'>";
                    echo "<p><b>".$produit["LibProduit"]."</b></p>";
                    echo "<p>".$produit["PrixProduit"]."€</p>";
                    echo "<a href=''><div><p>Ajouter au panier</p></div></a>";
                    echo "</div>";
                    
                    if ($nbProduitsLigne == 3) {
                        print("</div>");
                        $nbProduitsLigne = 0;
 
                    }
                }
                
                if ($nbProduitsLigne >0 && $nbProduitsLigne < 3) {
                    print("</div>");
                }
                
            /*
                if (mysqli_num_rows($res) == 0) {
					echo "Utilisateur ou mot de passe invalide !";
				} else {
					$client = mysqli_fetch_array($res);
					echo "Bonjour ".$client["Pr_Client"]."!";
				}
                */
                
            ?>   
            
        </main>
        
        <?php include("footer.php"); ?>
        
	</body>
</html>