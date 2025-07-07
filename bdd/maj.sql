ALTER TABLE signatures ADD COLUMN Sexe ENUM('Homme', 'Femme', 'Autre') DEFAULT 'Autre',
ALTER TABLE signatures ADD COLUMN Email VARCHAR(150);