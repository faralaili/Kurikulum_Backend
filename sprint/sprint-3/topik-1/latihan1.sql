create database pondokit;
use pondokit;
create table santri(
    id int auto_increment primary key,
    name varchar(150) not null,
    birth_date date,
    age int,
    birth_place varchar(50),
    hobby varchar(50));

rename table santri to siswa;
 