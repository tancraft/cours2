1. Afficher toutes les informations concernant les employés.
SELECT * FROM `employe`
2. Afficher toutes les informations concernant les départements.
SELECT `dept`.`nom` FROM `dept`
3. Afficher le nom, la date d embauche, le numéro du supérieur, le numéro de département et le salaire de tous les employés.
SELECT `noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom` FROM `employe`
4. Afficher le titre de tous les employés.
SELECT `noemp`, `nom`, `prenom`, `nosup`, `titre` FROM `employe`
5. Afficher les différentes valeurs des titres des employés.
SELECT DISTINCT `titre` FROM `employe`
6. Afficher le nom, le numéro d employé et le numéro du département des employés dont le titre est « Secrétaire ».
SELECT DISTINCT `nom`,`noemp`, `titre`, `nodep` FROM `employe` WHERE `titre` = "secrétaire"
7. Afficher le nom et le numéro de département dont le numéro de département est supérieur à 40.
SELECT `nom`,`nodept` FROM `dept` WHERE `nodept`>40 ORDER BY `nodept`
8. Afficher le nom et le prénom des employés dont le nom est alphabétiquement antérieur au prénom.
SELECT `nom`,`prenom`,`noemp` FROM `employe` WHERE `nom` < `prenom` ORDER BY `nom`
9. Afficher le nom, le salaire et le numéro du département des employés dont le titre est « Représentant »,
 le numéro de département est 35 et le salaire est supérieur à 20000.
