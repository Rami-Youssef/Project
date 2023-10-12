CREATE DATABASE Gest_Candi;
use Gest_Candi;
CREATE Table Candidat(
    idCandidant int primary key AUTO_INCREMENT,
    nom char(25),
    prenom char(25),
    sexe char(25),
    date_naiss date,
    ville char(25) 
);
CREATE TABLE filiere(
    idFiliere int primary key auto_increment,
    libelle char(25),
    nombre_place int
);
CREATE TABLE Choix(
    idCandidat int,
    idFiliere int,
    constraint fk_idCandidat FOREIGN key (idCandidat) REFERENCES Candidat(idCandidant),
    constraint fk_idFiliere FOREIGN key (idFiliere) REFERENCES filiere(idFiliere)
);
ALTER Table candidat ADD COLUMN téléphone char(25);
ALTER Table filiere ADD constraint check(20<nombre_place<40);
ALTER Table Candidat DROP COLUMN ville;
INSERT INTO filiere (libelle,nombre_place) VALUES
('smpc',30),('smp',40),('smia',13);
INSERT INTO candidat(nom,prenom,sexe,date_naiss) VALUES
('Rami','Youssef','M',"1980-12-12"),
('ilias','belium','M',"2000-12-12"),
('hask','abdrahman','M',"1980-12-12"),
('yassin','amsasn','M',"1980-12-12");

INSERT INTO choix VALUES
('1','2'),('1','1'),('2','1'),('2','3'),('3','3'),('4','1');
DELETE from choix WHERE idCandidat = '1' LIMIT 1;
UPDATE filiere set nombre_place = nombre_place * 4 where 20<=nombre_place<=30;
SELECT * from candidat order by nom;
SELECT * from filiere order by nombre_place AND libelle;
SELECT * FROM candidat WHERE sexe = 'M';
SELECT * from filiere where nombre_place BETWEEN 20 AND 30;
SELECT * from candidat WHERE nom LIKE 'A%' or '%A';
SELECT * from candidat where nom NOT LIKE "A";
SELECT nom, prenom, DATEDIFF(CURRENT_DATE,date_naiss)/365.25 from candidat;
SELECT * from candidat WHERE sexe = 'M' AND date_naiss BETWEEN "2004-04-1" and "2004-04-30" ;
SELECT nom ,DATEDIFF(CURRENT_DATE,date_naiss)/365.25 from candidat;
SELECT * from candidat where DATEDIFF(CURRENT_DATE,date_naiss)/365.25 > 24;
SELECT nom ,prenom, libelle from candidat as can join choix as chon on can.;