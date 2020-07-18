<table>
  <?php 
$bdd = new PDO('mysql:host=localhost;dbname=vente_telephone;charset=utf8', 'root', '');
$wanted=$_POST['Search'];
if (!empty($wanted)){
echo "<h1>Recherche de '$wanted' </h1>";

$sql="SELECT * from produits where marque='".$wanted."'";
if(!$bdd->query($sql))
echo "Pb de requete";
else{
foreach ($bdd->query($sql) as $row)
echo "<strong> Marque  :</strong>  ". $row['marque']."<strong> Modele  :</strong>  ".$row['modele']."<strong> caracteristique :</strong>  ".$row['caracteristique']."</br> </br>\n";
if ($wanted=!$_POST['Search']){
	echo"Entrer un produit valide";
	}
}
}
?>
</table>
<a href="MonSite.php"><center style=" border: solid;">Accueil</center></a>