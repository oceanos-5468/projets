<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Codes d'accès au serveur de BAOUSHOP</title>
    </head>
    <body>
  <link rel="stylesheet" type="text/css" href="formulaire.css">
        <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "06092025") // Si le mot de passe est bon
    {
    // On affiche les codes
    ?>

        <form action="produits.php"method="post">

            <h1 style=" text-align: center; border:solid; border-radius: 20px 20px 20px; background-color: #facce5;
    ">Enregistrement de produit</h1>
    <br/>
    <br/>

    <center><center style="border:solid; padding:10px; background-color:#facce5; border-radius: 20px 20px 20px; width: 30%">
        <label><strong>Nom</strong></label> : 
        <input type="text" name="nom" style="" placeholder="Entrer votre nom" required />
    <br/>
    <br/>
    <!--prenom-->
    <label><strong>Prénom</strong></label> : 
        <input type="text" name="prenom" placeholder="Entrer votre prénom" required/>
    <br/>
    <br>
         <label><strong>Poste</strong></label> : 
        <input type="text" name="poste"  placeholder="Entrer votre poste" required />
    <br/>
    <br/>
    <!--prenom-->
    <label><strong>Marque</strong></label> : 
        <input type="text" name="marque" placeholder="Entrer la marque du téléphone" required/>
    <br/>
    <br/>
    <label><strong>Prix</strong></label> : 
        <input type="text" name="prix" placeholder="Entrer le prix" required/>
    <br/>
    <br/>
    <?php

    ?>
    <label><strong>Modele</strong></label> : 
        <input type="text" name="modele" placeholder="Entrer le modele" required/>

    <br/>
    <br/>
    <label><strong>caracteristiques</strong></label> : 
        <input type="text" name="caracteristique" placeholder="Entrer les caracteristiques" required/>
        <br/>
        <br/>
    <!--bouton d'envoi-->
        <input type="submit" style="" name="valider" /><br/>
        <br/>
        <br/>
        <a  style="border: double; background-color: black; color: white;
    border-radius:  10px 10px 10px; 
    border-color: green;" title="Cliquez ici pour voir les commandes du mois" href="fonction.php" >commandes du mois</a>
        <br/>
        <a href="">
        </div>
    </center>
</a></center>
    
        <?php
        
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<center><center style="border:solid; padding:10px; background-color:#facce5; border-radius: 20px 20px 20px; width: 30%" margin="50px;"><h1>Mot de passe incorrect</h1><center></center>';
    

    ?>
<h3>    
<a style="border: double;
    border-radius:  10px 10px 10px; 
    border-color: green;" href="code.php">Retaper le code</a>
    <style>
        a:hover
        {
            color: red;
        }
    </style>
</h3>

<?php 
}
 ?>



    </body>
</html>