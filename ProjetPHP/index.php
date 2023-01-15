<!doctype html>
<html lang="fr">
    
    <head>
        <meta charset="utf-8">
        <title>LUXICIOUS | Site Officiel</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/articleCard.css">
    </head>
    
    
    <body>
        
        <section>
        <div id="scrollDown">
        <div class="wrapperMenu"> 
            
            <div class="divMenu">
                <a href="accueil.php">
                    <img src="img/connexion_icon.png" alt="icône de connexion" width="25px" id="connexionIcon">
                </a>
            </div>
            
            <div class="divMenu">
                <a href="index.php">
                    <img src="img/logoLUXICIOUS.png" alt="logo_LUXICIOUS" width="210px" id="logoLUXICIOUS">
                </a>
            </div>
            
            <div class="divMenu">
                
                <span id="spanMenu">
                <div class="searchBar">
                  <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
                  <input placeholder="Sucettes..." type="search" class="inputSearch">
                </div>
                <a href="panier.php">
                    <img src="img/heart_icon.png" alt="icône panier" width="23px" id="heartIcon">
                </a>
                </span>
                
            </div>

        </div>
        </div>
        </section> <!--MENU-->
        
        <section>
            
            <div class="parallax parallax1">
                <a href="enSavoirPlus.html" id="homeEnSavoir">o</a>
            </div>
            
        </section> <!--ACCUEIL-->
    

    <section class="products_list">
        <?php 
        include_once "con_dbb.php";
         $req = mysqli_query($con, "SELECT * FROM produit");
         while($row = mysqli_fetch_assoc($req)){ 
        ?>
        <form action="">
        <div class="card" id="BARBAPAPAdiv">
                <div class="face face1">
                    <div class="content">
                    <span class="stars"></span>
                        
                        <img src="img/<?=$row['ImageP']?>" alt="plus d'informations" class="moreInfo" width="20px">
                        <div class="articleBandeau">
                            <p><?=$row['PrixPublic']?>€</p>
                            <img src="img/heart_icon2.png" alt="icône panier" width="40px">
                        </div>
                      
                    </div> <!-- src="img/<?=$row['ImageP']?>" -->
                </div>
                <div class="face face2">
                  <h2 id="BARBAPAPAh2" class="whiteRose"><?=$row['TitreP']?></h2>
                </div>
              </div>
            <div>
            <a href="ajouter_panier.php?id=<?=$row['Identifiant']?>">
                <img src="img/heart_icon2.png">
            </a>
            </div>
        </form>

        <?php } ?>
       
    </section>

        
            
            
            

        </div> </span>
        
        <footer>
            <p>Maxance & Axel</p>
        </footer>
        
        

    </body>
    
    <script>
        
        let ROCKCANDY = document.getElementById("ROCKCANDYdiv");
        ROCKCANDY.addEventListener("mouseover", function( event ) {
                    document.getElementById("ROCKCANDYh2").style.opacity = "0";
                }, false);  
        ROCKCANDY.addEventListener("mouseout", function( event ) {
                    document.getElementById("ROCKCANDYh2").style.opacity = "100";
                }, false);
        
        
        let LOLLICOEUR = document.getElementById("LOLLICOEURdiv");
        LOLLICOEUR.addEventListener("mouseover", function( event ) {
                    document.getElementById("LOLLICOEURh2").style.opacity = "0";
                }, false); 
        LOLLICOEUR.addEventListener("mouseout", function( event ) {
                    document.getElementById("LOLLICOEURh2").style.opacity = "100";
                }, false);
        
        
        let BARBAPAPA = document.getElementById("BARBAPAPAdiv");
        BARBAPAPA.addEventListener("mouseover", function( event ) {
                    document.getElementById("BARBAPAPAh2").style.opacity = "0";
                }, false);  
        BARBAPAPA.addEventListener("mouseout", function( event ) {
                    document.getElementById("BARBAPAPAh2").style.opacity = "100";
                }, false);
        
        
    
    
    </script>
    
    
    
</html>