SELECT `nom`, `nodep`, `salaire` FROM `employe` WHERE `nodep` = 35 AND `salaire` > 20000
10. Afficher le nom, le titre et le salaire des employés dont le titre est « Représentant » ou dont le titre est « Président ».
SELECT `nom`, `titre`, `salaire` FROM `employe` WHERE `titre` = "Représentant"  OR `titre` = "Président" ORDER BY `titre`
11. Afficher le nom, le titre, le numéro de département, le salaire des employés du département 34,
dont le titre est « Représentant » ou « Secrétaire ».
SELECT `nom`, `titre`, `nodep`, `salaire` FROM `employe` WHERE `nodep` = 34 AND `titre` = "Représentant" OR `titre` = "secrétaire" ORDER BY `nom`
SELECT `nom`, `titre`, `nodep`, `salaire` FROM `employe` WHERE `nodep`=34 AND (`titre`="Représentant" OR `titre`="secrétaire" )
12. Afficher le nom, le titre, le numéro de département, le salaire des employés dont le titre est Représentant, ou dont le titre est Secrétaire dans le département numéro 34.
SELECT `nom`, `titre`, `nodep`, `salaire` from `employe` WHERE `titre`= "représentant" OR (`titre`= "secrétaire" AND `nodep` = 34) 
13. Afficher le nom, et le salaire des employés dont le salaire est compris entre 20000 et 30000.
SELECT `nom`, `salaire` FROM `employe` WHERE `salaire`>= 20000 AND `salaire`=< 30000
15. Afficher le nom des employés commençant par la lettre « H ».
SELECT `nom` FROM `employe` WHERE `nom` LIKE "h%"
16. Afficher le nom des employés se terminant par la lettre « n ».
SELECT `nom` FROM `employe` WHERE `nom` LIKE "%n"
17. Afficher le nom des employés contenant la lettre « u » en 3ème position.
SELECT `nom` FROM `employe` WHERE `nom` LIKE "__u%"
SELECT `nom` FROM `employe` WHERE LOCATE("U",`nom`)=3
18. Afficher le salaire et le nom des employés du service 41 classés par salaire croissant.
SELECT `nom`, `salaire` FROM `employe` WHERE `nodep` = 41 ORDER BY `salaire`
19. Afficher le salaire et le nom des employés du service 41 classés par salaire décroissant.
SELECT `nom`, `salaire` FROM `employe` WHERE `nodep` = 41 ORDER BY `salaire` DESC
20. Afficher le titre, le salaire et le nom des employés classés par titre croissant et par salaire décroissant.
SELECT `titre`, `salaire`, `nom` FROM `employe` WHERE `nodep` = 41 ORDER BY `titre`, `salaire` DESC
21. Afficher le taux de commission, le salaire et le nom des employés classés par taux de commission croissante.
SELECT `tauxcom`, `salaire`, `nom` FROM `employe` WHERE `tauxcom` ORDER BY `tauxcom`
22. Afficher le nom, le salaire, le taux de commission et le titre des employés dont le taux de commission n est pas renseigné.
SELECT `salaire`, `nom`, `tauxcom`, `titre` FROM `employe` WHERE `tauxcom` IS NULL
23. Afficher le nom, le salaire, le taux de commission et le titre des employés dont le taux de commission est renseigné.
SELECT `salaire`, `nom`, `tauxcom`, `titre` FROM `employe` WHERE `tauxcom` IS NOT NULL
24. Afficher le nom, le salaire, le taux de commission, le titre des employés dont le taux de commission est inférieur à 15.
SELECT `salaire`, `nom`, `tauxcom`, `titre` FROM `employe` WHERE `tauxcom` < 15
25. Afficher le nom, le salaire, le taux de commission, le titre des employés dont le taux de commission est supérieur à 15.
SELECT `salaire`, `nom`, `tauxcom`, `titre` FROM `employe` WHERE `tauxcom` > 15
26. Afficher le nom, le salaire, le taux de commission et la commission des employés dont le taux de commission n est pas nul.
(la commission est calculée en multipliant le salaire par le taux de commission)
SELECT `nom`,`salaire`, `tauxcom`, `titre`,(`tauxcom`/100 * `salaire`) AS 'comission' FROM `employe` WHERE `tauxcom` IS NOT NULL
SELECT `nom`,`salaire`, `tauxcom`, `titre`,(`tauxcom` * `salaire`) AS 'comission' FROM `employe` WHERE `tauxcom` IS NOT NULL
27. Afficher le nom, le salaire, le taux de commission,
la commission des employés dont le taux de commission n est pas nul, classé par taux de commission croissant.
SELECT `nom`,`salaire`, `tauxcom`, `titre`,(`tauxcom`/100 * `salaire`) AS 'comission' FROM `employe` WHERE `tauxcom` IS NOT NULL ORDER BY `tauxcom`
SELECT `nom`,`salaire`, `tauxcom`, `titre`,(`tauxcom`* `salaire`) AS 'comission' FROM `employe` WHERE `tauxcom` IS NOT NULL ORDER BY `tauxcom`
28. Afficher le nom et le prénom (concaténés) des employés. Renommer les colonnes
SELECT CONCAT(`nom`, " ", `prenom`) AS "infos" FROM `employe`
29. Afficher les 5 premières lettres du nom des employés.
SELECT SUBSTRING(`nom`, 1, 5) FROM `employe`
30. Afficher le nom et le rang de la lettre « r » dans le nom des employés.
SELECT LOCATE("r", `nom`) FROM `employe`
31. Afficher le nom, le nom en majuscule et le nom en minuscule de l employé dont le nom est Vrante.
SELECT LOWER(`nom`), UPPER(`nom`)  FROM `employe` WHERE `nom`= "vrante"
32. Afficher le nom et le nombre de caractères du nom des employés.
SELECT `nom`, LENGTH(`nom`)  FROM `employe`
fiche 2
1.Rechercher le prénom des employés et le numéro de la région de leur département.
SELECT `employe`.`nom`, `dept`.`nom`,`dept`.`noregion` FROM `employe` INNER JOIN `dept` ON `employe`.`nodep` = `dept`.`nodept`
2.Rechercher le numéro du département, le nom du département,
le nom des employés classés par numéro de département (renommer les tables utilisées).
SELECT `dept`.`nodept`,`dept`.`nom`, `employe`.`nom` AS "employe" FROM `employe` INNER JOIN `dept` ON `employe`.`nodep` = `dept`.`nodept` ORDER BY `dept`.`nodept`
3.Rechercher le nom des employés du département Distribution.
SELECT `employe`.`nom` FROM `employe` INNER JOIN `dept` ON `employe`.`nodep` = `dept`.`nodept` WHERE `dept`.`nom` = "distribution"
4.Rechercher le nom et le salaire des employés qui gagnent plus que leur patron, et le nom et le salaire de leur patron. 
SELECT `nom` AS "employé", `salaire` AS "salaire employé", (SELECT `nom` FROM `employe` WHERE `titre`="président")AS "nom du sup", (SELECT `salaire` FROM `employe` WHERE `titre`="président")AS "salaire du sup" FROM `employe` WHERE `salaire` >(SELECT `salaire` FROM `employe` WHERE `titre`="président") 
5.Rechercher le nom et le titre des employés qui ont le même titre que Amartakaldire.
SELECT `nom`, `titre` FROM `employe` WHERE `titre` = (SELECT `titre` FROM `employe` WHERE `nom`="Amartakaldire")
6.Rechercher le nom, le salaire et le numéro de département des employés qui gagnent plus qu un seul employé du département 31, classés par numéro de département et salaire.
SELECT `employe`.`nom`, `employe`.`salaire`, `employe`.`nodep` FROM `employe` WHERE `employe`.`salaire`> (SELECT `salaire` FROM `employe`) AND  `employe`.`nodep` = 31
SELECT `employe`.`nom`, `employe`.`salaire`, `employe`.`nodep` FROM `employe` WHERE `employe`.`salaire`> ANY (SELECT `salaire` FROM `employe` WHERE `nodep`="31")
7.Rechercher le nom, le salaire et le numéro de département des employés qui gagnent plus que tous les employés du département 31, classés par numéro de département et salaire.
SELECT `employe`.`nom`, `employe`.`salaire`, `employe`.`nodep` FROM `employe` WHERE `employe`.`salaire`>(SELECT MAX(`salaire`) FROM `employe` WHERE `employe`.`nodep`=31) ORDER BY `employe`.`nodep`,`employe`.`salaire`
8.Rechercher le nom et le titre des employés du service 31 qui ont un titre que l on trouve dans le département 32.
SELECT `employe`.`nom`, `employe`.`titre` FROM `employe` WHERE `employe`.`nodep` = 31 AND `employe`.`titre` IN (SELECT `employe`.`titre` FROM `employe` WHERE `employe`.`nodep` = 32)
9.Rechercher le nom et le titre des employés du service 31 qui ont un titre l on ne trouve pas dans le département 32.
SELECT `employe`.`nom`, `employe`.`titre` FROM `employe`WHERE `employe`.`nodep` = 31 AND `employe`.`titre` NOT IN (SELECT `employe`.`titre` FROM `employe` WHERE `employe`.`nodep` = 32)
10.Rechercher le nom, le titre et le salaire des employés qui ont le même titre et le même salaire que Fairant.
SELECT `employe`.`nom`, `employe`.`titre` FROM `employe` WHERE `employe`.`titre` = (SELECT `employe`.`titre` FROM `employe` WHERE `employe`.`nom` = "fairent") AND `employe`.`salaire` = (SELECT `employe`.`salaire` FROM `employe` WHERE `employe`.`nom` = "fairent")
11.Rechercher le numéro de département, le nom du département, le nom des employés, en affichant aussi les départements dans lesquels il n y a personne, classés par numéro de département.
SELECT `employe`.`nodep`, `dept`.`nom`, `employe`.`nom`, `employe`.`titre` FROM `employe` RIGHT JOIN `dept` ON `employe`.`nodep` = `dept`.`nodept` ORDER BY `employe`.`nodep`
12.Calculer le nombre d employés de chaque titre.
SELECT `titre`, COUNT(*) FROM `employe` GROUP BY `titre` ORDER BY COUNT(*)
13.Calculer la moyenne des salaires et leur somme, par région.
SELECT `dept`.`noregion`, AVG(`employe`.`salaire`), SUM(`employe`.`salaire`) FROM `employe` INNER JOIN `dept` ON `employe`.`nodep` = `dept`.`nodept` GROUP BY `noregion`
14.Afficher les numéros des départements ayant au moins 3 employés.
SELECT `employe`.`nodep` FROM `employe` GROUP BY `employe`.`nodep` HAVING COUNT(*) >= 3
SELECT `nodep`,Total FROM (SELECT `nodep`,COUNT(`noemp`)as Total FROM `employe` group by `nodep`) as e WHERE Total>=3
15.Afficher les lettres qui sont l initiale d au moins trois employés.
SELECT init FROM (SELECT init ,COUNT(*) as "somme" FROM (SELECT LEFT(`nom`,1) as init FROM `employe`) as i GROUP BY init) as e WHERE somme>=3
SELECT LEFT(`nom`,1) AS Initial FROM `employe`GROUP BY Initial HAVING COUNT(LEFT(`nom`,1))>2
16.Rechercher le salaire maximum et le salaire minimum parmi tous les salariés et l écart entre les deux.
SELECT MAX(`employe`.`salaire`)-MIN(`employe`.`salaire`) FROM `employe`
17.Rechercher le nombre de titres différents.
SELECT COUNT(DISTINCT `employe`.`titre`) as "Nombre de titres différents" FROM `employe`
18.Pour chaque titre, compter le nombre d employés possédant ce titre.
SELECT `employe`.`titre`, COUNT(*) FROM `employe` GROUP BY `employe`.`titre`
19.Pour chaque nom de département, afficher le nom du département et le nombre d employés.
SELECT `dept`.`nom`, COUNT(`employe`.`noemp`) FROM `dept` INNER JOIN `employe` ON `dept`.`nodept` = `employe`.`nodep` GROUP BY `dept`.`nom`
20.Rechercher les titres et la moyenne des salaires par titre dont la moyenne est supérieure à la moyenne des salaires des Représentants.
SELECT `employe`.`titre`, AVG(`employe`.`salaire`) FROM `employe` GROUP BY `employe`.`titre` HAVING AVG(`employe`.`salaire`) > (SELECT AVG(`employe`.`salaire`) FROM `employe` WHERE `employe`.`titre` = "représentant")
21.Rechercher le nombre de salaires renseignés et le nombre de taux de commission renseignés.
SELECT (SELECT COUNT(*) FROM `employe` WHERE `employe`.`salaire` IS NOT NULL),(SELECT COUNT(*) FROM `employe` WHERE `employe`.`tauxcom` IS NOT NULL)
