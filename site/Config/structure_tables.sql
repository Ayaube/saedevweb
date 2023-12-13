-- Table: Joueur
CREATE TABLE Joueur(
                       id_joueur     INTEGER PRIMARY KEY AUTOINCREMENT,
                       email         TEXT NOT NULL,
                       passw_hash    TEXT NOT NULL,
                       date_creation TEXT NOT NULL
);

-- Table: Ennemis
CREATE TABLE Ennemis(
                        id_ennemi       INTEGER PRIMARY KEY AUTOINCREMENT,
                        nom_ennemi      TEXT NOT NULL,
                        pv              INTEGER NOT NULL,
                        vitesse         INTEGER NOT NULL,
                        gain            INTEGER NOT NULL,
                        desc            TEXT NOT NULL,
                        id_proprietaire INTEGER NOT NULL,
                        id_joueur       INTEGER NOT NULL,
                        FOREIGN KEY (id_joueur) REFERENCES Joueur(id_joueur)
);

-- Table: Map
CREATE TABLE Map(
                    id_map          INTEGER PRIMARY KEY AUTOINCREMENT,
                    nom_map         TEXT NOT NULL,
                    matrix          TEXT NOT NULL,
                    id_proprietaire INTEGER NOT NULL,
                    id_joueur       INTEGER NOT NULL,
                    FOREIGN KEY (id_joueur) REFERENCES Joueur(id_joueur)
);

-- Table: Tourelle
CREATE TABLE Tourelle(
                         id_tourelle     INTEGER PRIMARY KEY AUTOINCREMENT,
                         nom_tourelle    TEXT NOT NULL,
                         date_creation   TEXT NOT NULL,
                         id_proprietaire INTEGER NOT NULL,
                         prix_ram        INTEGER NOT NULL,
                         prix_flops      INTEGER NOT NULL,
                         id_joueur       INTEGER NOT NULL,
                         FOREIGN KEY (id_joueur) REFERENCES Joueur(id_joueur)
);



-- Table: Partie
CREATE TABLE Partie(
                       id_partie INTEGER PRIMARY KEY AUTOINCREMENT,
                       id_joueur INTEGER NOT NULL,
                       map INTEGER NOT NULL,
                       vague_atteinte INTEGER NOT NULL,
                       ennemis_tue INTEGER NOT NULL,
                       argent_gagne INTEGER NOT NULL,
                       est_fini BOOLEAN NOT NULL,
                       id_joueur_Joue INTEGER NOT NULL,
                       id_map INTEGER NOT NULL,
                       FOREIGN KEY (id_joueur_Joue) REFERENCES Joueur(id_joueur),
                       FOREIGN KEY (id_map) REFERENCES Map(id_map)
);

-- Table: Detient
CREATE TABLE Detient(
                        id_joueur INTEGER NOT NULL,
                        id_tourelle INTEGER NOT NULL,
                        PRIMARY KEY (id_joueur, id_tourelle),
                        FOREIGN KEY (id_joueur) REFERENCES Joueur(id_joueur),
                        FOREIGN KEY (id_tourelle) REFERENCES Tourelle(id_tourelle)
);