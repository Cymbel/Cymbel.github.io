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
		<link type="text/css" rel="stylesheet" href="style/notre-entreprise.css">
		<title>Somerset Cider Brandy</title>
		<meta name="description" content="" />
		<link rel="icon" href="" />
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="style/bootstrap.css" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width,initial-scale=1" />
	    <link rel="stylesheet" href="style/Index2.css" />
        <link rel="stylesheet" href="style/header.css" />
        <script src="https://use.fontawesome.com/81aa6d224e.js"></script>
        <link rel="stylesheet" href="style/footer.css" />
        <style>
            main p {
                text-align: center;
            }
            .wrapperEntete {
                margin: 78px 0;
            }
        </style>
	</head>
	<body>
		
        <?php include("header.php"); ?>
        
        <main>
            <div class="wrapperEntete">
                <p>Les données ont été modifiées avec succès.</p>
                <p>Vous pouvez retouner à votre <a href="page_membre.php">compte</a>.</p>
            </div>
           
        </main>
        
        <?php include("footer.php"); ?>
        
	</body>
</html>