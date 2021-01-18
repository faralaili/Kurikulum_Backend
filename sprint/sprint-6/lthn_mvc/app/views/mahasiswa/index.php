<div class="container mt-3">
 <div class="row">
  <div class="col-12">
   <h1>Data Mahasiswa</h1>
   <ul class="list-group">
     <table class="table table-stripped">
      <thead>
       <tr>
        <th scope="col">Nama</th>
        <th scope="col" width="200px">Action</th>
       </tr>
      </thead>
      <tbody>
       <?php foreach ($data['mhs'] as $mhs) :?>
       <tr>
        <td><?= $mhs['nama'];?></td>
        <td>
         <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge badge-primary badge-pill">Detail</a>
       
         <a href="<?= BASEURL; ?>/mahasiswa/edit/<?= $mhs['id'] ?>" class="badge badge-primary badge-pill">Edit</a>
      <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-primary badge-pill">Hapus</a>
        </td>
       </tr>
       <?php endforeach; ?>
      </tbody>
     </table>    
   </ul>
   <a href="<?= BASEURL; ?>/mahasiswa/tambah" class="btn btn-success mt-2">Tambah Mahasiswa</a>
  </div>
 </div>
</div>