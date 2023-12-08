CREATE DATABASE IF NOT EXISTS `pokemon_db`;

USE pokemon_db;

CREATE TABLE pokemon (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  type VARCHAR(255) NOT NULL
);

INSERT INTO pokemon (name, type) VALUES ('Bulbizarre', 'Plante/Poison');
INSERT INTO pokemon (name, type) VALUES ('Herbizarre', 'Plante/Poison');
INSERT INTO pokemon (name, type) VALUES ('Florizarre', 'Plante/Poison');
INSERT INTO pokemon (name, type) VALUES ('Salamèche', 'Feu');
INSERT INTO pokemon (name, type) VALUES ('Reptincel', 'Feu');
INSERT INTO pokemon (name, type) VALUES ('Dracaufeu', 'Feu/Vol');
INSERT INTO pokemon (name, type) VALUES ('Carapuce', 'Eau');
INSERT INTO pokemon (name, type) VALUES ('Carabaffe', 'Eau');
INSERT INTO pokemon (name, type) VALUES ('Tortank', 'Eau');
INSERT INTO pokemon (name, type) VALUES ('Chenipan', 'Insecte');