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
	<thead>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah_aksi.php">
	<!-- Awal form -->
			<tr>			
					<td>
                    <div class="form-floating mb-3">
						<input type="text" name="nama" class="form-control" id="floatingInput" placeholder="Masukkan Nama Anda Disini">
                        <label for="floatingInput">Nama</label>
                        </div>
					</td>
				</tr>
				<tr>
					<td>
                    <div class="form-floating mb-3">
                        <input type="number" name="nim" class="form-control" id="floatingInput" placeholder="Masukkan Nim Anda Disini" required>
                        <label for="floatingInput">Nim</label>  
                    </div>
                    </td>
				</tr>
				<tr>
					<td>
                    <div class="form-floating mb-3">
                        <input type="text" name="alamat"class="form-control" id="floatingInput" placeholder="Masukkan Alamat Anda Disini" required>
                        <label for="floatingInput">Alamat</label>
                        </div>
                    </td> 
                    </tr>
				<tr>
				<td><input type="submit" class= "btn btn-primary" value="SIMPAN" required></td>
				<td><a href="index.php" class="btn btn-primary">KEMBALI</a></td>
				</tr>
			</div>	
				<!--Akhir form  -->
	</form>
	<div>
    <script src="js/bootstrap.bundle.min.js"> </script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    </div>
</body>
</html>