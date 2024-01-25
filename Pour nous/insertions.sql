INSERT INTO Joueur VALUES (DEFAULT,'Lenulos93220','aa@93220.fr','aaa',DEFAULT);
INSERT INTO Joueur VALUES (DEFAULT,'LaBouse93130','oo@93130.fr','zzz',DEFAULT);
INSERT INTO Joueur VALUES (DEFAULT,'LeBG95470','bb@95470.fr','bbb',DEFAULT);
INSERT INTO Joueur VALUES (DEFAULT, 'MarioBros', 'mario@nintendo.com', 'mario123', DEFAULT);
INSERT INTO Joueur VALUES (DEFAULT, 'LinkZelda', 'link@hyrule.com', 'zelda123', DEFAULT);
INSERT INTO Joueur VALUES (DEFAULT, 'MasterChief', 'chief@halo.com', 'halo123', DEFAULT);
INSERT INTO Joueur VALUES (DEFAULT, 'LaraCroft', 'lara@tombraider.com', 'tomb123', DEFAULT);
INSERT INTO Joueur VALUES (DEFAULT, 'SamusAran', 'samus@metroid.com', 'metroid123', DEFAULT);
INSERT INTO Joueur VALUES (DEFAULT, 'GordonFreeman', 'gordon@half-life.com', 'hl123', DEFAULT);
INSERT INTO Joueur VALUES (DEFAULT, 'GeraltRivia', 'geralt@witcher.com', 'witcher123', DEFAULT);
INSERT INTO Joueur VALUES (DEFAULT, 'JillValentine', 'jill@residentevil.com', 'resident123', DEFAULT);
INSERT INTO Joueur VALUES (DEFAULT, 'SolidSnake', 'snake@metalgear.com', 'metal123', DEFAULT);
INSERT INTO Joueur VALUES (DEFAULT, 'KratosGodWar', 'kratos@godofwar.com', 'godwar123', DEFAULT);
INSERT INTO Joueur VALUES (DEFAULT, 'NathanDrake', 'nathan@uncharted.com', 'uncharted123', DEFAULT);
INSERT INTO Joueur VALUES (DEFAULT, 'Dovahkiin', 'dragonborn@skyrim.com', 'skyrim123', DEFAULT);
INSERT INTO Joueur VALUES (DEFAULT, 'ArthurMorgan', 'arthur@reddead.com', 'reddead123', DEFAULT);
INSERT INTO Joueur VALUES (DEFAULT, 'CloudStrife', 'cloud@finalfantasy.com', 'ff123', DEFAULT);
INSERT INTO Joueur VALUES (DEFAULT, 'SonicHedgehog', 'sonic@sega.com', 'fast123', DEFAULT);



INSERT INTO Ennemis VALUES (DEFAULT,'.sh',10,10,2,'Ennemi de base, dégâts simple','0.png');
INSERT INTO Ennemis VALUES (DEFAULT,'Archive',20,8,4,'Ennemi qui se sépare en plusieurs .sh quand il meurt. Plus lent mais plus de vie.','1.png');
INSERT INTO Ennemis VALUES (DEFAULT,'Virus',30,6,6,'Ennemi assez résistant, inflige un effet de poisson au disque dur lorsqu’il le touche','2.png');
INSERT INTO Ennemis VALUES (DEFAULT,'Scam',40,4,8,'Ennemi qui bloque le jeu en faisant apparaître une pop up si il touche le disque dur.','3.png');
INSERT INTO Ennemis VALUES (DEFAULT,'Kamikaze',50,2,10,'N’est pas un réel ennemi, il s’agit des “ennemis” créés par le démineur. Ces ennemis font le chemin inverse et explosent au contact du premier ennemi touché ou au bout de 5 secondes. Quand il explose, des morceaux de shrapnels sont projetés pour infliger des dégâts aux ennemis.','4.png');
INSERT INTO Ennemis VALUES (DEFAULT,'.exe',70,2,15,'Ennemi plus fort que la moyenne, quand il touche le disque dur, supprime une de nos tours de manière aléatoire.','5.png');

INSERT INTO Map VALUES (DEFAULT,'Map 1','');
INSERT INTO Map VALUES (DEFAULT,'Map 2','');
INSERT INTO Map VALUES (DEFAULT,'Map 3','');
INSERT INTO Map VALUES (DEFAULT,'Map 4','');
INSERT INTO Map VALUES (DEFAULT,'Map 5','');

