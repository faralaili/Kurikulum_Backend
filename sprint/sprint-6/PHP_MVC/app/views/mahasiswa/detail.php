<div class="container mt-5">
  <center>
<div class="card" style="width: 18rem;">
<img src="<?= BASEURL ?>/img/monkey.jpg" alt="" width="250" height="250" class="rounded-circle shadow">
  <div class="card-body">
    <h2 class="card-title"><?= $data['mhs']['nama']; ?></h2>
    <h2 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nim']; ?></h2>
    <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
    <a href="<?= BASEURL; ?>/Mahasiswa" class="card-link">Kembali</a>
  </div>
</div>
</div>