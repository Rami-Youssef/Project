create database syst;
use syst;
create table categorie(
    id_categorie int primary key AUTO_INCREMENT,
    libelle CHAR(25));
create table Article(
    reference int primary key AUTO_INCREMENT,
    designation char(25),
    prix decimal(10,2),
    qte_stock int,
    id_categorie int,
    constraint fk_categorie foreign key(id_categorie)references categorie(id_categorie)
);
INSERT INTO categorie(libelle) values("try again");
CREATE view view1 
AS
SELECT reference,designation,prix
from Article;
CREATE view view4
AS
SELECT reference,libelle
from Article as a left join categorie as c on a.reference = c.id_categorie;
SELECT * from view1;
SELECT * from Article;
SELECT * from view4;
SELECT * from Categorie;
SELECT * from view6;
create view view6
as
SELECT c.libelle as categorie,count(a.reference) as nombre_articles
from Article as a right join categorie as c
on a.reference = c.id_categorie;

