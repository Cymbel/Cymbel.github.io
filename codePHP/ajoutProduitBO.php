<html>
    <body>
        <?php
            if(isset($_POST["bouton"])) {
                $IdProduit=$_POST["IdProduit"];
                $LibProduit=$_POST["LibProduit"];
                $PrixProduit=$_POST["PrixProduit"];
                $PhotoProduit=$_POST["PhotoProduit"];
                $DescriptionProduit=$_POST["DescriptionProduit"];
                $PourcentageAlcoolProduit=$_POST["PourcentageAlcoolProduit"];
                $NbreCentilitreProduit=$_POST["NbreCentilitreProduit"];
                $AgeProduit=$_POST["AgeProduit"];
                $DegustationProduit=$_POST["DegustationProduit"];
                $StructureProduit=$_POST["StructureProduit"];
                $StockProduit=$_POST["StockProduit"];
                $OrigineProduit=$_POST["OrigineProduit"];
                $RegionProduit=$_POST["RegionProduit"];
                $DistillerieProduit=$_POST["DistillerieProduit"];
                $SuggestionProduit=$_POST["SuggestionProduit"];
                $ProduitPhare=$_POST["ProduitPhare"];
                $ProduitPanier=$_POST["ProduitPanier"];
                $IdCategorie=$_POST["IdCategorie"];
                
                include("connect.php");
                
            $query = "insert into produit (IdProduit, LibProduit, PrixProduit, PhotoProduit, DescriptionProduit, PourcentageAlcoolProduit, NbreCentilitreProduit, AgeProduit, DegustationProduit, StructureProduit, StockProduit, OrigineProduit, RegionProduit, DistillerieProduit, SuggestionProduit, ProduitPhare, ProduitPanier, IdCategorie)
                values
            ('$IdProduit','$LibProduit', '$PrixProduit', '$PhotoProduit', '$DescriptionProduit', '$PourcentageAlcoolProduit', '$NbreCentilitreProduit','$AgeProduit', '$DegustationProduit', '$StructureProduit','$StockProduit', '$OrigineProduit', '$RegionProduit','$DistillerieProduit', '$SuggestionProduit', '$ProduitPhare','$ProduitPanier','$IdCategorie')";
            
                $result = mysqli_query($link,$query) or die ("Error in the BDD".mysqli_error($link));
                
                echo "Le produit a bien été ajouté<br>";
                echo "<a href='ajouterProduitBO'>Retourner au formulaire d'ajout des produit</a>";
            } else {
                echo "<p>Vous devez avoir les privilèges d'un administrateur pour accéder à cette page.</p>";
                echo "<p><a href='../index.php'>Retour au site</a></p>";
            }
            
        ?>
    </body>
</html>