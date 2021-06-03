<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
</head>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- Transition CSS -->
<link rel="stylesheet" type="text/css" href="transition.css">
<link rel="stylesheet" type="text/css" href="transition.min.css">
 

<body>
<div class="container-xxl ld ld-fade-in">
<section class="jumbotron text-center mt-3"> 
      <h1 class="display-4"><center>CRUD DATA MAHASISWA</center></h1>
      <p class="lead"></p>
    </section>
	<h3>EDIT DATA MAHASISWA</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
				<tr>			
					<td>
                    <div class="form-floating mb-3">
						<input type="hidden" name="id" required value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" class="form-control" id="floatingInput" placeholder="Masukkan Nama Anda Disini" value="<?php echo $d['nama']; ?>">
                        <label for="floatingInput">Nama</label>
                        </div>
					</td>
				</tr>
				<tr>
					<td>
                    <div class="form-floating mb-3">
                        <input type="number" name="nim" class="form-control" id="floatingInput" placeholder="Masukkan Nim Anda Disini" required value="<?php echo $d['nim']; ?>">
                        <label for="floatingInput">Nim</label>  
                    </div>
                    </td>
				</tr>
				<tr>
					<td>
                    <div class="form-floating mb-3">
                        <input type="text" name="alamat"class="form-control" id="floatingInput" placeholder="Masukkan Alamat Anda Disini" required value="<?php echo $d['alamat']; ?>">
                        <label for="floatingInput">Alamat</label>
                        </div>
                    </td> 
                    </tr>
				<tr>
					<td></td>
					<td><input type="submit" class="btn btn-primary" value="SIMPAN"></td>
                    <td><a href="index.php" type="button" class="text-start btn btn-danger" >KEMBALI</a></td>
				</tr>			
            </div>
            <div>
    <script src="js/bootstrap.bundle.min.js"> </script>
    </div>
		</form>
		<?php 
	}
	?>

</body>
</html>