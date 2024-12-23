
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Discover Majalengka</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .hero {
        background-image: url('your-image-url-here.jpg');
        background-size: cover;
        background-position: center;
        color: white;
        text-align: center;
        padding: 100px 0;
    }
    .footer {
        background-color: black;
        color: white;
        padding: 20px 0;
    }
    .assets img {
        width: 100%;
        height: auto;
    }
    .section-title {
        text-align: center;
        margin-top: 50px;
        margin-bottom: 30px;
        font-weight: bold;
    }
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Discover Majalengka</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../pemesanan.php">Pemesanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="main/daftar.php">Daftar Pemesanan</a></li>
                </ul>
            </div>
        </div>
    </nav>

<?php
include '../connection/koneksi.php';

$sql = "SELECT * FROM pemesanan where is_deleted = 0 order by created_at desc";

$query = mysqli_query($db,$sql);

if(mysqli_num_rows($query)==0)
{
    echo 'tidak ada'; exit;
}else{
    $detail = mysqli_fetch_row($query);
?>
<h1>Daftar Pemesanan</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Pemesan</th>
      <th scope="col">Nomor HP</th>
      <th scope="col">Tanggal Berangkat</th>
      <th scope="col">Total Tagihan</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $co = 1;
      while($detail = mysqli_fetch_assoc($query)){
      ?>
    <tr>
      <th scope="row"><?=$co?></th>
      <td><?=$detail['nama_pemesanan']?></td>
      <td><?=$detail['hp_pemesan']?></td>
      <td><?=$detail['waktu_wisata']?></td>
      <td><?=$detail['total_tagihan']?></td>
      <td><a href="index.php?aksi=detail&id_pemesanan=<?=$detail['id_pemesanan']?>">Detail</a> <a href="index.php?aksi=edit&id_pemesanan=<?=$detail['id_pemesanan']?>">Edit</a> <a href="index.php?aksi=hapus&id_pemesanan=<?=$detail['id_pemesanan']?>">Hapus</a></td>
    </tr>
        <?php
        $co++;
        }
        ?>
  </tbody>
</table>
<?php
} 
?>

</body>
</html>





