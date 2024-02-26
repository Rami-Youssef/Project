create DATABASE ges_emp;seefs
use ges_emp;
create TABLE Adhrent(h
    numero INT PRIMARY KEY AUTO_INCREMENT UNIQUE,
    nom char(25),
    prenom char(25), 
    email char(25), 
    date_inscription date
);
create TABLE Livre(
    id_livre int PRIMARY key AUTO_INCREMENT UNIQUE, 
    titre char(25), 
    auteur char(25), 
    disponible BOOLEAN
);
CREATE table Emprunt(
    id_emprunt int PRIMARY key AUTO_INCREMENT UNIQUE,
    numero_adherent int,
    id_livre int, 
    date_emprunt date,
    date_rendu date,
    constraint fk_numero_adherent foreign key(numero_adherent)
    references Adhrent(numero),
    constraint fk_id_livre foreign key(id_livre)
    references Livre(id_livre)
);
ALTER table Emprunt
ADD CONSTRAINT vérifie check(date_rendu >= date_emprunt);
DELIMITER $
drop PROCEDURE stockée$
CREATE PROCEDURE stockée(in p_nom char(25),p_prénom char(25),p_email char(25))
BEGIN
 insert into Adhrent(nom ,prenom, email, date_inscription)
 VALUES(p_nom,p_prénom,p_email,NOW());
END $
DELIMITER ;
call stockée('rami','youssef','rami@gmail.com');
SELECT * FROM Adhrent;
delimiter $
create procedure stockée2(in p_titre char(25) ,p_auteur char(25))
BEGIN
insert into Livre(titre, auteur, disponible)
values(p_titre,p_auteur,1);
END$
delimiter;
call stockée2("my little pony","le bruh");
SELECT * from Livre;
delimiter $
create procedure stockée3(in p_numéro int,in p_id_livre int)
BEGIN
insert into Emprunt(numero_adherent,id_livre,date_emprunt,date_rendu)
values(p_numéro,p_id_livre,NOW(),NULL);
UPDATE Livre F
SET disponible = 0 where id_livre = p_id_livre;
END$
delimiter ;
call stockée3(1,1);
