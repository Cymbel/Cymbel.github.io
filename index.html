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
	    <link rel="stylesheet" href="style/Index2.css" />
        <link rel="stylesheet" href="style/bootstrap.css"/>
        <link rel="stylesheet" href="style/header.css" />
        <link rel="stylesheet" href="style/footer.css" />
	</head>
	<body>         
        
		<?php include("header.php"); ?>
        <?php include("connect.php"); ?>
        
        <main>
            
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
                        <p><button type="button" class="btn btn-secondary btn-lg">Je découvre</button>
                        </div>
                    </div>
                    <div class="item"> 
                        <div class="carousel-caption">
                        <p><button type="button" class="btn btn-secondary btn-lg">Je découvre</button>
                        </div>
                    </div>
                    <div class="item"> 
                        <div class="carousel-caption">
                        <p><button type="button" class="btn btn-secondary btn-lg">Je découvre</button>
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
            <div class="wrapperEntete">
                <div class="entete">
                    <p>Plongez dans l’univers de la marque Somerset Cider Brandy, créatrice du meilleur cidre anglais fabriqué dans des conditions propres. </p>
                    <p><a href="eaux-de-vie.php">Eaux de vie</a>, <a href="paniers-somerset.php">Paniers Somerset</a>, <a href="cidres.php">Cidres</a> vous attendent en exclusivité dans notre boutique en ligne. </p>
                    <p>Découvrez la marque <a href="notre-entreprise.php">Somerset Cider Brandy</a> ainsi que le procédé de <a href="distillerie.php">fabrication et distillation</a> du cidre et des eaux-de vie. </p>
                </div>
                <?php
                $query = "SELECT * FROM produit where ProduitPhare='1';";
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
                <div class="image" style="background-image:url(images/index/homePage.jpg)"><a href=""><img alt="Ferme" src="images/ferme/ferme.jpg"></a></div>
            </div>
        </main>
        
        <?php include("footer.php"); ?>
        
	</body>
</html>