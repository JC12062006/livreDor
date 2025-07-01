CREATE DATABASE  projetJoan;

USE projetJoan;


CREATE TABLE Signatures (
    ID_Signature INT NOT NULL AUTO_INCREMENT,
    Nom_Auteur VARCHAR(100) NOT NULL,
    Message TEXT NOT NULL,
    Date_Signature DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (ID_Signature)
);

