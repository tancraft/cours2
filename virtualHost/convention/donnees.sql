INSERT INTO `roles` (`idRole`, `libelleRole`) VALUES ('1', 'Administration');	
INSERT INTO `roles` (`idRole`, `libelleRole`) VALUES ('2', 'Formateur');
INSERT INTO `roles` (`idRole`, `libelleRole`) VALUES ('3', 'Tuteur');	
INSERT INTO `roles` (`idRole`, `libelleRole`) VALUES ('4', 'Stagiaire');

INSERT INTO `utilisateurs` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `emailUtilisateur`, `mdpUtilisateur`, `idRole`) VALUES (NULL, 'POIX', 'Martine', 'martine.poix@gmail.com', 'toto',  '2');
INSERT INTO `utilisateurs` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `emailUtilisateur`, `mdpUtilisateur`, `idRole`) VALUES (NULL, 'ZOZO', 'Thomas', 'thomas.zozo@gmail.com', 'toto',  '2');
INSERT INTO `utilisateurs` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `emailUtilisateur`, `mdpUtilisateur`, `idRole`) VALUES (NULL, 'SIMS', 'Alfred', 'alfred.sims@gmail.com', 'toto',  '2');	
INSERT INTO `utilisateurs` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `emailUtilisateur`, `mdpUtilisateur`, `idRole`) VALUES (NULL, 'toto', 'TOTO', 'toto@gmail.com', 'user', '1');	
INSERT INTO `utilisateurs` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `emailUtilisateur`, `mdpUtilisateur`, `idRole`) VALUES (NULL, 'RJEB', 'Zied', 'zied@gmail.com', 'user', '4');	
INSERT INTO `utilisateurs` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `emailUtilisateur`, `mdpUtilisateur`, `idRole`) VALUES (NULL, 'BOSS', 'Tuteur', 'tuteur@gmail.com', 'user', '3');

INSERT INTO `formations`(`idFormation`, `libelleFormation`) VALUES (NULL,"ADMINISTRATEUR D’INFRASTRUCTURES SÉCURISÉES");
INSERT INTO `formations`(`idFormation`, `libelleFormation`) VALUES (NULL,"INSTALLATEUR DE RÉSEAUX DE TÉLÉCOMMUNICATIONS");
INSERT INTO `formations`(`idFormation`, `libelleFormation`) VALUES (NULL,"CONNAÎTRE ET APPLIQUER LA MÉTHODE 5S");
INSERT INTO `formations`(`idFormation`, `libelleFormation`) VALUES (NULL,"AGENT DE FABRICATION D'ENSEMBLE MÉTALLIQUE");
INSERT INTO `formations`(`idFormation`, `libelleFormation`) VALUES (NULL,"CONDUCTEUR D'INSTALLATION ET DE MACHINES AUTOMATISÉES");
INSERT INTO `formations`(`idFormation`, `libelleFormation`) VALUES (NULL,"MÉCANICIEN DE MAINTENANCE AUTOMOBILE");
INSERT INTO `formations`(`idFormation`, `libelleFormation`) VALUES (NULL,"PARCOURS CRÉATEURS D'ENTREPRISE");
INSERT INTO `formations`(`idFormation`, `libelleFormation`) VALUES (NULL,"DÉVELOPPEUR WEB ET WEB MOBILE");
INSERT INTO `formations`(`idFormation`, `libelleFormation`) VALUES (NULL,"FLUIDES FRIGORIGÈNES : ATTESTATION D’APTITUDE CATÉGORIE I");
INSERT INTO `formations`(`idFormation`, `libelleFormation`) VALUES (NULL,"AUTOMATES SIEMENS S7 300 - S7 400 AVEC STEP7 : ASSURER LA MAINTENANCE RÉSEAU PARTIE 1");
INSERT INTO `formations`(`idFormation`, `libelleFormation`) VALUES (NULL,"FORMATION PRÉPARATOIRE AUX FORMATIONS DU TERTIAIRE NIVEAU V");
	
	
	
