
CREATE TABLE `client` (
  `NUMCLIENT` int(5) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(50) DEFAULT NULL,
  `PRENOM` varchar(50) DEFAULT NULL,
  `LOGIN` varchar(50) DEFAULT NULL,
  `PASSWD` varchar(50) DEFAULT NULL,
  `ADRESSE` varchar(50) DEFAULT NULL,
  `TELEPHONE` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `PROFESSION` varchar(50) DEFAULT NULL,
  `SEXE` varchar(50) DEFAULT NULL,
  `CODEPOSTAL` varchar(50) DEFAULT NULL,
  `PAYS` varchar(50) DEFAULT NULL,
  `VILLE` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`NUMCLIENT`)
);

INSERT INTO `client` VALUES(11, 'Winckel', 'David', 'dwinckel', '4fad0b0838363df99cadf36a08edd16b', '2 rue de l''angle', '0388961155', 'd.winckel@gmail.com', 'Ingénieur', 'Male', '67980', 'France', 'Hangenbieten');

CREATE TABLE `commande` (
  `NUNCLIENT` varchar(50) DEFAULT NULL,
  `DATECMD` datetime DEFAULT NULL,
  `NUMCMD` int(4) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`NUMCMD`)
) ;


CREATE TABLE `commander` (
  `NUMCLIENT` int(5) NOT NULL DEFAULT '0',
  `NUMCMD` int(4) NOT NULL DEFAULT '0',
  `ISBN` varchar(50) NOT NULL DEFAULT '',
  `QTE` decimal(3,0) DEFAULT NULL,
  PRIMARY KEY (`NUMCLIENT`,`ISBN`,`NUMCMD`)
);


CREATE TABLE `livre` (
  `ISBN` varchar(50) NOT NULL DEFAULT '',
  `TITRE` varchar(50) DEFAULT NULL,
  `AUTEUR` varchar(50) DEFAULT NULL,
  `EDITEUR` varchar(50) DEFAULT NULL,
  `DATEPARUTION` datetime DEFAULT NULL,
  `MOTSCLES` varchar(50) DEFAULT NULL,
  `RESUME` varchar(50) DEFAULT NULL,
  `THEME` varchar(50) DEFAULT NULL,
  `PRIX` double DEFAULT NULL,
  `QTESTOCK` bigint(20) DEFAULT NULL,
  `PAYS` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ISBN`)
);
