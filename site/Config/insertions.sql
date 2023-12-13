INSERT INTO Joueur VALUES (DEFAULT,'Lenulos93220','aaa');
INSERT INTO Joueur VALUES (DEFAULT,'LaBouse93130','zzz');
INSERT INTO Joueur VALUES (DEFAULT,'LeBG95470','bbb');


INSERT INTO Ennemis VALUES (DEFAULT,'.sh',10,10,2,'Ennemi de base, dégâts simple');
INSERT INTO Ennemis VALUES (DEFAULT,'Archive',20,8,4,'Ennemi qui se sépare en plusieurs .sh quand il meurt. Plus lent mais plus de vie.');
INSERT INTO Ennemis VALUES (DEFAULT,'Virus',30,6,6,'Ennemi assez résistant, inflige un effet de poisson au disque dur lorsqu’il le touche');
INSERT INTO Ennemis VALUES (DEFAULT,'Scam',40,4,8,'Ennemi qui bloque le jeu en faisant apparaître une pop up si il touche le disque dur.');
INSERT INTO Ennemis VALUES (DEFAULT,'Kamikaze',50,2,10,'N’est pas un réel ennemi, il s’agit des “ennemis” créés par le démineur. Ces ennemis font le chemin inverse et explosent au contact du premier ennemi touché ou au bout de 5 secondes. Quand il explose, des morceaux de shrapnels sont projetés pour infliger des dégâts aux ennemis.');
INSERT INTO Ennemis VALUES (DEFAULT,'.exe',70,2,15,'Ennemi plus fort que la moyenne, quand il touche le disque dur, supprime une de nos tours de manière aléatoire.');

INSERT INTO Map VALUES (DEFAULT,'Map 1','',1);
INSERT INTO Map VALUES (DEFAULT,'Map 2','',1);
INSERT INTO Map VALUES (DEFAULT,'Map 3','',2);
INSERT INTO Map VALUES (DEFAULT,'Map 4','',3);
INSERT INTO Map VALUES (DEFAULT,'Map 5','',2);

INSERT INTO Tourelle VALUES (DEFAULT,'Task Killer',20,50);
INSERT INTO Tourelle VALUES (DEFAULT,'CCleaner',40,100);
INSERT INTO Tourelle VALUES (DEFAULT,'Démineur',60,200);
INSERT INTO Tourelle VALUES (DEFAULT,'InternetExplorer',80,325);
INSERT INTO Tourelle VALUES (DEFAULT,'NordVPN',100,500);
INSERT INTO Tourelle VALUES (DEFAULT,'PDFconverter',120,600);

INSERT INTO Partie VALUES (DEFAULT,1,3,5,20,2000);
INSERT INTO Partie VALUES (DEFAULT,2,5,10,50,3000);
INSERT INTO Partie VALUES (DEFAULT,3,2,30,70,10000);

INSERT INTO Detient VALUES (DEFAULT,1,2);
INSERT INTO Detient VALUES (DEFAULT,1,5);
INSERT INTO Detient VALUES (DEFAULT,2,3);
INSERT INTO Detient VALUES (DEFAULT,3,1);
INSERT INTO Detient VALUES (DEFAULT,3,4);
INSERT INTO Detient VALUES (DEFAULT,2,6);