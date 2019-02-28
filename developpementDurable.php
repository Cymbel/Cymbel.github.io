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
		<link type="text/css" rel="stylesheet" href="style/developpementDurable.css">
		<title>Développement durable</title>
		<meta name="description" content="" />
		<link rel="icon" href="" />
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="style/bootstrap.css" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width,initial-scale=1" />
        <link rel="stylesheet" href="style/header.css" />
        <script src="https://use.fontawesome.com/81aa6d224e.js"></script>
        <link rel="stylesheet" href="style/footer.css" />
	</head>
	<body>
		
        <?php include("header.php"); ?>
        
        <main>
            <h1>Développement Durable</h1>
            <div class="imageEtTexte">
            <p>Somerset Cider Brandy s’engage à travers ses actions à préserver, améliorer et valoriser l’environnement.</p>
                <div class="texte">
                    <h2>Dimension environnementale</h2>
                    <p class="paragraphe">Pour Somerset Cider Brandy, les abeilles ont un rôle très important pour l’environnement, raison pour laquelle nous n’utilisons pas d’insecticides afin de les protéger et sauver.</p> 
                    <p>Notre entreprise fait partie du Slow Food Movement. Cela est d’après nous plus important pour notre production artisanale que le plan de production biologique actuel.</p> 
                    <p>A présent, ‘biologique’ implique souvent l’idée de grandes entreprises approvisionnant les supermarchés avec des produits qui proviennent de l’autre côté de la planète au prix d’une grande quantité de pollution.</p>
                </div>
            </div>
           
        </main>
        
        <?php include("footer.php"); ?>
        
	</body>
</html>