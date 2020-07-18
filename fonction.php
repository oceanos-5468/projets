<?php
 $bdd = new PDO('mysql:host=localhost;dbname=vente_telephone;charset=utf8', 'root', '');
$reponse = $bdd->query("SELECT * FROM `infos_clients` WHERE datee BETWEEN '2020/07/15'AND '2020/08/15'");
 echo "Les commandes effectuées dans ce mois:";
  while ($donnes=$reponse->fetch()) {

  	
  	echo (' <br/> Pays:'.'   '.$donnes['pays'] .'   '.'Nom:'.'   '.$donnes['nom'].'   '.'Prenom:'.'   '.$donnes['prenom'].'   '.'Age:'.'   '.$donnes['age'].' ans  '.'Sexe:'.'   '.$donnes['sexe'].'   '.'Telephone:'.'   '.$donnes['tel'].'   '.'E-mail:'.'   '.$donnes['adresse'].' '.'Commande:'.'   '.$donnes['commande'].'   '.'Payement:'.'   '.$donnes['payement'].'   '.'Date:'.'   '.$donnes['datee'].'<br/> <br/>');
  }
  $reponse->closeCursor();
 ?>