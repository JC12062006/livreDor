CREATE DATABASE  livreDor;

USE livreDor;

CREATE TABLE Utilisateurs (

	ID_Utilisateur INT NOT NULL AUTO_INCREMENT,
	Nom VARCHAR (50) NOT NULL,
	Prenom VARCHAR (50) NOT NULL,
	Email VARCHAR (100) NOT NULL UNIQUE,
	Mdp VARCHAR (100) NOT NULL,
	maildeux VARCHAR (100) NOT NULL,
	PRIMARY KEY (ID_Utilisateur)
);

CREATE TABLE Signatures (
    ID_Signature INT NOT NULL AUTO_INCREMENT,
    Message TEXT NOT NULL,
    Date_Signature DATETIME DEFAULT CURRENT_TIMESTAMP,
    ID_Utilisateur INT,
    PRIMARY KEY (ID_Signature),
    FOREIGN KEY (ID_Utilisateur) REFERENCES Utilisateurs(ID_Utilisateur) ON DELETE SET NULL
);
