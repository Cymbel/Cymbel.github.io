<?php
            if(isset($_POST["bouton"])) {
                $nom=$_POST["nom"];
                $prenom=$_POST["prenom"];
                $email=$_POST["email"];
                $objet=$_POST["objet"];
                $message=$_POST["message"];
              
            if((empty($nom))||(empty($prenom))||(empty($email))||(empty($objet))||(empty($message))) {
                echo "Champs obligatoires non remplies";
            }
            else {
                include("connect.php");
                
            $query = "insert into contact (NomContact, PrénomContact, EmailContact, ObjetContact, MessageContact)
                values
            ('$nom','$prenom', '$email', '$objet', '$message')";
            
                $result = mysqli_query($link,$query) or die ("Error in the BDD".mysqli_error($link));
                
                header ('location: validationContact.php');
                 }
            }else {
                echo "La page demandée est innacessible, veullez remplir le  "?>
            <a href="connexion.php">formulaire.</a><?php
            }     
        ?>