<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page protégée par mot de passe</title>
    </head>
    <body style="background-color: antiquewhite; text-align: center;">
        <p>Veuillez entrer le mot de passe pour obtenir les codes d'accès au serveur central :</p>
        <form action="passe.php" method="post">
            <p>
            <input type="password" name="mot_de_passe"  required /><br/>

            <input type="submit" value="Valider" />
            </p>
        </form>
        <p>Cette page est réservée au personnel de HARBADA.☺</p>
    </body>
</html>