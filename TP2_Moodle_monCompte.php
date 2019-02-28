<html>
    <body>
        <?php
            if (isset($_POST['email']) && isset($_POST['pass']))
            {
             $email= $_POST['email']; $pass= md5($_POST['pass']);
             include("connect.php");
             $requete="select * from client where EmailClient = '$email' AND MdpClient = '$pass'";
             $result= mysqli_query($link,$requete) or die ("erreur Sql".mysqli_error($link));

             $n=mysqli_num_rows($result);
                echo $n;
                 if($n==1)
                 {
                    $L=mysqli_fetch_array($result, MYSQLI_ASSOC);
                    session_start ();
                    $_SESSION['ID'] = $L['IdClient'];
                    $_SESSION['Email'] = $L['EmailClient'];
                    $_SESSION['Mdp'] = $L['MdpClient'];
                    $_SESSION['Nom'] = $L['NomClient'];
                    $_SESSION['Prenom'] = $L['PrenomClient'];
                    $_SESSION['Adresse'] = $L['AdresseClient'];
                    $_SESSION['ComplementAdresse'] = $L['ComplementAdresseClient'];
                    $_SESSION['Ville'] = $L['VilleClient'];
                    $_SESSION['CP'] = $L['CPClient'];
                    if ( $L['admin'] == 1) {
                        header ('location: index.php');
                        $_SESSION['admin'] = true;
                    } else {
                        header ('location: page_membre.php');
                        $_SESSION['admin'] = false;
                    }
                 }
                 else
                 {
                 echo"vous n’êtes pas membre";
                 }
             }
            else
            {
             echo 'Les variables du formulaire ne sont pas déclarées.';
            }
        ?>
    </body>
</html>