INSERT INTO `entreprises` (`idEntreprise`, `raisonSociale`, `statutJuridiqueEnt`, `adresseEnt`, `numSiretEnt`, `indexSiret`, `telEnt`, `assureurEnt`, `numSocietaire`, `nomRepresentant`, `prenomRepresentant`, `fctRepresentant`, `telRepresentant`, `mailRepresentant`, `idVille`) VALUES (NULL, 'AfpaDev', 'SARL', '43 rue du code', '87416873781754', '1', '0604060406', 'MACIF', '48684132', 'Jacque', 'Chirac', 'Developpeur', '0404040404', 'jacque.chirac@gmail.com', '1');	
INSERT INTO `entreprises` (`idEntreprise`, `raisonSociale`, `statutJuridiqueEnt`, `adresseEnt`, `numSiretEnt`, `indexSiret`, `telEnt`, `assureurEnt`, `numSocietaire`, `nomRepresentant`, `prenomRepresentant`, `fctRepresentant`, `telRepresentant`, `mailRepresentant`, `idVille`) VALUES (NULL, 'AfpaDev', 'SAS', '42 rue du tata', '87416873781754', '2', '0604060406', 'MACIF', '48684132', 'Jacque', 'Chirac', 'Developpeur', '0404040404', 'jacque.chirac@gmail.com', '1');	
INSERT INTO `entreprises` (`idEntreprise`, `raisonSociale`, `statutJuridiqueEnt`, `adresseEnt`, `numSiretEnt`, `indexSiret`, `telEnt`, `assureurEnt`, `numSocietaire`, `nomRepresentant`, `prenomRepresentant`, `fctRepresentant`, `telRepresentant`, `mailRepresentant`, `idVille`) VALUES (NULL, 'AfpaDev', 'EURL', '21 rue du toto', '87416873781754', '3', '0612548715', 'MACIF', '48684132', 'Jacque', 'Chirac', 'Developpeur', '0404040404', 'jacque.chirac@gmail.com', '1');	
INSERT INTO `entreprises` (`idEntreprise`, `raisonSociale`, `statutJuridiqueEnt`, `adresseEnt`, `numSiretEnt`, `indexSiret`, `telEnt`, `assureurEnt`, `numSocietaire`, `nomRepresentant`, `prenomRepresentant`, `fctRepresentant`, `telRepresentant`, `mailRepresentant`, `idVille`) VALUES (NULL, 'AfpaDev', 'SNC', '17 rue du tutu', '87416873781754', '4', '0715806024', 'MACIF', '48684132', 'Jacque', 'Chirac', 'Developpeur', '0404040404', 'jacque.chirac@gmail.com', '1');	

INSERT INTO `tuteurs` (`idTuteur`, `nomTuteur`, `prenomTuteur`, `fonctionTuteur`, `telTuteur`, `mailTuteur`, `idEntreprise`) VALUES (NULL, 'Tuteur', 'De fou', 'developpeur', '0614151602', 'toto@gmail.com', '1');	
INSERT INTO `tuteurs` (`idTuteur`, `nomTuteur`, `prenomTuteur`, `fonctionTuteur`, `telTuteur`, `mailTuteur`, `idEntreprise`) VALUES (NULL, 'Nico', 'sarko', 'PDG', '0614475402', 'nico@gmail.com', '2');	INSERT INTO `tuteurs` (`idTuteur`, `nomTuteur`, `prenomTuteur`, `fonctionTuteur`, `telTuteur`, `mailTuteur`, `idEntreprise`) VALUES (NULL, 'Tuteur', 'De fou', 'developpeur', '0614151602', 'toto@gmail.com', '1');
INSERT INTO `tuteurs` (`idTuteur`, `nomTuteur`, `prenomTuteur`, `fonctionTuteur`, `telTuteur`, `mailTuteur`, `idEntreprise`) VALUES (NULL, 'Pierre', 'Lapin', 'developpeur', '0445145402', 'pierre@gmail.com', '1');	

