<html>
<body>
<?php
    session_start ();
?>

<?php
include("connect.php" );
$EmailClient=$_POST["EmailClient"];
$MdpClient=$_POST["MdpClient"];
$passCheck=$_POST["passCheck"];

if (isset($_POST["bouton"]))
{
    if((empty($EmailClient))||(empty($MdpClient))||(empty($passCheck))) {
                echo "Champs obligatoires non remplies";
            }
            else if ((strlen($MdpClient))<6) {
                echo "Votre mot-de-passe doit contenir 6 caractères ou plus.";
                }
            else if ($MdpClient != $passCheck) {
                echo "Vos mots-de-passe sont différents.";
            }
            else {
                include("connect.php");
                $pass=md5($_POST["pass"]);
                
	            extract($_POST);
                $id=$_SESSION["ID"];
                $MdpClient=md5($_POST["MdpClient"]);
	            $query = "update Client set EmailClient='$EmailClient', MdpClient='$MdpClient' where IdClient='$id'";
                $result = mysqli_query($link, $query) or die("Error in the BDD" . mysqli_error($link));
    
                header ('location: validationModification.php');
            }
    }else {
        echo "La page demandée est innacessible, veullez remplir le  "?>
        <a href="connexion.php">formulaire.</a><?php
    }
?>
    </body>
</html>