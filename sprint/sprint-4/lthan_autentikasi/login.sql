create database LOGIN;
use LOGIN;
 create table users(
    -> id int auto_increment primary key,
    -> username varchar(50)not null,
    -> password varchar(50));
insert into users(username,password)value('fara','0505'),
    -> ('falak','1804'),
    -> ('malam','wengi');
select * from users;
+----+----------+----------+
| id | username | password |
+----+----------+----------+
|  1 | fara     | 0505     |
|  2 | falak    | 1804     |
|  3 | malam    | wengi    |
+----+----------+----------+