INSERT INTO `entreprises` (`idEntreprise`,`raisonSociale`,`statutJuridiqueEnt`,`adresseEnt`,`numSiretEnt`,`indexSiret`,`telEnt`,`assureurEnt`,`numSocietaire`,`nomRepresentant`,`prenomRepresentant`,`fctRepresentant`, `telRepresentant`,`mailRepresentant`,`idVille`) VALUES (NULL,"Pellentesque Habitant Morbi Institute","818979098-00006","08 19 37 95 23","Et Malesuada Limited","7880782597146189","Hall","Ingrid","05 82 23 86 65","diam.Pellentesque.habitant@pretiumaliquetmetus.net",3);
INSERT INTO `entreprises` (`idEntreprise`,`raisonSociale`,`statutJuridiqueEnt`,`adresseEnt`,`numSiretEnt`,`indexSiret`,`telEnt`,`assureurEnt`,`numSocietaire`,`nomRepresentant`,`prenomRepresentant`,`fctRepresentant`, `telRepresentant`,`mailRepresentant`,`idVille`) VALUES (NULL,"Ligula Limited","479060576-00002","04 68 38 20 70","Duis Dignissim Company","3556707340853576","Perez","Timon","02 89 62 61 94","nisi.magna@Phasellusdolor.org",2);
INSERT INTO `entreprises` (`idEntreprise`,`raisonSociale`,`statutJuridiqueEnt`,`adresseEnt`,`numSiretEnt`,`indexSiret`,`telEnt`,`assureurEnt`,`numSocietaire`,`nomRepresentant`,`prenomRepresentant`,`fctRepresentant`, `telRepresentant`,`mailRepresentant`,`idVille`) VALUES (NULL,"Eu Elit Nulla PC","826424558-00003","05 22 89 87 52","Curabitur LLC","0995715917806923","Ford","Kitra","06 86 74 40 68","scelerisque.scelerisque@DonecnibhQuisque.net",3);
INSERT INTO `entreprises` (`idEntreprise`,`raisonSociale`,`statutJuridiqueEnt`,`adresseEnt`,`numSiretEnt`,`indexSiret`,`telEnt`,`assureurEnt`,`numSocietaire`,`nomRepresentant`,`prenomRepresentant`,`fctRepresentant`, `telRepresentant`,`mailRepresentant`,`idVille`) VALUES (NULL,"Lectus Pede PC","793664376-00001","04 78 22 05 53","Sapien Corp.","4317780658754571","Petersen","Ciaran","08 80 13 68 36","quis.pede.Praesent@elitAliquam.net",3);
INSERT INTO `entreprises` (`idEntreprise`,`raisonSociale`,`statutJuridiqueEnt`,`adresseEnt`,`numSiretEnt`,`indexSiret`,`telEnt`,`assureurEnt`,`numSocietaire`,`nomRepresentant`,`prenomRepresentant`,`fctRepresentant`, `telRepresentant`,`mailRepresentant`,`idVille`) VALUES (NULL,"Vulputate Limited""116118209-00000","Mauris Vestibulum Neque Corporation","04 50 63 34 55","Nulla Consulting","6240692052903041","Jones","Barry","07 76 49 57 90","non@augueporttitor.co.uk",24);
INSERT INTO `entreprises` (`idEntreprise`,`raisonSociale`,`statutJuridiqueEnt`,`adresseEnt`,`numSiretEnt`,`indexSiret`,`telEnt`,`assureurEnt`,`numSocietaire`,`nomRepresentant`,`prenomRepresentant`,`fctRepresentant`, `telRepresentant`,`mailRepresentant`,`idVille`) VALUES (NULL,"Facilisis Facilisis Magna Limited","993747880-00009","04 97 38 65 89","Et Commodo LLC","5215714382014296","Raymond","Indigo","02 06 74 28 93","est.congue.a@risusNullaeget.net",9);
INSERT INTO `entreprises` (`idEntreprise`,`raisonSociale`,`statutJuridiqueEnt`,`adresseEnt`,`numSiretEnt`,`indexSiret`,`telEnt`,`assureurEnt`,`numSocietaire`,`nomRepresentant`,`prenomRepresentant`,`fctRepresentant`, `telRepresentant`,`mailRepresentant`,`idVille`) VALUES (NULL,"Enim Non Company","121314223-00003","02 04 92 33 20","Felis Institute","4506729184122608","Delaney","Ima","02 75 41 82 17","Nunc@indolorFusce.net",8);
INSERT INTO `entreprises` (`idEntreprise`,`raisonSociale`,`statutJuridiqueEnt`,`adresseEnt`,`numSiretEnt`,`indexSiret`,`telEnt`,`assureurEnt`,`numSocietaire`,`nomRepresentant`,`prenomRepresentant`,`fctRepresentant`, `telRepresentant`,`mailRepresentant`,`idVille`) VALUES (NULL,"Arcu Sed Incorporated","195499272-00001","05 45 06 26 42","Nascetur Ridiculus Mus Inc.","7121956427995593","Miles","Wyoming","05 69 51 65 99","Mauris.vel@eratnonummy.org",4);
INSERT INTO `entreprises` (`idEntreprise`,`raisonSociale`,`statutJuridiqueEnt`,`adresseEnt`,`numSiretEnt`,`indexSiret`,`telEnt`,`assureurEnt`,`numSocietaire`,`nomRepresentant`,`prenomRepresentant`,`fctRepresentant`, `telRepresentant`,`mailRepresentant`,`idVille`) VALUES (NULL,"Ut Odio PC","269947073-00004","07 08 66 74 16","Maecenas Institute","0130392583885715","Lyons","Baxter","08 10 90 55 94","consectetuer@Duisdignissim.net",18);
INSERT INTO `entreprises` (`idEntreprise`,`raisonSociale`,`statutJuridiqueEnt`,`adresseEnt`,`numSiretEnt`,`indexSiret`,`telEnt`,`assureurEnt`,`numSocietaire`,`nomRepresentant`,`prenomRepresentant`,`fctRepresentant`, `telRepresentant`,`mailRepresentant`,`idVille`) VALUES (NULL,"Dui Inc.","932237100-00007","03 35 77 08 83","Donec Incorporated","4682031702470060","Mcleod","Elizabeth","01 45 48 20 36","interdum.Curabitur.dictum@feugiatplaceratvelit.org",6);
INSERT INTO `entreprises` (`idEntreprise`,`raisonSociale`,`statutJuridiqueEnt`,`adresseEnt`,`numSiretEnt`,`indexSiret`,`telEnt`,`assureurEnt`,`numSocietaire`,`nomRepresentant`,`prenomRepresentant`,`fctRepresentant`, `telRepresentant`,`mailRepresentant`,`idVille`) VALUES (NULL,"Elit Sed LLP","502981905-00008","07 64 34 50 83","Sem Ut Limited","4125639599419708","Wilson","Rajah","05 45 77 20 04","eget.odio.Aliquam@Craspellentesque.edu",8);
INSERT INTO `entreprises` (`idEntreprise`,`raisonSociale`,`statutJuridiqueEnt`,`adresseEnt`,`numSiretEnt`,`indexSiret`,`telEnt`,`assureurEnt`,`numSocietaire`,`nomRepresentant`,`prenomRepresentant`,`fctRepresentant`, `telRepresentant`,`mailRepresentant`,`idVille`) VALUES (NULL,"Eu Associates""315352898-00003","03 04 94 37 72","Pede Company","1436809966716512","Todd","Brian","08 79 45 57 30","pulvinar@convallis.co.uk",9);
INSERT INTO `entreprises` (`idEntreprise`,`raisonSociale`,`statutJuridiqueEnt`,`adresseEnt`,`numSiretEnt`,`indexSiret`,`telEnt`,`assureurEnt`,`numSocietaire`,`nomRepresentant`,`prenomRepresentant`,`fctRepresentant`, `telRepresentant`,`mailRepresentant`,`idVille`) VALUES (NULL,"Aliquam Erat Volutpat Corporation","696895457-00005","05 14 11 55 56","At Corp.","9647852687678082","Mendez","Emerson","09 25 00 43 61","Sed.nulla.ante@necorciDonec.ca",1);
INSERT INTO `entreprises` (`idEntreprise`,`raisonSociale`,`statutJuridiqueEnt`,`adresseEnt`,`numSiretEnt`,`indexSiret`,`telEnt`,`assureurEnt`,`numSocietaire`,`nomRepresentant`,`prenomRepresentant`,`fctRepresentant`, `telRepresentant`,`mailRepresentant`,`idVille`) VALUES (NULL,"Ut Eros Company","895935740-00004","03 35 99 17 86","Sit Amet Dapibus Company","5034035006878489","Sears","Tarik","08 50 11 02 31","amet.dapibus@infaucibusorci.co.uk",2);
INSERT INTO `entreprises` (`idEntreprise`,`raisonSociale`,`statutJuridiqueEnt`,`adresseEnt`,`numSiretEnt`,`indexSiret`,`telEnt`,`assureurEnt`,`numSocietaire`,`nomRepresentant`,`prenomRepresentant`,`fctRepresentant`, `telRepresentant`,`mailRepresentant`,`idVille`) VALUES (NULL,"Massa Limited","176915619-00009","08 58 65 05 78","A Sollicitudin Orci Inc.","1773353246202368","Chavez","Erica","09 75 97 37 95","convallis.ante.lectus@neque.net",3);
INSERT INTO `entreprises` (`idEntreprise`,`raisonSociale`,`statutJuridiqueEnt`,`adresseEnt`,`numSiretEnt`,`indexSiret`,`telEnt`,`assureurEnt`,`numSocietaire`,`nomRepresentant`,`prenomRepresentant`,`fctRepresentant`, `telRepresentant`,`mailRepresentant`,`idVille`) VALUES (NULL,"Commodo Hendrerit Donec LLC","410866016-00000","07 78 20 96 59","Sagittis Felis Company","9090397768481322","Park","Ursa","08 59 45 65 65","molestie.Sed@volutpatNulla.co.uk",6);
INSERT INTO `entreprises` (`idEntreprise`,`raisonSociale`,`statutJuridiqueEnt`,`adresseEnt`,`numSiretEnt`,`indexSiret`,`telEnt`,`assureurEnt`,`numSocietaire`,`nomRepresentant`,`prenomRepresentant`,`fctRepresentant`, `telRepresentant`,`mailRepresentant`,`idVille`) VALUES (NULL,"Posuere At Velit Inc.","340855022-00000","07 56 97 53 18","Montes Institute","2153477651171995","Dennis","Garrett","08 74 67 49 75","non@cursusetmagna.net",5);
INSERT INTO `entreprises` (`idEntreprise`,`raisonSociale`,`statutJuridiqueEnt`,`adresseEnt`,`numSiretEnt`,`indexSiret`,`telEnt`,`assureurEnt`,`numSocietaire`,`nomRepresentant`,`prenomRepresentant`,`fctRepresentant`, `telRepresentant`,`mailRepresentant`,`idVille`) VALUES (NULL,"Vitae Inc.","339483398-00006","07 89 09 02 66","In PC","8548567751140816","Holloway","Fulton","07 83 18 90 77","sem.Pellentesque@vulputateposuere.net",8);
INSERT INTO `entreprises` (`idEntreprise`,`raisonSociale`,`statutJuridiqueEnt`,`adresseEnt`,`numSiretEnt`,`indexSiret`,`telEnt`,`assureurEnt`,`numSocietaire`,`nomRepresentant`,`prenomRepresentant`,`fctRepresentant`, `telRepresentant`,`mailRepresentant`,`idVille`) VALUES (NULL,("Massa Institute","852751114-00004","02 75 26 12 36","Libero Nec LLC","9873092440718609","Bolton","Montana","06 61 52 70 00","elementum.lorem.ut@erategetipsum.org",38);
INSERT INTO `entreprises` (`idEntreprise`,`raisonSociale`,`statutJuridiqueEnt`,`adresseEnt`,`numSiretEnt`,`indexSiret`,`telEnt`,`assureurEnt`,`numSocietaire`,`nomRepresentant`,`prenomRepresentant`,`fctRepresentant`, `telRepresentant`,`mailRepresentant`,`idVille`) VALUES (NULL,"Massa Institute","372217323-00008","09 22 84 64 79","Ullamcorper Institute","6632738630128838","Sargent","Victor","01 68 27 33 56","ullamcorper.eu@ornare.org",8);




















