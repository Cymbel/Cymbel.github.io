<html>
    <body>
        <?php
            if(isset($_POST["bouton"])) {
                $nom=$_POST["nom"];
                $prenom=$_POST["prenom"];
                $email=$_POST["email"];
                $pass=$_POST["pass"];
                $passCheck=$_POST["passCheck"];
              
            if((empty($email))||(empty($pass))||(empty($passCheck))) {
                echo "Champs obligatoires non remplies";
            }
            else if ((strlen($pass))<6) {
                echo "Votre mot-de-passe doit contenir 6 caractères ou plus.";
                }
            else if ($pass != $passCheck) {
                echo "Vos mots-de-passe sont différents.";
            }
            else {
                include("connect.php");
                $pass=md5($_POST["pass"]);
                
            $query = "insert into client (PrenomClient, NomClient, EmailClient, AdresseClient, ComplementAdresseClient, CPClient, VilleClient, MdpClient)
                values
            ('$prenom','$nom', '$email', '', '', 0, '','$pass')";
            
                $result = mysqli_query($link,$query) or die ("Error in the BDD".mysqli_error($link));
                
                header ('location: validationCreation.php');
                 }
            }else {
                echo "La page demandée est innacessible, veullez remplir le  "?>
            <a href="connexion.php">formulaire.</a><?php
            }
            
        ?>
    </body>
</html>