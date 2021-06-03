<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>CRUD PHP dan MySQLi</title>


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" >

<!-- My CSS -->
<link rel="stylesheet" type="text/css" href="style.css">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

<!-- Transition CSS -->
<link rel="stylesheet" type="text/css" href="transition.css">
<link rel="stylesheet" type="text/css" href="transition.min.css">
</head>    

<body>
<div class="container-fluid">
	<!-- Jumbotron -->
  <div>
	<header class="jumbotron text-center mb-5 ">
    <div class="card-title"> 
      <h1 class="display-4 bg-dark text-white sticky-top"><center>CRUD DATA MAHASISWA</center></h1>
      <p class="lead"></p>
</div>
</header>
</div>
</div>
</div>
	<br/>

	<form method="post" action="tambah_aksi.php">
	<!-- Awal Modal User Baru --> 
	<a type="button" class="btn btn-primary " class="r"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" data-bs-toggle="tooltip" data-bs-placement="top" title="Klik Untuk Memulai Menambah Data">TAMBAH DATA <i class="bi bi-plus-circle "></i></a>
<div class="modal fade ld ld-fall-btt-in " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buat User Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <form method="post" action="/tambah_aksi.php" role="form" class="row g-3 needs-validation" novalidate>
          <div class="form-floating mb-3">
		  <input type="hidden" name="id" required>
						<input type="text" name="nama" class="form-control form-label" id="floatingInput" placeholder="Masukkan Nama Anda Disini" required>
                        <label for="floatingInput">Nama</label>
          </div>
          <div class="form-floating mb-3">
		  <input type="hidden" name="id" required>
						<input type="number" name="nim" class="form-control form-label" id="floatingInput" placeholder="Masukkan Nim Anda Disini" required>
                        <label for="floatingInput ">Nim</label>
          </div>

		  <div class="form-floating mb-3">
		  <input type="hidden" name="id" required>
						<input type="text" name="alamat" class="form-control form-label" id="floatingInput " placeholder="Masukkan Alamat Anda Disini" required>
                        <label for="floatingInput ">Alamat</label>
          </div>
		  </form>
		  </form>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger " id="tutup" data-bs-dismiss="modal">Tutup<i class="bi bi-x"></i></button>
		<button type="submit" name="submit" class="btn btn-primary" >Buat <i class="bi bi-person-plus"></i></i></button>
      </div>
    </div>
  </div>
</div>
				<!--Akhir Modal User Baru  -->
	<br/>
	<br/>
	<div class="table-responsive-xxl">
	<table class="table">
	<thead>
	<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Alamat</th>
			<th>OPSI</th>
		</tr>
		</thead>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><i class="bi bi-person"></i><?php echo $d['nama']; ?></td>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td>
        <form method="post"  action="tambah_aksi.php">
          
				<!-- Awal Modal Tambah Data -->
<div class="modal fade ld ld-fall-ttb-in "  id="modaltambahdata" tabindex="-1" aria-labelledby="tambahdata" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahdata">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
          <div class="form-floating mb-3">
						<input type="text" name="nama" class="form-control form-label" id="floatingInput" placeholder="Masukkan Nama Anda Disini" required>
                        <label for="floatingInput"required>Nama</label>
          </div>
          <div class="form-floating mb-3">
						<input type="number" name="nim" class="form-control form-label" id="floatingInput" placeholder="Masukkan Nim Anda Disini" required>
                        <label for="floatingInput "required>Nim</label>
          </div>

		  <div class="form-floating mb-3">
						<input type="text" name="alamat" class="form-control form-label" id="floatingInput " placeholder="Masukkan Alamat Anda Disini" required>
                        <label for="floatingInput "required>Alamat</label>
          </div>
		  </form>
		  </form>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"> Batal <i class="bi bi-x"></i> </button>
		<button type="submit" name="submit" class="btn btn-primary"> Tambah <i class="bi bi-plus"></i> </button>
      </div>
    </div>
  </div>
</div>
			<!-- Akhir Modal Tambah Data -->
      
      <form method="post" action="update.php">
      <!-- Awal Data Edit -->
      <div>
           
<div class="modal fade ld ld-float-ltr-in " id="Editdata<?php echo $d['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Editdata">Edit Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
      <form role="form" action="update.php" method="post">
                        <?php
                        $id = $d['id']; 
                        $query_edit = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id'");
                        while ($row = mysqli_fetch_array($query_edit)) {  
                        ?>
        <form method="post" action="update.php" role="form" class="row g-3 needs-validation">
          <div class="form-floating mb-3">
          <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" class="form-control form-label" id="floatingInput" placeholder="Masukkan Nama Anda Disini" required value="<?php echo $d['nama']; ?>">
                        <label for="floatingInput">Nama</label>
          </div>
          <div class="form-floating mb-3">
						<input type="number" name="nim" class="form-control form-label" id="floatingInput" placeholder="Masukkan Nim Anda Disini" required value="<?php echo $d['nim']; ?>">
                        <label for="floatingInput ">Nim</label>
          </div>

		  <div class="form-floating mb-3">
						<input type="text" name="alamat" class="form-control form-label" id="floatingInput " placeholder="Masukkan Alamat Anda Disini" required value="<?php echo $d['alamat']; ?>">
                        <label for="floatingInput ">Alamat</label>
          </div>
        </form>
		  </form>
		  </form>
        </form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-bs-dismiss="modal"> Kembali <i class="bi bi-arrow-bar-left"></i> </button>
		<button type="submit" name="submit" class="btn btn-primary" >Simpan <i class="bi bi-save"></i> </button>
      </div>
    </div>
  </div>
</div>
      <!-- Akhir Data Edit -->
      <!-- Tombol -->
      <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-toggle="tooltip" data-bs-placement="top" title="Klik Untuk Masuk Ke Form Penambahan Data" data-bs-target="#modaltambahdata" data-bs-whatever="@mdo" tooltip-bg: black; ><i class="bi bi-plus-circle-fill"></i> Tambah</a>
      <a type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-toggle="tooltip" data-bs-placement="top" title="Klik Untuk Masuk Ke Form Edit Data" data-bs-target="#Editdata<?php echo $d['id']; ?> " data-bs-whatever="@mdo"><i class="bi bi-pen "></i> Edit</a>
      <!-- Akhir Tombol                     -->
					<!-- <a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-primary btn-flat btn-xs" data-toggle="modal" data-target="#updateuser<?php echo $no; ?>"><i class="bi bi-pen"></i> Edit</a> -->

          <!-- Awal Modal Hapus -->
          
          
          <!-- Akhir Modal Hapus -->
                      <a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-danger btn-flat btn-xs" data-toggle="modal" data-target="#deleteuser<?php echo $no; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Klik Jika Anda Ingin Menghapus Data"><i class="bi bi-trash"></i> Hapus</a>

        </td>
			</tr>
      </form>
		<?php 
	}
	?>
			<?php 
		}
		?>

		</div>
	</table>
  <footer class="col-sm-100 text-center  ">
    <div class="card bg-dark">
      <div class="card-body">
      <p class="text-white">Created By <a href="https://www.facebook.com/profile.php?id=100015868473532" class="text-white fw-bold"><i class="bi bi-facebook "></i> Luqyana Aribawa</a></p>
      </div>
    </div>
  </div>
    <script src="js/bootstrap.bundle.min.js"> </script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    </div>
</body>
</html>