create database budi;
use budi;
CREATE TABLE barang_budi(id INT AUTO_INCREMENT PRIMARY KEY,
-nama_barang VARCHAR(50)NOT NULL,
-kode_bar VARCHAR(100), 
-harga INT(50));
desc barang_budi;
INSERT INTO barang_budi(nama_barang,kode_bar,harga)value
    -> ('lampu','k001',65000),
    -> ('buku','k002',5000),
    -> ('tas','k003',95000);
select * from barang_budi;
+----+-------------+----------+-------+
| id | nama_barang | kode_bar | harga |
+----+-------------+----------+-------+
|  1 | lampu       | k001     | 65000 |
|  2 | buku        | k002     |  5000 |
|  3 | tas         | k003     | 95000 |
+----+-------------+----------+-------+
