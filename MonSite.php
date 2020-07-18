<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>MonSite</title>
    <link rel = "stylesheet" href ="MonSite.css"/>
</head>
<body>
    <menu>
    <!--header-->
    <div class="block">
        <header class="header"> 
       <img src="logo2.jpeg" alt="logo"  href="MonSite.php" title="logo"/>
            <nav class="header-menu">
                <a class="" href="marque.php">MARQUES</a>
                <a class="f" href="formulaire.php">FORMULAIRE</a>
                <a class="f" href="Apropos.html">A PROPOS</a>
        </header> 
    </div>
    <form action="fonctionA.php"method="post">
    <label style="color:white;">Search:</label>
        <input type="search" name="Search" style="border:solid; border-radius: 5px 5px 5px;" placeholder="Rechercher"   />
        <input type="submit" style="" name="Valider" />
   </form>
    <center><div id="conteneur">
            <a class="f" href="samsung.php">SAMSUNG</a>
            <a class="f" href="nokia.php">NOKIA</a>
            <a class="f" href="huawei.php">HUAWEI</a>
            <a class="f" href="i-phone.php">I-PHONE</a>
        </div></center>
    </menu>
    <img src="site/site20_iphone4.jpg" alt="I-phone4.jpg" title="APPLE"/>
    <img src="site/site21-iphone7+.jpg" alt="I-phone7+.jpg" title="APPLE"/>
    <footer >   
        <a style="text-align: right; " href="MonSite.php" "> Retour a la page d'accueil<a/>
        <center><a class="cool" style="text-align:center; border:solid; border-radius: 5px 5px 5px;" href="code.php" ">information du personnel<a/>
            </center>
    </footer>
</body>
</html>