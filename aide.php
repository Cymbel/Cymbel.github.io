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
		<title>Aide</title>
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
                    
                <h1>Aide</h1>
                <ul class="accordion"> 
                    <li>
                        <a>Comment passer commande ?</a>
                        <p>Pour passer commande, rendez-vous dans votre panier, en haut à droite de la page. Vérifiez le contenu de votre panier, puis cliquez sur le bouton « Passer commande ».<br>
                        Si vous possédez déjà un compte, connectez vous, sinon entrez vos information de facturation et de livraison.<br> 
                        Cliquez ensuite sur « Procéder au paiement », et choisissez et validez votre moyen de paiement.<br>
                        Enfin, cliquez sur « Valider la commande »  pour confirmer votre paiement et votre commande. Vous serez redirigé vers votre confirmation de commande, dont le contenu vous sera également envoyé par email.</p>
                    </li>
                    <li>
                        <a>Comment accéder à mon panier ?</a>
                        <p>Pour accéder à votre panier, cliquez sur l’icône Panier située en haut à droite sur la page.</p>
                    </li>
                    <li>
                        <a>Comment créer un compte ?</a>
                        <p>Pour créer un compte, rendez-vous sur « Votre Compte » en haut à droite de la page. Remplissez le formulaire et cliquez sur le bouton « Créer un compte » pour confirmer.</p>
                    </li>
                    <li>
                        <a>Comment suivre ma commande ?</a>
                        <p>Pour suivre votre commande vous devez vous rendre sur la page « Votre Compte » en cliquant sur l’icône située en haut à droite. Une fois connecté, vous pouvez visualiser votre commande sur votre espace client, dans l’espace « mes commandes » .</p>
                    </li>
                    <li>
                        <a>Comment modifier ou annuler ma commande ?</a>
                        <p>Une fois votre commande validée, elle ne peut être modifiée ou annulée depuis le site. 
                            Contactez-nous rapidement par email à l’adresse apples@ciderbrandy.co.uk ou par téléphone au +44 (0) 1460 240 782 pour annuler ou modifier votre commande.<br>
                            Votre commande ne pourra ni être modifiée, ni annulée après son expédition.</p>
                    </li>
                    <li>
                        <a>Je n’ai pas reçu mon colis, que faire?</a>
                        <p>En cas de non réception de votre commande, veuillez nous contacter par email à l’adresse suivante : apples@ciderbrandy.co.uk ou par téléphone au : +44 (0) 1460 240 782.</p>
                    </li>
                    <li>
                        <a>Retours et remboursements</a>
                        <p>Vous disposez de 14 jours à compter de la date d’expédition de votre commande pour être remboursé. Pour pouvoir être remboursé, les produits doivent être renvoyés dans leur ensemble, dans leur emballage d'origine complet et intact, et en parfait état de revente.<br>
                        Tout produit qui aura été abîmé, ou dont l'emballage d'origine aura été détérioré, ne sera ni remboursé ni échangé. </p>
                    </li>
                    <li>
                        <a>Je n’ai pas reçu mon colis, que faire?</a>
                        <p>En cas de non réception de votre commande, veuillez nous contacter par email à l’adresse suivante : apples@ciderbrandy.co.uk ou par téléphone au : +44 (0) 1460 240 782.</p>
                    </li>
                    <li>
                        <a>Livraison en point de relais</a>
                        <p>Pour pouvoir bénéficier d’un retrait de votre commande en point de relais, au moment du passage de votre commande, il suffit juste d’introduire le code postal de votre ville, de cliquer ensuite sur « Rechercher » et de choisir dans la liste des points relais affichés celui qui vous convient. Ensuite, vous devez confirmer en cliquant sur le bouton « Valider ».</p>
                    </li>
                    <li>
                        <a>Quels sont les moyens de paiement ?</a>
                        <p>Vous avez le choix entre les moyens de paiement suivants : la carte bancaire (MasterCard, Visa) et PayPal. Choisissez au moment du paiement celui qui vous convient.</p>
                    </li>
                </ul> <!-- / accordion -->
                    


    <script src="js/index.js"></script>
                </div>
                
            </div>
        </main>
        
        <?php include("footer.php"); ?>
        
	</body>
</html>