INSERT INTO Tourelle VALUES (DEFAULT,'Task Killer',DEFAULT,20,50,'0.png');
INSERT INTO Tourelle VALUES (DEFAULT,'CCleaner',DEFAULT,40,100,'1.png');
INSERT INTO Tourelle VALUES (DEFAULT,'Démineur',DEFAULT,60,200,'2.png');
INSERT INTO Tourelle VALUES (DEFAULT,'InternetExplorer',DEFAULT,80,325,'3.png');
INSERT INTO Tourelle VALUES (DEFAULT,'NordVPN',DEFAULT,100,500,'4.png');
INSERT INTO Tourelle VALUES (DEFAULT,'PDFconverter',DEFAULT,120,600,'5.png');

INSERT INTO Partie VALUES (DEFAULT, 1, 3, 5, 20, 2000);
INSERT INTO Partie VALUES (DEFAULT, 2, 5, 10, 50, 3000);
INSERT INTO Partie VALUES (DEFAULT, 3, 2, 30, 70, 10000);
INSERT INTO Partie VALUES (DEFAULT, 1, 4, 15, 40, 4000);
INSERT INTO Partie VALUES (DEFAULT, 2, 2, 20, 60, 5000);
INSERT INTO Partie VALUES (DEFAULT, 3, 5, 25, 80, 7000);
INSERT INTO Partie VALUES (DEFAULT, 4, 3, 10, 30, 2000);
INSERT INTO Partie VALUES (DEFAULT, 5, 1, 18, 50, 6000);
INSERT INTO Partie VALUES (DEFAULT, 6, 3, 22, 55, 6500);
INSERT INTO Partie VALUES (DEFAULT, 7, 2, 14, 45, 3500);
INSERT INTO Partie VALUES (DEFAULT, 8, 4, 17, 65, 5500);
INSERT INTO Partie VALUES (DEFAULT, 9, 5, 19, 75, 8000);
INSERT INTO Partie VALUES (DEFAULT, 10, 1, 16, 35, 3000);
INSERT INTO Partie VALUES (DEFAULT, 11, 2, 21, 85, 9000);
INSERT INTO Partie VALUES (DEFAULT, 12, 3, 23, 70, 7500);
INSERT INTO Partie VALUES (DEFAULT, 13, 4, 12, 25, 2500);
INSERT INTO Partie VALUES (DEFAULT, 14, 5, 13, 33, 3300);
INSERT INTO Partie VALUES (DEFAULT, 15, 1, 11, 37, 3700);
INSERT INTO Partie VALUES (DEFAULT, 16, 2, 8, 42, 4200);
INSERT INTO Partie VALUES (DEFAULT, 17, 3, 7, 47, 4700);
INSERT INTO Partie VALUES (DEFAULT, 18, 4, 9, 52, 5200);
INSERT INTO Partie VALUES (DEFAULT, 1, 5, 6, 57, 5700);
INSERT INTO Partie VALUES (DEFAULT, 2, 1, 5, 62, 6200);
INSERT INTO Partie VALUES (DEFAULT, 3, 2, 4, 67, 6700);
INSERT INTO Partie VALUES (DEFAULT, 4, 3, 3, 72, 7200);
INSERT INTO Partie VALUES (DEFAULT, 5, 4, 2, 77, 7700);
INSERT INTO Partie VALUES (DEFAULT, 6, 5, 1, 82, 8200);
INSERT INTO Partie VALUES (DEFAULT, 7, 1, 24, 87, 8700);
INSERT INTO Partie VALUES (DEFAULT, 8, 2, 26, 92, 9200);
INSERT INTO Partie VALUES (DEFAULT, 9, 3, 28, 97, 9700);
INSERT INTO Partie VALUES (DEFAULT, 10, 4, 27, 102, 10200);
INSERT INTO Partie VALUES (DEFAULT, 11, 5, 29, 107, 10700);
INSERT INTO Partie VALUES (DEFAULT, 12, 1, 31, 112, 11200);



INSERT INTO Detient VALUES (1,2);
INSERT INTO Detient VALUES (1,5);
INSERT INTO Detient VALUES (2,3);
INSERT INTO Detient VALUES (3,1);
INSERT INTO Detient VALUES (3,4);
INSERT INTO Detient VALUES (2,6);