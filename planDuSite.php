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
		<title>Plan du site</title>
		<meta name="description" content="" />
		<link rel="icon" href="" />
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>       
        <script src="https://use.fontawesome.com/81aa6d224e.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width,initial-scale=1" />
	    <link rel="stylesheet" href="style/planDuSite.css" />
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
            ul > li > p > a {
                margin: 10px 30px;
                color: #4d4d4d;
                font-weight: normal;
            }
            ul > li > a {
                color: #BC8B4F;
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
                    
                <h1>Plan du site</h1>
                <ul> 
                    <li>
                        <a>Somerset Cider Brandy</a>
                        <p><a href="notre-entreprise.php">Notre entreprise</a><br>
                        <a href="distillerie.php">Distillerie</a><br>
                        <a href=developpementDurable.php"">Développement durable</a></p>
                        
                    </li>
                    <li>
                        <a>Notre ferme</a>
                        <p><a href="ferme.php">Ferme Burrow Hill</a></p>
                    </li>
                    <li>
                        <a>Boutique</a>
                        <p><a href="eaux-de-vie.php">Eaux-de-vie</a><br>
                        <a href="paniers-somerset.php">Paniers</a><br>
                        <a href="cidres.php">Cidres</a></p>
                    </li>
                    <li>
                        <a>Nous contacter</a>
                        <p><a href="contact.php">Contact</a></p>
                    </li>
                    <li>
                        <a>Aide</a>
                        <p><a href="livraisonEtRetours.php">Livraison et retours</a><br>
                        <a href="paiementsSecurises.php">Paiments sécurisés</a><br>
                        <a href="aide.php">Aide</a><br>
                        <a href="mentionsLegales.php">Mentions légales</a><br>
                        <a href=CGV.php"">CGV</a><br>
                        <a href="planDuSite.php">Plan du site</a></p>
                    </li>
                    <li>
                        <a>Espace Client</a>
                        <p><a href="connexion.php">Connexion</a><br>
                        <a href="page_membre.php">Mon compte</a><br>
                        <a href="">Panier</a></p>
                    </li>      
                </ul> <!-- / accordion -->
                    
                </div>
                
            </div>
        </main>
        
        <?php include("footer.php"); ?>
        
	</body>
</html>