
Create database ekis_montessori;
use ekis_montessori;


create table student(
    std_id int(11) not null auto_increment,
    std_name varchar(50) not null,
    std_no varchar(10) not null,
    std_dob date not null,
    std_pob varchar(20) not null,
    std_haddr varchar(50),
    primary key (std_id)
);

desc student;

create table parent(
    id int(11) not null auto_increment,
    f_name varchar(50) not null,
    f_nlty varchar(58) not null,
    f_htown varchar(20) not null,
    f_phoneno varchar(15) not null,
    f_occ varchar(20),
    m_name varchar(50) not null,
    m_nlty varchar(58) not null,
    m_htown varchar(20) not null,
    m_phoneno varchar(15) not null,
    m_occ varchar(20),
    std_id int(11) not null references student(std_id) ON UPDATE CASCADE ON DELETE CASCADE,
    primary key (id)
);

desc parent;

create table nextofkin(
    id int(11) not null auto_increment,
    nok_name varchar(50),
    nok_phoneno varchar(15),
    std_id int(11) not null references student(std_id) ON UPDATE CASCADE ON DELETE CASCADE,
    primary key (id)
);
desc nextofkin;


create table house(
    id int(11) not null auto_increment,
    h_addr varchar(50) not null,
    h_popu int(10),
    h_lang varchar(10) not null,
    std_id int(11) not null references student(std_id) ON UPDATE CASCADE ON DELETE CASCADE,
    primary key (id)
);
desc house;

create table schoolrecords(
    id int(11) not null auto_increment,
    sch_name varchar(20) not null,
    sch_addr varchar(50) not null,
    d_attd date not null,
    lev_rd varchar(10) not null,
    std_id int(11) not null references student(std_id) ON UPDATE CASCADE ON DELETE CASCADE,
    primary key (id)
);
desc schoolrecords;

create table healthrecords(
    id int(11) not null auto_increment,
    spec_nds varchar(20),
    sick_con varchar(20),
    med varchar(20),
    allegies varchar(30),
    eye_prob varchar(30),
    ear_prob varchar(30),
    others varchar(10),
    std_id int(11) not null references student(std_id) ON UPDATE CASCADE ON DELETE CASCADE,
    primary key (id)
);
desc healthrecords;

