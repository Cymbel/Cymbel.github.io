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
		<title>Mon compte</title>
		<meta name="description" content="" />
		<link rel="icon" href="" />
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>       
        <script src="https://use.fontawesome.com/81aa6d224e.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width,initial-scale=1" />
	    <link rel="stylesheet" href="style/monCompte.css" />
        <link rel="stylesheet" href="style/bootstrap.css" />
        <link rel="stylesheet" href="style/header.css" />
        <link rel="stylesheet" href="style/footer.css" />
        <script src="js/jquery.min.js"></script>
        
	</head>
	<body>
        
        <?php include("header.php")?>
        <?php include("connect.php")?>
        
        <main>    
        <?php
            $id=$_SESSION["ID"];
            $query = "SELECT * FROM client where IdClient='$id'" ;
            $result = mysqli_query($link, $query) or die("Error in the BDD" . mysqli_error($link));
            $row =mysqli_fetch_array($result, MYSQLI_ASSOC);
        ?>
            
        <div class='wrapperEntete'>
            <h1>Mon compte</h1>
            <div id='bloc1'>
                <form method='post' action='changerIdentifiants.php'>
                    <div>
                        <p>Identifiants</p>
                        <div class='submitDiv'>
                            <input id='submit' type='submit' value='Modifier' name='bouton' >
                       </div>
                    </div>
                        <div class='champ'>
                            <label for='email'>Email : </label>
                            <input type='text' name ='EmailClient' value="<?php echo $row['EmailClient'] ?>">
                       </div>
                        <div class='champ'>
                            <label for='mdp'>Mot de passe : </label>
                            <input type='password' name ='MdpClient' value="<?php echo $row['MdpClient'] ?>">
                        </div>
                    <div>
                        <div class='champ'>
                            <label for="passCheck">Confirmez Mot de Passe : </label>
                            <input type="password" name ="passCheck">
                        </div>
                    </div>
                </form>
            </div>
            <div id='bloc2'>
                <form method='post' action='changerAdresse.php'>
                    <div>
                         <p>Adresse et facturation</p>
                         <div class='submitDiv'>
                             <input id='submit' type='submit' value='Modifier' name='bouton'>
                         </div>
                     </div>
                     <div class='champ'>
                         <label for='NomClient'>Nom : </label>
                         <input type='text' name ='NomClient' value="<?php echo $row['NomClient'] ?>">
                     </div>
                     <div class='champ'>
                         <label for='PrenomClient'>Prénom : </label>
                         <input type='text' name ='PrenomClient' value="<?php echo $row['PrenomClient'] ?>">
                     </div>
                     <div class='champ'>
                         <label for='AdresseClient'>Adresse : </label>
                         <input type='text' name ='AdresseClient' value="<?php echo $row['AdresseClient'] ?>">
                     </div>
                     <div class='champ'>
                         <label for='ComplementAdresseClient'>Complément d&apos;adresse : </label>
                         <input type='text' name ='ComplementAdresseClient' value="<?php echo $row['ComplementAdresseClient'] ?>">
                     </div>
                     <div class='champ'>
                         <label for='CPClient'>Code postal : </label>
                         <input type='text' name ='CPClient' value="<?php echo $row['CPClient'] ?>">
                     </div>
                     <div class='champ'>
                         <label for='VilleClient'>Ville : </label>
                         <input type='text' name ='VilleClient' value="<?php echo $row['VilleClient'] ?>">
                     </div>
                 </form>
             </div>
            
            <?php

                $id=$_SESSION["ID"];
                $query = "SELECT * FROM client, commande where (client.IdClient=commande.IdClient) AND client.IdClient='$id'" ;
                $result = mysqli_query($link, $query) or die("Error in the BDD" . mysqli_error($link));
            ?>
            
            <h2>Mes commandes</h2>
            <div id="commande">
                <div id="titre">
                    <p>Numéro de commande</p>
                    <p>Date</p>
                    <p>Statut</p>
                    <p>Facture</p>
                </div>

                <?php
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	                echo "<div id='valeur'>";
                        echo "<p>".$row['IdCommande']."</p>";
                        echo "<p>".$row['DateCommande']."</p>";
                        echo "<p>".$row['StatutCommande']."</p>";
                        echo "<p><a href='commande/pdf/".$row['LienCommande']."'>Lien</a></p>";
                    echo "</div>";
                }
                echo "</div>";
                mysqli_close($link);
        ?>
            
        </main>
        
        <?php include("footer.php")?>
        
	</body>
</html>