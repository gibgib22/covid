<?php
	include '../koneksi.php';
	include '../asset/header.php';

	$sql = "SELECT * FROM data_imigran ORDER BY nama";

	$res = mysqli_query($koneksi,$sql);

	$data_imigran = array();

	while ($data = mysqli_fetch_assoc($res)){
		$data_imigran[] = $data; 
	}
	// var_dump($res);
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        </div>
    </div>
 </div>
 <div class="card">
  <div class="card-header">
    <h2 class="card-title"><svg class="bi bi-people" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.995-.944v-.002.002zM7.022 13h7.956a.274.274 0 00.014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 00.022.004zm7.973.056v-.002.002zM11 7a2 2 0 100-4 2 2 0 000 4zm3-2a3 3 0 11-6 0 3 3 0 016 0zM6.936 9.28a5.88 5.88 0 00-1.23-.247A7.35 7.35 0 005 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 015 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 116 0 3 3 0 01-6 0zm3-2a2 2 0 100 4 2 2 0 000-4z" clip-rule="evenodd"/>
</svg> Data Masyarakat</i></h2>
  </div>
  <div class="card-body">
  	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">TTL</th>
      <th scope="col">Riwayat Penyakit</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
   <?php
    $no = 1;
    foreach ($data_imigran as $p) { ?>

    <tr>
        <th scope="row"><?= $no ?></th>
        <td><?= $p['nama'] ?></td>                                 
        <td><?= $p['ttl'] ?></td>
        <td><?= $p['penyakit'] ?></td>
        <td>     
            <a href="detail.php?id_imigran=<?= $p['id_imigran'];?>" class="badge badge-success">Detail</a>
            <a href="edit.php?id_imigran=<?= $p['id_imigran'];?>" class="badge badge-warning">Edit</a>
            <a href="hapus.php?id_imigran=<?= $p['id_imigran'];?>" class="badge badge-danger">Hapus</a>        
        </td>
    </tr>                                       
<?php 
    $no++;
}
?>
  </tbody>
</table>
  </div>
 </div>
 <div class="container">
    <div class="row mt-4">
        <div class="col-md">
        </div>
    </div>
 </div>
 <a href="tambah.php" class="btn-primary btn-sm" style="background-color: #00cec9;">Tambah Data</a>
 <?php 
    include '../asset/footer.php';
  ?>