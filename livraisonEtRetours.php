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
		<title>Livraisons et retours</title>
		<meta name="description" content="" />
		<link rel="icon" href="" />
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>       
        <script src="https://use.fontawesome.com/81aa6d224e.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width,initial-scale=1" />
	    <link rel="stylesheet" href="style/aide.css" />
        <link rel="stylesheet" href="style/bootstrap.css" />
        <link rel="stylesheet" href="style/header.css" />
        <link rel="stylesheet" href="style/footer.css" />
          <script src='js/jquery.min.js'></script>
 
        <style>
        /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
            body {
              font-family: Lato;
              font-size: 13px;
              font-size: 0.8125rem;
              font-weight: 300;
            }

            h1 {
                color: #BC8B4F;
                font-size: 26px;
                margin: 24px 0 24px 24px;
                font-family: Lato;
            }
            #accordeon {
              width: 614px;
              margin: 0 24px 0 auto;
                display: inline-block;
            }

            .accordion {
              width: 614px;
              margin: 0 24px 0 auto;
              border-top: 1px solid #BC8B4F;
              display: inline-block;
            }
            .accordion li {
              border-bottom: 1px solid #BC8B4F;
              position: relative;
            }
            .accordion li p {
              display: none;
              padding: 10px 25px 30px;
              color: #4d4d4d;
            }
            .accordion a {
              width: 100%;
              display: block;
              cursor: pointer;
              font-weight: 600;
              line-height: 3;
              font-size: 14px;
              font-size: 0.875rem;
              text-indent: 15px;
              user-select: none;
                color: #BC8B4F;
            }
            .accordion a:after {
              width: 8px;
              height: 8px;
              border-right: 1px solid #BC8B4F;
              border-bottom: 1px solid #BC8B4F;
              position: absolute;
              right: 10px;
              content: " ";
              top: 17px;
              transform: rotate(-45deg);
              -webkit-transition: all 0.2s ease-in-out;
              -moz-transition: all 0.2s ease-in-out;
              transition: all 0.2s ease-in-out;
            }
            .accordion p {
              font-size: 14px;
              line-height: 2;
              padding: 10px;
            }

            a.active:after {
              transform: rotate(45deg);
              -webkit-transition: all 0.2s ease-in-out;
              -moz-transition: all 0.2s ease-in-out;
              transition: all 0.2s ease-in-out;
            }
            @media screen and (max-width:960px){
            #accordeon {
                      width: 100%;
                      margin: 0 0 0 0;
                      display: inline;
                    }
                    .accordion {
                      width: 100%;
                      margin: 0 0 0 0;
                      border-top: 1px solid #BC8B4F;
                      display: block;
                    }
            }
            html, body, span, applet, object, iframe, h2, h3, h4, h5, h6, blockquote, pre, abbr, acronym, address, big, cite, code,
            del, dfn, em, ins, kbd, q, s, samp,
            small, strike, strong, sub, sup, tt, var,
            b, u, i, center,
            dl, dt, dd, ol, ul, li,
            fieldset, form, label, legend,
            table, caption, tbody, tfoot, thead, tr, th, td,
            article, aside, canvas, details, embed, 
            figure, figcaption, hgroup, 
            menu, nav, output, ruby, section, summary,
            time, mark, audio, video {
                margin: 0;
                padding: 0;
                border: 0;
                font-size: 100%;
                vertical-align: baseline;
            }
            /* HTML5 display-role reset for older browsers */
            article, aside, details, figcaption, figure, 
            footer, header, hgroup, menu, nav, section {
                display: block;
            }
            
            ol, ul {
                list-style: none;
            }
            blockquote, q {
                quotes: none;
            }
            blockquote:before, blockquote:after,
            q:before, q:after {
                content: '';
                content: none;
            }
            table {
                border-collapse: collapse;
                border-spacing: 0;
            }

        </style>

	</head>
	<body>         
        
		<?php include("header.php"); ?>
        
        <main>
            <div class="wrapperEntete">
                <div id="menuAide">
                    <ul>
                        <li><a href="aide.php">Aide</a></li>
                        <li><a href="livraisonEtRetours.php">Livraison et retours</a></li>
                        <li><a href="paiementsSecurises.php">Paiments sécurisés</a></li>
                        <li><a href="mentionsLegales.php">Mentions légales</a></li>
                        <li><a href="CGV.php">CGV</a></li>
                        <li><a href="planDuSite.php">Plan du site</a></li>
                    </ul> 
                </div>
                
                <div id="accordeon">
                    
                <h1>Livraison et retours</h1>
                <ul class="accordion"> 
                    <li>
                        <a>Livraisons</a>
                        <p>Vos produits sont expédiés directement depuis notre ferme dans le Somerset. Ils seront expédié avec l’entreprise Parcelforce.<br>
                            Les frais de livraison sont les suivant;<br>
                            Livraison standard 5 – 7 jours : 10€<br>
                            Livraison rapide 4 jours : 20€<br><br>
                            <b>Livraison standard offerte à partir de 120€.</b></p>
                    </li>
                    <li>
                        <a>Retours</a>
                        <p>Pour pouvoir être remboursé, les produits doivent être renvoyés dans leur ensemble, dans leur emballage d'origine complet et intact, et en parfait état de revente.<br>
                            Tout produit qui aura été abîmé, ou dont l'emballage d'origine aura été détérioré, ne sera ni remboursé ni échangé.<br><br> 
                            Les frais de retours sont à votre charge, sauf en cas d’erreur de notre part dans la livraison de vos produits.<br>
                            Vous pouvez retourner vos produits à l’adresse suivante:<br>
                            Pass Vale Farm<br>
                            Burrow Hill<br>
                            Kingsbury Episcopi<br>
                            Martock<br>
                            Somerset TA12 6BU<br><br>
                            Nous vous conseillons d’opter pour un envoi suivi. Si votre colis se perd, il ne vous sera pas remboursé de notre part, et vous serez uniquement redevable des indemnités éventuelles offertes par le transporteur.<br>
                            <b>Tout produit ouvert ou endommagé ne peut être retourné, et ne vous sera pas remboursé.</b></p>
                    </li>
                </ul> <!-- / accordion -->
                    


    <script src="js/index.js"></script>
                </div>
                
            </div>
        </main>
        
        <?php include("footer.php"); ?>
        
	</body>
</html>