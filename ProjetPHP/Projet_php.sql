CREATE TABLE clients
(
    id INT PRIMARY KEY NOT NULL,
    nom VARCHAR(100),
    prenom VARCHAR(100),
    email VARCHAR(255),
    date_naissance DATE,
    pays VARCHAR(255),
    ville VARCHAR(255),
    code_postal VARCHAR(5),
    nombre_achat INT,
    MDP VARCHAR(100)
)

CREATE TABLE fournisseurs
(
        idFournisseur INT PRIMARY KEY NOT NULL,
        nom VARCHAR2(50) NOT NULL,
        adresse VARCHAR2(50) NOT NULL,  
)

CREATE TABLE produit
(
    Reference VARCHAR2(50),
    Identifiant INT,
    Descriptions VARCHAR2(1000),
    PrixPublic NUMBER(50),
    PrixAchat NUMBER(50),
    ImageP Image,
    Icone Image,
    TitreP VARCHAR2(50),
    DescriptifProduit VARCHAR2(1000),
    Stock INT

)

CREATE TABLE facturation
(
idPanier INT NOT NULL PRIMARY KEY,
    DateCreation DATE NOT NULL,
    Nom VARCHAR(10) NOT NULL,
    Prenom VARCHAR(10) NOT NULL,
    email VARCHAR(10) NOT NULL,
    PrixTotal DOUBLE
)    

CREATE TABLE gestion_stock
(

    
)
