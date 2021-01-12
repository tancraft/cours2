
INSERT INTO `roles`(`IdRole`, `LibelleRole`) VALUES (NULL,"administrateur");
INSERT INTO `roles`(`IdRole`, `LibelleRole`) VALUES (NULL,"utilisateur");

INSERT INTO `utilisateurs`(`IdUtilisateur`, `NomUtilisateur`, `PrenomUtilisateur`, `PseudoUtilisateur`,`EmailUtilisateur`, `MotDePasseUtilisateur`, `IdRole`) VALUES (NULL,"Braguet","Georges","braguet25","braguet@gmail.com","braguet25",1);
INSERT INTO `utilisateurs`(`IdUtilisateur`, `NomUtilisateur`, `PrenomUtilisateur`, `PseudoUtilisateur`,`EmailUtilisateur`, `MotDePasseUtilisateur`, `IdRole`) VALUES (NULL,"Dupond","Alfred","dupond25","dupond@gmail.com","dupond25",2);
INSERT INTO `utilisateurs`(`IdUtilisateur`, `NomUtilisateur`, `PrenomUtilisateur`, `PseudoUtilisateur`,`EmailUtilisateur`, `MotDePasseUtilisateur`, `IdRole`) VALUES (NULL,"Thomas","Sophie","thomas25","thomas@gmail.com","thomas25",2);

INSERT INTO REPRESENTANTS (IdRepres, NomRepres, VilleRepres) VALUES (NULL, 'non affecter', 'non affecter');
INSERT INTO REPRESENTANTS (IdRepres, NomRepres, VilleRepres) VALUES (NULL, 'Stephane', 'Lyon');
INSERT INTO REPRESENTANTS (IdRepres, NomRepres, VilleRepres) VALUES (NULL, 'Benjamin', 'Paris');
INSERT INTO REPRESENTANTS (IdRepres, NomRepres, VilleRepres) VALUES (NULL, 'Leonard', 'Lyon');
INSERT INTO REPRESENTANTS (IdRepres, NomRepres, VilleRepres) VALUES (NULL, 'Antoine', 'Brest');
INSERT INTO REPRESENTANTS (IdRepres, NomRepres, VilleRepres) VALUES (NULL, 'Bruno', 'Bayonne');

INSERT INTO PRODUITS (IdProduit, NomProduit, CouleurProduit, PoidsProduit) VALUES (NULL, 'Aspirateur', 'Rouge', 3546);
INSERT INTO PRODUITS (IdProduit, NomProduit, CouleurProduit, PoidsProduit) VALUES (NULL, 'Trottinette', 'Bleu', 1423);
INSERT INTO PRODUITS (IdProduit, NomProduit, CouleurProduit, PoidsProduit) VALUES (NULL, 'Chaise', 'Blanc', 3827);
INSERT INTO PRODUITS (IdProduit, NomProduit, CouleurProduit, PoidsProduit) VALUES (NULL, 'Tapis', 'Rouge', 1423);

INSERT INTO CLIENTS (IdClient, NomClient, VilleClient) VALUES (NULL, 'Alice', 'Lyon');
INSERT INTO CLIENTS (IdClient, NomClient, VilleClient) VALUES (NULL, 'Bruno', 'Lyon');
INSERT INTO CLIENTS (IdClient, NomClient, VilleClient) VALUES (NULL, 'Charles', 'Compiègne');
INSERT INTO CLIENTS (IdClient, NomClient, VilleClient) VALUES (NULL, 'Denis', 'Montpellier');
INSERT INTO CLIENTS (IdClient, NomClient, VilleClient) VALUES (NULL, 'Emile', 'Strasbourg');

INSERT	INTO	VENTES	(IdVente, IdRepres,	IdProduit,	IdClient,	Quantite)	VALUES	(NULL,6,	1,	1,	1);
INSERT	INTO	VENTES	(IdVente, IdRepres,	IdProduit,	IdClient,	Quantite)	VALUES	(NULL,5,	1,	2,	1);
INSERT	INTO	VENTES	(IdVente, IdRepres,	IdProduit,	IdClient,	Quantite)	VALUES	(NULL,2,	2,	3,	1);
INSERT	INTO	VENTES	(IdVente, IdRepres,	IdProduit,	IdClient,	Quantite)	VALUES	(NULL,4,	3,	3,	200);
INSERT	INTO	VENTES	(IdVente, IdRepres,	IdProduit,	IdClient,	Quantite)	VALUES	(NULL,3,	4,	2,	190);
INSERT	INTO	VENTES	(IdVente, IdRepres,	IdProduit,	IdClient,	Quantite)	VALUES	(NULL,1,	3,	2,	300);
INSERT	INTO	VENTES	(IdVente, IdRepres,	IdProduit,	IdClient,	Quantite)	VALUES	(NULL,3,	1,	2,	120);
INSERT	INTO	VENTES	(IdVente, IdRepres,	IdProduit,	IdClient,	Quantite)	VALUES	(NULL,3,	1,	4,	120);
INSERT	INTO	VENTES	(IdVente, IdRepres,	IdProduit,	IdClient,	Quantite)	VALUES	(NULL,3,	4,	4,	2);
INSERT	INTO	VENTES	(IdVente, IdRepres,	IdProduit,	IdClient,	Quantite)	VALUES	(NULL,3,	1,	1,	3);
INSERT	INTO	VENTES	(IdVente, IdRepres,	IdProduit,	IdClient,	Quantite)	VALUES	(NULL,3,	4,	1,	5);
INSERT	INTO	VENTES	(IdVente, IdRepres,	IdProduit,	IdClient,	Quantite)	VALUES	(NULL,3,	1,	3,	1);

INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("admin","FR","administrateur");
INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("admin","EN","admin");

INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("user","FR","utilisateur");
INSERT INTO `texte`(`codeTexte`, `codeLangue`, `Texte`) VALUES ("user","EN","user");