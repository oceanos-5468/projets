<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Answer</title>
</head>
<body style="background-color: antiquewhite;">


<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=vente_telephone;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
} 

$req = $bdd->prepare('INSERT INTO infos_clients(pays, nom, prenom, age, sexe, tel, adresse, commande, payement ,datee) VALUES (:pays, :nom, :prenom, :age, :sexe, :tel, :adresse, :commande, :payement, Now() )');
$jour=date('d/m/Y');
$req->execute(array(
'pays'=> $_POST['pays'],
'nom'=> $_POST['nom'],
'prenom'=> $_POST['prenom'],
'age'=> $_POST['age'],
'sexe'=> $_POST['sexe'],
'tel'=> $_POST['telephone'],
'adresse'=> $_POST['email'],
'commande'=> $_POST['commande'],
'payement'=> $_POST['payement'],
));
$affiche='Merci, votre commande a bien été enrégistrée Mr/Mme/Miss '.$_POST['nom'] .' '.$_POST['prenom'] .'.<br/> Les informations concernant le suivi de votre commande vous seront envoyé à votre E-mail : '.$_POST['email'] .' à compter de ce jour <br/>' .$jour;
echo $affiche .'<br/> <br/>';
?>

</body>



