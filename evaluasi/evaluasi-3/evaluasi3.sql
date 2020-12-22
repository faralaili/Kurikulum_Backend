sudo mysql
show databases;
create database santri;
use santri;
create table santri( 
    id int auto_increment primary key,
    nama varchar(50), 
    pelajaran varchar(50), 
    nilai int);
desc santri;
insert into santri(nama,pelajaran,nilai) values
    -> ('au','mat',80),
    -> ('fr','ips',75),
    -> ('sp','ipa',75),
    -> ('tr','ipa',85),
    -> ('wd','pkn',88),
    -> ('lk','ipa',86),
    -> ('lk','bindo',87);
 select * from santri;
| id | nama | pelajaran | nilai |
+----+------+-----------+-------+
|  1 | au   | mat       |    80 |
|  2 | fr   | ips       |    75 |
|  3 | sp   | ipa       |    75 |
|  4 | tr   | ipa       |    85 |
|  5 | wd   | pkn       |    88 |
|  6 | lk   | ipa       |    86 |
|  7 | lk   | bindo     |    87 |
+----+------+-----------+-------+
select count(nama) from santri;
+-------------+
| count(nama) |
+-------------+
|           7 |
+-------------+
select avg(nama)
    -> from santri;
+-----------+
| avg(nama) |
+-----------+
|         0 |
+-----------+
select avg(nilai) from santri;
+------------+
| avg(nilai) |
+------------+
|    82.2857 |
+------------+
select nama
    -> from santri;
+------+
| nama |
+------+
| au   |
| fr   |
| sp   |
| tr   |
| wd   |
| lk   |
| lk   |
+------+
select nama from santri where santri.nilai>=80;
+------+
| nama |
+------+
| au   |
| tr   |
| wd   |
| lk   |
| lk   |
+------+
mysql> select nilai from santri where santri.nama>=80;
mysql> select nama from santri where santri.nilai<=65;
mysql> select nilai from santri where santri.nama<=65;
+-------+
| nilai |
+-------+
|    80 |
|    75 |
|    75 |
|    85 |
|    88 |
|    86 |
|    87 |
+-------+