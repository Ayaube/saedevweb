DROP TABLE IF EXISTS Joueur;
DROP TABLE IF EXISTS Ennemis;
DROP TABLE IF EXISTS Map;
DROP TABLE IF EXISTS Partie;

-- Table: Joueur
CREATE TABLE Joueur(
                    id_joueur     INT AUTO_INCREMENT PRIMARY KEY,
                    username      VARCHAR(255) NOT NULL,
                    email         VARCHAR(255) NOT NULL,
                    passw_hash    VARCHAR(255) NOT NULL,
                    date_creation TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                    role          VARCHAR(25) NOT NULL
);


-- Table: Ennemis
CREATE TABLE Ennemis(
                        id_ennemi       INT AUTO_INCREMENT PRIMARY KEY,
                        nom_ennemi      VARCHAR(255) NOT NULL,
                        pv              INT NOT NULL,
                        vitesse         INT NOT NULL,
                        gain            INT NOT NULL,
                        description     TEXT NOT NULL,
                        filename        VARCHAR(25) NOT NULL
);


-- Table: Map
CREATE TABLE Map(
                    id_map          INT AUTO_INCREMENT PRIMARY KEY,
                    nom_map         VARCHAR(255) NOT NULL,
                    matrix          TEXT NOT NULL
);


-- Table: Tourelle
CREATE TABLE Tourelle(
                        id_tourelle     INT AUTO_INCREMENT PRIMARY KEY,
                        nom_tourelle    VARCHAR(255) NOT NULL,
                        date_creation   TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                        prix_ram        INT NOT NULL,
                        prix_flops      INT NOT NULL,
                        filename        VARCHAR(25) NOT NULL
);


-- Table: Partie
CREATE TABLE Partie(
                    id_partie      INT AUTO_INCREMENT PRIMARY KEY,
                    id_joueur      INT NOT NULL,
                    map            INT NOT NULL,
                    vague_atteinte INT NOT NULL,
                    ennemis_tue    INT NOT NULL,
                    argent_gagne   INT NOT NULL,
                    FOREIGN KEY (id_joueur) REFERENCES Joueur(id_joueur),
                    FOREIGN KEY (map) REFERENCES Map(id_map)
);

