create database ndi;
use ndi;

create table utilisateur(
uti_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
uti_nom varchar(20),
uti_prenom varchar(20),
uti_email varchar(100) UNIQUE,
uti_pseudo varchar(20) UNIQUE,
uti_mdp varchar(30)
);

create table evenement(
eve_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
uti_id int,
eve_titre varchar(20),
eve_description varchar(1000),
eve_risque int,
eve_lieu varchar(100),
eve_date datetime,
FOREIGN KEY (uti_id) REFERENCES utilisateur(uti_id)
);

create table message(
mes_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
uti_id int,
eve_id int,
mes_lib varchar(1000),
mes_date datetime,
foreign key (uti_id) references utilisateur(uti_id),
foreign key (eve_id) references evenement(eve_id)
);

create table participe(
uti_id int,
eve_id int,
primary key(uti_id, eve_id),
foreign key (uti_id) references utilisateur(uti_id),
foreign key (eve_id) references evenement(eve_id)
);

insert into utilisateur(uti_nom,uti_prenom,uti_pseudo,uti_mdp) values ('michel','billandre','michmich','michmich');

insert into evenement(uti_id,eve_titre,eve_description,eve_risque,eve_lieu,eve_date) values (1,'Nuit de l info','On aime tous participer a la nuit de l info !',10,'Dans l etablissement de 3iL','2017-12-06 20:00:00');

insert into message(uti_id,eve_id,mes_lib,mes_date) values (1,1,'J ai vraiment trop hate lol !','2017-12-07 16:20:00');

insert into participe values(1,1);

create table defis(
def_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
def_lib varchar(100)
);

insert into defis(def_lib) values ('Finissez la citation : qui boit la gnole, casse la b--- !');
insert into defis(def_lib) values ('Pierre feuille ciseaux');
insert into defis(def_lib) values ('Premier a faire 10 pompes !');
insert into defis(def_lib) values ('Premier a trouver un objet violet !');
insert into defis(def_lib) values ('Donner le nombre de voyelle dans : celui qui conduit c est celui qui ne boit pas !');
insert into defis(def_lib) values ('Epeler : ornithorynque !');
insert into defis(def_lib) values ('Citer 5 marques de sodas !');
insert into defis(def_lib) values ('Donner un mot de 10 lettres !');
