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
		<title>Nos produits</title>
		<meta name="description" content="" />
		<link rel="icon" href="" />
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>       
        <script src="https://use.fontawesome.com/81aa6d224e.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width,initial-scale=1" />
	    <link rel="stylesheet" href="style/ficheProduit.css" />
        <link rel="stylesheet" href="style/bootstrap.css" />
        <link rel="stylesheet" href="style/header.css" />
        <link rel="stylesheet" href="style/footer.css" />
	</head>
	<body>         
        
		<?php include("header.php"); ?>
        
        <main> 
            <div class="wrapperEntete">
                
                <?php
                include("connect.php");
                $id=$_GET["id"];
                mysqli_query($link,"SET NAMES 'utf8'");
                $query="SELECT * FROM produit where PhotoProduit='$id'";
                $result=mysqli_query($link, $query) or die ("Error in the BDD".mysqli_error($link));
                ?>  

                <?php
                    $produit=mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                    if ($id == 'panier3.jpg' || $id == 'panier5.jpg' || $id == 'panier10.jpg' || $id == 'panier15.jpg' || $id == 'panier20.jpg') {
                
                    echo"<div>";
                    echo"<div id='photoProduit'>";
                        echo"<a href='#img1'>";
                          echo"<img src='images/produits/".$produit["PhotoProduit"]."' class='thumbnail'>";
                        echo"</a>";
                        echo"<a href='#_' class='lightbox' id='img1'>";
                          echo"<img src='images/produits/".$produit["PhotoProduit"]."' class='thumbnail'>";
                        echo"</a>";
                    echo"</div>";
                    echo"<div id='cotePhoto'>";
                        echo"<h1>".$produit["LibProduit"]."</h1>";
                        echo"<div>";
                            echo"<div id='ligne1'>";
                                echo"<p>Prix : <b>".$produit["PrixProduit"]." €</b></p>";
                                echo"<p>Quantité : <input type='number' name='valeurX'><br/> </p>";
                            echo"</div>";
                            echo"<div id='ligne2'>";
                                echo"<p id='stock'><b>".$produit["StockProduit"]."</b></p>";
                                echo"<div id='panier'>";
                                    echo"<a href=''>";
                                        echo"<div>";
                                            echo"<p>Ajouter au panier</p>";
                                        echo"</div>";
                                    echo"</a>"; 
                                echo"</div>";
                            echo"</div>";
                        echo"</div>";
                        echo"<div id='partage'>";
                            echo"<p>Partage : <a href=''><img alt='Ferme' src='images/produits/shareIcon.png'></a><a href=''><img alt='Ferme' src='images/produits/facebook.png'></a><a href=''><img alt='Ferme' src='images/produits/twitter.png'></a></p>";
                        echo"</div>";
                    echo"</div>";
                echo"</div>";
                echo"<h2>Ce panier contient :</h2>";
                echo"<ul>";
                    echo"<li>".$produit["ProduitPanier"]."</li>";
                    echo"<li>Somerset Pomona 50cl</li>";
                    echo"<li>Apéritif de pomme \"Kingston Black\" 50cl</li>";
                    echo"<li>Liqueur de cerise Morello 35cl</li>";
                    echo"<li>Cerise \"Hix Fix\" 10cl</li>";
                    echo"<li>Jus de pomme 70cl</li>"; 
                    echo"<li>Cidre et perry 50cl</li>"; 
                    echo"<li>Perles noires caramel et eau-de-vie de pomme 150g</li>"; 
                echo"</ul>";
                        }
                
                else {
                    echo"<div>";
                    echo"<div id='photoProduit'>";
                        echo"<a href='#img1'>";
                          echo"<img src='images/produits/".$produit["PhotoProduit"]."' class='thumbnail'>";
                        echo"</a>";
                        echo"<a href='#_' class='lightbox' id='img1'>";
                          echo"<img src='images/produits/".$produit["PhotoProduit"]."' class='thumbnail'>";
                        echo"</a>";
                    echo"</div>";
                    echo"<div id='cotePhoto'>";
                        echo"<h1>".$produit["LibProduit"]."</h1>";
                        echo"<ul>";
                            echo"<li><b>Note de dégustation</b> : ".$produit["DegustationProduit"].".</li>";
                            echo"<li><b>Structure</b> : ".$produit["StructureProduit"].".</li>";
                        echo"</ul>";
                        echo"<div>";
                            echo"<div id='ligne1'>";
                                echo"<p>Prix : <b>".$produit["PrixProduit"]." €</b></p>";
                                echo"<p>Quantité : <input type='number' name='valeurX'><br/> </p>";
                            echo"</div>";
                            echo"<div id='ligne2'>";
                                echo"<p id='stock'><b>".$produit["StockProduit"]."</b></p>";
                                echo"<div id='panier'>";
                                    echo"<a href=''>";
                                        echo"<div>";
                                            echo"<p>Ajouter au panier</p>";
                                        echo"</div>";
                                    echo"</a>"; 
                                echo"</div>";
                            echo"</div>";
                        echo"</div>";
                        echo"<div id='partage'>";
                            echo"<p>Partage : <a href=''><img alt='Ferme' src='images/produits/shareIcon.png'></a><a href=''><img alt='Ferme' src='images/produits/facebook.png'></a><a href=''><img alt='Ferme' src='images/produits/twitter.png'></a></p>";
                        echo"</div>";
                    echo"</div>";
                echo"</div>";
                echo"<h2>Descriptif</h2>";
                echo"<p>".$produit["DescriptionProduit"]."</p>";
                echo"<ul>";
                    echo"<li>Contenance : ".$produit["NbreCentilitreProduit"]." cl</li>";
                    echo"<li>Taux d&rsquo;alcool : ".$produit["PourcentageAlcoolProduit"]." %</li>";
                    echo"<li>Pays d&rsquo;origine : ".$produit["OrigineProduit"]."</li>";
                    echo"<li>Région : ".$produit["RegionProduit"]."</li>";
                    echo"<li>Distillerie : ".$produit["DistillerieProduit"]."</li>"; 
                echo"</ul>";
                echo"<h2>Suggestion</h2>";
                echo"<p>".$produit["SuggestionProduit"]."</p>";
                }


                echo"<h2>Vous aimerez peut-être</h2>";
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

                mysqli_close($link);
                ?>
                    
                
       </main>
        
        <?php include("footer.php"); ?>
        
	</body>
</html>