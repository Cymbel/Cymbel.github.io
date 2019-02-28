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
		<title>Paniers Somerset</title>
		<meta name="description" content="" />
		<link rel="icon" href="" />
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>       
        <script src="https://use.fontawesome.com/81aa6d224e.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width,initial-scale=1" />
	    <link rel="stylesheet" href="style/paniers-somerset.css" />
        <link rel="stylesheet" href="style/bootstrap.css" />
        <link rel="stylesheet" href="style/header.css" />
        <link rel="stylesheet" href="style/footer.css" />
	</head>
	<body>
        
		<?php include("header.php"); ?>
        <?php include("connect.php"); ?>
        
        <main>
            
            <div class="wrapperEntete">
                <h1>Paniers Somerset</h1>
                <p id="texteDescription">Le Panier Somerset regroupe plusieurs produits dans un panier et emballage chics. Il est idéal pour fêter vos anniversaires, ainsi que pour toute autre occasion spéciale. Offrez-vous un moment de plaisir et dégustez nos meilleurs produits naturels.</p>
                <?php
                $query = "SELECT * FROM produit where idcategorie='2';";
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