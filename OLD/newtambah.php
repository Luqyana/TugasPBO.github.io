<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
</head>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<body>


	<h2><center>CRUD DATA MAHASISWA</center></h2>
	<br/>
	<a href="index.php" class="btn btn-primary">KEMBALI</a>
	<br/>
	<div class="table-responsive-xxl">
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah_aksi.php">

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Tambah</button>
<div class="modal fade ld ld-bounce-alt-in ld ld-bounce-alt-out " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
						<input type="text" name="nama" class="form-control form-label" id="floatingInput validationCustom01" placeholder="Masukkan Nama Anda Disini" required value="<?php echo $d['nama']; ?>">
                        <label for="floatingInput validationCustom01">Nama</label>
						<div class="valid-feedback">
      Looks good!
    </div>
          </div>
          <div class="form-floating mb-3">
		  <input type="hidden" name="id" required>
						<input type="number" name="nim" class="form-control form-label" id="floatingInput validationCustom01" placeholder="Masukkan Nim Anda Disini" required>
                        <label for="floatingInput validationCustom01">Nim</label>
						<div class="valid-feedback">
      Looks good!
    </div>
          </div>

		  <div class="form-floating mb-3">
		  <input type="hidden" name="id" required>
						<input type="text" name="alamat" class="form-control form-label" id="floatingInput validationCustom01" placeholder="Masukkan Alamat Anda Disini" required>
                        <label for="floatingInput validationCustom01">Alamat</label>
						<div class="valid-feedback">
      Looks good!
    </div>
          </div>
		  </form>
		  </form>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
		<input type="submit" name="submit" class="btn btn-primary" value="Tambah">
      </div>
    </div>
  </div>
</div>		
	</form>
	<div>
    <script src="js/bootstrap.bundle.min.js"> </script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    </div>
</body>
</html>