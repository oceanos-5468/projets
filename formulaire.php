<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact e-commerce</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="formulaire.css">
	<h1 style=" text-align: center; border:solid; border-radius: 20px 20px 20px; background-color:#facce5";
	">Acheter en ligne</h1>

     <!--search-->
     <?php 
     $jour=date('d/m/Y');

     echo $jour; ?>
<div style="margin-left:70%;">
	
	</div>
		
	
<form action="fonctionA.php"method="post">
	<div style="margin:20px;">
		<label>Search:</label>
		<input type="search" name="Search" style="border:solid; border-radius: 5px 5px 5px;" placeholder="Rechercher" /> 
		 <input type="submit" style="" name="Valider" />
</div>
	</form>
	<center><center style="border:solid; padding:10px; background-color:#facce5; border-radius: 20px 20px 20px; width: 30%">
<form action="Contact.php"method="post">
	

	<!--header-->
	
		<h3 style="text-decoration: underline;">Veuillez renseigner ces informations:</h3>
		<!--pays-->
	<label for="pays"><strong>Dans quel pays habitez-vous ?</strong></label>
		<select name="pays"><br/>
			<option value=Benin>Benin</option>
			<option value=Togo>Togo</option>
			<option value=Mali>Mali</option>
			<option value=Niger>Niger</option>
			<option value=corée>Corée</option>
			<option value=Chine>Chine</option>
			<option value=New_Zélande>New Zélande</option>
			<option value=Australie>Australie</option>
			<option value=Afrique_du_Sud>Afrique du Sud</option>
		</select>

<br/>
<br/>
	<!--Nom-->
	<label><strong>Nom</strong></label> : 
		<input type="text" name="nom" style="" placeholder="Entrer votre nom" required />
	<br/>
	<br/>
	<!--prenom-->
	<label><strong>Prénom</strong></label> : 
		<input type="text" name="prenom" placeholder="Entrer votre prénom" required/>
	<br/>
	<br/>
	<!--Age-->
	<label><strong>Age</strong></label> : 
		<input type="Number" name="age" placeholder="Entrer votre age" required/>
	<br/>
    <br/>
    <!--sexe-->
	<label><strong>Sexe</strong></label> : 
		<input type="radio" name="sexe" value="F" id="F" required/> <label for="Sexe">Féminin</label>
		<input type="radio" name="sexe" value="M" id="M" required /> <label for="M">Masculin</label>
	<br/>
	<br/>
	<!--numéro-->
	<label><strong>Téléphone</strong></label> : 
		<input type="tel" name="telephone" placeholder=" " required/>
	<br/>
	<br/>
	<!--E-mail-->
	<label><strong>E-mail</strong></label> : 
		<input type="email" name="email" placeholder="ex:sgbd@gmail.com" required />
	<br/>
	<br/>
	<!--commande-->
	<label for="pseudo"><strong>Commande</strong></label>: 
		<input type="text" name="commande" id="pseudo" required/>
	<br/>
	<br/>
	<!--moyen de payemant-->
	<label><strong>Moyen de payement:</strong></label>
		<select name="payement">: 
			<option value="Mobile money">Mobile money</option>
			<option value="Paypall">Paypal</option>
			<option value="Banque">Banque</option><br/>
		</select>
	<br/>
	<br/>
	<!--bouton d'envoi-->
		<input type="submit" style="" name="Valider" />
		</div>
</form>
</center>
</center>
</body>
</html>