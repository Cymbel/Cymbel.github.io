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
		<title>CGV</title>
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
                    
                <h1>CGV</h1>
                <ul class="accordion"> 
                    <li>
                        <a>Article 1 : Clause générale</a>
                        <p>Les présentes conditions générales expriment l'intégralité des obligations des parties. L’acheteur sans réserve l'intégralité des dispositions prévues dans ces conditions générales. Aucune condition générale ou spécifique figurant dans les documents envoyés ou remis par le consommateur ne pourra === s'intégrer aux présentes, dès lors que ces documents seraient incompatibles avec ces conditions générales.</p>
                    </li>
                    <li>
                        <a>Article 2 : Objet</a>
                        <p>Les présentes conditions générales ont pour objet de définir les droits et obligations des parties dans le cadre de la vente en ligne de biens et services proposés par The Somerset Cider Brandy Company sur le site www.somerset-cider-brandy.fr au consommateur.</p>
                    </li>
                    <li>
                        <a>Article 3 : Protection des mineurs</a>
                        <p>Conformément à l'article L. 3342-1 du Code de la Santé Publique qui stipule que la vente d'alcool à des mineurs est interdite, l'acheteur s'engage, en remplissant le bon de commande, à avoir dix-huit ans révolus à la date de la commande.</p>
                    </li>
                    <li>
                        <a>Article 4 : Informations sur les produits</a>
                        <p>La société The Somerset Cider Brandy Company présente sur son site internet  www.somerset-cider-brandy.fr les produits à vendre avec les caractéristiques nécessaires qui permettent de respecter l'Article L 111-1 du Code de la consommation, qui prévoit la possibilité pour le consommateur potentiel de connaître avant la prise de commande définitive les caractéristiques essentielles des produits qu'il souhaite acheter.<br>
                        Les offres présentées par la société Distillerie Warenghem ne sont valables que dans la limite des stocks disponibles.</p>
                    </li>
                    <li>
                        <a>Article 5 : Commande</a>
                        <p>Toute commande devra être effectuée par l'intermédiaire de la Boutique. La commande n'est ferme que lorsque l'acheteur a successivement rempli les informations obligatoires de livraison et de paiement.<br><br>
                        La commande est confirmée par The Somerset Cider Brandy Company par l'envoi d'un email à l'acheteur.<br><br>
                        En cas de non-respect des présentes Conditions par l'acheteur, The Somerset Cider Brandy Company se réserve le droit d'annuler tout ou partie des commandes en cours ou de suspendre les livraisons de marchandises.</p>
                    </li>
                    <li>
                        <a>Article 6: Prix</a>
                        <p>The Somerset Cider Brandy Company se réserve le droit de modifier ses prix à tout moment mais s'engage à appliquer les tarifs en vigueur indiqués au moment de la commande, sous réserve de disponibilité à cette date.<br><br> 
                        Les prix sont indiqués en euros. Ils ne tiennent pas compte des frais de livraison, facturés en supplément, et indiqués avant la validation de la commande. Les prix tiennent compte de la T.V.A. applicable au jour de la commande et tout changement du taux applicable T.V.A. sera automatiquement répercuté sur le prix des produits de la boutique en ligne.<br><br>
                        Le paiement de la totalité du prix doit être réalisé lors de la commande. À aucun moment, les sommes versées ne pourront être considérées comme des arrhes ou des acomptes.</p>
                    </li>
                    <li>
                        <a>Article 7: Paiement</a>
                        <p>L’acheteur dispose des moyens de paiement suivants : Carte bancaire, Paypal.<br><br>
                        Tous les produits vendus par The Somerset Cider Brandy Company contiennent de l’alcool. En ce sens, aucun produit ne sera vendu à crédit. L’acheteur dispose de 48h pour régler sa commande. Passé ce délais, la commande sera annulée.</p>
                    </li>
                    <li>
                        <a>Article 8 : Modalités de livraison</a>
                        <p>Les produits commandés sont directement depuis le siège de la société au Royaume-Uni. Le numéro de suivi de l’achat sera communiqué à l’acheteur par email, et sera disponible depuis son compte client s’il en a un.</p>
                    </li>
                    <li>
                        <a>Article 9 : Erreur et Problèmes de livraison</a>
                        <p>Si le colis est endommagé lors du transport, il est à la charge de l’acheteur de le refuser, ou d’indiquer de manière précise les dommages présents sur le bon de livraison. La société The Somerset Cider Brandy Company ne saurait être tenue responsable de tout produit endommagé lors de la livraison.<br> 
                        En cas d’erreur de livraison, ou de dommages qui ne découleraient pas du transport, l’acheteur est tenu de prévenir la société The Somerset Cider Brandy Company sous 48h ouvrés.</p>
                    </li>
                    <li>
                        <a>Article 10 : Droit de rétractation</a>
                        <p>Conformément au Code de la Consommation, le consommateur dispose d'un délai de 14 jours ouvrables à compter de la date de livraison de sa commande, pour retourner tout article ne lui convenant pas et demander l'échange ou le remboursement sans pénalité, à l'exception des frais de retour.<br>
                        Seuls seront repris les produits renvoyés dans leur ensemble, dans leur emballage d'origine complet et intact, et en parfait état de revente. Tout produit qui aura été abîmé, ou dont l'emballage d'origine aura été détérioré, ne sera ni remboursé ni échangé.<br>
                        Ce droit de rétractation s'exerce sans pénalité, étant entendu que les frais de retour sont à la charge du consommateur. Dans l'hypothèse de l'exercice du droit de rétractation, le consommateur sera remboursé du coût de sa commande hors frais de livraison, dans un délais de 14 jours ouvrés à compté de la réception de la marchandise retournée.</p>
                    </li>
                    <li>
                        <a>Article 11 : Loi applicable</a>
                        <p>Les présentes conditions générales sont soumises à l'application du droit français, à l'exclusion des dispositions de la Convention de Vienne. Il en est ainsi pour les règles de fonds comme pour les règles de forme. En cas de litige ou de réclamation, le consommateur s'adressera en priorité à la société The Somerset Cider Brandy Company pour obtenir une solution amiable. Dans un second temps et en cas de recours, le consommateur pourra déposer une réclamation auprès de The Somerset Cider Brandy Company, via sa boîte de dialogue dédiée.<br>
                        S'agissant de ventes aux particuliers, à défaut d'accord amiable entre les parties, il sera fait application des directives et règlements de l'Union Européenne notamment de la Convention de Bruxelles.</p>
                    </li>
                    <li>
                        <a>Article 12 : Informatique et Libertés</a>
                        <p>Les informations qui sont demandées au consommateur sont nécessaires au traitement de sa commande et pourront être communiquées aux partenaires contractuels de la société The Somerset Cider Brandy Company intervenant dans le cadre de l'exécution de cette commande. Le consommateur peut écrire à la société The Somerset Cider Brandy Company pour s'opposer à une telle communication, ou pour exercer ses droits d'accès, de rectification à l'égard des informations le concernant et figurant dans les fichiers de la société The Somerset Cider Brandy Company dans les conditions prévues par la loi du 6 janvier 1978.).</p>
                    </li>
                    <li>
                        <a>Article 13 : Propriété intellectuelle</a>
                        <p>Tous les éléments du site www.somerset-cider-brandy.fr, qu'ils soient visuels ou sonores, y compris la technologie sous-jacente, sont protégés par le droit d'auteur, des marques ou des brevets. Ils sont la propriété exclusive de la société The Somerset Cider Brandy Company ou des personnes morales ou physiques détenteurs de leurs droits, et ne peuvent être reproduits, sous quelque forme que ce soit, sans une autorisation écrite explicite de la société The Somerset Cider Brandy Company.</p>
                    </li>
                    <li>
                        <a>Article 14 : Coordonnées de la société</a>
                        <p>The Somerset Cider Brandy Company Limited<br>
                        Pass Vale Farm<br>
                        Burrow Hill<br>
                        Kingsbury Episcopi<br>
                        Martock<br>
                        Somerset TA12 6BU<br><br>    
                        Tel:  +44 (0) 1460 240 782<br>
                        Fax: +44 (0) 1460 249 220<br>
                        Email : apples@ciderbrandy.co.uk</p>
                    </li>
                </ul> <!-- / accordion -->
                    


    <script src="js/index.js"></script>
                </div>
                
            </div>
        </main>
        
        <?php include("footer.php"); ?>
        
	</body>
</html>