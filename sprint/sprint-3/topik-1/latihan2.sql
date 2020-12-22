create database negara;
use negara;
create table provinsi(
   kd_provinsi char(50) primary key,
   nama_provinsi varchar(50)
   pro int(25));
desc provinsi;
create table kabupaten(pemimpin varchar(50) primary key,
   nama_kabupaten varchar(100),
   kd_kabupaten varchar(30));
desc kabupaten;
create table kecamatan(nama_kecamatan varchar(50),
    kd_kecamatan varchar(50));
desc kecamatan;
insert into provinsi values('k001','aceh',9),
     ('k002','jakarta',8),
     ('k003','surabaya',3);
select * from provinsi;
insert into kabupaten values('budi','gresik','k009'),
     ('manji','blitar','k003'),
     ('diba','kuota','k005');
select * from kabupaten;     
insert into kecamatan values('blogo','k007'),
     ('ngawi','k001'),
     ('bojo','k005');
select * from kabupaten;    
 select provinsi.nama_provinsi,provinsi.pro,kabupaten.nama_kabupaten, kecamatan.kd_kecamatan,kabupaten.pemimpin from provinsi,kabupaten,kecamatan
 WHERE provinsi.kd_provinsi = kabupaten.kd_kabupaten 
 AND provinsi.kd_provinsi = kecamatan.kd_kecamatan;

 