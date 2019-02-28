
        <header>
            
            <?php
                if (isset($_SESSION['Email'])) {
                    if (isset($_SESSION['admin']) AND($_SESSION['admin'] == true)) { 
                        echo "<div id='admin'>";    
                        echo "<a href='backOffice.php'>Accès au back office</a>";
                        echo "</div>";
                    }
                echo"<div class='wrapperLogo1'>";
                echo"<div class='logo1'>
                    <div class='panier'>
                        <p><a href=''><img src='images/header/panier.png' alt='panier'></a> - Panier</p>
                    </div>
                    <div class='compte'>
                        <p><a href='page_membre.php'><img src='images/header/compte.png' alt='compte'> - Votre compte</a></p>
                    </div>
                    <div class='compte'>
                        <p><a href='logout.php'><i id='deco' class='fa fa-power-off fa-3x' aria-hidden='true'></i> - Déconnexion</a></p>
                    </div>
                </div>
            </div>";
            echo"<div class='wrapperLogo2'>";
            echo"<div class='logo1'>
                    <div class='panier'>
                        <p><a href=''><img src='images/header/panier.png' alt='panier'></a></p>
                    </div>
                    <div class='compte'>
                        <p><a href='page_membre.php'><img src='images/header/compte.png' alt='compte'></a></p>
                    </div>
                    <div class='compte'>
                        <p><a href='logout.php'><i id='deco' class='fa fa-power-off fa-3x' aria-hidden='true'></i></a></p>
                    </div>
                </div>
            </div>";
            
                }
                else {
                    echo"<div class='wrapperLogo'>
                <div class='logo'>
                    <div class='panier'>
                        <p><a href=''><img src='images/header/panier.png' alt='panier'></a> - Panier</p>
                    </div>
                    <div class='compte'>
                        <p><a href='connexion.php'><img src='images/header/compte.png' alt='compte'> - Connexion</a></p>
                    </div>
                </div>
            </div>";
                }
            ?>
            <div class="border"></div>
            <div class="wrapperImg">
                <div id="conteneurHeader"><a id="top"></a>
                    <a href="index.php"><img src="images/header/logo.png" alt="Fronton"></a>
                </div> 
            </div>
            <div class="navCent">
                <nav id="nav" role="navigation">
                    <a href="#nav" title="Show navigation">Show navigation</a>
                    <a href="#" title="Hide navigation">Hide navigation</a>
                    <ul>
                        <li id="menuHome"><a href="index.php"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a></li>
                        <li class="menuSomerset">
                            <a href="" aria-haspopup="true"><span>Somerset Cider Brandy</span></a>
                            <ul>
                                <li class="menuNotreEntreprise"><a href="notre-entreprise.php">Notre entreprise</a></li>
                                <li class="menuDistillerie"><a href="distillerie.php">Distillerie</a></li>
                                <li class="menuDeveloppementDurable"><a href="developpementDurable.php">Développement durable</a></li>
                            </ul>
                        </li>
                        <li class="menuFerme"><a href="ferme.php">Ferme Burrow Hill</a></li>
                        <li class="menuBoutique">
                            <a href="" aria-haspopup="true"><span>Boutique</span></a>
                            <ul>
                                <li class="menuEauxDeVie"><a href="eaux-de-vie.php">Eaux-de-vie</a></li>
                                <li class="menuPaniersSomerset"><a href="paniers-somerset.php">Paniers Somerset</a></li>
                                <li class="menuCidres"><a href="cidres.php">Cidres</a></li>
                            </ul>
                        </li>
                        <li class="menuContact"><a href="contact.php">Contact</a></li>
                        <li class="searchBar">
                            <div class="col-lg-12">
                            <form class="navbar-form" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="q">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </div>
                            </form>
                            </div>
                        </li>
                    </ul>
                </nav>    
                <script src="../jquery.min.js"></script>
                <script src="doubletaptogo.js"></script>
                <script>
                    $( function()
                    {
                        $( '#nav li:has(ul)' ).doubleTapToGo();
                    });
                </script>

                <script src="../main.js"></script>
                <script>var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-7572727-1']); _gaq.push(['_trackPageview']); (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s); })();</script>
            </div>
        </header>
