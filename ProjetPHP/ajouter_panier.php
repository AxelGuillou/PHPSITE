<?php
 include_once "con_dbb.php";
 if(!isset($_SESSION)){
    session_start();
 }
 if(!isset($_SESSION['BDDTest'])){
    $_SESSION['BDDTest'] = array();
 }
 //récupération de l'id dans le lien
  if(isset($_GET['Identification'])){//si un id a été envoyé alors :
    $id = $_GET['Identification'] ;
    //verifier grace a l'id si le produit existe dans la base de données
    $produit = mysqli_query($con ,"SELECT * FROM produits WHERE Identification = $id") ;
    if(empty(mysqli_fetch_assoc($produit))){
        //si ce produit n'existe pas
        die("Ce produit n'existe pas");
    }
    //ajouter le produit dans le bddtest ( Le tableau)

    if(isset($_SESSION['BDDTest'][$id])){// si le produit est déjà dans le bddtest
        $_SESSION['BDDTest'][$id]++; //Représente la quantité 
    }else {
        //si non on ajoute le produit
        $_SESSION['BDDTest'][$id]= 1 ;
    }

   //redirection vers la page index.php
   header("Location:index.php");


  }
?>