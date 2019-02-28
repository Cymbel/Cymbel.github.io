<html>
    <head>
        <style>
            input {
                width: 100%;
            }
            
        </style>
    
    </head>
<body>
<?php
include("connect.php" );
if (isset($_POST["bouton"]))
{
	
	extract($_POST);
    
	$query = "update produit set LibProduit='$LibProduit', PrixProduit='$PrixProduit', DescriptionProduit='$DescriptionProduit', PourcentageAlcoolProduit='$PourcentageAlcoolProduit', NbreCentilitreProduit='$NbreCentilitreProduit', AgeProduit='$AgeProduit', DegustationProduit='$DegustationProduit', StructureProduit='$StructureProduit', StockProduit='$StockProduit', OrigineProduit='$OrigineProduit', RegionProduit='$RegionProduit', DistillerieProduit='$DistillerieProduit', SuggestionProduit='$SuggestionProduit', ProduitPhare='$ProduitPhare', ProduitPanier='$ProduitPanier', IdCategorie='$IdCategorie' where IdProduit='$IdProduit'" ;
    
$result = mysqli_query($link, $query) or die("Error in the BDD" . mysqli_error($link));
echo "modification effectuée";

}

$id=$_GET["id"];
$query = "SELECT * FROM produit where IdProduit='$id'" ;
    
$result = mysqli_query($link, $query) or die("Error in the BDD" . mysqli_error($link));

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$row['DescriptionProduit'] = mysqli_real_escape_string($link, $row['DescriptionProduit']);
$row['SuggestionProduit'] = mysqli_real_escape_string($link, $row['SuggestionProduit']);
    
?>

<form method="post" action="">

Nom du produit : <input type="text" name="LibProduit" value ="<?php echo $row['LibProduit']; ?>" ><br>
Prix : <input type="text" name="PrixProduit" value ="<?php echo $row['PrixProduit'] ?>" ><br>
Description du Produit : <input type="text" name="DescriptionProduit" value ="<?php echo $row['DescriptionProduit'] ?>" ><br>
Pourcentage d'Alccol du Produit : <input type="text" name="PourcentageAlcoolProduit" value ="<?php echo $row['PourcentageAlcoolProduit'] ?>" ><br>
Nombre de centilitre du Produit : <input type="text" name="NbreCentilitreProduit" value ="<?php echo $row['NbreCentilitreProduit'] ?>" ><br>
Age du Produit : <input type="text" name="AgeProduit" value ="<?php echo $row['AgeProduit'] ?>" ><br>
Note de dégustation du Produit : <input type="text" name="DegustationProduit" value ="<?php echo $row['DegustationProduit'] ?>" ><br>
Stucture du Produit : <input type="text" name="StructureProduit" value ="<?php echo $row['StructureProduit'] ?>" ><br>
Stock du Produit : <input type="text" name="StockProduit" value ="<?php echo $row['StockProduit'] ?>" ><br>
Origine du Produit : <input type="text" name="OrigineProduit" value ="<?php echo $row['OrigineProduit'] ?>" ><br>
Région du Produit : <input type="text" name="RegionProduit" value ="<?php echo $row['RegionProduit'] ?>" ><br>
Distillerie du Produit : <input type="text" name="DistillerieProduit" value ="<?php echo $row['DistillerieProduit'] ?>" ><br>
Suggestion du Produit : <input type="text" name="SuggestionProduit" value ="<?php echo $row['SuggestionProduit'] ?>" ><br>
Produit Phare (1=oui et 0=non) : <input type="text" name="ProduitPhare" value ="<?php echo $row['ProduitPhare'] ?>" ><br>
Produit Panier (1=oui et 0=non) : <input type="text" name="ProduitPanier" value ="<?php echo $row['ProduitPanier'] ?>" ><br>
Id Catégorie (1,2 ou 3) : <input type="text" name="IdCategorie" value ="<?php echo $row['IdCategorie'] ?>" ><br>
<input type="hidden" name="IdProduit" value ="<?php echo $row['IdProduit'] ?>" ><br>

<input type="submit" value="modifier" name="bouton">
</form>
<a href="modifier_supprimerProduitBO.php"> Liste des produits</a>
</body>
</html>