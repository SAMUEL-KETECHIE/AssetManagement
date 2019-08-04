
create DATABASE asset_management;
USE asset_management;

CREATE TABLE assetgroup(
    groupId int(11) not null auto_increment,
    groupname text not null ,
    groupurl text,
    primary key (groupId)
);

CREATE TABLE category(
    catid int(11) not null auto_increment,
    catname text not null ,
    caturl text,
    groupid int(11) not null references assetgroup(groupId),
    primary key (catid)
);

CREATE TABLE asset(
    assetid int(11) not null auto_increment,
    assetcode text not null ,
    assetname text not null ,
    catid int(11) not null references category(catid),
    dateadded date not null,
    assetimage text,
    primary key (assetid)
);

INSERT INTO assetgroup(groupname, groupurl) VALUES ('Computers','not set');
INSERT INTO assetgroup(groupname, groupurl) VALUES ('Furniture','not set');
INSERT INTO assetgroup(groupname, groupurl) VALUES ('Vehicle','not set');
INSERT INTO assetgroup(groupname, groupurl) VALUES ('Management','not set');
INSERT INTO assetgroup(groupname, groupurl) VALUES ('Others','not set');


INSERT INTO category(catname, caturl, groupid) VALUES ('Laptops',' ',1);
INSERT INTO category(catname, caturl, groupid) VALUES ('Desktops',' ',1);
INSERT INTO category(catname, caturl, groupid) VALUES ('Projectors',' ',1);
INSERT INTO category(catname, caturl, groupid) VALUES ('Accessories',' ',1);
INSERT INTO category(catname, caturl, groupid) VALUES ('Printers',' ',1);



INSERT INTO category(catname, caturl, groupid) VALUES ('Chairs & Tables',' ',2);
INSERT INTO category(catname, caturl, groupid) VALUES ('Others (Board)',' ',2);


INSERT INTO category(catname, caturl, groupid) VALUES ('Cars & Motor cycles',' ',3);
INSERT INTO category(catname, caturl, groupid) VALUES ('Buses & Vans',' ',3);

INSERT INTO category(catname, caturl, groupid) VALUES ('Transfers',' ',4);
INSERT INTO category(catname, caturl, groupid) VALUES ('Returns',' ',4);

INSERT INTO category(catname, caturl, groupid) VALUES ('Others',' ',5);


INSERT INTO asset(assetcode, assetname, catid, dateadded, assetimage) VALUES ('COM2000','HP Envy Laptop M200',1,now(),' not set');
INSERT INTO asset(assetcode, assetname, catid, dateadded, assetimage) VALUES ('COM1000','DELL Vostro Desktop',2,now(),' not set');
INSERT INTO asset(assetcode, assetname, catid, dateadded, assetimage) VALUES ('COM3000','Hitachi Pro',3,now(),' not set');
INSERT INTO asset(assetcode, assetname, catid, dateadded, assetimage) VALUES ('COM4000','Laptop Charger 19V',4,now(),' not set');
INSERT INTO asset(assetcode, assetname, catid, dateadded, assetimage) VALUES ('COM5000','HP Printer Ccolo',5,now(),' not set');
INSERT INTO asset(assetcode, assetname, catid, dateadded, assetimage) VALUES ('FUR2000','Lecturers chair',6,now(),' not set');
INSERT INTO asset(assetcode, assetname, catid, dateadded, assetimage) VALUES ('FUR3000','Marker board',7,now(),' not set');
INSERT INTO asset(assetcode, assetname, catid, dateadded, assetimage) VALUES ('VH1000','Opel ',8,now(),' not set');
INSERT INTO asset(assetcode, assetname, catid, dateadded, assetimage) VALUES ('VH2000','TATA Bus',9,now(),' not set');

