-- script PAC.sql
-- postgresql:    	
-------------------------------------------------------


drop table if exists achat cascade;
drop table if exists  client cascade;
drop table if exists  produit cascade;

create table client
       (ncli 	integer primary key ,
        nom 	varchar(10),
	ville   varchar(20));
   
create table produit
	(np 	integer primary key ,
 	 lib 	varchar(20),
 	 coul 	varchar(10),
 	 qs 	integer check (qs>=0)); 

create table achat
	(ncli 	integer references client(ncli),
	 np 	integer references produit(np),
	 qa 	integer check (qa>=0),
	 primary key(ncli,np));

-- script init.sql
-- insertion de tuples : postgresql
------------------------------------------

delete from achat;
delete from produit;
delete from client

insert into CLIENT values(101,'DEFRERE','PARIS');
insert into CLIENT values(102,'JACOB','RENNES');
insert into CLIENT values(103,'JAMAR','PARIS');
insert into CLIENT values(104,'DELVENNE','LE HAVRE');
insert into CLIENT values(105,'RAMJOIE','LE HAVRE');
insert into CLIENT values(106,'RIFFLET','PARIS');
insert into CLIENT values(107,'STOECKEL','PARIS');
insert into CLIENT values(108,'ANGELL','ROUEN');
insert into CLIENT values(109,'SMINE','ROUEN');

insert into PRODUIT values(1,'AGRAPHEUSE','ROUGE',150);
INSERT INTO	PRODUIT VALUES (2,'CALCULATRICE','NOIR',200);
INSERT INTO	PRODUIT VALUES (3,'CACHET-DATEUR','BLANC',21);
INSERT INTO	PRODUIT VALUES (4,'LAMPE','ROUGE',105);
INSERT INTO	PRODUIT VALUES (5,'LAMPE','BLANC',100);
INSERT INTO	PRODUIT VALUES (6,'LAMPE','BLEU',105);
INSERT INTO	PRODUIT VALUES (7,'LAMPE','VERT',105);
INSERT INTO	PRODUIT VALUES (8,'PESE-LETRRE',NULL,120);
INSERT INTO	PRODUIT VALUES (10,'CRAYON','ROUGE',10);
INSERT INTO	PRODUIT VALUES (11,'CRAYON','BLEU',30);
INSERT INTO	PRODUIT VALUES (12,'CRAYON LUXE','ROUGE',30);
INSERT INTO	PRODUIT VALUES (13,'CRAYON LUXE','VERT',35);
INSERT INTO	PRODUIT VALUES (14,'CRAYON LUXE','BLEU',40);
INSERT INTO	PRODUIT VALUES (15,'CRAYON LUXE','NOIR',50);


INSERT INTO	ACHAT VALUES (101,1,13);
INSERT INTO	ACHAT VALUES (101,2,2);
INSERT INTO	ACHAT VALUES (101,3,12);
INSERT INTO	ACHAT VALUES (101,4,12);
INSERT INTO	ACHAT VALUES (101,5,12);
INSERT INTO	ACHAT VALUES (101,6,12);
INSERT INTO	ACHAT VALUES (101,7,12);
INSERT INTO	ACHAT VALUES (101,8,12);
INSERT INTO	ACHAT VALUES (101,10,12);
INSERT INTO	ACHAT VALUES (101,11,12);
INSERT INTO	ACHAT VALUES (101,12,12);
INSERT INTO	ACHAT VALUES (101,13,12);
INSERT INTO	ACHAT VALUES (101,14,12);
INSERT INTO	ACHAT VALUES (101,15,12);
INSERT INTO	ACHAT VALUES (103,1,4);
INSERT INTO	ACHAT VALUES (103,4,3);
INSERT INTO	ACHAT VALUES (103,7,6);
INSERT INTO	ACHAT VALUES (103,8,9);
INSERT INTO	ACHAT VALUES (104,11,1);
INSERT INTO	ACHAT VALUES (104,15,10);
INSERT INTO	ACHAT VALUES (105,4,4);
INSERT INTO	ACHAT VALUES (106,10,3);
INSERT INTO	ACHAT VALUES (106,12,15);
INSERT INTO	ACHAT VALUES (107,3,10);
INSERT INTO	ACHAT VALUES (107,6,11);
INSERT INTO	ACHAT VALUES (107,8,14);
INSERT INTO	ACHAT VALUES (108,11,2);
