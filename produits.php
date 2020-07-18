<center style="background-color:antiquewhite;"><h1>
<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=vente_telephone;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO `produits`(nom, prenom, poste, marque, prix, modele, caracteristique) VALUES (:nom, :prenom, :poste, :marque, :prix, :modele, :caracteristique)');
$req->execute(array(
'nom'=> $_POST['nom'],
':prenom'=> $_POST['prenom'],
':poste'=> $_POST['poste'],
':marque'=> $_POST['marque'],
':prix'=> $_POST['prix'],
':modele'=> $_POST['modele'],
':caracteristique'=> $_POST['caracteristique'],

));
$affiche='Merci, les produits ont bien été enrégistrée '.$_POST['nom'] .' '.$_POST['prenom'] ;
echo $affiche .'<br/> <br/>';

?>
<footer>  <center> <a href="MonSite.php" class="header-logo"> Retour a l'accueil<a/> 
    </center></footer>
</h1>
</center>
