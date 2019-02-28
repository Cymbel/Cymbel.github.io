<?php
    session_start ();
?>

<?php
include("connect.php" );


if (isset($_POST["bouton"]))
{
	extract($_POST);
    $id=$_SESSION["ID"];
    $MdpClient=md5($_POST["MdpClient"]);
	$query = "update Client set NomClient='$NomClient', PrenomClient='$PrenomClient', AdresseClient='$AdresseClient', ComplementAdresseClient='$ComplementAdresseClient', CPClient='$CPClient', VilleClient='$VilleClient' where IdClient='$id'";
$result = mysqli_query($link, $query) or die("Error in the BDD" . mysqli_error($link));
    
header ('location: validationModification.php');
}
?>
