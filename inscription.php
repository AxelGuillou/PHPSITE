
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />    
        <meta name="robots" content="noindex, nofollow">
        <title>LUXICIOUS | Inscription</title>
        <link rel="stylesheet" href="css/inscription.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    
    
    
    <body>
        
        <section>
        <div id="scrollDown">
        <div class="wrapperMenu"> 
            
            <div class="divMenu">
                <a href="accueil.php">
                    <img src="img/connexion_icon.png" alt="icône de connexion" width="25px" id="connexionIcon"></a>
            </div>
            
            <div class="divMenu">
                <a href="index.php">
                    <img src="img/logoLUXICIOUS.png" alt="logo_LUXICIOUS" width="210px" id="logoLUXICIOUS"></a>
            </div>
            
            <div class="divMenu">
                
                <span id="spanMenu">
                <div class="searchBar">
                  <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
                  <input placeholder="Sucettes..." type="search" class="inputSearch">
                </div>
                <a href="panier.php">
                <img src="img/heart_icon.png" alt="icône panier" width="23px" id="heartIcon"></a>
                </span>
                
            </div>

        </div>
        </div>
        </section> <!--MENU-->
        
        <div class="div">
            Inscription<br/>
            <form action="verification.php" method="post">
            IDENTIFIANT *<input type="text" name="login" value=""><br />
            MOT DE PASSE *<input type="password" name="mdp1" value=""><br />
            CONFIRMATION MOT DE PASSE *<input type="password" name="mdp2" value=""><br />
            <input type="submit" name="inscription" value="inscription" id="submitButton">
            </form>
        </div>
        <div class="aLien">
        <a href="accueil.php">Déjà client ?</a>
        </div>

        
        
    </body>
    
    
</html>