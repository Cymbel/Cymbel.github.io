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
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>       
        <script src="https://use.fontawesome.com/81aa6d224e.js"></script>
	    <meta name="viewport" content="width=device-width,initial-scale=1" />
	</head>
	<body> 
        <main>
            
            <?php
            
            if (isset($_SESSION['admin']) AND($_SESSION['admin'] == true)) {
            
            echo"<div class='wrapperEntete'>
                <div>
                    <h1>Ajouter un produit</h1>
                    <form method='post' action='ajoutProduitBO.php'>
                        <div>
                            <label for='IdProduit'>Id Produit : </label>
                            <input type='text' name ='IdProduit'>
                        </div>
                        <div>
                            <label for='LibProduit'>Nom Produit : </label>
                            <input type='text' name ='LibProduit'>
                        </div>
                        <div>
                            <label for='PrixProduit'> Prix Produit : </label>
                            <input type='text' name ='PrixProduit'>
                        </div>
                        <div>
                            <label for='PhotoProduit'>Nom du fichier de la Photo du Produit : </label>
                            <input type='text' name ='PhotoProduit'>
                        </div>
                        <div>
                            <label for='DescriptionProduit'>Description Produit : </label>
                            <input type='text' name ='DescriptionProduit'>
                        </div>
                        <div>
                            <label for='PourcentageAlcoolProduit'>Pourcentage Alcool Produit : </label>
                            <input type='text' name ='PourcentageAlcoolProduit'>
                        </div>
                        <div>
                            <label for='NbreCentilitreProduit'>Nombre Centilitres Produit : </label>
                            <input type='text' name ='NbreCentilitreProduit'>
                        </div>
                        <div>
                            <label for='AgeProduit'>Age Produit : </label>
                            <input type='text' name ='AgeProduit'>
                        </div>
                        <div>
                            <label for='DegustationProduit'> Note de Degustation Produit </label>
                            <input type='text' name ='DegustationProduit'>
                        </div>
                        <div>
                            <label for='StructureProduit'>Structure Produit : </label>
                            <input type='text' name ='StructureProduit'>
                        </div>
                        <div>
                            <label for='StockProduit'>Stock Produit : </label>
                            <input type='text' name ='StockProduit'>
                        </div>
                        <div>
                            <label for='OrigineProduit'>Origine Produit : </label>
                            <input type='text' name ='OrigineProduit'>
                        </div>
                        <div>
                            <label for='RegionProduit'>Region Produit : </label>
                            <input type='text' name ='RegionProduit'>
                        </div>
                        <div>
                            <label for='DistillerieProduit'>Distillerie Produit : </label>
                            <input type='text' name ='DistillerieProduit'>
                        </div>
                        <div>
                            <label for='SuggestionProduit'>Suggestion Produit : </label>
                            <input type='text' name ='SuggestionProduit'>
                        </div>
                        <div>
                            <label for='ProduitPhare'>Produit Phare (1=oui et 0=non) : </label>
                            <input type='text' name ='ProduitPhare'>
                        </div>
                        <div>
                            <label for='ProduitPanier'>Produit Panier : </label>
                            <input type='text' name ='ProduitPanier'>
                        </div>
                        <div>
                            <label for='IdCategorie'>Id Categorie (1, 2 ou 3) : </label>
                            <input type='text' name ='IdCategorie'>
                        </div>
                        <div class='submitDiv'>
                            <input id='submit' type='submit' value='Ajouter le produit' name='bouton' >  
                        </div>
                    </form>
                    <p><a href='../backOffice.php'> Revenir au menu principal</a></p>
                </div>   
            </div>";
            
            } else {
                echo "<p>Vous devez avoir les privilèges d'un administrateur pour accéder à cette page.</p>";
                echo "<p><a href='../index.php'>Retour au site</a></p>";
            }
            ?>
            
        </main>       
	</body>
</html>