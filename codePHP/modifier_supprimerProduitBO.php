<html>

<head>
<?php
include("connect.php" );
if(isset($_GET["idsup"]))
{
    $id=$_GET["idsup"];  
  $query_sup="delete from produit where IdProduit='$id'";
  
  $result = mysqli_query($link, $query_sup) or die("Error in the BDD" . mysqli_error($link));
}

?>
<script type="text/javascript">
 //var r = confirm("Press a button!");
 function Supp(link){
  if(confirm("Suppression?")){
   document.location.href = link;
   //document.write("jj");
  }
  
  } 
</script>

</head>
    <style>
        p {
            text-align: center;
        }
    </style>

<body>
<?php

$query = "SELECT IdProduit, LibProduit FROM produit" ;
$result = mysqli_query($link, $query) or die("Error in the BDD" . mysqli_error($link));
?>
 <h1 align="center">La liste des produits</h1>
<table border="1" align="center">
<tr> <th> Numéro du produit </th> <th> Nom du produit </th> <th> Modification</th> <th> Suppression </th></tr>

<?php
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	
echo "<tr> <td>". $row["IdProduit"] ."</td> <td> ". $row["LibProduit"]."</td> <td><a href=modifform.php?id=".$row["IdProduit"]."> 
Modifier</a></td><td><a href=modifier_supprimerProduitBO.php?idsup=".$row["IdProduit"];?>  onclick="Supp(this.href); return(false);"> 
Supprimer</a></td></tr>
 <?php
}
echo "</table>";



mysqli_close($link);

?>
<p><a href="../backOffice.php">Revenir au menu principal</a></p>


</body>
</html>