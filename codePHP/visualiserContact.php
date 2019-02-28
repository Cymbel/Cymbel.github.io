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
		<link type="text/css" rel="stylesheet" href="../style/monCompte.css">
		<title>Somerset Cider Brandy</title>
		<meta name="description" content="" />
        <style>
            #commande p {
                width: 19%;
            }
            #commande {
                margin: 0 10px;
            }
            #valeur p {
                margin: 10px 2px;
            }
            main > p {
                text-align: center;
            }
        </style>
        
	</head>
	<body>

        <?php include("connect.php")?>
        
        <main> 
            <?php
    
            if (isset($_SESSION['admin']) AND($_SESSION['admin'] == true)) {

                $id=$_SESSION["ID"];
                $query = "SELECT * FROM contact" ;
                $result = mysqli_query($link, $query) or die("Error in the BDD" . mysqli_error($link));
            
            echo "<h2>Mes messages</h2>
            <div id='commande'>
                <div id='titre'>
                    <p>Nom</p>
                    <p>Prénom</p>
                    <p>Email</p>
                    <p>Objet</p>
                    <p>Message</p>
                </div>";

                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	                echo "<div id='valeur'>";
                        echo "<p>".$row['NomContact']."</p>";
                        echo "<p>".$row['PrénomContact']."</p>";
                        echo "<p>".$row['EmailContact']."</p>";
                        echo "<p>".$row['ObjetContact']."</p>";
                        echo "<p>".$row['MessageContact']."</p>";
                    echo "</div>";
                }
                echo "</div>";
                mysqli_close($link);
                
                echo "<p><a href='../backOffice.php'>Retourner au menu principal</a></p>";
                
            } else {
                echo "<p>Vous devez avoir les privilèges d'un administrateur pour accéder à cette page.</p>";
                echo "<p><a href='../index.php'>Retour au site</a></p>";
            }    
                
                ?>
                
            </main>
        </body>
    </html>